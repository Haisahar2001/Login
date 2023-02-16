<?php 

namespace App\Tools;

use App\Models\Permiso;
use App\Models\Rol_Permiso;

class Access 
{ 
    public static function isLogged(): bool 
    { 
        return Session::get('user') !== null; 
    } 

    public static function isAllowed(string $controller, string $action): bool 
    { 
        $route = $controller . '/' . $action; 
        $user = Session::get('user'); 

        if(!$user){ 
            return false; 
        }

        if (!$user->getRol()) {
            return false;
        }

        if ($user->getRol()->nombre === 'admin') {
            return true; 
        } 

        if("/".$route == $user->getRol()->url_base){ 
            return true; 
        } 

        $permisos = self::getPermisos($user->getRol()->id); 
 

        if (!array_search($route, $permisos)) { 
            Session::set('message',['type' => 'danger','message'=>'No tiene permisos para acceder a esta ruta']);
            return false; 
        } 

        return true; 
    } 

    public static function getPermisos($rol_id){ 
        $permisos = [];  

        $rol_permisos = Rol_Permiso::get()->where(['rol_id'=>$rol_id])->all(); 

        foreach ($rol_permisos as $rol_permiso){ 
            $permiso = Permiso::get()->where(['id'=>$rol_permiso->permiso_id])->one(); 
            $permisos[$permiso->nombre] = $permiso->url; 
        } 

        return $permisos; 
    } 

    public static function isAllowedMenu(string $url): string{ 
        $user = Session::get('user'); 

        if(!$user){ 
            return 'hide'; 
        } 
 
        if ($user->getRol()->nombre === 'admin') { 
            return ''; 
        } 

        if("/".$url == $user->getRol()->url_base){ 
            return ''; 
        }  

        $permisos = self::getPermisos($user->getRol()->id);


        if (!array_search($url, $permisos)) {
            Session::set('message',['type' => 'danger','message'=>'No tiene permisos para acceder a esta ruta']);
            return 'hide';
        } 
        return '';  
    }   

} 