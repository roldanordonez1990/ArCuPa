<?php include("includes/a_config.php");

if (isset($_POST['buscarCiudad'])) {
    $server = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $_POST['buscarCiudad'] . ",es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
} else {
    $a = $_GET['a'];
    $server = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $a = $_GET['a'] . ",es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
}
if ($server != null) {
    $tiempo = json_decode($server);
} else {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php"); ?>
</head>

<body class="fondoPrincipal">

    <?php include("includes/header.php"); ?>

    <?php include("includes/navbar.php"); ?>

    <main>


        <div class="container">
            <?php if ($tiempo == null) {

            ?>
                <div class="alert alert-danger text-center">
                    <strong>Ha ocurrido un error. Debes añadir contenido a todos los campos</strong>
                </div>
            <?php
            } else {

            ?>
                <div class="titulosPrincipal font-weight-bold mt-3 text-center">El tiempo en tu ciudad</div>
                <div class="card mt-2 mb-3 text-center">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="ml-2 mt-2 text-center" id="descripciones">El tiempo en</p>
                            <p>
                            <h2 class="card-title ml-1 text-center titulosPrincipalCiudad font-weight-bold">
                                <?php if (isset($a)) {
                                    echo $a = $_GET['a'];
                                } else {
                                    echo $_POST['buscarCiudad'];
                                }
                                ?>
                            </h2>
                            <div class="ml-2 mt-1 text-center" id="descripciones">
                                <?php echo $fechaActual = date('Y-m-d'); ?>
                            </div>
                            <img src="http://openweathermap.org/img/wn/<?php echo $tiempo->weather[0]->icon; ?>@4x.png" class="meteoIcono ml-2" alt="alt" />
                            </p>
                        </div>
                        <div class="d-none d-lg-block vl col-sm-1"></div>
                        <div class="col-sm-5 mt-4">
                            <p id="descripciones"><i class="fas fa-temperature-low p-2"></i>
                                <?php echo " Temperatura Actual-> " . $tiempo->main->temp . " ºC  "; ?></p>
                            <p id="descripciones"><i class="fas fa-temperature-high p-2"></i>
                                <?php echo "Sensación Térmica-> " . $tiempo->main->feels_like . " ºC  "; ?></p>
                            <p id="descripciones"><i class="fas fa-tint p-2"></i>
                                <?php echo "Humedad Actual-> " . $tiempo->main->humidity . " %  "; ?></p>
                            <p id="descripciones"><i class="fas fa-thermometer p-2"></i>
                                <?php echo "Presión Atomosférica-> " . $tiempo->main->pressure . " mb  "; ?></p>
                            <p id="descripciones"><i class="fas fa-cloud p-2"></i>
                                <?php echo "Nubosidad Actual-> " . $tiempo->clouds->all . " %  "; ?></p>
                            <p id="descripciones"><i class="fas fa-wind p-2"></i>
                                <?php echo "Velocidad del Viento-> " . $tiempo->wind->speed . " m/h  "; ?></p>

                        </div>

                    </div>
                </div>

            <?php
            }
            ?>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>