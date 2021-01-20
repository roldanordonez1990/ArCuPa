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
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">nombre juego</h4>
                        <p class="card-text">descripcion
                        </p>
                        <a href="#" class="btn btn-login">Jugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../media/images/caratula.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Flappy Plane</h4>
                        <p class="card-text">El jugador controla un avión y debe esquivar tantas nubes como pueda reuniendo el mayor número de puntos, pero ¡CUIDADO! la velocidad de las nubes aumentan. 
                        </p>
                        <a href="../juegos/Arturo/index.html" class="btn btn-login">Jugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">nombre juego</h4>
                        <p class="card-text">descripcion
                        </p>
                        <a href="#" class="btn btn-login">Jugar</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include("includes/footer.php");?>

</body>

</html>