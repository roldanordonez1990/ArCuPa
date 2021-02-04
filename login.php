<?php 

include_once "includes/a_config.php";
require_once 'controller/controladorUsuarios.php';
//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><button type="button" class="btn btn-login">Iniciar Sesion con Google</button></a>';
}

if (isset($_POST["enviar"])) {
    $usuario = ControladorUsuarios::buscarUsuario($_POST["email"]);
    $pass = md5($_POST["contraseña"]);
    if ($usuario == null) {
        $_SESSION["bloqueadoNormal"] = "Usuario o Contraseña incorrectos";
        echo "hola";
    }else {
        if($usuario->password == $pass){
            $_SESSION['user_email_address'] = $usuario->username;
            $_SESSION['user_first_name'] = $usuario->nombre;
            $_SESSION['user_last_name'] = $usuario->apellido;
            header('location:index.php');
        }else{
            $_SESSION["bloqueadoNormal"] = "Usuario o Contraseña incorrectos";
            echo "Correo: ".$usuario->username . ' // Contraseña Usuario: ' . $usuario->password . "// Contraseña Input: " . $pass;
            
        }
    }
}

?>
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

                        <?php
                        if(isset($_SESSION["bloqueado"])){?>
                        <div class="alert alert-danger text-center">
                            <strong><?php echo $_SESSION["bloqueado"];?></strong>
                        </div>

                        <?php
                        session_destroy(); 
                        }
                        ?>

                        <?php
                        if(isset($_SESSION["bloqueadoNormal"])){?>
                        <div class="alert alert-danger text-center">
                            <strong><?php echo $_SESSION["bloqueadoNormal"];?></strong>
                        </div>

                        <?php
                        session_destroy(); 
                        }
                        ?>

                        <form class="login-form" action="" method="post">
                            <div class="form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Correo Electrónico</label>
                                <input type="text" class="form-control" placeholder="" name="email">

                            </div>
                            <div class="form-group" id="input_login">
                                <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                                <input type="password" class="form-control" placeholder="" name="contraseña">
                            </div>


                            <div class="form-check">
                                <button type="submit" class="btn btn-login float-right" name="enviar">Enviar</button>
                                <br>
                            </div>

                            <br>
                            <hr>


                            <div class="float-right">
                                <?php
                                echo $login_button;
                                ?>
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