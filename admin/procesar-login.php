<?php session_start();

$queus = $_POST["usuario"];
$quepw = $_POST["clave"];

include("usuarios.php");

foreach($usuarios as $usuario){
    if(
      $queus == $usuario["usuario"]
      &&
      password_verify($quepw, $usuario["clave"])
      ){
       //validó el usuario
        $_SESSION["ingreso"] = $usuario;
        header("Location:resultados.php?pagina=Pendientes");
        die();
    }    
}

if(!isset($_SESSION["ingreso"])){
    header("Location:../index.php?seccion=login&error=nouser");
}
