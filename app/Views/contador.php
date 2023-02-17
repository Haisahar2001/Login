<?php

?>

<div>
    <h1>Contador</h1>
    <div id="contador">0</div>
    <input type="text" id="message" disabled/>
    <input type="hidden" id="user" value="<?= $user->id ?>">
    <button id="incrementar">Incrementar</button>


</div>


<script>
    var conn = new WebSocket('ws://localhost:8080');
    const contador = document.getElementById("contador");
    const incrementar = document.getElementById("incrementar");
    const user = document.getElementById("user").value;

    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
       contador.innerHTML = e.data;
    };

    incrementar.addEventListener("click", function(){
        conn.send(contador.innerHTML);
    });




</script>