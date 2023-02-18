<?php

?>

<div>
    <h1>Archivo</h1>
    <div id="chat"></div>
    <input type="text" id="message" />
    <input type="hidden" id="user" value="<?= $user->nombre . ' ' . $user->apellido ?>">
    <input type="file" id="input-file">


</div>


<script>

    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        data = e.data;
        const byteCharacters = atob(data);
        const byteNumbers = new Array(byteCharacters.length);
        for (let i = 0; i < byteCharacters.length; i++) {
            byteNumbers[i] = byteCharacters.charCodeAt(i);
        }
        const byteArray = new Uint8Array(byteNumbers);
        const blob = new Blob([byteArray], {type: identificarTipoDeArchivo(byteArray)});
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'archivo';
        a.click();
    };

    document.getElementById("send").addEventListener("click", function(){
        conn.send();
        document.getElementById("message").value = "";
    });

    $inputFile = document.querySelector('#input-file');
    $inputFile.addEventListener('change', function (event) {
        // Obtener el archivo cargado
        function convertirABase64 (archivo, callbackExito) {
            var lectorArchivo = new FileReader();
            lectorArchivo.onload = function() {
                var base64 = lectorArchivo.result.split(",")[1];
                callbackExito(base64);
            };
            lectorArchivo.readAsDataURL(archivo);
        }

        var inputFile = document.getElementById("input-file").files[0];

        convertirABase64(
            inputFile,
            function(base64AEnviar) {
                conn.send(base64AEnviar);
            }
        );

    });

    function identificarTipoDeArchivo(byteArray) {

        let fileType = '';
        if (byteArray[0] === 0xFF && byteArray[1] === 0xD8 && byteArray[2] === 0xFF) {
            fileType = 'image/jpeg';
        } else if (byteArray[0] === 0x89 && byteArray[1] === 0x50 && byteArray[2] === 0x4E && byteArray[3] === 0x47 && byteArray[4] === 0x0D && byteArray[5] === 0x0A && byteArray[6] === 0x1A && byteArray[7] === 0x0A) {
            fileType = 'image/png';
        } else if (byteArray[0] === 0x47 && byteArray[1] === 0x49 && byteArray[2] === 0x46 && byteArray[3] === 0x38 && (byteArray[4] === 0x37 || byteArray[4] === 0x39) && byteArray[5] === 0x61) {
            fileType = 'image/gif';
        } else if (byteArray[0] === 0x42 && byteArray[1] === 0x4D) {
            fileType = 'image/bmp';
        } else if (byteArray[0] === 0x25 && byteArray[1] === 0x50 && byteArray[2] === 0x44 && byteArray[3] === 0x46) {
            fileType = 'application/pdf';
        }  else if (byteArray[28] === 0x57 && byteArray[29] === 0x6F && byteArray[30] === 0x72 && byteArray[31] === 0x6B && byteArray[32] === 0x62 && byteArray[33] === 0x6F && byteArray[34] === 0x6F && byteArray[35] === 0x6B) {
            fileType = 'application/word';
        } else if (byteArray[0] === 0xD0 && byteArray[1] === 0xCF && byteArray[2] === 0x11 && byteArray[3] === 0xE0 && byteArray[4] === 0xA1 && byteArray[5] === 0xB1 && byteArray[6] === 0x1A && byteArray[7] === 0xE1) {
            fileType = 'application/vnd.ms-excel';
        } else if (byteArray[0] === 0x50 && byteArray[1] === 0x4B && byteArray[2] === 0x03 && byteArray[3] === 0x04) {
            fileType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
        } else if (byteArray[0] === 0xD0 && byteArray[1] === 0xCF && byteArray[2] === 0x11 && byteArray[3] === 0xE0 && byteArray[4] === 0xA1 && byteArray[5] === 0xB1 && byteArray[6] === 0x1A && byteArray[7] === 0xE1) {
            fileType = 'application/vnd.ms-powerpoint';
        } else if (byteArray[0] === 0x50 && byteArray[1] === 0x4B && byteArray[2] === 0x03 && byteArray[3] === 0x04) {
            fileType = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
        }else {
            fileType = 'application/octet-stream';
        }
        return fileType;
    }


</script>