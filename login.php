<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body id="login">
    <main>
        <section class="login-block">
            <div class="container" id="formulario_login">
                <div class="row">
                    <div class="col-md-4 login-sec">
                        <h2 class="text-center">Iniciar Sesión</h2>
                        <form class="login-form" action="index.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-uppercase">Nombre</label>
                                <input type="text" class="form-control" placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                                <input type="password" class="form-control" placeholder="">
                            </div>


                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input ">
                                    <small>Recuérdame</small>
                                </label>
                                <button type="submit" class="btn btn-login float-right">Enviar</button>
                            </div>

                        </form>
                        <div class="copy-text">© 2020 Copyright: ArCuPa</div>
                    </div>
                    <div class="col-md-8 banner-sec d-none d-md-block d-lg-block">
                        <!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid"
                                        src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid"
                                        src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid"
                                        src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg"
                                        alt="First slide">
                                </div>
                            </div>

                        </div>-->
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>