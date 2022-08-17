<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Landing page</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/styleLanding.css" rel="stylesheet">
</head>

<body>
<?php
if(isset($_GET["error"])):
    $error = $_GET["error"];
    
?>
 <div class="alert alert-danger alert-dismissible fade show m-0">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Error! </strong>El archivo no puede superar los 2 Mb, los formatos admitidos son jpeg, gif o png</div>
<?php endif;?>
    <div class="container-fluid titulo">
        <div class="row">
            <div class="col-12">
                <h1>Se parte de la experiencia HONDA</h1>
                <h2>Contanos que es lo que más te gusta de la moto, subí una foto y participá del sorteo de un casco AVG<small>&reg;</small></h2>
            </div>
        </div>
    </div>



    <div class="container-fluid fondo">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 mb-3  sorteo rounded">
                <h1>Anotate</h1>
                <h2>Dejános tus datos y participá del sorteo de un casco</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti reiciendis facilis, temporibus tempore architecto molestias officia nesciunt, quas provident earum vel nostrum doloremque odit placeat iure aliquam adipisci ipsum optio?</p>
                <figure id="casco">
                    <img src="img/casco.png" alt="casco">
                </figure>
            </div>


            <!-- ----------------------------------  Formulario  --------------------------------------- -->
            <div class="col-md-4 mb-3">
                <form action="procesar-form.php" enctype="multipart/form-data" method="POST" class=" rounded p-5">

                    <p class="h4 mb-4 text-center">Contanos tu experiencia</p>


                    <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" autocomplete="on" required>

                    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" required>

                    <textarea class="form-control mb-4 rounded-2" name="Mensaje" rows="3" placeholder="Mensaje" required></textarea>
                    <small>Subí fotos en formato jpg, gif o png y de no más de 2MB</small>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" name="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">                                                      
                            <input type="file" class="custom-file-input" name="inputGroupFile01" id="sube" onchange='cambiar()'  required>
                            <label id="nombreArchivo" class="custom-file-label" for="inputGroupFile01">Subi tu foto</label>
                            
                        </div>
                    </div>
                    
                    <button class="btn btn-dark btn-block" type="submit">Enviar</button>
                </form>
            </div>
            <!-- ----------------------------------  Fin Formulario  --------------------------------------- -->

        </div>
    </div>



    <!-- Section: Features v.3 -->
    <div class="container-fluid">
        <section class="my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
            <!-- Section description -->
            <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 text-center">
                    <img class="img-fluid" src="img/01-42.jpg" alt="Twister" id="fotoSpec">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7">

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-1">
                            <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Safety</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
                                quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-1">
                            <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Technology</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
                                quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!--Grid row-->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-1">
                            <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Finance</h5>
                            <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima
                                veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!--Grid row-->

                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->

        </section>
    </div>
    <!-- Section: Features v.3 -->






    <!--------------------- Testimonios ----------------------->
<?php
    include('testimonios.php');
?>

    <!--------------------- Fin Testimonios ----------------------->


    <!------------------  Footer --------------------->

    <footer class="container-fluid pie">
        <div class="">
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

    <!------------------  Fin Footer --------------------->




    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        new WOW().init();       
        function cambiar(){
        var nombreFoto = document.getElementById('sube').files[0].name;
        document.getElementById('nombreArchivo').innerHTML = nombreFoto;
        }
    </script>
</body>

</html>

