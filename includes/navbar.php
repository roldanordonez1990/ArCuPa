<nav class="navbar navbar-expand-md navbar-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06"
        aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
    <a class="nav-link text-center d-md-none"> <img class="imagen" src="../media/images/logoFinal.png" alt="Logo"></a>
    <a class="btn btn-login py-2 px-3 d-md-none" href="login.php"><i class="fa fa-user"></i></a>
    <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav navbar-center">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="https://example.com"
                    data-toggle="dropdown">Servicios</a>
                <ul class="dropdown-menu multi-level backgroundcolor">
                    <li class="dropdown-submenu">
                        <a class="dropdown-item test colorLetra dropdown-toggle" href="#">Observación</a>
                        <ul class="dropdown-menu backgroundcolor ">
                            <li class="dropdown-submenu">
                                <a href="../radar.php" class="dropdown-item">Radar</a>
                                <a href="../satelite.php" class="dropdown-item">Satélite</a>
                                <a href="../rayos.php" class="dropdown-item">Rayos</a>
                                <a href="../masasdeaire.php" class="dropdown-item">Masas de aire</a>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item test colorLetra dropdown-toggle" href="#">Predicción</a>
                        <ul class="dropdown-menu backgroundcolor">
                            <li class="dropdown-submenu">
                                <a href="../municipio.php" class="dropdown-item">Municipio</a>
                                <a href="../provincias.php" class="dropdown-item">Provincias</a>
                                <a href="../ccaa.php" class="dropdown-item">CCAA</a>
                        </ul>
                    </li>
                </ul>
            </li>



            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Mapas</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../frentes.php" class="dropdown-item">Frentes</a>
                    <a href="../temperaturas.php" class="dropdown-item">Temperaturas</a>
                    <a href="../precipitacion.php" class="dropdown-item">Precipitación</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Multimedia</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../nubes.php" class="dropdown-item">Nubes y cielos</a>
                    <a href="../videos.php" class="dropdown-item">Videos</a>
                    <a href="../paisajes.php" class="dropdown-item">Paisajes</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Avisos</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../avisosNacionales.php" class="dropdown-item">Nacionales</a>
                    <a href="../avisosccaa.php" class="dropdown-item">CCAA</a>
                    <a href="../avisosPrecipitacion.php" class="dropdown-item">Precipitación</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Noticias</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../noticiasNacionales.php" class="dropdown-item">Nacionales</a>
                    <a href="../noticiasProvinciales.php" class="dropdown-item">Provinciales</a>
                    <a href="../noticiasLocales.php" class="dropdown-item">Locales</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link" href="../contacto.php"><label>Contactanos</label></a>
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

  return false;
});
</script>