<!DOCTYPE html>
<html lang="it">

<head>
    <title>Vista dispositivo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', () => {
            navigator.geolocation.getCurrentPosition((position) => {
                var map = L.map('map')
                document.querySelector('#lat').innerHTML = position.coords.latitude
                document.querySelector('#lon').innerHTML = position.coords.longitude
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
                L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
                map.locate({
                    setView: true,
                    maxZoom: 18
                });
                L.icon()
            })
        })
    </script>
</head>

<body>
    <div class="container">
        <div id="map" style="height: 600px;width: 800px"></div>
        <div id="box" style="height: 50px;width: 800px; background-color: #e6e6e6; display: flex;  justify-content: center; align-items: center">
            <div>
                <ul>
                    <li>Velocità: </li>
                    <li>Città: </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Longitudine: <span id="lat"></span></li>
                    <li>Latitudine: <span id="lon"></span></li>
                </ul>
            </div>
        </div>
    </div>

</body>


</html>