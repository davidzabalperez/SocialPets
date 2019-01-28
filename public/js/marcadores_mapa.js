var theMarker = {};
    mapa.on('click', function(e) {
    var latitud = e.latlng.lat;
    var longitud = e.latlng.lng;
    if (theMarker != undefined) {
              mapa.removeLayer(theMarker);
        };
    theMarker = L.marker([latitud, longitud]).addTo(mapa);
    document.getElementById("lat").value = latitud;
    document.getElementById("lng").value = longitud;
    //alert('Localicación guardada');
});