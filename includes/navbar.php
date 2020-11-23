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


    <div class="collapse navbar-collapse bgcolor " id="navbarNav">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
                <form class="d-lg-none icono" action="">
                    <input class="form-control m-2" type="text" placeholder="Search">
                    <button class="btn btn-success fas fa-search" type="submit"></button>
                </form>
            </li>
            <li class="nav-item ">
                <div class="dropdown">
                    <button class="dropbtn">Servicios</button>
                    <div class="dropdown-content">
                        <a href="#"><div class="dropdown">
                    <button class="dropbtn">Observación</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div></a>
                        <a href="#"><div class="dropdown">
                    <button class="dropbtn">Predicción</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div></a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn">Mapas</button>
                    <div class="dropdown-content">
                        <a href="#">Frentes</a>
                        <a href="#">Temperatura</a>
                        <a href="#">Precipitación</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn">Multimedia</button>
                    <div class="dropdown-content">
                        <a href="#">Nubes y cielos</a>
                        <a href="#">Videos</a>
                        <a href="#">Paisajes</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn">Avisos</button>
                    <div class="dropdown-content">
                        <a href="#">Nacionales</a>
                        <a href="#">CCAA</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn">Noticias</button>
                    <div class="dropdown-content">
                        <a href="#">Nacionales</a>
                        <a href="#">Provinciales</a>
                        <a href="#">Locales</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn">Contacto</button>
                    <div class="dropdown-content">
                        <a href="#">Contactanos</a>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</nav>