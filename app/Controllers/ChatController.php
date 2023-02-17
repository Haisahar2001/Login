<?php

namespace App\Controllers;

use App\Tools\Session;
use App\Tools\View;

// Controlador principal de la aplicacion
class ChatController extends BaseController
{
    public $defaultAction = 'index';

    public function indexAction()
    {
        View::render('chat.php', [
            'user'=> Session::get('user')
        ]);
    }

}