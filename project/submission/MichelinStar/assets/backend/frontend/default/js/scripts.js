
//btn click print
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}


$(document).ready(function(){
    "use strict";
    $("#main-slider").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        animateOut: 'fadeOut',
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: false
    });
		
    /*------ SCREENSHOT POPUP ------*/
    $('.lightbox-popup').magnificPopup({
        delegate: 'a',
        type:'image',
        gallery:{
            enabled:true
        }
    });
	
});

	