 jQuery(document).ready(function($){
    $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
    $(window).scroll(function(event) {

    	var y = $(this).scrollTop();

    	if (y > 5) {

    		$('#brand-image').css ("height", "40px");
    	}
    	else {
    		$('#brand-image').css ("height", "70px");

    	}


    });

 });
    
