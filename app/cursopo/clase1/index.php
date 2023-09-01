<?php
    require_once("ClassOperacion.php");

    $operacion1 = new Operacion(10,2);
    $operacion2 = new Operacion(100,3);

    $totalSuma = $operacion1->getSuma();
    $totalResta = $operacion1->getResta();
    $totalMultiplica = $operacion1->getMultiplicacion();
    $totalDivide = $operacion1->getDivision();

    echo "total suma: ".$totalSuma;
    echo "<br>";

    echo "total resta: ".$totalResta;
    echo "<br>";

    echo "total mutliplicacion: ".$totalMultiplica;
    echo "<br>";

    echo "total División: ".$totalDivide;
    echo "<br>";
    echo "----------------". "<br>"."<br>";

    $totalSuma = $operacion2->getSuma();
    $totalResta = $operacion2->getResta();
    $totalMultiplica = $operacion2->getMultiplicacion();
    $totalDivide = $operacion2->getDivision();

    echo "total suma: ".$totalSuma;
    echo "<br>";

    echo "total resta: ".$totalResta;
    echo "<br>";

    echo "total mutliplicacion: ".$totalMultiplica;
    echo "<br>";

    echo "total División: ".$totalDivide;
    echo "<br>";





    
?>
