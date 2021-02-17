<?php include("datosMeteorologicos.php");

?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="../lib/raphael-min.js"></script>
  <script type="text/javascript" src="../lib/spain-map.js"></script>
  <style type="text/css">
    .agile img {
      border: none;
      margin-top: 10px;
    }
    .agile {
      padding: 50px;
      font-size: 15px;
    }
    a {
      color: #66bbdd;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body onload="myFunction();">

  <div class="mt-5 w-100" id="map"></div>
  <script type="text/javascript">
    new SpainMap({
      id: 'map',
      width: 700, 
      height: 500,
      fillColor: "#eeeeee",
      strokeColor: "#cccccc",
      strokeWidth: 0.7,
      selectedColor: "#66bbdd",
      animationDuration: 200,
      function myFunction(province) {
        alert(province.name);
      }
    });
  </script>
</body>