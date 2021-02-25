<?php

//Desplegaremos con $server->service nuestro servicio web
$cordoba=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cordoba,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoCordoba= json_decode($cordoba);
//
$malaga=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Malaga,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoMalaga= json_decode($malaga);
//
$sevilla=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Sevilla,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoSevilla= json_decode($sevilla);
//
$granada=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Granada,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoGranada= json_decode($granada);
//
$almeria=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Almeria,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoAlmeria= json_decode($almeria);
//
$huelva=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Huelva,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoHuelva= json_decode($huelva);
//
$cadiz=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cadiz,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoCadiz= json_decode($cadiz);
//
$jaen=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Jaen,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoJaen= json_decode($jaen);
//
$madrid=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Madrid,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoMadrid= json_decode($madrid);
//
$barcelona=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Barcelona,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoBarcelona= json_decode($barcelona);
//
$valencia=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Valencia,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoValencia= json_decode($valencia);
//
$bilbao=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Bilbao,es&APPID=a19283761f3113b225b7189fb712ca3e&lang=es&units=metric");
$tiempoBilbao= json_decode($bilbao);
//
$badajoz=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Badajoz,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoBadajoz= json_decode($badajoz);
//
$caceres=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cáceres,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoCaceres= json_decode($caceres);
//
$ciudadReal=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Ciudad Real,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempociudadReal= json_decode($ciudadReal);
//
$albacete=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Albacete,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoAlbacete= json_decode($albacete);
//
$murcia=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Murcia,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoMurcia= json_decode($murcia);
//
$alicante=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Alicante,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoAlicante= json_decode($alicante);
//
$toledo=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Toledo,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoToledo= json_decode($toledo);
//
$cuenca=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cuenca,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoCuenca = json_decode($cuenca);




?>
