// Initialize and add the map
function initMap() {
    // The location of Uluru
    var latitude = $("#map").data("latitude");
    var longitude = $("#map").data("longitude");
    const uluru = { lat: latitude, lng: longitude };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}

window.initMap = initMap;

// // Initialize and add the map
// let map;

// async function initMap() {
//   // The location of Uluru
//   const position = { lat: 24.728282, lng: 46.609324 };
//   // Request needed libraries.
//   //@ts-ignore
//   const { Map } = await google.maps.importLibrary('maps');
//   const { AdvancedMarkerView } = await google.maps.importLibrary('marker');

//   // The map, centered at Uluru
//   map = new Map(document.getElementById('map'), {
//     zoom: 16,
//     center: position,
//     mapId: 'DEMO_MAP_ID',
//   });

//   // The marker, positioned at Uluru
//   const marker = new AdvancedMarkerView({
//     map: map,
//     position: position,
//     title: 'Uluru',
//   });
//   marker.setMap(map);

// }

// initMap();
