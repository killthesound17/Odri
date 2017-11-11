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
