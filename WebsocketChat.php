<?php
namespace App\Tools;

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use App\Tools\Websocket;
use Ratchet\WebSocket\WsServer;

require 'vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Websocket()
        )
    ),
    8080
);

$server->run();