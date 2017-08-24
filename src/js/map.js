function initMap() {
    var odriPos = {
        lat: 40.718843,
        lng: -73.680038
    };

    var map = new google.maps.Map(document.getElementById('map-main'), {
        scrollwheel: false,
        zoom: 16,
        center: odriPos,
        mapTypeId: 'roadmap',
        styles: [
            {elementType: 'geometry', stylers: [{color: '#616161'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#555555'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#b6b6b6'}]},
            {
              featureType: 'landscape.man_made',
              elementType: 'geometry',
              stylers: [{color: '#919191'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#4e4e4e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#393939'}]
            },
            {
              featureType: 'road.local',
              elementType: 'geometry',
              stylers: [{color: '#d08cf0'}]
            }
          ]
    });


    var odriMarker = new google.maps.Marker({
        position: odriPos,
        animation: google.maps.Animation.DROP,
        title: "Odri Models Management",
        map: map,
        styles: [{
            "featureType": "road.local",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#11be9b"
            }]
        }]
    });
    odriMarker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initMap);
