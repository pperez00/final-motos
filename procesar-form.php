<?php

$quenombre = $_POST['nombre'];
$quemail = $_POST['email'];
$quetexto = htmlentities(nl2br($_POST['Mensaje']));    
$queadjunto = $_FILES['inputGroupFile01'];
$tamano_archivo = $_FILES['inputGroupFile01']['size'];
$tamano_max = 2000000;
$ancho_n = 200;
$alto_n = 200;


$nombreCarpeta = time()."-".$quenombre;
mkdir("testimonios/pendientes/$nombreCarpeta");

$origen = $queadjunto['tmp_name']; 
$destino = "testimonios/pendientes/$nombreCarpeta/".$queadjunto['name']; // cambiar carpeta a pendientes !!!!

if ($tamano_archivo['size']  > $tamano_max): 
        
    header("Location:landing.php?error=tamano");
    rmdir("testimonios/pendientes/$nombreCarpeta");
        

elseif($queadjunto["type"] == "image/jpeg"):   
    $original = imagecreatefromjpeg($origen);    
    $ancho_o = imagesx($original);
    $alto_o = imagesy($original);
    
    //$ancho_n = 200;
    //$alto_n = 200;

    $lienzo = imagecreatetruecolor($ancho_n, $alto_n);

    imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $ancho_n, $alto_n, $ancho_o, $alto_o );

    imagejpeg($lienzo, $destino, 100 );

header("Location:gracias.php");
file_put_contents("testimonios/pendientes/$nombreCarpeta/nombre.txt", $quenombre);
file_put_contents("testimonios/pendientes/$nombreCarpeta/mail.txt", $quemail);
file_put_contents("testimonios/pendientes/$nombreCarpeta/descripcion.txt", $quetexto);

    

elseif($queadjunto["type"] == "image/gif"):

   
    $original = imagecreatefromgif($origen);
     
    $ancho_o = imagesx($original);
    $alto_o = imagesy($original);
    
    //$ancho_n = $queancho;
    //$alto_n = round($ancho_n * $alto_o / $ancho_o);

    $lienzo = imagecreate($ancho_n, $alto_n);

    imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $ancho_n, $alto_n, $ancho_o, $alto_o );

    imagegif($lienzo, $destino, 100 );

header("Location:gracias.php");
file_put_contents("testimonios/pendientes/$nombreCarpeta/nombre.txt", $quenombre);
file_put_contents("testimonios/pendientes/$nombreCarpeta/mail.txt", $quemail);
file_put_contents("testimonios/pendientes/$nombreCarpeta/descripcion.txt", $quetexto);

    

elseif($queadjunto["type"] == "image/png"):

    
    $original = imagecreatefrompng($origen);
    
    $ancho_o = imagesx($original);
    $alto_o = imagesy($original);
    
    //$ancho_n = $queancho;
    //$alto_n = round($ancho_n * $alto_o / $ancho_o);

    $lienzo = imagecreatetruecolor($ancho_n, $alto_n);
    imagesavealpha($lienzo, true);
    imagealphablending($lienzo, false);

    imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $ancho_n, $alto_n, $ancho_o, $alto_o );

    imagepng($lienzo, $destino, 9 );

header("Location:gracias.php");
file_put_contents("testimonios/pendientes/$nombreCarpeta/nombre.txt", $quenombre);
file_put_contents("testimonios/pendientes/$nombreCarpeta/mail.txt", $quemail);
file_put_contents("testimonios/pendientes/$nombreCarpeta/descripcion.txt", $quetexto);

    
else:
    header("Location:landing.php?error=formato");
    rmdir("testimonios/pendientes/$nombreCarpeta");

endif;


?>





