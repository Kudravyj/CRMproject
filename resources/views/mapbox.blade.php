<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        body{
            margin: 0px;
        }
        #map{
            height: 100vh;
            weight: 100wh;
        }
    </style>

</head>
<body>
<div id="map"></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicGFya29ub215IiwiYSI6ImNqc3ExaDE5czB6c3Y0M3FsY3czdGx6czUifQ.rAm2SX13KYRiMN6d8MwHCQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v8',
        center: [19,52],
        zoom: 6.5
    });
    const markers = [[19.1129,52.4890], [19.84849,52.53432], [17.84849,51.53432]];
    markers.forEach(addNew);
    function addNew(item){
        new mapboxgl.Marker()
            .setLngLat(item)
            .addTo(map);
    }
    </script>
</body>
</html>
