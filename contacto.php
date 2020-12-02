<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">

    <?php include("includes/header.php");?>
    <?php include("includes/navbar.php");?>

    <main class="container-fluid">
        <div class="row p-3">

            <div class="col-sm-6 p-3">
                <div class="row mt-4">
                    <div class="titulosPrincipal font-weight-bold col-sm-12 text-center border-primary mr-3">
                        Conócenos</div>
                    <div class="col-sm-12">
                        <p class="mb-4 text-justify" id="descripciones">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed
                            do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <!--Google map-->
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1079326361796!2d-4.478559526218057!3d37.410923698224856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d77336192ab19%3A0x13417153fad2ce31!2sIES%20Marqu%C3%A9s%20de%20Comares!5e0!3m2!1ses!2ses!4v1606821248497!5m2!1ses!2ses"
                                allowfullscreen="" ></iframe>
                        </div>
                        <!--Google Maps-->

                    </div>
                </div>

            </div>
            <div class="col-sm-6 p-3">
                <div class="row mt-4 ">
                    <div class=" titulosPrincipal font-weight-bold col-sm-12 text-center border-primary">
                        Contacto</div>
                    <p class="text-center w-responsive mx-auto mb-5" id="descripciones">Do you have any questions? Please do not hesitate
                        to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                    <div class="col-md-12 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="" method="POST">

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="name" class="titulosPrincipal">Nombre</label>
                                        <input type="text" id="name" name="name" class="form-control opaco">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="email" class="titulosPrincipal">Correo Electrónico</label>
                                        <input type="text" id="email" name="email" class="form-control opaco">

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="subject" class="titulosPrincipal">Asunto</label> 
                                        <input type="text" id="subject" name="subject" class="form-control opaco">

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12  mb-4">

                                    <div class="md-form">
                                        <label for="message" class="titulosPrincipal">Mensaje</label>
                                        <textarea type="text" id="message" name="message" rows="5"
                                            class="form-control area opaco"></textarea>
                                    </div>

                                </div>
                            </div>

                        </form>

                        <div class="text-center text-md-right m-3">
                            <a class="btn btn-login">Enviar</a>
                        </div>
                        <div class="status"></div>
                    </div>

                </div>

                </section>

            </div>
        </div>
    </main>

    <?php include("includes/footer.php");?>

</body>

</html>