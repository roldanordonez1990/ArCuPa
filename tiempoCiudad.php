<?php include("includes/a_config.php");
//Este código es para que no aparezcan unos errores de la Api que no se pueden controlar
error_reporting(0);
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
$new =file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=".$tiempo->coord->lat."&lon=".$tiempo->coord->lon."&units=metric&appid=91b90d9bd7b7844589eab360246949f3");
$prevision = json_decode($new);
$varHourly = $prevision->hourly;
$diasSemana = array("","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$varDaily = $prevision->daily;
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php"); ?>
</head>

<body class="fondoPrincipal">

    <?php include("includes/header.php"); ?>
    <?php include("includes/widget.php");?>
    <?php include("includes/navbar.php"); ?>

    <main>


        <div class="container">
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
                            <?php echo $fechaActual = date('d-m-Y'); ?>
                        </div>
                        <img src="http://openweathermap.org/img/wn/<?php echo $tiempo->weather[0]->icon; ?>@4x.png"
                            class="meteoIcono ml-2" alt="alt" />
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
            <div class="titulosPrincipal font-weight-bold mt-4 text-center">Probabilidad de precipitación por horas <i
                    class="fas fa-cloud-sun-rain"></i></div>
            <div class="card mt-2 mb-3 text-center" style="overflow-x:auto;">

                <table>
                    <tr>
                        <?php 
                    foreach($varHourly as $values){
                    $fecha = new DateTime();
                   
                    $fecha->setTimestamp($values->dt);
                   
                   
                        if($fecha->format('H:i') == "00:00"){
                            ?>
                        <th>

                            <hr>
                            <div id="datos" class="text-center mt-2"><?php echo $diasSemana[$fecha->format('N')]; ?>
                            </div>
                            <hr>
                        </th>

                        <?php
                        }
                       
                        ?>
                        <th>
                            <div id="datos" class="text-center mt-1 mr-2"><?php echo $fecha->format('H:i'); ?></div>
                            <div class="text-center mr-3"><img
                                    src="http://openweathermap.org/img/wn/<?php echo $values->weather[0]->icon; ?>@2x.png"
                                    class="ml-2" alt="alt" /></div>
                            <div id="datos" class="text-center mr-2 mb-2"><?php $p = $values->pop; echo $v = $p*100; ?>%
                            </div>

                        </th>
                        <?php
                    
                }
                    ?>
                    </tr>

                </table>
            </div>

            <div class="titulosPrincipal font-weight-bold mt-4 text-center">Previsión para los próximos 7 días <i
                    class="fas fa-chart-line"></i></div>
            <div class="card mt-2 mb-5 text-center" style="overflow-x:auto;">

                <table>
                    <tr>
                        <?php 
                    foreach($varDaily as $values){
                    $fecha = new DateTime();
                   
                    $fecha->setTimestamp($values->dt);
                   
                    ?>
                        <th>
                            <div id="datos" class="text-center mt-2"><?php echo $diasSemana[$fecha->format('N')]; ?>
                            </div>
                            <div id="datos" class="text-center mr-3"><img
                                    src="http://openweathermap.org/img/wn/<?php echo $values->weather[0]->icon; ?>@2x.png"
                                    class="ml-2" alt="alt" /></div>
                            <div id="datos" class="text-center"><i
                                    class="fas fa-cloud-rain mr-1"></i><?php $p = $values->pop; echo $v = $p*100; ?>%
                            </div>
                            <div id="datos" class="text-center mt-1"><?php 
                           
                               if($values->rain == null){
                                echo '0 mm';
                               }else{
                                echo $values->rain." mm";
                               }
                        
                            ?>
                            </div>
                            <div id="min" class="text-center form-control mt-1"><?php echo $values->temp->max." ºC";?>
                            </div>
                            <div id="max" class="text-center form-control"><?php echo $values->temp->min." ºC"; ?>
                            </div>

                        </th>
                        <?php
                    }
                    ?>
                    </tr>

                </table>
            </div>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>