<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TP-1</title>
    
       
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Mis estilos -->
    <link href="css/style.css" rel="stylesheet">
    
</head>
<?php
        include 'arrays.php';
        include 'config.php';
        
        
        $seccion = isset($_GET["seccion"]) ? $_GET["seccion"] : 'inicio';
        
        ?>
        
        
<body class="prod-bg-<?= $seccion; ?>">
   <div class="contenedor-flex">
    <header>
       
       
        
        <!-- *************************** NavBar ****************** -->
        <nav class="navbar  navbar-expand-lg navbar-dark scrolling-navbar">
            <a class="navbar-brand" href="#"><img src="img/honda-motos-logo.png" class="image-fluid mr-4" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-icon1"><span></span><span></span><span></span></div>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-5">
                    <?php
                    foreach($navbar as $value){
                    echo" <li class='nav-item'><a class='nav-link' href='index.php?seccion=$value'>$value</a></li> ";
                    }
                    ?>                  
                </ul>
            </div>
        </nav>
        <!-- ******************** fin NavBar ************************ -->
            
    </header>   

    <main>
       
       <?php
       switch($seccion){
               
            case "Ingresar":
               include "admin/login.php";
               break;
               
            case "cbr600":
               include "motos/cbr600.php";
               break;           
            case "africa":
               include "motos/africa.php";
               break;
            case "wave":
               include "motos/wave.php";
               break;
            case "cb190":
               include "motos/cb190.php";
               break;
            case "cg150":
               include "motos/cg150.php";
               break;
            case "xr":
               include "motos/xr150.php";
               break;
           
            case "Productos":
               include "productos.php";
               break;
            case "Contacto":
               include "contacto.php";
               break;
            case "Acerca de mi":
               include "about.php";
               break;
           case "gracias" :
               include "gracias1.php";
               break;
            case "Home":
               default:
               include "inicio.php";
               
       }       
       
       ?>
        
    </main>  



    




    <footer>
        <div>
            <p>Síguenos</p>
            <a href="https://www.facebook.com/"><img src="img/facebook.png" alt="facebook"></a>
            <a href="https://twitter.com/?lang=es"><img src="img/twitter.png" alt="twitter"></a>
            <a href="https://www.youtube.com/"><img src="img/youtube.png" alt="youtube"></a>
            <a href="https://www.instagram.com/?hl=es-la"><img src="img/instagram.png" alt="instagram"></a>
            <a href="https://ar.pinterest.com/"><img src="img/pinterest.png" alt="pinterest"></a>
            <a href="https://www.tumblr.com/"><img src="img/tumbler.png" alt="tumbler"></a>
        </div>
        <small>© 2018 Honda Motors Argentina - Creado por Pablo Perez</small>
    </footer>

</div>









    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- archivo de javascript para el pop up -->    
    <script language="javascript" type="text/javascript" src="js/popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.animated-icon1,.animated-icon3,.animated-icon4').click(function() {
                $(this).toggleClass('open');
            });
        });

    </script>
    <script>
        new WOW().init();

    </script>

</body>

</html>
