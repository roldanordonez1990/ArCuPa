<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">

    <?php include("includes/header.php");?>
    <?php include("includes/navbar.php");?>

    <main class="container-fluid">

        <div class="row p-3">

            <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../media/images/miniaturaFran.png" alt="Card image"
                        style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title titulosPrincipal font-weight-bold text-center">The Weather Attack</h4>
                        <p class="card-text" id="descripciones">¡El día se ha complicado con la tormenta! Intenta
                            esquivar a los elementos meteorológicos todo lo que puedas. ¡No va a parar! Que tengas
                            suerte...
                        </p>
                        <a href="../juegos/Francisco/index.html" class="btn btn-login">Jugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../media/images/caratula.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title titulosPrincipal font-weight-bold text-center">Flappy Plane</h4>
                        <p class="card-text" id="descripciones">El jugador controla un avión y debe esquivar tantas
                            nubes como pueda reuniendo el mayor número de puntos, pero ¡CUIDADO! la velocidad de las
                            nubes aumentan.

                        </p>
                        <a href="../juegos/Arturo/index.html" class="btn btn-login">Jugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="media/images/JuegoTiempo.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title titulosPrincipal font-weight-bold text-center">Destruye Nubes</h4>
                        <p class="card-text text-justify" id="descripciones">Es un videojuego muy rapido que consta en
                            que no te den los rayos que caen de las nubes y destruyas las nubes.
                        </p>
                        <a href="juegos/Adrian/index.html" class="btn btn-login">Jugar</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include("includes/footer.php");?>

</body>

</html>