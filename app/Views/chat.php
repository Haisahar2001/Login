<?php

?>

<div>
    <h1>Chat</h1>
    <div id="chat"></div>
    <input type="text" id="message" />
    <input type="hidden" id="user" value="<?= $user->nombre . ' ' . $user->apellido ?>">
    <button id="send">Send</button>


</div>


<script>
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
        document.getElementById("chat").innerHTML += e.data + "<br>";
    };

    document.getElementById("send").addEventListener("click", function(){
        var message = document.getElementById("message").value;
        var user = document.getElementById("user").value;
        conn.send(user + ": " + message);
        document.getElementById("message").value = "";
    });

</script>