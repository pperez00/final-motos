    <!--------------------- Testimonios ----------------------->

    <div class="container-fluid">
        <section class="team-section text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Testimonios</h2>
            <!-- Section description -->
            <p class="dark-grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                eum porro a pariatur veniam.</p>



            <!--Grid row-->
            <div class="row text-center">

                <?php
                
                $carpeta = opendir("testimonios/publicados");
                
                $directorios = scandir("testimonios/Publicados");
                unset($directorios[0]); 
                unset($directorios[1]);
                                
                    $personas = array_rand($directorios,3);
                    $numero = 0;
                    while($persona = readdir($carpeta)): 
                
                    if($persona != "." && $persona != ".." && $persona != ".DS_store" && $directorios[$personas[$numero]] == $persona):
                        if($numero < 2){
                            $numero += 1;
                        }
                
                    $subcarpeta = opendir("testimonios/publicados/$persona");    
                    while($imagen = readdir($subcarpeta)):
                
                    if($imagen != "." && $imagen != ".." && $imagen != ".DS_store" && $imagen != "descripcion.txt" && $imagen != "mail.txt" && $imagen != "nombre.txt"):    
                          
                ?>

                <!--Grid column-->

                <div class="col-md-4 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto wow flipInX">
                            <img src="testimonios/publicados/<?= $persona."/".$imagen ?>" class="rounded-circle z-depth-3 img-fluid">
                        </div>
                        <!--Content-->
                        <h4 class="font-weight-bold dark-grey-text mt-4 wow lightSpeedIn">
                            <?= file_get_contents("testimonios/publicados/$persona/nombre.txt") ?>
                        </h4>
                        <p class="font-weight-normal dark-grey-text wow lightSpeedIn">
                            <i class="fa fa-quote-left pr-2 wow lightSpeedIn"></i>
                            <?= html_entity_decode(file_get_contents("testimonios/publicados/$persona/descripcion.txt"));
                             ?>. <i class="fa fa-quote-right pr-2 wow lightSpeedIn"></i></p>
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
            <div>
                <a class="btn btn-dark" href="index.php" role="button">Volver a la página principal</a>
            </div>

        </section>


    </div>

    <!--------------------- Fin Testimonios ----------------------->