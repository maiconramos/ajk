// Mapa
initMap();
function initMap() {
    var myLatLng = {lat: -26.8884803, lng: -49.0640473};

    var style = [{
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{"lightness": 100}, {"visibility": "simplified"}]
    }, {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{"visibility": "on"}, {"color": "#C6E2FF"}]
    }, {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#C5E3BF"}]
    }, {"featureType": "road", "elementType": "geometry.fill", "stylers": [{"color": "#D1D1B8"}]}];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        styles: style,
        scrollwheel: false,
        center: myLatLng
    });
    var location = {lat: -26.8884803, lng: -49.0640473};
    var labels = '';
    var image = new google.maps.MarkerImage('http://ajksound.com.br/wp-content/themes/ajk-tema/assets/img/pin.png',
        new google.maps.Size(75, 75),
        new google.maps.Point(0, 0),
        new google.maps.Point(37, 75)
    );

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        icon: image,

        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        icon: image,
        map: map
    });
}