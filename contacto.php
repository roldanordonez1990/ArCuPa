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
                        <p class="mb-4 text-justify" id="descripciones">Llevamos más de 5 años dedicándonos a la
                            meteorología. Durante estos años, hemos mejorado y crecido mucho. Actualmente nuestras
                            predicciones se ofrecen en toda España.</p>
                        <p class="mb-4 text-justify" id="descripciones">No cabe duda de que ElGranizo se ha convertido en
                            uno de los proyectos líderes sobre información meteorológica a nivel nacional. Así lo
                            demuestran todos los profesionales, aficionados a la meteorología y todas las personas
                            alrededor del pais que confían en nosotros diariamente.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <!--Google map-->
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1079326361796!2d-4.478559526218057!3d37.410923698224856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d77336192ab19%3A0x13417153fad2ce31!2sIES%20Marqu%C3%A9s%20de%20Comares!5e0!3m2!1ses!2ses!4v1606821248497!5m2!1ses!2ses"
                                allowfullscreen=""></iframe>
                        </div>
                        <!--Google Maps-->

                    </div>
                </div>

            </div>
            <div class="col-sm-6 p-3">
                <div class="row mt-4 ">
                    <div class=" titulosPrincipal font-weight-bold col-sm-12 text-center border-primary">
                        Contacto</div>
                    <p class="text-center w-responsive mx-auto mb-5" id="descripciones">¿Tiene usted alguna pregunta o
                        duda? Por
                        favor no dudes para contactarnos directamente. Nuestro equipo se comunicará contigo en cuestión
                        de horas para ayudarte. Muchas gracias por ayudar a mejorar muestros servicios.</p>


                    <div class="col-md-12 mb-md-0 mb-5">
                    <?php
            
                            ?>
                       


                        <form id="contact-form" name="contact-form" action="" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="name" class="titulosPrincipal">Nombre</label>
                                        <input type="text" id="name" name="name" class="form-control opaco" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="email" class="titulosPrincipal">Correo Electrónico</label>
                                        <input type="text" id="email" name="email" class="form-control opaco" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="subject" class="titulosPrincipal">Asunto</label>
                                        <input type="text" id="subject" name="subject" class="form-control opaco"
                                            required>
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


                        <a href="#" data-toggle="modal" data-target="#captcha">
                        <button class="float-right btn btn-login">Verificar</button>


                        <?php

                        if (isset($_POST['submit'])) {
                            if ($_POST['captcha'] == $_SESSION['cap_code']) {
                                // Captcha verification is Correct. Do something here!
                                echo '<p>El captcha introducido es correcto</p>';
                            }
                            else {
                                // Captcha verification is wrong. Take other action
                                echo '<p>El captcha introducido no es correcto</p>';
                            }
                        }  ?>
                        

                      

                        <div class="modal" id="captcha" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <a><h5 class="modal-title text-center">Verifica el captcha</h5></a>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/>
                                    <img src="captcha.php"/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
                                        <a href=""><button type="button" class="btn btn-danger" >Cerrar Sesión</button></a>
                                    </div>
                                    </div>
                                </div>

                                
                            </div>

                             

                        </form>
                    </div>
                </div>
                </section>
            </div>

        </div>
    </main>

    <?php include("includes/footer.php");?>

</body>

</html>
                            
           