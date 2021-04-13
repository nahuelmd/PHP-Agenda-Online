<?php

require 'clases/BaseDatos.php';
require 'clases/Agenda.php';
require 'constantes.php';

$base = new BasedeDatos(SERVIDOR, USUARIO, PASSWORD, BASE);
$agenda = new Agenda($base);

$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

$insertarAgenda = $agenda->insertAgenda($unidad, $fecha);


header("Location:ver_clases.php");
