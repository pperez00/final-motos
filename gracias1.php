
   <section class="container-fluid d-flex align-items-center gracias">
    <div class="row align-items-center justify-content-center">
        <div class="col-12">
            
        
        <?php 
            
            $e = unserialize(urldecode($_GET["errores"]));
            
        // Si han habido errores se muestran, sino se mostrán los mensajes
         if( count($e) > 0 )
        {
            echo "<p>ERRORES ENCONTRADOS:</p>";
            // Mostrar los errores:
            for( $contador=0; $contador < count($e); $contador++ ){
                
                echo $e[$contador]."<br/>";
            }
        }
        else
        {
            echo'<h1 class="display-4">Gracias por contactarte con nosotros!</h1>';
            // Mostrar los mensajes:
            echo "<p>".urldecode($_GET["nombre"])."<p/>";
            echo "<p>".urldecode($_GET["email"])."<p/>";            
            echo  "<p>".html_entity_decode(urldecode($_GET["mensaje"]))."<p/>";
            echo "<p>".urldecode($_GET["suscripcion"])."<p/>";
            
        }
         
        ?>
        </div>
       </div>
       
    </section>