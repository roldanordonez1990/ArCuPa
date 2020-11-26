<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal" id="login">
    <main>
        <section class="login-block">
            <div class="container shadow-lg" id="formulario_login">
                
                <div class="row">
                <nav class="logo aling-items-center p-2">
                    <a class="" href="../index.php">
                        <img src="../media/images/logoFinal.png" alt="Logo">
                    </a>
                </nav>
                    <div class="col-md-4 login-sec">
                        <h2 class="text-center">Iniciar Sesión</h2>
                        <form class="login-form" action="index.php">
                            <div class="form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Nombre</label>
                                <input type="text" class="form-control" placeholder="">

                            </div>
                            <div class="form-group" id="input_login">
                                <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                                <input type="password" class="form-control" placeholder="">
                            </div>


                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    <small>Recuérdame</small>
                                </label>
                                <button type="submit" class="btn btn-login float-right">Enviar</button>
                            </div>

                        </form>
                        <div class="copy-text">© 2020 Copyright: ArCuPa</div>
                    </div>
                    <div class="col-md-8 banner-sec d-none d-md-block d-lg-block">
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>