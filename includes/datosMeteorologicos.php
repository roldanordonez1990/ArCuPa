<?php

//Desplegaremos con $server->service nuestro servicio web
$cordoba=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cordoba,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoCordoba= json_decode($cordoba);
//
$malaga=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Malaga,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoMalaga= json_decode($malaga);
//
$sevilla=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Sevilla,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoSevilla= json_decode($sevilla);
//
$granada=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Granada,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoGranada= json_decode($granada);
//
$almeria=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Almeria,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoAlmeria= json_decode($almeria);
//
$huelva=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Huelva,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoHuelva= json_decode($huelva);
//
$cadiz=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cadiz,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoCadiz= json_decode($cadiz);
//
$jaen=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Jaen,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoJaen= json_decode($jaen);
//
$madrid=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Madrid,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoMadrid= json_decode($madrid);
//
$barcelona=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Barcelona,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoBarcelona= json_decode($barcelona);
//
$valencia=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Valencia,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoValencia= json_decode($valencia);
//
$bilbao=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Bilbao,es&APPID=91b90d9bd7b7844589eab360246949f3&lang=es&units=metric");
$tiempoBilbao= json_decode($bilbao);
?>