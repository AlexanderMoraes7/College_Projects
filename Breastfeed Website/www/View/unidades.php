<?php
include_once("../Controller/unClasseProtect.php");
include_once("variaveis.php");
include_once("../css/Estilos.php");

$oProtect = new Protect();// instância para permitir o acesso somente a quem estiver logado
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="../css/unidades.css">
    <title>Unidades</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <h3>Com base na sua localização,</h3>
            <h3>confira as unidades mais próximas</h3>
            <div id="map"></div>

            <script>
                var customLabel = {
                    restaurant: {
                        label: 'R'
                    },
                    bar: {
                        label: 'B'
                    }
                };

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: new google.maps.LatLng(-27.576063, -48.535717),
                        zoom: 5
                    });
                    var infoWindow = new google.maps.InfoWindow;

                    // Busca sendo feita pela unit Resultado.php
                    downloadUrl('../Controller/unClasseResultado.php', function(data) {
                        var xml = data.responseXML;
                        var markers = xml.documentElement.getElementsByTagName('marker');
                        
                        Array.prototype.forEach.call(markers, function(markerElem) {
                            var name = markerElem.getAttribute('name');
                            var address = markerElem.getAttribute('address');
                            var type = markerElem.getAttribute('type');
                            var point = new google.maps.LatLng(
                                parseFloat(markerElem.getAttribute('lat')),
                                parseFloat(markerElem.getAttribute('lng')));

                            var infowincontent = document.createElement('div');
                            var strong = document.createElement('strong');
                            strong.textContent = name
                            infowincontent.appendChild(strong);
                            infowincontent.appendChild(document.createElement('br'));

                            var text = document.createElement('text');
                            text.textContent = address
                            infowincontent.appendChild(text);
                            var icon = customLabel[type] || {};
                            var marker = new google.maps.Marker({
                                map: map,
                                position: point,
                                label: icon.label
                            });
                            marker.addListener('click', function() {
                                infoWindow.setContent(infowincontent);
                                infoWindow.open(map, marker);
                            });
                        });
                    });
                }

                function downloadUrl(url, callback) {
                    var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                    request.onreadystatechange = function() {
                        if (request.readyState == 4) {
                            request.onreadystatechange = doNothing;
                            callback(request, request.status);
                        }
                    };

                    request.open('GET', url, true);
                    request.send(null);
                }   

                function doNothing() {}
            </script>

            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4ukTBr-xIccpUV0kb8UQ_14XfUf0mGn8&callback=initMap">
            </script>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>