<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">

        <?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>
        <?php 
        require_once 'controller/controladorNoticias.php';
       
        if (isset($_POST['publicar'])) {
            $bandera = false;
            $fechaActual = date('Y-m-d');
            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $noticia = new Noticias();
                $fich_unic = time() . "-" . $_FILES['imagen']['name'];
                $ruta = "imagesnotices/" . $fich_unic;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $noticia->nuevaNoticia($ruta, $_POST['tituloNoticia'], 1, $fechaActual, $_POST['contenido']);
                ControladorNoticias::insertNoticia($noticia);
                ?>
        <div class="alert alert-success text-center">
            <strong>Tu noticia ha sido publicada correctamente</strong> 
        </div>
        <?php

            } else {
                echo 'ERROR al cargar la imagen';
            }
        }
        ?>


        <div class="container p-0">
            <div class="row">
                <div class="col-12 titulosPrincipal font-weight-bold text-center mt-3 mb-3">Nueva Noticia</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="" class="form-group" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12 noticiaNueva ">
                                <input class="inputTitulo marcoNoticia area border border-primary rounded-pill"
                                    type="text" name="tituloNoticia" value="" placeholder="Título de la noticia...">
                                <label for="file-upload" class="subir">
                                    <i class="fas fa-cloud-upload-alt"></i> Seleccionar Imagen
                                </label>

                                <input id="file-upload" onchange='cambiar()' type="file" name="imagen"
                                    style='display: none;' />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-1 noticiaNueva area">
                                <textarea class="marcoNoticia rounded-start area border border-primary" name="contenido"
                                    rows="15" cols="95" placeholder="Escribe aquí tu noticia..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 noticiaNueva mt-1 ">
                                <input class="btn btn-login nombreBotonPublicar" type="submit" name="publicar"
                                    value="Publicar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <script>
            function cambiar() {
                var pdrs = document.getElementById('file-upload').files[0].name;
                document.getElementById('info').innerHTML = pdrs;
            }
            </script>

        </div>
        <?php include("includes/footer.php");?>
    </div>
</body>

</html>