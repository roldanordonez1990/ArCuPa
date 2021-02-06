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
                       
                            <script>

                             /* Remove spaces from Captcha Code */
                            function removeSpaces(string) {
                            return string.split(' ').join('');
                            }
                            
                            setInterval(() => {


                                var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
                                var str2 = removeSpaces(document.getElementById('txtCompare').value);


                                if (str1 == str2){
                                  
                                    
                                    $("#brnValid").removeAttr("disabled");
                                   
                                } else{

                                  
                                    $("#brnValid").attr("disabled", true);
                                }
                               

                            });

                            </script> 

                            <?php

                        $_SESSION['captcha'] = mt_rand(10000, 99999);
                        
                        ?>  
        

                        <form id="contact-form" name="contact-form" action="index.php" method="POST">
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

                            <div class="text-center text-md-right m-3">
                            <div class="row">
                                <div class="col">
                                <input type="text" id="txtCaptcha" value="<?php echo $_SESSION['captcha']; ?>" readonly style="text-align: center; border: none; font-weight: bold; font-family: Modern" />
                                </div>
                                <div class="col">
                                <input type="text" id="txtCompare" name="code" /> <input id="brnValid" class="btn btn-login" type="submit" value="Enviar" disabled />
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