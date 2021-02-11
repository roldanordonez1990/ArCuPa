<div class="alert text-center cookiealert" role="alert">
    <div class="row">
        <div class="col-sm-12 col-lg-9 ">
            <p>Utilizamos cookies propias y de terceros con finalidades analíticas y para mostrarte publicidad relacionada con tus preferencias a partir de tus hábitos de navegación y tu perfil. Puedes configurar o rechazar las cookies haciendo click en “Configuración de cookies”. También puedes aceptar todas las cookies pulsando el botón “Aceptar todas las cookies”. Para más información puedes visitar nuestra <a class="noNeeded" href="../terminosLegales.php">Política de cookies</a></p>
        </div>
        <div class=" col-sm-12 col-lg-3 mt-3">

            <div class="row m-2 float-left">

            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                Aceptar todo
            </button>

            </div>

            <div class="row m-2 float-right">
    
            <button id="rejectcookie" type="button" class="btn btn-danger btn-sm" aria-label="Close">
                Rechazar
            </button>

            </div>
        </div>
    </div>
</div>


<script src="../cookiealert.js"></script>






<div class="modal" id="cerrarSesion" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Cerrar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Quiere usted cerrar sesión en la página web?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <a href="./logout.php"><button type="button" class="btn btn-danger" >Cerrar Sesión</button></a>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06"
        aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
    <a class="nav-link text-center d-md-none" href="./index.php"> <img class="imagen"
            src="../media/images/logoFinal.png" alt="Logo"></a>

    <?php
        if(!isset($_SESSION['access_token']) && !isset($_SESSION['imagenUsu']))
        {
        echo '<a class="btn btn-login py-2 px-3 d-md-none" href="login.php"><i class="fa fa-user"></i></a>';
        }else{
            if  ($login_button == '')
            {
                if(isset($_SESSION["user_image"])){
                    echo '<a href="#" data-toggle="modal" data-target="#cerrarSesion"><img src="'.$_SESSION["user_image"].'" class="image-circle d-md-none"/></a>';
                }else{
                    echo '<a href="#" data-toggle="modal" data-target="#cerrarSesion"><img src="'.$_SESSION["imagenUsu"].'" class="image-circle d-md-none"/></a>';
                }
                
            }
        }
    ?>

    <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav navbar-center">
            <li class="nav-item dropdown pr-3">
                <a class="colorLetra nav-link dropdown-toggle" href="https://example.com" data-toggle="dropdown">SERVICIOS</a>
                <ul class="dropdown-menu multi-level backgroundcolor">
                    <li class="dropdown-submenu">
                        <a class="dropdown-item test colorLetra dropdown-toggle" href="#">OBSERVACIÓN</a>
                        <ul class="dropdown-menu backgroundcolor ">
                            <li class="dropdown-submenu">
                                <a href="../radar.php" class="dropdown-item">RADAR</a>
                                <a href="../satelite.php" class="dropdown-item">SATÉLITE</a>
                                <a href="../rayos.php" class="dropdown-item">RAYOS</a>
                                <a href="../masasdeaire.php" class="dropdown-item">MASAS DE AIRE</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item test colorLetra dropdown-toggle" href="#">PREDICCIÓN</a>
                        <ul class="dropdown-menu backgroundcolor">
                            <li class="dropdown-submenu">
                                <a href="../municipio.php" class="dropdown-item">MUNICIPIO</a>
                                <a href="../provincias.php" class="dropdown-item">PROVINCIAS</a>
                                <a href="../ccaa.php" class="dropdown-item">CCAA</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown pr-3"> 
                <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown">MAPAS</a>
                <ul class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../frentes.php" class="dropdown-item">FRENTES</a>
                    <a href="../temperaturas.php" class="dropdown-item">TEMPERATURAS</a>
                    <a href="../precipitacion.php" class="dropdown-item">PRECIPITACIÓN</a>
                </ul>
            </li>
            <li class="nav-item dropdown pr-3"> 
                <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><label>MULTIMEDIA</label></a>
                <ul class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../nubes.php" class="dropdown-item">NUBES Y CIELOS</a>
                    <a href="../paisajes.php" class="dropdown-item">PAISAJES</a>
                    <a href="../videos.php" class="dropdown-item">VIDEOS</a>
                </ul>
            </li>
            <li class="nav-item dropdown pr-3"> 
                <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><label>AVISOS</label></a>
                <ul class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../avisosNacionales.php" class="dropdown-item">NACIONALES</a>
                    <a href="../avisosccaa.php" class="dropdown-item">CCAA</a>
                    <a href="../avisosPrecipitacion.php" class="dropdown-item">PRECIPITACIÓN</a>
                </ul>
            </li>
            <li class="nav-item dropdown pr-3"> 
                <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><label>NOTICIAS</label></a>
                <ul class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../noticiasNacionales.php" class="dropdown-item">NACIONALES</a>
                    <a href="../noticiasProvinciales.php" class="dropdown-item">PROVINCIALES</a>
                    <a href="../noticiasLocales.php" class="dropdown-item">LOCALES</a>
                </ul>
            </li>
            <li class="nav-item dropdown pr-3"> <a class="nav-link colorLetra"
                    href="../contacto.php"><label>CONTÁCTANOS</label></a>
            </li>
            <?php
            if(isset($_SESSION["user_email_address"])){
            ?>

                <li class="d-sm-block d-lg-none d-md-none nav-item dropdown pr-3"> <a class="nav-link colorLetra"
                        href="../registro.php"><label>ADMINISTRAR USUARIOS</label></a>
                </li>
            
            <?php
            }
            ?>

            <li class="d-none d-lg-block  nav-item dropdown pr-3"> <a class="nav-link colorLetra"
                    href="../juegos.php"><label>JUEGOS</label></a>
            </li>
            <li class="nav-item dropdown d-md-none">
                <form class="form-inline" action="tiempoCiudad.php" method="post">
                    <div class="input-group mb-3">
                        <input class="form-control m-6" type="text" placeholder="Buscar" name="buscarCiudad">
                        <div class="input-group-append">
                            <button class="btn btn-login" type="submit" name="buscar"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>

    </div>
</nav>

<script>
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });
    return false;
});
</script>