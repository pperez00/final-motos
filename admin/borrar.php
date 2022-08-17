<?php
session_start();
if(!isset($_SESSION["ingreso"])){
    header("Location:index.php?error=sinpermiso");
    die();
}
include('../funciones.php');

if(isset($_GET["carpeta"])){
    $borra = $_GET["carpeta"];
    borrar("../testimonios/papelera/$borra"); // aca borro de a uno
    header("Location:resultados.php?pagina=Papelera");
    mkdir('../testimonios/papelera');
}else{
    header("Location:resultados.php");
    die();
}


?>