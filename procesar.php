
   

<?php 



    // Array para guardar errores:
     $aErrores = array();
   

    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    // Patrón para comprobar e-mail:
     $patron_email = "/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/";    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Comprobar si llegaron los campos requeridos:
        if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) )
        {
            // Nombre:
             if( empty($_POST['name']) ){
                $aErrores[] = "Debe especificar el nombre";
            }
             else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 if( preg_match($patron_texto, $_POST['name']) ){
                    $nombre = "Nombre: ".$_POST['name'];
                 }
                else
                {
                    $aErrores[] = "El nombre sólo puede contener letras y espacios";
                }
            }
            // E-mail:
            if( empty($_POST['email']) ){
                $aErrores[] = "Debe especificar un e-mail";
            }
            else
            {
                // Comprobar mediante una expresión regular, que es un e-mail válido:
                if( preg_match($patron_email, $_POST['email']) ){
                    $email = "e-mail: ".$_POST['email'];
                }
                else
                {
                    $aErrores[] = "El e-mail no es válido";
                }
            }
             
            if( !empty($_POST['message']) ){
                $mensaje = "Mensaje: ".urlencode(htmlentities(nl2br(trim($_POST["message"]))));
            }
            else
            {
                $aErrores[] = "El mensaje no puede estar vacío"; 
            }
             
            // Asunto
            
            // suscripción:
            if( isset($_POST['ofertas']) )
            {
                /*
                    No hace falta comprobar el valor de la casilla de verificación, ya que si
                    está definido 'chkCoche' es que se ha marcado (al igual que sucede con
                    los botones radio)
                */
                $suscripcion = "Te suscribiste a las ofertas";
            }
            
        }
//        print_r ($aErrores);
        $errores = urlencode(serialize($aErrores));
      
        header("Location: index.php?seccion=gracias&errores=$errores&nombre=$nombre&email=$email&mensaje=$mensaje&suscripcion=$suscripcion");
             
    }
        

?>










