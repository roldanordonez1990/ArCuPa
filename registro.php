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
                    <div class="col login-sec">
                        <h2 class="text-center">Registro</h2>
                        <form class="login-form" action="index.php">
                        <div class="row ">
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
                                <input type="text" class="form-control" placeholder="" required>

                            </div>
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                                <input type="password" class="form-control" placeholder=""  minlength="8" maxlength="40" required>
                            </div>
                        </div>
                    
                        <div class="row ">
                            <div class="col">
                                <div class="form-group" id="input_login">
                                    <label for="exampleInputEmail1" class="text-uppercase">Nombre</label>
                                    <input type="text" class="form-control" placeholder="" required>
                                </div>
                           
                            </div>
                            <div class="col">
                                <div class="form-group" id="input_login">
                                    <label for="exampleInputEmail1" class="text-uppercase">Primer apellido</label>
                                    <input type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                    
                            <div class="col">
                                <div class="form-group" id="input_login">
                                    <label for="exampleInputEmail1" class="text-uppercase">Segundo apellido</label>
                                    <input type="text" class="form-control" placeholder="" required>

                                </div>
                            </div>
                        </div>

                       
                        <div class="row ">
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" placeholder="" required>

                            </div>
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">País</label>
                                <input type="text" class="form-control" placeholder="" required>

                            </div>
                            <div class="col form-group" id="input_login">
                                <label for="exampleInputEmail1" class="text-uppercase">Teléfono</label>
                                <input type="text" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        
                            <div class="form-check">
                                <button type="submit" class="btn btn-login float-right">Enviar</button>
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