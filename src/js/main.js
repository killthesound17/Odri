$(document).ready(function () {


//sticky header
  $(window).scroll(function(){
      if ($(window).scrollTop() >= 60) {
         $('nav').addClass('fixed-header');
      }
      else {
         $('nav').removeClass('fixed-header');
      }
  });




  //slick-slider
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
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
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
