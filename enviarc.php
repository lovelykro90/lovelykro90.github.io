<?php

    $destino="marinarechiga.c@gmail.com";
    $nombre = $_POST["Nombre"];
    $telefono = $_POST["Teléfono"];
    $correo = $_POST["Correo"];
    $mensaje = $_POST["Mensaje"];
    $pyme = $_POST["pyme"];
    $otrosserv = $_POST["otrosserv"];
    $contenido = "Nombre:".$nombre . "\nTeléfono:" . $telefono . "\nCorreo:" . $correo . "\nMensaje:" . $mensaje . "\pyme:" . $pyme . "otrosserv" . $otrosserv;
    mail($destino, "Contacto", $contenido);

?>