let map;

function initMap() {

  const lages = { lat: -27.81667, lng: -50.32639 };

  const map = new google.maps.Map(document.getElementById("map"), {
    center: lages,
    zoom: 13,
  });

  const marker = new google.maps.Marker({
    position: lages,
    map: map,
  })
}