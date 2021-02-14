<?php 
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

?>
<?php
if(($_POST['lat'] != null) && ($_POST['lon'] != null)){
$new =file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=".$_POST['lat']."&lon=".$_POST['lon']."&units=metric&appid=91b90d9bd7b7844589eab360246949f3");
$prevision = json_decode($new);
$varHourly = $prevision->hourly;
$diasSemana = array("","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$varDaily = $prevision->daily;
}else{
$new =file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=37.39&lon=-122.08&units=metric&appid=91b90d9bd7b7844589eab360246949f3");
$prevision = json_decode($new);
$varHourly = $prevision->hourly;
$diasSemana = array("","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$varDaily = $prevision->daily;
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php"); ?>

    


<div id="demo"></div>
<script type="text/javascript">


var x=document.getElementById("demo");

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="La información de la localización no esta disponible."
      break;
    case error.TIMEOUT:
      x.innerHTML="El tiempo de petición ha expirado."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Ha ocurrido un error desconocido."
      break;
    }
  }}
</script> 




</head>




<body class="fondoPrincipal" onload="myFunction();">

  

    <main>


    <!-- Script para mostrar las coordenadas-->
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
				document.getElementById("latitud").value = latitud;
				document.getElementById("longitud").value = longitud;

       
      

			}		

		</script>





		<form action="" id="someid" method="post">
			<input type="text" name="lat" id="latitud" hidden>
			<input type="text" name="lon" id="longitud" hidden>
    
      
      
		</form>

    
    <script>

    function myFunction(){


      if(localStorage.getItem('widget') == null){
        localStorage.setItem('widget','1');
      }
      
      
      if(localStorage.getItem('widget') == '1'){
       document.getElementById("someid").submit()


       localStorage.setItem('widget','2');    
      }
    }
    </script>

    <?php 
    
    if($_POST['lat'] == null && $_POST['lon'] == null){


      ?><script>localStorage.removeItem('widget', '2')</script><?php


    }  

    ?>


    <div class="d-none d-md-block d-lg-block">
        <div class="row ">


        <div class="col-1 fondoWidget">

          
          <div class="ciudad ml-2">Tu ubicación</div>

      

        </div>

        <div class="col-1 fondoWidget">

        <div id="datos" class="text-center mt-2">Ahora mismo</div>
        
        <img id="datos" class="text-center mr-3" src="http://openweathermap.org/img/wn/<?php echo $tiempo->weather[0]->icon; ?>@2x.png"
        class="ml-2" alt="alt"/>  

        <div class="actual text-center"><?php echo round($tiempo->main->temp) . " ºC  "; ?></div>

        </div>

      

          <div class="col-10 fondoWidget">
            
          
            <div  style="overflow-x:auto;">

            

                <div class="row fondoWidget">
                    <tr>
                        <?php 
                    foreach($varDaily as $values){
                    $fecha = new DateTime();
                   
                    $fecha->setTimestamp($values->dt);
                   
                    ?>
                        <div class="col">
                            <div id="datos" class="text-center mt-2"><?php echo $diasSemana[$fecha->format('N')]; ?>
                            </div>
                            <div id="datos"  class="text-center mr-3"><img
                                    src="http://openweathermap.org/img/wn/<?php echo $values->weather[0]->icon; ?>@2x.png"
                                    class="ml-2" alt="alt"/></div>
                            <div class="row">
                              <div class="col">
                              <div class="maximas"><?php echo round($values->temp->max)." ºC";?>
                            </div>

                              </div>

                            <div class="col">
                              <div class="minimas"><?php echo round($values->temp->min)." ºC"; ?>
                            </div>

                              </div>

                            </div>
                          
                            

                        </div>
                        <?php
                    }
                    ?>
                    </tr>

                </div>
            </div>
          </div>
        </div>
      </div>
    </main>
 
</body>

</html>