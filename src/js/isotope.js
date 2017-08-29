$(document).ready(function () {

  $(document).ready(function() {
      $("main").css("display", "none");
      $("footer").css("display", "none");
      $("main").fadeIn(1000);
      $("footer").fadeIn(1000);

  	$("a.transition").click(function(event){
  		event.preventDefault();
  		linkLocation = this.href;
  		$("main").fadeOut(1000, redirectPage);
      $("footer").fadeOut(1000, redirectPage);
  	});

  	function redirectPage() {
  		window.location = linkLocation;
  	}
  });

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



});
