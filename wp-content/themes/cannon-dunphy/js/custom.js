
jQuery(document).ready(function($){
	
		
		
		
		
		// menu
		
		
			
			var windowWidth = $(window).width();
		
		
		
			function checkWidthmenu() {
		    
		    if (windowWidth > 1220) {
		        
		      
		    	$('nav ul.menu > li').append('<div class="current_wrapper"><div class="current"><div class="current_inner"></div></div></div>');
		    	   		
		    		
		    }
		    
		    
		    if (windowWidth < 1220) {
		        
		      
		      $('.mobile_menu').on('click', function(e) {
		        
		        $('nav').slideToggle();
		        
		        $('.close_x').addClass('fade');
		        
		      });
		      
		      $('.close_x').on('click', function(e) {
		        
		        $('nav').slideToggle();
		        
		        $('.close_x').removeClass('fade');
		        
		      });
		      
		    	$('nav ul.sub-menu').wrapInner('<div class="sub_menu_wrap"></div>');


					$('nav ul.menu > li > ul.sub-menu').addClass('close');
					
					$('nav ul.menu > li > a').on('click', function(e) {
  
						$(this).parent().toggleClass('open-parent');
  
						$(this).next('ul.sub-menu').toggleClass('open');
  
						$(this).next('ul.sub-menu').toggleClass('close');
  
						// alert($(this).next('.sub_menu_wrap').find('ul.sub-menu').height());
  
						var currentheight = $(this).next('ul.sub-menu').find('.sub_menu_wrap').height();
  
						$(this).next('ul.sub-menu').css("height", currentheight);
  
  
					});
		    	   		
		    		
		    }
		    
		};
			
		
		checkWidthmenu();
		
		
		
		
		
	
	 /* Modernizr - check if browser supports webp. if it does add class webp to html tag
     --------------------------------------------------------------------------------------- */

    // Modernizr.on('webp', function(result) {});




    /* Waypoints
     --------------------------------------------------------------------------------------- */

/*
    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
*/

    //Waypoint Instance - Add Class To Element
    //Template -> createWaypoint('id-name', '.class-name', 'class-to-be-added', offset-value, null, true);
    //Example -> createWaypoint('section-2', '.section-2-orange-dot', 'section-2-orange-dot-active', 500, null, true);

    //Waypoint Instance - Call Function
    //Template -> createWaypoint('id-name', null, null, 0, function-name, true);
    //Example -> createWaypoint('section-2', null, null, 0, test, true);




    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    jQuery(function() {
      jQuery('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = jQuery(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            jQuery('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		 /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    function wistiaLoad() {
      jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        console.log('wistia load:', textStatus); // Success
      });
    }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)







    /* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      // images
      jQuery('img').each(function () {
        if (jQuery(this).attr('data-src')) {
          var img = jQuery(this).data('src');
          jQuery(this).attr('src', img);
        }
      });

      // background images
      jQuery('div, section').each(function () {
        if (jQuery(this).attr('data-src')) {
          var backgroundImg = jQuery(this).data('src');
          jQuery(this).css('background-image', 'url(' + backgroundImg + ')');
        }
      });

      console.log('images loaded');
    }

    // createWaypoint('section-1', null, null, '100%', loadImages, false)




    /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
     --------------------------------------------------------------------------------------- */


  
$('.sec_two_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst: true,
  dots: true,
  responsive: [
    {
      breakpoint: 1066,
      settings: "unslick",
    }
   ]
});




$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:true,
	prevArrow:".arrow_left",
	nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
     }
   },
   {
      breakpoint: 1100,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:true,
     }
   }
	]
 });
 
 
 
 
 $('.accolade_slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
	arrows:true,
	prevArrow:".acco_arrow_left",
	nextArrow:".acco_arrow_right",
	responsive: [
    {
      breakpoint: 1150,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
     }
   }
	]
 });





	function checkWidthsp() {
    
    if (windowWidth < 1066) {
        
      
    	$('.sec_two_single_slide').on('click', function(e) {
	    	
	    	
	    	$(this).toggleClass('open');
    	  
    	});
    	   		
    		
    } 
    
    
    
  };
	

checkWidthsp();



// sidebar


$('.sidebar_wrapper ul.menu > li.menu-item-has-children > a').on('click', function(e) {
  
  $(this).next('ul.sub-menu').slideToggle();
  
 });
 
 
 
 // case results
 
 
 
 
 $('.custom_select').on('click', function(e) {
 
 	$('.custom_select_dropdown').slideToggle(300);
 	
 	$(this).addClass('open');
 	
 });
 
 
 $(document).click(function (e){

		var container = $(".custom_select.open");

		if (!container.is(e.target) && container.has(e.target).length === 0){

			$('.custom_select_dropdown').slideUp();
		
		}

	}); 
	
	
	$('.custom_select_dropdown ul li').on('click', function(e) {
	  
		var textUpdate = $(this).text();
		
		$('.custom_select_title span').replaceWith('<span>' + textUpdate + '</span>');
		
		
		
		var mydata = $(this).data('tag');
	
		
		$('.case_result_types').fadeOut(300).delay(500).fadeIn(400);
		
		$('.single_case_results').fadeOut(300);
		
		$('.' + mydata + '').delay(600).fadeIn(400);


	});
	
	
	
	
	$('.overlay_close').on('click', function(e) {
	  
		$('.cr_overlay').removeClass('overlay_open');
		
		$('body').css("overflow-y","auto");
	
	});
	
	
	
	$('.single_case_results').on('click', function(e) {
	  
		
		$(".overlay_data_clone").empty();
		
		$(this).find('.overlay_data').clone().appendTo('.overlay_data_clone').show();
		
		$('.cr_overlay').addClass('overlay_open');
		
		$('body').css("overflow-y","hidden");
	
	
	});


  
}); // document ready