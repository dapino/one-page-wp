;(function($){
	$(function(){
		$(document).ready(function(){
            $(".button-collapse").sideNav();
            $('.modal-trigger').leanModal({
                  dismissible: true, // Modal can be dismissed by clicking outside of the modal
                  opacity: .5, // Opacity of modal background
                  in_duration: 300, // Transition in duration
                  out_duration: 200, // Transition out duration
                  ready: function() { console.log('Ready'); }, // Callback for Modal open
                  complete: function() { console.log('Closed'); } // Callback for Modal close
                }
              );
			$('.main-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
            $('.portfolio-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            })
            $('.blog-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            })
            $(function() {
              $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html, body').animate({
                      scrollTop: (target.offset().top - 70)
                    }, 100);
                    return false;
                  }
                }
              });
            });
		}); 		
	});
}(jQuery));