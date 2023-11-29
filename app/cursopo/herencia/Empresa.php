<?php
require_once ("ClassEmpleado.php");
require_once ("ClassCliente.php");

$objEmpledo = new Empleado(78978, "Andres Pérez", 25);
$objEmpledo->setPuesto("Administrador");

echo $objEmpledo->getDatosPersonales();
echo "Puesto: ".$objEmpledo->getPuesto();

// objeto Cliente
$objCliente = new Cliente(4545, "Elena Alvez", 23);
$objCliente->setCredito(1000);

echo $objCliente->getDatosPersonales();
echo "Creditos: ".$objCliente->getCredito();