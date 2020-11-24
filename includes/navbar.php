<nav class="navbar navbar-expand-lg navbar-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="nav-link text-center d-lg-none"> <img src="../media/images/logoFinal.png" alt="Logo"></a>

    <button type="button" class="btn btn-success d-lg-none" data-toggle="modal" data-target="#logoutModal"><i
            class="fas fa-user pr-2"></i></button>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Correo Electrónico: </label>
                            <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text"
                                required="">
                        </div>
                        <div class="form-group">
                            <label>Contraseña: </label>
                            <input id="passwordInput" placeholder="Contraseña" class="form-control form-control-sm"
                                type="text" required="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Loguear</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav w-100 justify-content-center">
                <div class="dropdown">
                    <button class="btn btn-dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Servicios</label>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#"><label>Observación</label> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                <li class="dropdown-item"><a href="#"><label>Radar</label></a></li>
                                <li class="dropdown-item"><a href="#"><label>Satélite</label></a></li>
                                <li class="dropdown-item"><a href="#"><label>Rayos</label></a></li>
                                <li class="dropdown-item"><a href="#"><label>Masas de aire</label></a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Predicción</label><span class="caret"></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                <li class="dropdown-item"><a href="#"><label>Municipio</label></a></li>
                                <li class="dropdown-item"><a href="#"><label>Provincia</label></a></li>
                                <li class="dropdown-item"><a href="#"><label>CCAA</label></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <div class="dropdown">
                    <button class="btn btn-dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Mapas</label>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Frentes</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Temperatura</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Precipitación</label></a>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Multimedia</label>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Nubes y cielos</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Vídeos</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Paisajes</label></a>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Avisos</label>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Nacionales</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>CCAA</label></a>
                        </li>
                    </ul>
                </div>


                <div class="dropdown">
                    <button class="btn btn-dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Noticias</label>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Nacionales</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Provinciales</label></a>
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Locales</label></a>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Contacto</label>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><label>Contáctanos</label></a>
                        </li>
                    </ul>
                </div>






            


    </div>
</nav>