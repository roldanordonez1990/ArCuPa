<?php include("includes/a_config.php");
  require_once 'controller/controladorNoticias.php';
  $tipos = "Locales";
  $n = ControladorNoticias::getNoticias($tipos);
  $numero = 0;
 
 
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
            <?php include("includes/navbar.php");?>
            <div class="container">
                <div class="row">

                    <div class="col-sm-8">
                        <?php
                        foreach($n as $values){

                        ?>
                        <div class="card anchoCar mt-5 mb-3">
                            <div class="card-body fondoCard shadow-lg">
                                <img id="<?php echo $numero++; ?>" class="card-img-top"
                                    src="<?php echo $values->imagen;?>" style="width:100%">
                                <h4 class="card-title titulosPrincipal font-weight-bold text-center mt-2">
                                    <?php echo $values->titulo;?></h4>
                                <p class="card-text mt-2" id="autorYfecha">Por <?php echo $values->id_autor;?> |
                                    <?php echo $values->fecha;?></p>
                                <hr id="noticiaHr">
                                <p class="card-text" id="descripciones"><?php echo $values->contenido;?></p>
                                <div class="row">
                                    <div class="col-9">
                                    <a href="noticiasNueva.php"><button class="btn"><i class="far fa-plus-square"></i></button></a>
                                    </div>
                                    <div class="col-3">
                                        <form action="" class="form-inline" method="post">
                                            <button class="btn"><i class="far fa-edit"></i></button>
                                            <button name="delete" value="<?php echo $values->titulo;?>" class="btn"><i class="fas fa-trash-alt"></i></button>
                                        </form>
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
                                    <div class="titulosPrincipal font-weight-bold text-center">Noticias Locales
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
    </script>
</body>

</html>