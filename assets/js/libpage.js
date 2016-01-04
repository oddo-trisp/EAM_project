function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
         center: new google.maps.LatLng(37.968205, 23.778779),
         zoom: 16,
         mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
}
google.maps.event.addDomListener(window, 'load', initialize);