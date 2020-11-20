<header class="d-none d-md-block d-lg-block">
    <nav class="navbar bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar-brand pl-5" href="../index.php">
            <img src="../media/images/logoFinal.png" alt="Logo">
        </a>

        <!--Búsqueda-->
        <div class="ml-auto">
            <form class="form-inline" action="">
                <input class="form-control m-2" type="text" placeholder="Buscar">
                <button class="btn btn-success py-2 px-3" type="submit"><i class="fas fa-search"></i></button>
                <!--<a class="btn btn-outline-white btn-outline m-2" href="#"><i class="fa fa-user"></i> Login </a>-->
                <button type="button" class="btn btn-success py-2 px-3" data-toggle="modal" data-target="#logoutModal"><i
                        class="fas fa-user pr-2"></i>Login</button>
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
                                        <input id="emailInput" placeholder="Email" class="form-control form-control-sm"
                                            type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña: </label>
                                        <input id="passwordInput" placeholder="Contraseña"
                                            class="form-control form-control-sm" type="text" required="">
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
            </form>
        </div>
    </nav>
    <!--Agregamos el widget-->
    <a class="weatherwidget-io" href="https://forecast7.com/en/37d41n4d50/lucena/" data-label_1="LUCENA"
        data-label_2="WEATHER" data-theme="original" data-basecolor="#25A1D1">LUCENA</a>
    <script>
    ! function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'weatherwidget-io-js');
    </script>
</header>




<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form" role="form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text"
                            required="">
                    </div>
                    <div class="form-group">
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





<ul class="dropdown-menu dropdown-menu-right">
    <li class="px-3 py-2">
        <form class="form" role="form">
            <div class="form-group">
                <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
            </div>
            <div class="form-group">
                <input id="passwordInput" placeholder="Contraseña" class="form-control form-control-sm" type="text"
                    required="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Loguear</button>
            </div>
            <div class="form-group text-center">
                <small><a href="#" data-toggle="modal" data-target="#modalPassword">¿Olvidaste la
                        contraseña?</a></small>
            </div>
        </form>
    </li>
</ul>
