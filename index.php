<?php 

//requerimos una vez
require_once "Controladores/plantillaC.php";

require_once "Controladores/secretariasC.php";
require_once "Modelos/secretariasM.php";

require_once "Controladores/adminC.php";
require_once "Modelos/adminM.php";

require_once "Controladores/citasC.php";
require_once "Modelos/citasM.php";

require_once "Controladores/consultoriosC.php";
require_once "Modelos/consultoriosM.php";

require_once "Controladores/doctoresC.php";
require_once "Modelos/doctoresM.php";

require_once "Controladores/pacientesC.php";
require_once "Modelos/pacientesM.php";

require_once "Controladores/inicioC.php";
require_once "Modelos/inicioM.php";

require_once "Controladores/adminC.php";
require_once "Modelos/adminM.php";

//variable plantilla que se igual ala clase Plantilla
$plantilla = new Plantilla();
//plantilla nos ejecute la funcion de LlamarPlantilla
$plantilla->LlamarPlantilla();

