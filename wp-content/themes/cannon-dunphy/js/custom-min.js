jQuery(document).ready(function($){function e(){i>1220&&$("nav ul.menu > li").append('<div class="current_wrapper"><div class="current"><div class="current_inner"></div></div></div>'),i<1220&&($(".mobile_menu").on("click",function(e){$("nav").slideToggle(),$(".close_x").addClass("fade")}),$(".close_x").on("click",function(e){$("nav").slideToggle(),$(".close_x").removeClass("fade")}),$("nav ul.sub-menu").wrapInner('<div class="sub_menu_wrap"></div>'),$("nav ul.menu > li > ul.sub-menu").addClass("close"),$("nav ul.menu > li > a").on("click",function(e){$(this).parent().toggleClass("open-parent"),$(this).next("ul.sub-menu").toggleClass("open"),$(this).next("ul.sub-menu").toggleClass("close");var s=$(this).next("ul.sub-menu").find(".sub_menu_wrap").height();$(this).next("ul.sub-menu").css("height",s)}))}function s(){jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js",function(e,s,o){console.log("wistia load:",s)})}function o(){jQuery("img").each(function(){if(jQuery(this).attr("data-src")){var e=jQuery(this).data("src");jQuery(this).attr("src",e)}}),jQuery("div, section").each(function(){if(jQuery(this).attr("data-src")){var e=jQuery(this).data("src");jQuery(this).css("background-image","url("+e+")")}}),console.log("images loaded")}function t(){i<1066&&$(".sec_two_single_slide").on("click",function(e){$(this).toggleClass("open")})}var i=$(window).width();e(),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},1e3),!1}})}),$(".sec_two_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,dots:!0,responsive:[{breakpoint:1066,settings:"unslick"}]}),$(".sec_three_slider").slick({infinite:!0,slidesToShow:6,slidesToScroll:6,arrows:!0,prevArrow:".arrow_left",nextArrow:".arrow_right",responsive:[{breakpoint:1450,settings:{slidesToShow:5,slidesToScroll:5}},{breakpoint:1100,settings:{slidesToShow:3,slidesToScroll:3,dots:!0}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,dots:!0}}]}),$(".accolade_slider").slick({infinite:!0,slidesToShow:4,slidesToScroll:4,arrows:!0,prevArrow:".acco_arrow_left",nextArrow:".acco_arrow_right",responsive:[{breakpoint:1150,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1}}]}),t(),$(".sidebar_wrapper ul.menu > li.menu-item-has-children > a").on("click",function(e){$(this).next("ul.sub-menu").slideToggle()}),$(".custom_select").on("click",function(e){$(".custom_select_dropdown").slideToggle(300),$(this).addClass("open")}),$(document).click(function(e){var s=$(".custom_select.open");s.is(e.target)||0!==s.has(e.target).length||$(".custom_select_dropdown").slideUp()}),$(".custom_select_dropdown ul li").on("click",function(e){var s=$(this).text();$(".custom_select_title span").replaceWith("<span>"+s+"</span>");var o=$(this).data("tag");$(".case_result_types").fadeOut(300).delay(500).fadeIn(400),$(".single_case_results").fadeOut(300),$("."+o).delay(600).fadeIn(400)}),$(".overlay_close").on("click",function(e){$(".cr_overlay").removeClass("overlay_open"),$("body").css("overflow-y","auto")}),$(".single_case_results").on("click",function(e){$(".overlay_data_clone").empty(),$(this).find(".overlay_data").clone().appendTo(".overlay_data_clone").show(),$(".cr_overlay").addClass("overlay_open"),$("body").css("overflow-y","hidden")})});