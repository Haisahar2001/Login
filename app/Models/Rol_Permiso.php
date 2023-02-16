<?php

namespace App\Models;

use App\Tools\BaseModel;

class Rol_Permiso extends BaseModel
{
    public $rol_id;
    public $permiso_id;


    public function getRol(){
        return Rol::get()->where(['id'=>$this->rol_id])->one();
    }

    public function getPermiso(){
        return Permiso::get()->where(['id'=>$this->permiso_id])->one();
    }

}
