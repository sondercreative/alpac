//@prepros-prepend vendor/modernizr-3.8.0.min.js
//@prepros-prepend vendor/jquery-3.4.1.min.js
//@prepros-prepend vendor/featherlight.js
//@prepros-prepend plugins.js









(function ($, root, undefined) {
	$(function () {
		"use strict"; // DOM ready, take it away
		


			 $(".accordion").on("click", ".accordion-header", function() {
			 	$(this).toggleClass("active").next().slideToggle('fast');
			 });
              
			 $(".tabList").simpleTabs();

	    // Hide Header on on scroll down

	    (function($){
	    	$(function(){  

		    	var didScroll = false;
		        var scroll = $(document).scrollTop();
		        var header = $('.header');
		        var headerHeight = header.outerHeight(true);

		    	function scrolldeely(){

					var scrolled = $(document).scrollTop();
					var heightPlus = headerHeight + 100;

					if (scrolled < 2){
						header.removeClass('slideUp');
						$('.scrollMore').removeClass('hide');
					} else {
						header.addClass('slideUp');
						$('.scrollMore').addClass('hide');
					}

		            if ((scrolled > heightPlus) && (scrolled > scroll)){
		            	header.addClass('off-canvas');
		            } else {
		            	header.removeClass('off-canvas')
		            }             

		          	scroll = $(document).scrollTop();

		    	}

		    	window.onscroll = doThisStuffOnScroll;

		    	function doThisStuffOnScroll() {
		    	    didScroll = true;
		    	}

		    	setInterval(function() {
		    	    if(didScroll) {
		    	        didScroll = false;
		    	        scrolldeely();
		    	     
		    	    }
		    	}, 100);
		       });
	    })(jQuery); 
	    // END Hide Header on on scroll down








	    function openMenu() {
			$('.slideNav').addClass('open');
			$('.menuActivator').addClass('open');
			$('html').addClass('menuOpen');
		}

	    function closeMenu() {
			$('.slideNav').removeClass('open');
			$('.menuActivator').removeClass('open');
			$('html').removeClass('menuOpen');
			$('.hamburger').removeClass("is-active");
		}

	  	//-- Mobile Nav Activator --//

		$('.menuActivator').click(function(){
			if(!$(this).hasClass("open")){
				openMenu();
			}else{
				closeMenu();
			}
		});

		$('main').click(function(){
			if($('.menuActivator').hasClass("open")){
				closeMenu();
			}
		});




		$(document).ready(function(){
		    $(".selectTabs select").change(function(){
		        $(this).find("option:selected").each(function(){
		            var optionValue = $(this).attr("value");
		            if(optionValue){
		                $(".box").not("." + optionValue).hide();
		                $("." + optionValue).show();
		            } else{
		                $(".box").hide();
		            }
		        });
		    }).change();
		});





	  	//-- Mobile sub nav toggler --//

		$('.subToggle').click(function(){

			if(!$(this).hasClass("toggled")){
				$(this).addClass('toggled');
				var $sub = $(this).siblings('.subNav');
				var subHeight = $sub.children('ul').outerHeight(true);

				$sub.stop().animate({
					height:subHeight
				},150,function(){
					$(this).css('height','auto');	
				});
			}else{
				$(this).removeClass('toggled');
				var $sub = $(this).siblings('.subNav');
				$sub.stop().animate({
					height:0
				},150);
			}

		});


		$(document).ready(function() {
				$('li.hasChildren.active').children(".subToggle").addClass('toggled');
				$('li.hasChildren.active').children(".subNav").css('height','auto');	
		});



		var $dropdown = $('.dropdown');
		$dropdown.click(function(){
			$(this).toggleClass('is-active');
		});

		$dropdown.find('.tabList a').click(function(event){
			var $selectCont = $(this).text();
			$(this).closest('.dropdown').find('.dropdown-trigger button span').html( $selectCont );
			console.log($selectCont);
		});



		//-- Hamburger Menu --//

	 	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

	    var hamburgers = document.querySelectorAll(".hamburger");
	    if (hamburgers.length > 0) {
	      forEach(hamburgers, function(hamburger) {
	        hamburger.addEventListener("click", function() {
	          this.classList.toggle("is-active");
	        }, false);
	      });
	    }



	});
})(jQuery, this);
