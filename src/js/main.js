$(document).ready(function () {

  $(window).scroll(function(){
      if ($(window).scrollTop() >= 60) {
         $('nav').addClass('fixed-header');
      }
      else {
         $('nav').removeClass('fixed-header');
      }
  });

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

$(function() {
    $(".model-filter button").click(function() {
        $(".model-filter button").removeClass("model-filter__item--active");
        $(this).toggleClass("model-filter__item--active");
    })
});


// $(document).ready(function() {
//     $("main").css("display", "none");
//     $("footer").css("display", "none");
//     $("main").fadeIn(500);
//     $("footer").fadeIn(500);
//
// 	$("a.transition").click(function(event){
// 		event.preventDefault();
// 		linkLocation = this.href;
// 		$("main").fadeOut(500, redirectPage);
//     $("footer").fadeOut(500, redirectPage);
// 	});
//
// 	function redirectPage() {
// 		window.location = linkLocation;
// 	}
// });


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

});