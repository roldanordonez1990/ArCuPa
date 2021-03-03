<?php include("includes/a_config.php");
if(!isset($_SESSION['user_email_address'])){
    header('location:index.php');
}
 require_once 'controller/controladorNoticias.php';
 $idNotica;
 $n;
 $fechaActual = date('Y-m-d');

$n = ControladorNoticias::buscarNoticia($_POST['edit']);

 if (isset($_POST['modificar'])) {
           
    if ($_FILES['imagen']['size'] > 0) {
       
        if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
            $noticia = new Noticias();
            $fich_unic = time() . "-" . $_FILES['imagen']['name'];
            $ruta = "imagesnotices/" . $fich_unic;
            //para copiar el fichero en la carpeta usamos la funciçon move_uploaded_file
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
            $noticia->nuevaNoticia($ruta, $_POST['tituloNoticia'], 1, $fechaActual, $_POST['contenido'], $_POST['tipos']);
            ControladorNoticias::modificarNoticia($noticia, $_POST['modificar']); 
            if($_POST['tipos'] == "Provinciales"){
                header('location:noticiasProvinciales.php');
                
            }else if($_POST['tipos'] == "Nacionales"){
                header('location:noticiasNacionales.php');
            }else{
                header('location:noticiasLocales.php');
            }
            
            
        } else {
            echo 'ERROR al cargar la imagen';
        }
    }else{
        $noticia = new Noticias();
        $noticia->nuevaNoticia($_POST['imagenActual'], $_POST['tituloNoticia'], 1, $fechaActual, $_POST['contenido'], $_POST['tipos']);
        ControladorNoticias::modificarNoticia($noticia, $_POST['modificar']);
        if($_POST['tipos'] == "Provinciales"){
            header('location:noticiasProvinciales.php');
            
        }else if($_POST['tipos'] == "Nacionales"){
            header('location:noticiasNacionales.php');
        }else{
            header('location:noticiasLocales.php');
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">

        <?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>
        <?php 
       
       
       
        ?>
        <?php
       
        ?>
        <div class="container p-0">
            <div class="row">
                <div class="col-12 titulosPrincipal font-weight-bold text-center mt-3 mb-3">Editor de Noticias</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="" class="form-group" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="imagenActual" value="<?php echo $n->imagen;?>">
                        <div class="row">
                            <div class="col-12 noticiaNueva ">
                            <label for="title"><spam class="sr-only">titulo</spam></label>
                                <input id="title" class="inputTitulo marcoNoticia mb-2 area border border-primary rounded-pill"
                                    required type="text" name="tituloNoticia" value="<?php echo $n->titulo?>"
                                    placeholder="Título de la noticia...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="imagenEditarTamaño" src="<?php echo $n->imagen;?>" alt="Mi imagen"
                                    id="miImagen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 noticiaNueva mt-2 mb-2">
                            <label for="fil"><spam class="sr-only">titulo</spam></label>
                                <input id="fil" type="file" id="file-upload" name="imagen" value="<?php echo $n->imagen;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2 noticiaNueva tiposNoticia ">
                                <select name="tipos" class="tiposNoticia form-control marcoNoticia area"
                                    value="<?php echo $n->tipo?> selected">

                                    <?php if($n->tipo == "Locales"){
                                        ?>
                                    <option><?php echo $n->tipo;?></option>
                                    <option>Provinciales</option>
                                    <option>Nacionales</option>
                                    <?php
                                    }if($n->tipo == "Nacionales"){
                                        ?>
                                    <option><?php echo $n->tipo;?></option>
                                    <option>Locales</option>
                                    <option>Provinciales</option>
                                    <?php
                                    }if($n->tipo == "Provinciales"){
                                        ?>
                                    <option><?php echo $n->tipo;?></option>
                                    <option>Locales</option>
                                    <option>Nacionales</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-1 noticiaNueva area">
                                <div id="cojones">
                                    <div class="visi letraPrincipal" id="editor"><?php echo $n->contenido;?></div>
                                </div>
                                <input type="hidden" value="<?php echo $n->contenido;?>" name="contenido"
                                    id="quill-html">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 noticiaNueva mt-1 ">
                                <button class="btn btn-login nombreBotonPublicar" type="submit" name="modificar"
                                    value="<?php echo $n->id; ?>">Modificar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <script>
            /*
            function cambiar() {
                var pdrs = document.getElementById('file-upload').files[0].name;
                document.getElementById('info').innerHTML = pdrs;
            }
           */

            var quill = new Quill('#editor', {
                theme: 'snow'
            }).on('text-change', function() {
                $('#quill-html').val($('#editor .ql-editor').html());
            });
            </script>
            <script>
            $("#miImagen").attr('src', '<?php echo $n->imagen;?>/' + td[1].innerText)
            </script>
        </div>
        <?php include("includes/footer.php");?>
    </div>
</body>

</html>