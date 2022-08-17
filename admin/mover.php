<?php
session_start();
if(!isset($_SESSION["ingreso"])){
    header("Location:index.php?error=sinpermiso");
    die();
}



if(isset($_GET["origen"])){
$origen = $_GET["origen"]; //pendientes

     
}

if(isset($_GET["mover"])){
$hacia = $_GET["mover"]; // publicados
}else{
    header("Location:resultados.php?pagina=$origen");
    die();
}

$persona = $_GET["carpeta"];


$carpeta = opendir("../testimonios/$origen/$persona");
 while($archivos = readdir($carpeta)){
    if($archivos != "." && $archivos != ".." && $archivos != ".DS_store"){
    
         
             rename("../testimonios/$origen/$persona/", "../testimonios/$hacia/$persona/");
             header("Location:resultados.php?pagina=$origen");
        
     }              
 
}
closedir($carpeta);
