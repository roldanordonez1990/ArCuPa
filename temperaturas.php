<?php include("includes/a_config.php");

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
    <style>
      body, html { margin: 0; padding: 0; }
      #left, #right {  height: 100vh }
      #left { float: left; width: 200px; overflow-y: auto; }
      #right { margin: auto }
      #map { width: 100%; height: 100%; }
      #controls, #summary { padding: 5px; }
      input.text { margin-bottom: 5px; }
      div.clear { clear: both; }
      div.popup>img { border: 1px solid gray; vertical-align: middle; }
      div.popup>h3 { display: inline; vertical-align: middle; margin-left: 5px; }
    </style>
</head>

<body class="fondoPrincipal">

    <?php include("includes/header.php");?>
    <?php include("includes/navbar.php");?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <div class="mt-5 mb-5" id="right">
                        <div class="titulosPrincipal font-weight-bold mt-3 mb-3 text-center">Mapa de Temperatura Interactivo
                        </div>
                        
                            <div class="presionImgDiv text-center">
                                <img class="presionImg" src="../media/images/temperatura.png">
                            </div>
                            <div id="map" class="map pb-5">

                            </div>

                        </div>
                    </div>
                    <div class="clear" />

                </div>
                <script src="weather2.js"></script>

            </div>
        </div>

    </main>
    <?php include("includes/footer.php");?>

</body>

</html>