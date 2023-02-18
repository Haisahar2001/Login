<?php
namespace App\Tools;
use MongoDB\BSON\Binary;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Websocket implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        echo "Websocket el servidor se ha iniciado\n";
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients->attach($conn);

        echo "Nueva conexion! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        // Send the file $msg to all the clients

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
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

    public function sendFile(ConnectionInterface $conn, $data) {
        // Leer el archivo y convertirlo en un objeto Binary
        $fileData = base64_encode($data);

        // Enviar el objeto Binary a través de la conexión WebSocket
        $conn->send($fileData);
    }
}