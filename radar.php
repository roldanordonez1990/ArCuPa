<?php include("includes/a_config.php");?>
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
            <div class="row">

                <div class="col-sm-8">
                    <div class="row mt-4">
                        <div class="titulosPrincipal font-weight-bold col-sm-12 text-left">Radar</div>
                        <div><img class="contenedorImagen img-fluid d-block pr-5 ml-3 mb-5 mt-1"
                                src="../media/images/radar.png">
                        </div>  
                    </div>

                </div>
                <div class="col-sm-4">
                <div class="row mt-4">
                    <div class="d-none d-lg-block titulosPrincipal font-weight-bold col-sm-12 text-center">Descripción
                    </div>
                    <div
                        class="d-none d-lg-block contenedorImagen col-sm-12 border visi rounded text-center border-primary mt-1 shadow-lg p-3 mb-5 rounded">
                        <p id="descripciones">Pequeña introducción explicativa del contenido de los mapas mostrados a la
                            izquierda y enlaces hacia la información meteorológica detallada de las principales ciudades
                            andaluzas y españolas</p>
                        <table class="medidasTabla">
                            <tr>
                                <td>
                                    <div class="iconos"><i class="col-sm-4 fas fa-globe"></i></div>
                                </td>
                                <td>
                                    <div class="iconos"><i class="col-sm-4 fas fa-temperature-high"></i></div>
                                </td>
                                <td>
                                    <div class="iconos"><i class="col-sm-4 fas fa-cloud-rain"></i></div>
                                </td>
                            </tr>
                            <tr>
                                <th class="thColor">Ciudad</th>
                                <th class="thColor">Temperatura</th>
                                <th class="thColor">Probabilidad</th>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Córdona</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Málaga</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Sevilla</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Granada</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Almería</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Huelva</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Cádiz</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Jaén</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Madrid</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Barcelona</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Valencia</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>
                            <tr>
                                <td><a class="noNeeded" href="">Bilbao</a></td>
                                <td class="tdColor">30ºC</td>
                                <td class="tdColor">1%</td>
                            </tr>

                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("includes/footer.php");?>

</body>

</html>