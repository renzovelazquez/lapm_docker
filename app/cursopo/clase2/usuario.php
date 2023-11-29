<?php
    require_once("ClassUsuario.php");
    
    $objetousuario = new Usuario("Andres cardona", "andres@info.com", "Admin");
    $objandre = new Usuario("Andrea Arana", "andrea@info.com", "Cliente");
    //atributos de tipo publico 
    //echo $objetousuario->getNombre();
    //echo "<br>";

    //echo $objetousuario->getTipo();
    //echo "<br>";
    // private no se puede accder desde 
    //echo $objetousuario->strClave;
    //echo "<br>";
    // static mas bien pertenece a la clase, por eso no es necesario instanciasr la clase
    //echo Usuario::$strEstado;
    echo $objetousuario->getPerfil();
    echo "<br> <br>";
    echo $objandre->getPerfil(); 
    //hago el cabmio de clave
    $objandre->setCambiarClave('123456789');

    echo "<br> <br>";
    echo $objandre->getPerfil(); 
?>