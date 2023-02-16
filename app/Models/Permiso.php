<?php

namespace App\Models;

use App\Tools\BaseModel;
use App\Tools\BitacoraTrait;

class Permiso extends BaseModel
{
    use BitacoraTrait;
    
    public $nombre;
    public $descripcion;
    public $url;


}