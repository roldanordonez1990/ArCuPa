<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">


    <?php include("includes/header.php");?>
    <?php include("includes/navbar.php");?>

    <div class="container">

        <div class="row">
            <div class="col-12 titulosPrincipal font-weight-bold text-center mt-3 mb-3">Nueva Noticia</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="" class="form-group">
                    <div class="row">
                        <div class="col-sm-12 noticiaNueva ">
                            <input class="inputTitulo marcoNoticia area border border-primary rounded-pill mr-2"
                                type="text" name="tituloNoticia" value="" placeholder="Título de la noticia...">
                            <label for="file-upload" class="subir">
                                <i class="fas fa-cloud-upload-alt"></i> Seleccionar Imagen
                            </label>

                            <input id="file-upload" onchange='cambiar()' type="file" style='display: none;' />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-1 noticiaNueva area">
                            <textarea class="marcoNoticia rounded-start area border border-primary" name="textarea"
                                rows="15" cols="95" placeholder="Escribe aquí tu noticia..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 noticiaNueva mt-1 ">
                            <input class="btn btn-login nombreBotonPublicar" type="submit" value="Publicar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    function cambiar() {
        var pdrs = document.getElementById('file-upload').files[0].name;
        document.getElementById('info').innerHTML = pdrs;
    }
    </script>
    <?php include("includes/footer.php");?>

</body>

</html>