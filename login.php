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
    }else {
        if($usuario->password == $pass){
            $_SESSION['user_email_address'] = $usuario->username;
            $_SESSION['user_first_name'] = $usuario->nombre;
            $_SESSION['user_last_name'] = $usuario->apellido;
            header('location:index.php');
        }else{
            $_SESSION["bloqueadoNormal"] = "Usuario o Contraseña incorrectos";
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


                            <div>
                                <a class="bt-google" href="<?php echo $google_client->createAuthUrl(); ?>">
                                    <div class="btn-google border d-flex align-items-center py-1 rounded mx-auto my-1 p-2">
                                        <div class="ml-2">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px"
                                                height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg">
                                                <g>
                                                    <path fill="#EA4335"
                                                        d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                                    </path>
                                                    <path fill="#4285F4"
                                                        d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                                    </path>
                                                    <path fill="#FBBC05"
                                                        d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                                    </path>
                                                    <path fill="#34A853"
                                                        d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                                    </path>
                                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="mx-auto pl-2 pr-2">
                                            Acceder con Google
                                        </div>
                                    </div>
                                </a>
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