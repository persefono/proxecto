// navigator.geolocation.getCurrentPosition(function (position) {
//     var latitude = position.coords.latitude;
//     var lonxitude = position.coords.longitude;
//     var precision = position.coords.accuracy;
//     var altitud = position.coords.altitude;
//     var coorMarcador = new google.maps.LatLng(latitude, lonxitude);
//     var punto = new google.maps.LatLng(42.664135, -8.105789);
//     var myOptions = {
//         zoom: 7,
//         center: punto,
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//     }
//     var map = new google.maps.Map(document.getElementById('mapa'), myOptions);
//     var marcador = new google.maps.Marker({
//         position: coorMarcador,
//         map: map,
//         title: "Onde estou?"
//     })
// }, function(err) {
//     alert("Error obteniendo posicion. Codigo: " + err.code + " " + err.message);
// });

function cargar() {
    var alcar = new google.maps.LatLng(43.158133, -7.694292);
    var myOptions = {
        zoom: 9,
        center: alcar,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById('mapa'), myOptions);
    var marcador = new google.maps.Marker({
        position: alcar,
        map: map,
        title: "Estamos aquí"
    }, function(err) {
        alert("Error obteniendo posicion. Codigo: " + err.code + " " + err.message);
    });
}
