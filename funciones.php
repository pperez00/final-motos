<?php
function ponerfondo($fondo){
    $fondo = isset($_GET["seccion"]) ? $_GET["seccion"] : '';    
    return $fondo;    
    }


// eliminar de la papelera
function borrar($carpeta){
    foreach(glob($carpeta . "/*") as $archivos_carpeta){             
        if (is_dir($archivos_carpeta)){
          borrar($archivos_carpeta);
        } else {
        unlink($archivos_carpeta);
        }
      }
      rmdir($carpeta);
    
}

?>
