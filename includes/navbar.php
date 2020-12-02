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
                            <a class="dropdown-item ">Radar</a>
                            <a class="dropdown-item ">Satélite</a>
                            <a class="dropdown-item ">Rayos</a>
                            <a class="dropdown-item ">Masas de aire</a>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item test colorLetra dropdown-toggle" href="#">Predicción</a>
                        <ul class="dropdown-menu backgroundcolor">
                            <li class="dropdown-submenu">
                            <a class="dropdown-item ">Municipio</a>
                            <a class="dropdown-item ">Provincias</a>
                            <a class="dropdown-item ">CCAA</a>
                        </ul>
                    </li>
                </ul>
            </li>



            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Mapas</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Frentes</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Temperaturas</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Precipitación</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a  class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Multimedia</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a href="../nubes.php" class="dropdown-item " >Nubes y cielos</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Videos</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Paisajes</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Avisos</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Nacionales</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">CCAA</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Precipitación</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Noticias</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Nacionales</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Provinciales</a>
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Locales</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Contactanos</label></a>

            </li>

            
            <li class="nav-item dropdown d-md-none">
            <form class="form-inline">
                <input class="form-control m-6 " type="text" placeholder="Buscar">
                <button class="btn btn-login ml-2 " type="submit"><i class="fas fa-search"></i></button>
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
$(document).ready(function() {
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});
</script>