<?php
namespace App\Tools;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use React\EventLoop\Loop;

class Websocket implements MessageComponentInterface {
    protected $clients;
    protected $contador;
    protected $loop;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        $this->contador = 0;

        // Obtener el bucle de eventos del servidor
        $eventLoop = \React\EventLoop\Factory::create();

        echo "Websocket el servidor se ha iniciado\n";
        $eventLoop->addPeriodicTimer(1, function () {
            $this->actualizarContador();
        });
        $this->loop = $eventLoop;
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients->attach($conn);
        echo "Nueva conexion! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('La conexion %d esta enviando un mensaje "%s" a %d las otras conexione%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');
        $this->actualizarContador(10);

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                $client->send($this->contador);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} se ha desconectado\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Ha ocurrido un error: {$e->getMessage()}\n";
        $conn->close();
    }

    protected function actualizarContador($num = 1) {
        $this->contador = $this->contador + $num;
        //echo "Contador: {$this->contador}\n";

        foreach ($this->clients as $client) {
            echo "Enviando a {$client->resourceId}\n";
            $client->send($this->contador);
        }
    }

    public function getLoop() {
        return $this->loop;
    }


}
