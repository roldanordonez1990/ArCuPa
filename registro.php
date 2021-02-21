<?php include("includes/a_config.php");

if(!isset($_SESSION['user_email_address'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <?php include("includes/header.php");?>
    <?php include("includes/navbar.php");?>
    <?php 
        require_once 'controller/controladorUsuarios.php';
       
        if (isset($_POST['enviar'])) {
                $usuario = new Usuarios();
                
                $usuario->nuevoUsuario($_POST['usuario'], $_POST['password'], $_POST['nombre'], $_POST['apellido'], $_POST['fechaNac'], $_POST['pais'], $_POST['telefono']);
                ControladorUsuarios::insertUsuario($usuario);
                ?>
    <div class="alert alert-success text-center">
        <strong>Usuario creado correctamente</strong>
    </div>
    <?php 
            }
        
        ?>
    <main>
        <section class="login-block">
            <div class="container shadow-lg" id="formulario_login">

                <div class="row">
                    <nav class="logo aling-items-center p-2">
                        <a class="" href="../index.php">
                            <img src="../media/images/logoFinal.png" alt="Logo">
                        </a>
                    </nav>
                    <div class="col login-sec">
                        <h2 class="text-center">Registro de nuevos Usuarios</h2>
                        <form action="" method="post" class="needs-validation login-form" novalidate>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6  form-group">
                                    <label for="uname" class="text-uppercase">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="uname" name="usuario" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca un usuario de tipo _@_.com</div>
                                </div>
                                <div class="col-sm-12 col-lg-6 ">
                                    <label class="text-uppercase" for="pwd">Contraseña:</label>
                                    <input type="password" class="form-control" id="pwd" name="password" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca una contraseña</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6   form-group">
                                    <label class="text-uppercase" for="uname">Nombre:</label>
                                    <input type="text" class="form-control" id="uname" name="nombre" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca un nombre</div>
                                </div>
                                <div class="col-sm-12 col-lg-6 ">
                                    <label class="text-uppercase" for="pwd">Apellido:</label>
                                    <input type="text" class="form-control" id="pwd" name="apellido" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca un apellido</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-4   form-group">
                                    <label class="text-uppercase" for="uname">Fecha de Nacimiento:</label>
                                    <input type="date" class="form-control" id="uname" name="fechaNac" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca una fecha de nacimiento</div>
                                </div>
                                <div class="col-sm-12 col-lg-4 ">
                                    <label class="text-uppercase" for="pwd">País:</label>
                                    <input type="text" class="form-control" id="pwd" name="pais" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca un país</div>
                                </div>
                                <div class="col-sm-12 col-lg-4 ">
                                    <label class="text-uppercase" for="pwd">Teléfono:</label>
                                    <input type="number" class="form-control" id="pwd" name="telefono" required>
                                    <div class="valid-feedback">Correcto</div>
                                    <div class="invalid-feedback">Por favor introduzca un teléfono</div>
                                </div>
                            </div>
                            <div class="form-check">
                                <button name="enviar" type="submit"
                                    class="btn mt-3 btn-login float-right">Enviar</button>
                            </div>
                        </form>
                        <div class="copy-text">© 2020 Copyright: ArCuPa</div>
                    </div>




                </div>
            </div>
        </section>
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
    </script>

</body>

</html>