<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="../lib/raphael-min.js"></script>
  <script type="text/javascript" src="../lib/spain-map.js"></script>
  <style type="text/css">
    body {
      background: #fff;
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      text-align: center;
      color: #555;
    }
    h1 {
      font-size: 25px;
      padding: 30px 0 10px;
    }
    p {
      padding-bottom: 30px;
    }
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
<body>

  <div id="map"></div>
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
      onClick: function(province, event) {
        alert("Has seleccionado " + province.name);
      }
      //onMouseOver: function(province, event) {
      //  console.log('Navigating through ' + province.name);
      //},
      //onMouseOut: function(province, event) {
      //  console.log('Leaving ' + province.name);
      //}
    });
  </script>
</body>