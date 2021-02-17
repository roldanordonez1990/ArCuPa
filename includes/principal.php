<?php
include("includes/datosMeteorologicos.php");?>
<div class="container">
    <div class="row">

        <div class="col-sm-8">
            <div class="row mt-4">
                <div class="titulosPrincipal font-weight-bold col-sm-12 text-left">Mapa actual de la situación
                    meteorológica en España</div>
                    <?php include("mapa.php"); ?>
            </div>


        </div>
       
        <div class="col-sm-4">
            <div class="row mt-4">
                <div class="d-none d-lg-block titulosPrincipal font-weight-bold col-sm-12 text-center">Descripción</div>
                <div class="rounded d-none d-lg-block contenedorImagen col-sm-12 border visi rounded text-center border-primary mt-1 shadow-lg p-3 mb-5 rounded">
                    <p id="descripciones">Información en tiempo real de los datos de Temperatura y Humedad de
                        todas las
                        capitales de provincia andaluzas y las más influyentes de la península. El contenido se
                        actualizará de forma independiente</p>
                    <table class="medidasTabla">
                        <tr>
                            <th>
                                <div class="iconos"><i class="col-sm-4 fas fa-globe"></i></div>
                            </th>
                            <th>
                                <div class="iconos"><i class="col-sm-4 fas fa-temperature-high"></i></div>
                            </th>
                            <th>
                                <div class="iconos"><i class="fas fa-tint"></i></div>
                            </th>
                        </tr>
                        <tr>
                            <th class="thColor">Ciudad</th>
                            <th class="thColor">Temperatura</th>
                            <th class="thColor">Humedad</th>
                        </tr>
                        <tr>
                            <td><a class="noNeeded"<?php echo "href='tiempoCiudad.php?a=Córdoba'" ?> >Córdoba</a></td>
                            <td class="tdColor"><?php echo $tiempoCordoba->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoCordoba->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Málaga'" ?>>Málaga</a></td>
                            <td class="tdColor"><?php echo $tiempoMalaga->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoMalaga->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded"<?php echo "href='tiempoCiudad.php?a=Sevilla'" ?>>Sevilla</a></td>
                            <td class="tdColor"><?php echo $tiempoSevilla->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoSevilla->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded"<?php echo "href='tiempoCiudad.php?a=Granada'" ?>>Granada</a></td>
                            <td class="tdColor"><?php echo $tiempoGranada->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoGranada->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Almeria'" ?>>Almeria</a></td>
                            <td class="tdColor"><?php echo $tiempoAlmeria->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoAlmeria->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Huelva'" ?>>Huelva</a></td>
                            <td class="tdColor"><?php echo $tiempoHuelva->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoHuelva->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Cádiz'" ?>>Cádiz</a></td>
                            <td class="tdColor"><?php echo $tiempoCadiz->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoCadiz->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Jaén'" ?>>Jaén</a></td>
                            <td class="tdColor"><?php echo $tiempoJaen->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoJaen->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Madrid'" ?>>Madrid</a></td>
                            <td class="tdColor"><?php echo $tiempoMadrid->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoMadrid->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Barcelona'" ?>>Barcelona</a></td>
                            <td class="tdColor"><?php echo $tiempoBarcelona->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoBarcelona->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Valencia'" ?>>Valencia</a></td>
                            <td class="tdColor"><?php echo $tiempoValencia->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoValencia->main->humidity . "%"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Bilbao'" ?>>Bilbao</a></td>
                            <td class="tdColor"><?php echo $tiempoBilbao->main->temp . "ºC"; ?></td>
                            <td class="tdColor"><?php echo $tiempoBilbao->main->humidity . "%"; ?></td>
                        </tr>
                        </td>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-8">
            <div class="row mt-4">
                <div class="titulosPrincipal font-weight-bold col-sm-12 text-left">Climograma actualizado de tu
                    municipio</div>
                <div><img class="img-fluid d-block pr-5 mt-1" src="../media/images/climograma.png"></div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="row mt-4">
                <div class="d-none d-lg-block titulosPrincipal font-weight-bold col-sm-12 text-center">Descripción</div>
                <div class="d-none d-lg-block contenedorImagen col-sm-12 visi border rounded text-center border-primary shadow-lg p-3 mb-5 rounded">
                    <p id="descripciones">Información en tiempo real de los datos de Presión y Nubosidad de todas las
                        capitales de provincia andaluzas y las más influyentes de la península. El contenido se
                        actualizará de forma independiente </p>
                    <table class="medidasTabla">
                        <tr>
                            <th>
                                <div class="iconos"><i class="col-sm-4 fas fa-globe"></i></div>
                            </th>
                            <th>
                                <div class="iconos"><i class="col-sm-4 fas fa-thermometer"></i></div>
                            </th>
                            <th>
                                <div class="iconos"><i class="col-sm-4 fas fa-cloud"></i></div>
                            </th>
                        </tr>
                        <tr>
                            <th class="thColor">Ciudad</th>
                            <th class="thColor">Presión</th>
                            <th class="thColor">Nubosidad</th>
                        </tr>
                        <tr>
                            <td><a class="noNeeded"<?php echo "href='tiempoCiudad.php?a=Córdoba'" ?> >Córdoba</a></td>
                            <td class="tdColor"><?php echo $tiempoCordoba->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoCordoba->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Málaga'" ?>>Málaga</a></td>
                            <td class="tdColor"><?php echo $tiempoMalaga->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoMalaga->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded"<?php echo "href='tiempoCiudad.php?a=Sevilla'" ?>>Sevilla</a></td>
                            <td class="tdColor"><?php echo $tiempoSevilla->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoSevilla->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded"<?php echo "href='tiempoCiudad.php?a=Granada'" ?>>Granada</a></td>
                            <td class="tdColor"><?php echo $tiempoGranada->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoGranada->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Almeria'" ?>>Almería</a></td>
                            <td class="tdColor"><?php echo $tiempoAlmeria->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoAlmeria->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Huelva'" ?>>Huelva</a></td>
                            <td class="tdColor"><?php echo $tiempoHuelva->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoHuelva->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Cádiz'" ?>>Cádiz</a></td>
                            <td class="tdColor"><?php echo $tiempoCadiz->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoCadiz->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Jaén'" ?>>Jaén</a></td>
                            <td class="tdColor"><?php echo $tiempoJaen->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoJaen->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Madrid'" ?>>Madrid</a></td>
                            <td class="tdColor"><?php echo $tiempoMadrid->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoMadrid->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Barcelona'" ?>>Barcelona</a></td>
                            <td class="tdColor"><?php echo $tiempoBarcelona->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoBarcelona->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Valencia'" ?>>Valencia</a></td>
                            <td class="tdColor"><?php echo $tiempoValencia->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoValencia->clouds->all . " %"; ?></td>
                        </tr>
                        <tr>
                            <td><a class="noNeeded" <?php echo "href='tiempoCiudad.php?a=Bilbao'" ?>>Bilbao</a></td>
                            <td class="tdColor"><?php echo $tiempoBilbao->main->pressure . " hPa"; ?></td>
                            <td class="tdColor"><?php echo $tiempoBilbao->clouds->all . " %"; ?></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-sm-8">
            <p class="mt-3" id="descripciones">El cometido de <strong>Arcupa</strong> es ofrecer información
                meteorológica al usuario. El contenido en forma de datos ofrecido en todas los apartados de esta Web lo
                proporciona la <a class="noNeeded" href="https://openweathermap.org/api"><strong>API openweathermap</strong></a> en su
                versión gratuita. Con ello, los datos se actualizarán en tiempo
                real cada vez que el usuario visite nuestra Web o recargue la página. Los datos más utilizados serán la
                temperatura, probabilidad de precipitación, humedad y viento. Todo esto se acompañará de iconos
                multimedia que aportarán información. Además en la Web aparecerá un contenido especial multimedia, que
                será compartido por los propios usuarios. Para cualquier duda o pregunta, no dude en ponerse en <a class="noNeeded" href="../contacto.php "><strong>contacto</strong></a> con nosotros.</p>
        </div>

        <div class="col-sm-4 d-none d-lg-block">
            <div class="row mb-2">
                <div class="titulosPrincipal font-weight-bold col-sm-12 text-center mt-3">Multimedia</div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="multi "><a href="./nubes.php"><img data-toggle="tooltip" data-placement="top" title="Nubes y Cielos" src="../media/images/nubemulti.jpg"></div>
                </div>
                <div class="col-lg-4">
                    <div class="multi"><a href="./paisajes.php"><img data-toggle="tooltip" data-placement="bottom" title="Paisajes" src="../media/images/paisajemulti.jpg"></a></div>
                </div>
                <div class="col-lg-4">
                    <div class="multi"><a href="./videos.php"><img data-toggle="tooltip" data-placement="top" title="Vídeos" src="../media/images/videomulti.jpg"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>