<?php include("includes/a_config.php");
  require_once 'controller/controladorNoticias.php';
  require_once 'controller/controladorUsuarios.php';
  $tipos = "Locales";
  $n = ControladorNoticias::getNoticias($tipos);

  $numero = 0;
  $numeroModal = 1;

if(isset($_POST['delete'])){
    ControladorNoticias::deleteNoticias($_POST['delete']);
    header('location:noticiasLocales.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <main>
        <div class="container-fluid p-0">

            <?php include("includes/header.php");?>
            <?php include("includes/navbar.php");
            
            if($n != null){
            
            
            ?>

            <div class="container">
                <div class="row">

                    <div class="col-sm-8">

                        <?php
                       
                        foreach($n as $values){
                        $numeroModal++;
                        ?>

                        <div class="card anchoCar mt-5 mb-3">

                            <div class="card-body fondoCard shadow-lg">
                                <img id="<?php echo $numero++; ?>" class="card-img-top"
                                    src="<?php echo $values->imagen;?>" style="width:100%">
                                <h4 class="card-title titulosPrincipal font-weight-bold text-center mt-2">
                                    <?php echo $values->titulo;?></h4>
                                <?php 
                                
                                if(isset($_SESSION['user_email_address'])){
                                    $u1 = ControladorUsuarios::buscarUsuario($_SESSION['user_email_address']);
                                    $idUsuario = $u1->id;
                                    $u = ControladorUsuarios::getNombreYapellido($idUsuario);
                                
                    
                                                        if($u->rowCount()){

                                                        while($row = $u->fetchObject()){
                                                            ?>
                                <p class="card-text mt-2" id="autorYfecha">Por
                                    <?php echo $row->nombre; echo " "; echo $row->apellido; ?> |
                                    <?php echo $values->fecha;?></p>
                                <?php
                                                        }
                                                        }
                                                    }else{
                                                       

                                                        $p = ControladorNoticias::getAutorNoLogueado($values->id_autor, $values->id);
                                                        if($p->rowCount()){

                                                            while($row = $p->fetchObject()){
                                                                ?>
                                <p class="card-text mt-2" id="autorYfecha">Por
                                    <?php echo $row->nombre." ".$row->apellido; ?> |
                                    <?php echo $values->fecha;?></p>
                                <?php
                                                            }
                                                        }
                                                        ?>



                                <?php
                                                    }
                                                    ?>
                                <hr id="noticiaHr">
                                <p class="card-text" id="descripciones"><?php echo $values->contenido;?></p>
                                <div class="row">
                                    <div class="col-10">
                                        <?php if(isset($_SESSION['user_email_address'])){
                                            ?>
                                        <!--<a href="noticiasNueva.php"><button class="btn"><i
                                                    class="far fa-plus-square"></i></button></a>-->
                                    </div>
                                    <div class="col-1 p-1">

                                        <form action="noticiasEdit.php" class="form-inline" method="post">
                                            <button type="submit" data-toggle="tooltip" title="Editar" name="edit"
                                                value="<?php echo $values->id;?>" class="btn">
                                                <i class="far fa-edit"></i></button>
                                        </form>
                                    </div>
                                    <div class="col-1 p-1">

                                        <a href="#a<?php echo $numeroModal;?>" data-toggle="modal"
                                            data-target="#noticia_<?php echo $numeroModal;?>"><button
                                                data-toggle="tooltip" title="Eliminar" class="btn">
                                                <i class="fas fa-trash-alt"></i>
                                            </button></a>
                                        <div class="modal" id="noticia_<?php echo $numeroModal;?>" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-center">Borrar noticia</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Seguro que quiere eliminar la noticia?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secundary"
                                                            data-dismiss="modal">Cancelar</button>
                                                        <form action="" class="form-inline" method="post">
                                                            <button type="submit" class="btn btn-danger" name="delete"
                                                                value="<?php echo $values->id;?>">Eliminar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="col-sm-4">
                        <div class="d-none d-lg-block academy-blog-sidebar mr-3">
                            <div class="card mt-5">
                                <div class="card-body fondoCardMenu shadow-lg">
                                    <div class="row">
                                        <?php if(isset($_SESSION['user_email_address'])){
                                            ?>
                                        <div class="col-sm-6">
                                            <div class="titulosPrincipal font-weight-bold text-center mb-3 mt-1">
                                                Noticias
                                                Locales
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="titulosPrincipal font-weight-bold text-center">Añadir noticia
                                                <a href="noticiasNueva.php"><button class="btn" data-toggle="tooltip" title="Añadir"><i
                                                            class="far fa-plus-square"></i></button></a>
                                            </div>
                                        </div>
                                        <?php 
                                        }else{
                                            ?>
                                        <div class="col-sm-12 titulosPrincipal font-weight-bold text-center mb-4">
                                            Noticias Locales</div>

                                        <?php
                                            }
                                            ?>
                                    </div>
                                    <?php
                                    $numero = 0;
    
                                        foreach($n as $values){
                                        ?>
                                    <a href="#<?php echo $numero++;?>" class="enlaceCiudades">
                                        <p class=" enlaceCiudades card-title titulosPrincipal mt-2" id="descripciones">
                                            <?php echo $values->titulo;?></p>
                                    </a>

                                    <hr>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }else{
                ?>
            <div class="alert alert-danger text-center">
                <strong>No hay noticias disponibles en este momento</strong>
            </div>
            <?php
            if(isset($_SESSION['user_email_address'])){
                ?>
            <div class="text-center">
                <label class="letraPrincipal">
                    Añade una nueva noticia
                </label>
                <a href="noticiasNueva.php"><button class="btn"><i class="far fa-plus-square" data-toggle="tooltip" title="Añadir"></i></button></a>
            </div>
            <?php
            }
            
            }
            ?>

    </main>

    <?php include("includes/footer.php");?>
    </div>
    <script>
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop <= 238)
            $('.academy-blog-sidebar').css('top', 238 - scrollTop);
        else
            $('.academy-blog-sidebar').css('top', 0);
    });
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>