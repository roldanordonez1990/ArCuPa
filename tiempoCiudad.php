<?php include("includes/a_config.php");

    $server =file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_POST['buscarCiudad'].",es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
    if($server != null){
    $tiempo= json_decode($server);
    
}else{
    header('location:index.php');
   
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">

    <?php include("includes/header.php");?>
    
    <?php include("includes/navbar.php");?>

    <main>


        <div class="container">
            <?php if($tiempo == null){
                
                ?>
            <div class="alert alert-danger text-center">
                <strong>Ha ocurrido un error. Debes añadir contenido a todos los campos</strong>
            </div>
            <?php
            }else{

            ?>
            <div class="titulosPrincipal font-weight-bold mt-3">El tiempo en tu ciudad</div>
            <div class="card mt-2 mb-3" style="width:68%">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="ml-2 mt-1 text-center" id="descripciones">El tiempo en</p>
                        <p>
                        <h2 class="card-title ml-1 text-center titulosPrincipalCiudad font-weight-bold">
                            <?php echo $_POST['buscarCiudad'];?></h2>
                        <div class="ml-2 mt-1 text-center" id="descripciones"><?php echo $fechaActual = date('Y-m-d');?>
                        </div>
                        <img src="http://openweathermap.org/img/wn/<?php echo $tiempo->weather[0]->icon;?>.png"
                            class="meteoIcono ml-5" alt="alt" />
                        </p>
                    </div>

                    <div class="col-sm-6 ml-4 mt-4">
                        <p class="card-text" id="descripciones"><i class="col-sm-4 fas fa-temperature-low"></i>
                            <?php echo "Temperatura Actual-> ".$tiempo->main->temp." ºC";?></p>
                        <p class="card-text" id="descripciones"><i class="col-sm-4 fas fa-temperature-high"></i>
                            <?php echo "Sensación Térmica-> ".$tiempo->main->feels_like." ºC";?></p>
                        <p class="card-text" id="descripciones"><i class="col-sm-4 fas fa-tint"></i>
                            <?php echo "Humedad Actual-> ".$tiempo->main->humidity." %";?></p>
                        <p class="card-text" id="descripciones"><i class="col-sm-4 fas fa-thermometer"></i>
                            <?php echo "Presión Atomosférica-> ".$tiempo->main->pressure." mb";?></p>
                        <p class="card-text" id="descripciones"><i class="col-sm-4 fas fa-cloud"></i>
                            <?php echo "Nubosidad Actual-> ".$tiempo->clouds->all." %";?></p>
                        <p class="card-text" id="descripciones"><i class="col-sm-4 fas fa-wind"></i>
                            <?php echo "Velocidad del Viento-> ".$tiempo->wind->speed." km/h";?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
            }
            ?>
    </main>
    <?php include("includes/footer.php");?>

</body>

</html>