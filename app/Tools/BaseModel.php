<?php

namespace App\Tools;

use PDO;
use ReflectionClass;

abstract class BaseModel
{

    use Query;

    public $id;

    private $incluir_borrados = false;


    /**
     * Representa una instancia de PDO
     *
     * @var object
     */
    static $db = null;

    public static function tableName(): string
    {
        return (new \ReflectionClass(get_called_class()))->getShortName();
    }

    public function __construct()
    {

        if (static::$db === null) {

            $conn_string = 'mysql:host=' . Database::DB_HOST . ';dbname=' . Database::DB_NAME . ';charset=utf8';
            $db = new \PDO($conn_string, Database::DB_USER, Database::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            static::$db = $db;
        }

    }

    public function load($data, $formName = ''): bool
    {
        if ($formName === '' && !empty($data)) {
            $this->setAttributes($data);

            return true;
        } elseif (isset($data[$formName])) {
            $this->setAttributes($data[$formName]);

            return true;
        } else {
            return false;
        }
    }

    public function attributes(): array
    {
        $class = new ReflectionClass($this);
        $names = [];
        foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            if (!$property->isStatic() && !is_object($property->getValue($this))) {
                $names[] = $property->getName();
            }
        }

        return $names;
    }

    public function setAttributes($values): void
    {
        if (is_array($values)) {
            $attributes = array_flip($this->attributes());
            foreach ($values as $name => $value) {
                if (isset($attributes[$name])) {
                    $this->$name = $value;
                }
            }
        }
    }

    public static function get($columns = '*')
    {
        $object = new static();
        $object->query = "SELECT $columns FROM " . static::tableName();
        return $object;
    }

    public function getBySql($sql): iterable
    {
        return $this->DB()
            ->query($sql)
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function incluirBorrados()
    {
        $this->incluir_borrados = true;
        return $this;
    }

    public function save()
    {

        $data = [];

        foreach ($this->attributes() as $attribute) {
            if ($this->$attribute !== null && $this->$attribute !== '') {
                $data[$attribute] = $this->$attribute;
            }
        }
        $marks = array_fill(0, count($data), '?');

        $fields = array_keys($data);
        // Fields values
        $values = array_values($data);

        $tableName = static::tableName();
        if ($this->id) {
            $query = "UPDATE $tableName SET ";
            foreach ($fields as $field) {
                $query .= "$field = ?, ";
            }
            $query = substr($query, 0, -2);
            $query.= " WHERE $tableName.id = $this->id";

        } else {
            $query = "INSERT INTO " . static::tableName() . "(" . implode(",", $fields) . ")
            VALUES(" . implode(",", $marks) . ")";
        }

        // Prepare statement
        $stmt = $this->DB()->prepare($query);

        // TODO: Agregar try catch
        /*
        try {
            $stmt->execute($values);
        }
        catch (\PDOException $e) {
            //echo $e->getMessage();
            //var_dump($e);
            return null;
        }
*/
        $stmt->execute($values);
        $id = $this->DB()->lastInsertId();

        if ($id) {
            if($this->id){
                $action = 'update';
            }else{
                $action = 'save';
            }
            $this->afterSave($id, $action);
        }

        // Return last inserted ID.
        return $id;
    }


    public function delete($soft = true)
    {
        //comprobar si el objeto tiene la propiedad borrado
        if ($soft && property_exists($this, 'borrado')) {
            $query = "UPDATE " . static::tableName() . " SET borrado = NOW() WHERE id = $this->id";
        }else{
            $query = "DELETE FROM " . static::tableName() . " WHERE id = $this->id";
        }

        return $this->DB()->exec($query);
    }


    /**
     * El metodo devuelve una conexion PDO de la base de datos.
     *
     * @return object
     * @access  public
     */
    protected function DB(): PDO
    {

        return static::$db;
    }

}