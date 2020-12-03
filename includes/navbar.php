<nav class="navbar navbar-expand-md navbar-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06"
        aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
    <a class="nav-link text-center d-md-none"> <img class="imagen" src="../media/images/logoFinal.png" alt="Logo"></a>
    <a class="btn btn-login py-2 px-3 d-md-none" href="login.php"><i class="fa fa-user"></i></a>
    <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav navbar-center">
            <li class="nav-item dropdown pr-3"> <a class="colorLetra nav-link dropdown-toggle " href="https://example.com"
                    data-toggle="dropdown">SERVICIOS</a>
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



            <li class="nav-item dropdown pr-3"> <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>MAPAS</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../frentes.php" class="dropdown-item">FRENTES</a>
                    <a href="../temperaturas.php" class="dropdown-item">TEMPERATURAS</a>
                    <a href="../precipitacion.php" class="dropdown-item">PRECIPITACIÓN</a>
                </div>
            </li>
            <li class="nav-item dropdown pr-3"> <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>MULTIMEDIA</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../nubes.php" class="dropdown-item">NUBES Y CIELOS</a>
                    <a href="../videos.php" class="dropdown-item">VIDEOS</a>
                    <a href="../paisajes.php" class="dropdown-item">PAISAJES</a>
                </div>
            </li>
            <li class="nav-item dropdown pr-3"> <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>AVISOS</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../avisosNacionales.php" class="dropdown-item">NACIONALES</a>
                    <a href="../avisosccaa.php" class="dropdown-item">CCAA</a>
                    <a href="../avisosPrecipitacion.php" class="dropdown-item">PRECIPITACIÓN</a>
                </div>
            </li>
            <li class="nav-item dropdown pr-3"> <a class="nav-link dropdown-toggle colorLetra" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>NOTICIAS</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../noticiasNacionales.php" class="dropdown-item">NACIONALES</a>
                    <a href="../noticiasProvinciales.php" class="dropdown-item">PROVINCIALES</a>
                    <a href="../noticiasLocales.php" class="dropdown-item">LOCALES</a>
                </div>
            </li>
            <li class="nav-item dropdown pr-3"> <a class="nav-link colorLetra" href="../contacto.php"><label>CONTÁCTANOS</label></a>
            </li>


            <li class="nav-item dropdown d-md-none">
                <form class="form-inline">
                    <div class="input-group mb-3">
                        <input class="form-control m-6" type="text" placeholder="Buscar">
                        <div class="input-group-append">
                            <button class="btn btn-login" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>

    </div>
</nav>

</div>
</nav>









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