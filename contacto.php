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
                        <p class="mb-4 text-justify" id="descripciones">No cabe duda de que ElGranizo se ha convertido
                            en
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
                        $_SESSION['captchacode']="";
                        for($i=0;$i<4;$i++){
                        $random[1]=rand(48,57);
                        $random[2]=rand(65,90);
                        $random[3]=rand(97,122);
                        $chose=rand(1,3);
                        $_SESSION['captchacode'].=chr($random[$chose]);
                        }

                        ?>
                        <?php $visibilidad = "none" ; ?>
                        <?php $visibilidadincorrecto = "none"; ?>
                        <?php
                            if(isset($_POST["enviar"])){
                                if($_POST['captchaclient'] == $_POST['captchaserver']){
                                    
                                     $visibilidad = "block" ;
                                     $visibilidadincorrecto = "none";

                        ?>

                        <script type="text/javascript">
                        $(document).ready(function() {
                            $('#captcha').modal('show');
                        });
                        </script>
                        <?php
                        }else{
                            
                            $visibilidad = "none" ;
                            $visibilidadincorrecto = "block";

                        ?>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            $('#captcha').modal('show');
                        });
                        </script>

                        <?php }}?>
                        <form id="contact-form" name="contact-form" action="" method="POST" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="name" class="titulosPrincipal">Nombre</label>
                                        <input type="text" id="name" name="name" class="form-control opaco" required>
                                        <div class="valid-feedback">Correcto</div>
                                        <div class="invalid-feedback">Por favor introduzca un nombre</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="email" class="titulosPrincipal">Correo Electrónico</label>
                                        <input type="text" id="email" name="email" class="form-control opaco" required>
                                        <div class="valid-feedback">Correcto</div>
                                        <div class="invalid-feedback">Por favor introduzca un correo electrónico de tipo _@_.com
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form mb-0" id="input_login">
                                        <label for="subject" class="titulosPrincipal">Asunto</label>
                                        <input type="text" id="subject" name="subject" class="form-control opaco" required>
                                        <div class="valid-feedback">Correcto</div>
                                        <div class="invalid-feedback">Por favor introduzca un asunto</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="md-form">
                                        <label for="message" class="titulosPrincipal">Mensaje</label>
                                        <textarea type="text" id="message" name="message" rows="5"
                                            class="form-control area opaco" required></textarea>
                                        <div class="valid-feedback">Correcto</div>
                                        <div class="invalid-feedback">Por favor introduzca un mensaje</div>
                                    </div>
                                </div>
                            </div>

                            <a class="isDisabled" href="#" id="modal" data-toggle="modal" data-target="#captcha">
                                <button class="float-right btn btn-login">Verificar</button>



                                <div class="modal" id="captcha" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <a>
                                                    <h5 class="modal-title text-center">Verifica el captcha</h5>
                                                </a>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="verificado" style="display:<?php  echo $visibilidad?>;"
                                                    id="verificado">
                                                    <svg class="captcha" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                        <circle class="path circle" fill="none" stroke="#73AF55"
                                                            stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1"
                                                            r="62.1" />
                                                        <polyline class="path check" fill="none" stroke="#73AF55"
                                                            stroke-width="6" stroke-linecap="round"
                                                            stroke-miterlimit="10"
                                                            points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                                    </svg>
                                                    <p class="success captchaColor">Verificado!</p>
                                                </div>

                                                <div class="incorrecto"
                                                    style="display:<?php  echo $visibilidadincorrecto?>;">
                                                    <svg class="captcha" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                        <circle class="path circle" fill="none" stroke="#D06079"
                                                            stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1"
                                                            r="62.1" />
                                                        <line class="path line" fill="none" stroke="#D06079"
                                                            stroke-width="6" stroke-linecap="round"
                                                            stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8"
                                                            y2="92.3" />
                                                        <line class="path line" fill="none" stroke="#D06079"
                                                            stroke-width="6" stroke-linecap="round"
                                                            stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4"
                                                            y2="92.2" />
                                                    </svg>
                                                    <p class="error captchaColor">Incorrecto!</p>
                                                </div>
                                                <div class="row lg-6 d-flex justify-content-center">
                                                    <img width="200px" height="80" src="captcha-img.php">
                                                </div>

                                                <input type="hidden" value="<?php echo $_SESSION['captchacode']; ?>"
                                                    name="captchaserver">
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row ">
                                                    <input type="text" style="width: 300px;" name="captchaclient">
                                                </div>
                                                <input type="submit" class="btn btn-login" name="enviar" value="Enviar"
                                                    id="submitButton">
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
    <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


        var name = $('#name').val()
        var email = $('#email').val()
        var subject = $('#subject').val();
        var message = $('#message').val();

        if ((name.length > 0) && (email.length > 0) && (subject.length > 0) && (message.length > 0)) {
            $('#modal').removeClass('isDisabled');

            console.log("hola");

        } else {
            $('#modal').addClass('isDisabled');
        }

    



    </script>

    <script>

    setInterval(function(){ 
        'use strict';
        console.log("hola");
    },100);


    </script>


    <?php include("includes/footer.php");?>

</body>

</html>