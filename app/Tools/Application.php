<?php

namespace App\Tools;

use Exception;

class Application
{

    private $controller;
    private $action;
    private $params = [];


    public function __construct($config = []) 
    { 
        Session::init(); 

        if ($_GET['route'] === '') { 
            $route = 'app/index'; 
        } else { 
            $route = $_GET['route']; 
        } 

        $route = explode('/', $route); 

        $this->controller = $route[0]; 

        $this->action = $route[1] ?? 'index'; 

        foreach ($route as $key => $value) { 
            if ($key > 1) { 
                $this->params[] = $value; 
            } 
        } 

        foreach ($_GET as $key => $value){ 
            if($key != 'route'){ 
                $this->params[$key] = $value; 
            } 

        } 

    } 
 

    /**
     * @throws Exception  
     */ 
    public function run() 
    {

        $controller = 'App\Controllers\\' . ucfirst($this->controller) . 'Controller'; 

        if (class_exists($controller)) { 
            $controller = new $controller($this->controller, $this->action, $this->params); 
        } else {  
            throw new Exception("Controlador $controller no encontrado");  
        } 
 
        $action = $this->action . 'Action'; 
        $defaultAction = $controller->defaultAction . 'Action'; 

        if (method_exists($controller, $action)) { 
            call_user_func([$controller, $action]); 
        } elseif (method_exists($controller, $defaultAction)) { 
            View::redirect("/$this->controller/$controller->defaultAction"); 
        } else { 
            throw new Exception("Método $action no encontrado en el controlador " . ucfirst($this->controller) . 'Controller');
        } 


    } 

} 

?>