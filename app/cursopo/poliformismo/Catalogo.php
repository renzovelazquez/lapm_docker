<?php
    require_once("ClassMesa.php");

    $objCama = new Producto("Cama",10500);
    $arrInfoProducto = $objCama->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('</pre>');

    $objMueble = new Mueble("Closet",20000,"Casita","Café","Madera");
    $arrInfoMueble = $objMueble->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMueble);
    print_r('</pre>');