<?php session_start();

if(!isset($_SESSION["ingreso"])){
    header("Location:index.php?error=sinpermiso");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administrador</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/styleLanding.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid mb-5 bg-light">
            <div class="row align-items-center">
                <div>
                    <nav class="nav menuAdmin">
                        <ul id="ejm5">
                           <li>
                               <a class="nav-link" href="resultados.php?pagina=Pendientes"><span data-title="Pendientes">Pendientes</span></a>
                           </li>
                           <li>
                               <a class="nav-link active" href="resultados.php?pagina=Publicados"><span data-title="Publicados">Publicados</span></a>
                           </li>
                           <li>
                               <a class="nav-link" href="resultados.php?pagina=Papelera"><span data-title="Papelera">Papelera</span></a>
                           </li>  
                        </ul>                      
                    </nav>
                </div>
                <div class="ml-auto p-2">
                    <h2 class="">Bienvenid@
                        <?php
                    echo $_SESSION["ingreso"]["nombre"];
                     ?>
                    </h2>
                </div>
                <div class="">
                    <a class="btn btn-dark" href="cerrar-sesion.php" role="button">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </header>
    <!--------------------- Testimonios ----------------------->
    <?php 
    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
    }
    ?>
    <div class="container-fluid">
        <section class="team-section text-center my-5">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">
                <?php echo $pagina ?>
            </h2>
            <hr class='m-5'>
            <!--Grid row-->
            <div class="row text-center">
                <?php
                include ("../funciones.php");
              $carpeta = opendir("../testimonios/$pagina");    
              while($persona = readdir($carpeta)): 
              if($persona != "." && $persona != ".." && $persona != ".DS_store"):              
                  $subcarpeta = opendir("../testimonios/$pagina/$persona");    
                  while($imagen = readdir($subcarpeta)):
                  if($imagen != "." && $imagen != ".." && $imagen != ".DS_store" && $imagen != "descripcion.txt" && $imagen != "mail.txt" && $imagen != "nombre.txt"):    
            ?>
                <!--Grid column-->
                <div class="col-md-4 mb-md-0">
                    <div class="testimonial mb-5">
                        <!--Avatar-->
                        <div class="avatar mx-auto wow flipInX">
                            <img src="../testimonios/<?=$pagina."/". $persona."/".$imagen ?>" class="rounded-circle z-depth-3 img-fluid">
                        </div>
                        <!--Content-->
                        <h4 class="font-weight-bold dark-grey-text mt-4 wow lightSpeedIn">
                            <?= file_get_contents("../testimonios/$pagina/$persona/nombre.txt") ?>
                        </h4>
                        <p class="font-weight-normal dark-grey-text wow lightSpeedIn">
                            <i class="fa fa-quote-left pr-2 wow lightSpeedIn"></i>
                            <?= html_entity_decode(file_get_contents("../testimonios/$pagina/$persona/descripcion.txt")) ?> <i class="fa fa-quote-right pr-2 wow lightSpeedIn"></i></p>
                            
                             <!----------------- pendientes ---------------------->
                    <?php 
                        if ($pagina == 'Pendientes'):        
                    ?>
                           
                        <a class="btn btn-success mb-5" href="mover.php?mover=publicados&origen=<?php echo $pagina; ?>&carpeta=<?php echo $persona; ?>" role="button">Publicar</a>
                        <a class="btn btn-danger mb-5" href="mover.php?mover=papelera&origen=<?php echo $pagina; ?>&carpeta=<?php echo $persona; ?>" role="button">Borrar</a>
                        <?php endif; ?>
                        
                                 <!----------------- publicados ---------------------->
                    <?php 
                        if ($pagina == 'Publicados'):        
                    ?>
                           
                        <a class="btn btn-success mb-5" href="mover.php?mover=pendientes&origen=<?php echo $pagina; ?>&carpeta=<?php echo $persona; ?>" role="button">Mover a Pendientes</a>
                        <a class="btn btn-danger mb-5" href="mover.php?mover=papelera&origen=<?php echo $pagina; ?>&carpeta=<?php echo $persona; ?>" role="button">Enviar a la Papelera</a>
                        <?php endif; ?>
                        
                                     <!----------------- papelera ---------------------->
                    <?php 
                        if ($pagina == 'Papelera'):        
                    ?>
                           
                        <a class="btn btn-success mb-5" href="mover.php?mover=pendientes&origen=<?php echo $pagina; ?>&carpeta=<?php echo $persona; ?>" role="button">Mover a Pendientes</a>
                        <a class="btn btn-danger mb-5" href="borrar.php?carpeta=<?php echo $persona; ?>" role="button">Borrar definitivamente</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                    endif;
                    endwhile;
                    closedir($subcarpeta);    
            endif;
            endwhile;                   
            closedir($carpeta); 
    ?>
            </div>
            <?php 
                        if ($pagina == 'Papelera'):        
                    ?>
            <div>
                <a class="btn btn-danger" href="borrar.php?carpeta=" role="button">Vaciar Papelera</a>
            </div>
             <?php endif; ?>
        </section>
    </div>
    
    <!--------------------- Fin Testimonios ----------------------->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
