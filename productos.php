<!-- ****************************************   Productos   ********************************* -->
<section class="container-fluid p-4" id="productos">
    <h1 class="text-center display-3">
        Productos
    </h1>
    <hr>
    <div class="row">

        <?php
            define("ruta","productos/");
            foreach($productos as $k => $v):
        ?>

        <div class="view overlay zoom col-sm-6 col-md-4">
            <a href="<?= $v['producto']; ?>"><img src="<?= ruta.$v['moto']; ?>" class="img-fluid " alt="<?= $v['nombre']; ?>">
                <div class="<?= $v['class']; ?>">
                    <p class="<?= $v['texto']; ?>">
                        <?= $v['nombre']; ?>
                    </p>
                </div>
            </a>
        </div>
        <?php
            endforeach;
        ?>

    </div>
</section>
<!-- **********************************  fin Productos  ***************************************** -->


<?php include('testimonios.php'); ?>
