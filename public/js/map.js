function initMap() {
    var coordinates = new google.maps.LatLng(54.16193, 15.42248);
    var mapConfig = {
        zoom: 15,
        center: coordinates,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), mapConfig);
}