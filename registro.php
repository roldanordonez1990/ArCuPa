<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal" id="login">



<?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>
        <?php 
        require_once 'controller/controladorUsuarios.php';
       
        if (isset($_POST['enviar'])) {
                $usuario = new Usuarios();
                $usuario->nuevoUsuario($_POST['usuario'], $_POST['pass'], $_POST['nombre'], $_POST['apellido'], $_POST['fechaNac'], $_POST['pais'], $_POST['telefono'])
                ControladorUsuarios::insertUsuario($usuario);
                ?>
        <div class="alert alert-success text-center">
            <strong>Usuario creado correctamente</strong> 
        </div>
        <?php
            } else {
                echo 'ERROR al crear el usuario';
            }
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
                        <h2 class="text-center">Registro</h2>
                        <form class="login-form" action="index.php">
                        <div class="row ">
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>

                                <input type="text" name="usuario" class="form-control" placeholder="" required>


                            </div>
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>

                                <input type="password" name="pass" class="form-control" placeholder=""  minlength="8" maxlength="40" required>

                            </div>
                        </div>
                    
                        <div class="row ">
                            <div class="col">
                                <div class="form-group" id="input_login">
                                    <label for="exampleInputEmail1" class="text-uppercase">Nombre</label>

                                    <input type="text" name="nombre" class="form-control" placeholder="" required>

                                </div>
                           
                            </div>
                            <div class="col">
                                <div class="form-group" id="input_login">
                                    <label for="exampleInputEmail1" class="text-uppercase">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" placeholder="" required>
                              
                                </div>
                            </div>
                        </div>

                       
                        <div class="row ">
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Fecha de Nacimiento</label>

                                <input type="date" name="fechaNac" class="form-control" placeholder="" required>

                                <input type="date" class="form-control" placeholder="" required>


                            </div>
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">País</label>

                                <input type="text" name="pais" class="form-control" placeholder="" required>


                            </div>
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Teléfono</label>

                                <input type="text" name="telefono" class="form-control" placeholder="" required>
                            </div>
                        </div>

                        
                            <div class="form-check">
                                <button name="enviar" type="submit" class="btn btn-login float-right">Enviar</button>

                            </div>

                        
                        </form>
                        <div class="copy-text">© 2020 Copyright: ArCuPa</div>
                    </div>

                          

                    
                </div>
            </div>
        </section>
    </main>
</body>

</html>