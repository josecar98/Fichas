<?php 
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/jovenes.controlador.php";
require_once "controladores/iglesias.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/jovenes.modelo.php";
require_once "modelos/iglesias.modelo.php";
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();