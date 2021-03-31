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
//
$coruna=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Coruña,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoCoruna = json_decode($coruna);
//
$alava=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Alava,es&APPID=5662461fc68d8c3c7a41a31b21f1bdd4&lang=es&units=metric");
$tiempoAlava = json_decode($alava);
//
$oviedo=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Oviedo,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoOviedo = json_decode($oviedo);
//
$avila=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Avila,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoAvila = json_decode($avila);
//
$burgos=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Burgos,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoBurgos = json_decode($burgos);
//
$cantabria=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Cantabria,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoCantabria = json_decode($cantabria);
//
$castellon=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Castellon,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoCastellon = json_decode($castellon);
//
$girona=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Girona,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoGirona = json_decode($girona);
//
$guadalajara=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Guadalajara,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoGuadalajara = json_decode($guadalajara);
//
$guipuzcoa=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Girona,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoGuipuzcoa = json_decode($guipuzcoa);
//
$huesca=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Huesca,es&APPID=b949cdfa1f95f6f1efb133b110948d6a&lang=es&units=metric");
$tiempoHuesca = json_decode($huesca);
//
$islasBaleares=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Palma,es&APPID=99bcbe43c57d205c84080231de12efe9&lang=es&units=metric");
$tiempoIslasBaleares = json_decode($islasBaleares);
//
$rioja=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Rioja,es&APPID=99bcbe43c57d205c84080231de12efe9&lang=es&units=metric");
$tiempoRioja = json_decode($rioja);
//
$palmas=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Las palmas,es&APPID=99bcbe43c57d205c84080231de12efe9&lang=es&units=metric");
$tiempoLasPalmas = json_decode($palmas);
//
$leon=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Leon,es&APPID=99bcbe43c57d205c84080231de12efe9&lang=es&units=metric");
$tiempoLeon = json_decode($leon);
//
$lleida=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Lleida,es&APPID=99bcbe43c57d205c84080231de12efe9&lang=es&units=metric");
$tiempoLleida = json_decode($lleida);
//
$lugo=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Lugo,es&APPID=99bcbe43c57d205c84080231de12efe9&lang=es&units=metric");
$tiempoLugo = json_decode($lugo);
//
$navarra=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Pamplona,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoNavarra = json_decode($navarra);
//
$ourense=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Ourense,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoOurense = json_decode($ourense);
//
$palencia=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Palencia,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoPalencia = json_decode($palencia);
//
$pontevedra=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Pontevedra,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoPontevedra = json_decode($pontevedra);
//
$tenerife=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Santa%20cruz%20de%20tenerife,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoTenerife = json_decode($tenerife);
//
$salamanca=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Salamanca,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoSalamanca = json_decode($salamanca);
//
$segovia=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Segovia,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoSegovia = json_decode($segovia);
//
$soria=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Soria,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$timepoSoria = json_decode($soria);
//
$tarragona=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Tarragona,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoTarragona = json_decode($tarragona);
//
$Teruel=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Teruel,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoTeruel = json_decode($Teruel);
//
$Valladolid=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Valladolid,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoValladolid = json_decode($Valladolid);
//
$Zamora=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Zamora,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoZamora = json_decode($Zamora);
//
$Zaragoza=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Zaragoza,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoZaragoza = json_decode($Zaragoza);
//
$Ceuta=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Ceuta,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoCeuta = json_decode($Ceuta);
//
$Melilla=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Melilla,es&APPID=ff76fd52c6543a13b16bcbe02ddb9fe3&lang=es&units=metric");
$tiempoMelilla = json_decode($Melilla);





?>
