<?php
namespace App\Tools;

use App\Tools\Websocket;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use React\EventLoop\Factory;
use React\Socket\Server;
use React\Socket\SocketServer;


require 'vendor/autoload.php';
$ws = new Websocket();
$loop = $ws->getLoop();

$socket = new SocketServer('127.0.0.1:8080', [], $loop);

$server = new IoServer(
    new HttpServer(
        new WsServer(
            $ws
        )
    ),
    $socket
);
$server->loop = $loop;
$server->run();
