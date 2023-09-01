<?php
    require_once("ClassUsuario.php");
    $objetousuario = new Usuario("Andres cardona", "andres@info.com", "Admin");

    echo Usuario::$strEstado;


?>