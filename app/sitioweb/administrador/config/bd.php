<?php
$host="db";
$db="sitio";
$usuario="root";
$conrasenia="Secreto2021";
try {
    $conexion=new PDO("mysql:host=$host;dbname=$db",$usuario,$conrasenia);
    
} catch (Exception $ex) {
    echo $ex->getMessage();

}
?>