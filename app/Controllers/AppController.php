<?php

namespace App\Controllers;

use App\Models\Estudiante;
use App\Models\Estudianteeliminar;
use App\Tools\View;

//use App\Models\Educativo;

// Controlador principal de la aplicacion
class AppController extends BaseController
{

    public function indexAction()
    {
        View::render('plantilla.php');
    }
  
    public function registerAction()
    {
        if ($this->isPost()) {

            $estudiante = new Estudiante();
            $estudiante->name = $this->post['name'];
            $estudiante->cedula = $this->post['cedula'];
            $estudiante->save();

            View::redirect('/user/login');
        }


        View::render('register.php');
    }



}
