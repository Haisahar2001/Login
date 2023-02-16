<?php

namespace App\Tools;

use App\ReflectionClass;

trait Query
{
    protected $query;

    protected $limit;

    protected $result;

    public function where($conditions, $equal = '=')
    {
        $where = static::buildCondition($conditions, $equal);
        $this->query .= " WHERE $where";
        return $this;
    }

    public function andWhere($conditions, $equal = '=')
    {
        $where = static::buildCondition($conditions, $equal);
        $this->query .= " AND $where";
        return $this;
    }

    public function orWhere($conditions, $equal = '=')
    {
        $where = static::buildCondition($conditions, $equal);
        $this->query .= " OR $where";
        return $this;
    }

    private static function buildCondition($conditions, $equal = '=')
    {

        $where = '';

        foreach ($conditions as $key => $value) {
            if($equal === '='){
                $where .= "$key $equal '$value' AND ";
            }else{
                $where .= "$key $equal '%$value%' AND ";
            }
        }

        $where = substr($where, 0, -4);

        return $where;
    }

    public function one()
    {
        if (property_exists($this,'borrado') && !$this->incluir_borrados) {
            if (strpos($this->query, 'WHERE') !== false) {

                $this->query .= " AND borrado IS NULL";
            } else {
                $this->query .= " WHERE borrado IS NULL";
            }
        }

        try {
            $this->result = $this->DB()->query($this->query)->fetch(\PDO::FETCH_ASSOC);

        }catch (\PDOException $e){
            var_dump($this->query);
            var_dump($e->getMessage());
            die;
        }

        $modelName = get_called_class();
        $model = new $modelName;

        if (!$this->result)
            return false;

        $model = static::populateRecord($model, $this->result);
        $model->afterFind();
        $model->loadRelations();

        return $model;
    }


    public function all()
    {
        $result = [];
        if ($this->limit) {
            $this->query .= " limit $this->limit";
        }

        if (property_exists($this,'borrado') && !$this->incluir_borrados) {
            if (strpos($this->query, 'WHERE') !== false) {
                $this->query .= " AND borrado IS NULL";
            } else {
                $this->query .= " WHERE borrado IS NULL";
            }
        }

        try {
            $this->result = $this->DB()->query($this->query)->fetchAll(\PDO::FETCH_ASSOC);

        }catch (\PDOException $e){
            var_dump($this->query);
            var_dump($e->getMessage());
            die;
        }


        if ($this->result > 0) {

            foreach ($this->result as $res) {
                $modelName = get_called_class();
                $model = new $modelName;
                $model = static::populateRecord($model, $res);
                $model->afterFind();
                $model->loadRelations();
                $result[] = $model;
            }
        }

        return $result;
    }

    public static function populateRecord($record, $row)
    {
        $columns = array_flip($record->attributes());

        foreach ($row as $name => $value) {

            if (isset($columns[$name])) {
                $record->$name = $value;
            }
        }
        $record->id = intval($record->id);

        return $record;
    }

    public function count()
    {
        return $this->DB()->query($this->query)->rowCount();
    }

    public function attributes()
    {
        $class = new ReflectionClass($this);
        $names = [];
        foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            if (!$property->isStatic()) {
                $names[] = $property->getName();
            }
        }

        return $names;
    }


    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function afterFind()
    {
    }

    public function loadRelations()
    {

    }

    public function afterSave($resultado, $accion)
    {
    }

}