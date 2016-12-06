
function initMap() {
  var IthCommons = {lat: 42.4395928, lng: -76.4991871};
  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 15,
    center: IthCommons
  });
  var marker = new google.maps.Marker({
    position: IthCommons,
    map: map
  });
}
