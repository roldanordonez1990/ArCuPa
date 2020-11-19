<nav class="navbar navbar-expand-md navbar-dark primary-color">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="nav-link text-center d-md-none"> <img src="../media/images/logoFinal.png" alt="Logo"></a>

    <button type="button" class="btn btn-success d-md-none" data-toggle="modal" data-target="#logoutModal"><i
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


    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
                <form class="d-md-none icono" action="">
                    <input class="form-control m-2" type="text" placeholder="Search">
                    <button class="btn btn-success fas fa-search" type="submit"></button>
                </form>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Disabled</a>
            </li>
        </ul>

    </div>
</nav>