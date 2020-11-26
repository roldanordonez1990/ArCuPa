<nav class="navbar navbar-expand-lg navbar-dark ">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06"
        aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
    <a class="nav-link text-center d-lg-none"> <img class="imagen" src="../media/images/logoFinal.png" alt="Logo"></a>
    <button type="button" class="btn btn-warning d-lg-none" data-toggle="modal" data-target="#logoutModal"><i
            class="fas fa-user pr-2"></i></button>
    <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav navbar-center">
            <li class="nav-item dropdown">
                <div class="dropdown">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Mapas</label></a>
                <ul class="dropdown-menu backgroundcolor">
                    <li class="dropdown-submenu ">
                        <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><label>Observación</label></a>
                        <ul class="dropdown-menu backgroundcolor">
                            <li><a tabindex="-1" href="#"><label class="colorLetra">Radar</label></a></li>
                            <li><a tabindex="-1" href="#"><label class="colorLetra">Satélite</label></a></li>
                            <li><a tabindex="-1" href="#"><label class="colorLetra">Rayos</label></a></li>
                            <li><a tabindex="-1" href="#"><label class="colorLetra">Masas</label></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><label>Predicción</label></a>
                        <ul class="dropdown-menu backgroundcolor">
                            <li><a tabindex="-1" href="#"><label class="colorLetra">Provincias</label></a></li>
                            <li><a tabindex="-1" href="#"><label class="colorLetra">Municipios</label></a></li>
                            <li><a tabindex="-1" href="#"><label class="colorLetra">CCAA</label></a></li>
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
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Multimedia</label></a>
                <div class="dropdown-menu backgroundcolor" aria-labelledby="dropdown06">
                    <a class="dropdown-item " id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Nubes y cielos</a>
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
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="dropdown06" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><label>Contacto</label></a>

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