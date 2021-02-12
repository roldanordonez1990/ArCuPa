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
$new =file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=".'<div id="latitud"></div>'."&lon=".'<div id="longitud"></div>'."&units=metric&appid=91b90d9bd7b7844589eab360246949f3");
$prevision = json_decode($new);
$varHourly = $prevision->hourly;
$varDaily = $prevision->daily;
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php"); ?>

    <script type="text/javascript">
			if (navigator.geolocation) { //Validar si hay acceso web a la ubicación
				navigator.geolocation.getCurrentPosition(mostrarUbicacion); //Obtiene la posición
				} else {
				alert("¡Error! Este navegador no soporta la Geolocalización.");
			}
			
			//Funcion para obtener latitud y longitud
			function mostrarUbicacion(position) {
				var latitud = position.coords.latitude; //Obtener latitud
				var longitud = position.coords.longitude; //Obtener longitud
				var div = document.getElementById("latitud");
				div.innerHTML = latitud; //Imprime latitud y longitud
				var div = document.getElementById("longitud");
				div.innerHTML = longitud; //Imprime latitud y longitud
			}		
</script>

</head>



<body class="fondoPrincipal">

    <?php include("includes/header.php"); ?>

    <?php include("includes/navbar.php"); ?>

    <main>

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
                            <div id="datos" class="text-center mt-2"><?php echo $fecha->format('d-m'); ?></div>
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
                            <div id="max" class="text-center form-control mt-1"><?php echo $values->temp->max." ºC";?>
                            </div>
                            <div id="min" class="text-center form-control"><?php echo $values->temp->min." ºC"; ?>
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