$(document).ready(function () {


var $grid = $('.models').isotope({
    masonry: {
        itemSelector: '.model',
        percentPosition: true,
        gutter: 10,
        horizontalOrder: true
    }
});


$('.filter-button-group').on('click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({
        filter: filterValue
    });
});


$(document).ready(function() {
    $("main").css("display", "none");
    $("footer").css("display", "none");
    $("main").fadeIn(500);
    $("footer").fadeIn(500);

	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("main").fadeOut(500, redirectPage);
    $("footer").fadeOut(500, redirectPage);
	});

	function redirectPage() {
		window.location = linkLocation;
	}
});


$('.photos-fullsize').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
    autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$(window).load(function(){
    $(".photos-fullsize").fadeIn();
});


function initMap() {
    var odriPos = {
        lat: 40.718843,
        lng: -73.680038
    };

    var map = new google.maps.Map(document.getElementById('map-main'), {
        scrollwheel: false,
        zoom: 17,
        center: odriPos,
        mapTypeId: 'roadmap',
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'landscape.man_made',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.local',
              elementType: 'geometry',
              stylers: [{color: '#11be9b'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
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
});
