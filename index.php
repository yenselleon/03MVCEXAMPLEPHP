<?php

#En el index mostraremos la salida de las vistas al usuario
#Tambien a traves de el enviaremos las distintas acciones que el usuario envie al controlador

#para requerir la invocacion del controlador de la plantilla index
require_once "controllers/plantilla.controller.php";

$plantilla = new ControladorPlantilla();
$plantilla->controladorTraerPLantilla();