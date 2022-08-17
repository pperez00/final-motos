<!-- formulario -->

<div class="formu">
    <section class="section container formulario">

        <!--Section heading-->
        <h2 class="section-heading h1 pt-4">Contáctanos</h2>
        <!--Section description-->
        <p class="section-description">¿Tienes alguna pregunta? No dudes en contactarte con nosotros. Nuestro equipo te responderá a la brevedad.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 col-xl-9">
                <form id="contact-form" name="contact-form" action="procesar.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control" required>
                                <label for="name" class="">Tu nombre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="email" name="email" class="form-control" required>
                                <label for="email" class="">Tu email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Asunto</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                <label for="message">Tu mensaje</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="ofertas">
                        <input type="checkbox" name="ofertas" id="ofertas" value="si">
                        <label for="ofertas">¿Desea recibir ofertas?</label>
                    </div>


                </form>

                <div class="container">
                    <div class="row">
                        <div class="center-on-small-only col-6">
                            <a class="btn btn-dark" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                        </div>
                       
                    </div>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-xl-3">
                <ul class="contact-icons">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>Ruta Provincial 6, KM 195, B2804FZE Campana, Buenos Aires</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>0800-1221-HONDA (46632)</p>
                    </li>

                    <li><i class="fa fa-envelope fa-2x"></i>
                        <p>contacto@hondamotos.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
</div>
<!--Section: Contact v.2-->
