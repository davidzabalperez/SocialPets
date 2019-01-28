   var mapa = L.map('mapid').setView([43.3072913, -1.99], 5);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoiam9zdTE1IiwiYSI6ImNqcmFmNXRqYTBwcm40NGw4bTBqYjc5bzgifQ.vwuIDsqmWOzfYoTznLksEA', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
}).addTo(mapa);
//L.Control.geocoder().addTo(mapa);

var geocoder = L.Control.geocoder()
.on('markgeocode', function(event) {
    var center = event.geocode.center;
    L.marker(center).addTo(mapa);
    mapa.setView(center, mapa.getZoom());
})
.addTo(mapa);
