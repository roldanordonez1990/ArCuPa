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
    <div class="container-fluid p-0">

        <?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>
        <?php 
        require_once 'controller/controladorNoticias.php';
        require_once 'controller/controladorUsuarios.php';
       
        $u = ControladorUsuarios::buscarUsuario($_SESSION['user_email_address']);
        
        $idAutor = $u->id;
       
        if (isset($_POST['publicar'])) {
           if($_POST['tituloNoticia'] != null && $_POST['contenido'] != null){
            $bandera = false;
            $fechaActual = date('Y-m-d');
            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $noticia = new Noticias();
                $fich_unic = time() . "-" . $_FILES['imagen']['name'];
                $ruta = "imagesnotices/" . $fich_unic;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $noticia->nuevaNoticia($ruta, $_POST['tituloNoticia'], $idAutor, $fechaActual, $_POST['contenido'], $_POST['tipos']);
                ControladorNoticias::insertNoticia($noticia);

                ?>
        <div class="alert alert-success text-center">
            <strong>Tu noticia ha sido publicada correctamente</strong>
        </div>
        <?php
           } else {
            ?>
        <div class="alert alert-danger text-center">
            <strong>No has añadido ninguna imagen</strong>
        </div>
        <?php
            }

        }else{
            ?>
        <div class="alert alert-danger text-center">
            <strong>Ha ocurrido un error. Debes añadir contenido a todos los campos</strong>
        </div>
        <?php
        }
        }
        ?>


        <div class="container p-0">
            <div class="row">
                <div class="col-12 titulosPrincipal font-weight-bold text-center mt-3 mb-3">Nueva Noticia</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="" id="identifier" class="form-group" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 noticiaNueva ">
                                <input class="inputTitulo marcoNoticia mb-2 area border border-primary rounded-pill" required
                                    type="text" name="tituloNoticia" value="" placeholder="Título de la noticia...">

                                <label for="file-upload" class="subir rounded-pill ml-1">
                                    <i class="fas fa-cloud-upload-alt"></i> Seleccionar Imagen
                                </label>

                                <input id="file-upload" onchange='cambiar()' type="file" name="imagen"
                                    style='display: none;' />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2 noticiaNueva tiposNoticia ">
                                <select name="tipos" class="tiposNoticia form-control marcoNoticia area">
                                    <option>Locales</option>
                                    <option>Provinciales</option>
                                    <option>Nacionales</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-1 noticiaNueva area">
                                <div id="cojones">
                                    <div class="visi letraPrincipal" id="editor"></div>
                                </div>
                                <input type="hidden" value="" name="contenido" id="quill-html">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 noticiaNueva mt-1 ">
                                <input class="btn btn-login nombreBotonPublicar" type="submit" id="btn-submit"
                                    name="publicar" value="Publicar">
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


            var quill = new Quill('#editor', {
                theme: 'snow'
            }).on('text-change', function() {
                $('#quill-html').val($('#editor .ql-editor').html());
            });
            </script>

        </div>
        <?php include("includes/footer.php");?>
    </div>
</body>

</html>