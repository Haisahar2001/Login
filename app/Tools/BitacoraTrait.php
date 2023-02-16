<?php

namespace App\Tools;

use App\Models\Bitacora;

trait BitacoraTrait
{

    public function afterSave($resultado, $accion)
    {
        $user = Session::get('user');
        $bitacora = new Bitacora();
        $bitacora->user_id = $user->id;
        $bitacora->resultado = $resultado;
        $bitacora->accion = $accion;
        $bitacora->url = $_GET['route'];
        $bitacora->modelo = get_class($this);
        $bitacora->fecha = date('Y-m-d h:i:s');
        $bitacora->save();
    }

}