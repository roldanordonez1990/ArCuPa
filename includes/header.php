<header class="d-none d-md-block d-lg-block">
    <nav class="navbar bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar-brand pl-5" href="../index.php">
            <img src="../media/images/logoFinal.png" alt="Logo">
        </a>

        <!--Búsqueda-->
        <div class="ml-auto">
       
            <form class="form-inline" action="tiempoCiudad.php" method="post">
          
                <input class="form-control m-2" name="buscarCiudad" type="text" placeholder="Buscar">
                <button class="btn btn-login py-2 px-3 mr-2" type="submit" name="buscar"><i
                        class="fas fa-search"></i></button>
                <?php
                if(!isset($_SESSION['user_email_address']))
                {
                 echo '<a class="btn btn-login py-2 px-3" href="login.php"><i class="fa fa-user"></i> Login </a>';
                }else{
                    if  ($login_button == '' && isset($_SESSION["user_image"]) || isset($_SESSION["imagenUsu"]) )
                    {
                        if(isset($_SESSION["user_image"])){
                            echo '<img src="'.$_SESSION["user_image"].'" class="image-circle"/>';
                        }else{
                            echo '<img src="'.$_SESSION["imagenUsu"].'" class="image-circle"/>';
                        }
                        
                    }if  ($login_button == '')
                    {
                        echo '<a class="colorLogin pr-3">'.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'<a>';
                        echo '<a href="registro.php"><button type="button" class="btn btn-secondary mr-3"><i class="fas fa-users-cog"></i></button></a>';
                        echo '<a href="#" data-toggle="modal" data-target="#cerrarSesion"><button type="button" class="btn btn-danger">Salir</i></button></a>';
                    } 
                }	
                    
                ?>
            </form>
        </div>
    </nav>

    


</header>