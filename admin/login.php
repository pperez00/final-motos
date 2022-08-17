<?php
if(isset($_GET["error"])):
?>
 <div class="alert alert-danger alert-dismissible fade show m-0">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Error!</strong>   Usuario o clave invalido
  </div>
<?php endif;?>
<section class="login formu">
<div class="container animated fadeIn fondoLogin">
   <div class="row align-items-center">
       <div class="col-sm-6 mx-auto">
           <!-- Default form login -->
            <form action="admin/procesar-login.php" class="text-center p-5" method="post">
            
                <p class="h4 mb-4">Ingresar</p>
            
                <!-- Email -->
                <input type="text" name="usuario" class="form-control mb-4" placeholder="Usuario">
            
                <!-- Password -->
                <input type="password" name="clave" class="form-control mb-4" placeholder="Password">
            
                <div class="d-flex justify-content-around">
                             
                </div>
            
                <!-- Sign in button -->
                <button class="btn btn-dark btn-block my-4" type="submit" value="Ingresar">Ingresar</button>
            </form>
            <!-- Default form login -->
        </div>
    </div>
</div>
</section>
