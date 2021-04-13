<?php
require 'clases/BaseDatos.php';
require 'clases/Agenda.php';
require 'constantes.php';

$base = new BasedeDatos(SERVIDOR, USUARIO, PASSWORD, BASE);
$agenda = new Agenda($base);

$id = $_GET['id'];


$borrarAgenda = $agenda->borrarAgenda($id);



header('Location:ver_clases.php');
