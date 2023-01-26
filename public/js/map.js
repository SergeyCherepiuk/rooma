function initMap() {
    var coordinates = new google.maps.LatLng(54.161944, 15.422497);
    var mapConfig = {
        zoom: 15,
        center: coordinates,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), mapConfig);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(54.161944, 15.422497),
        map: map
    });
}