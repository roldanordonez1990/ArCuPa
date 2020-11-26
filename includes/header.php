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
                <button class="btn btn-login py-2 px-3 mr-2" type="submit"><i class="fas fa-search"></i></button>
                <a class="btn btn-login py-2 px-3" href="login.php"><i class="fa fa-user"></i> Login </a>
            </form>
        </div>
    </nav>
    <!--Agregamos el widget-->
    <a class="weatherwidget-io" href="https://forecast7.com/es/37d41n4d50/lucena/" data-label_1="LUCENA"
        data-font="Open Sans" data-icons="Climacons Animated" data-theme="original" data-basecolor="#25A1D1"
        data-highcolor="#F5B41B" data-suncolor="#F5B41B" data-cloudfill="" data-raincolor="#0054A5">LUCENA</a>
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