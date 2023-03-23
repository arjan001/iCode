/*
Theme Name: venor JS
Theme URI: https://venor.lucian.host/
Description: Agency Theme
Version: 1.0
Author: Sweet Themes

*/



( function ( $ ) {
    'use strict';
    $( document ).ready( function () {

    	/*==============================
		Menu
		==============================*/
		$('.header__btn__venor').on('click', function() {
			$(this).toggleClass('header__btn--active');
			$('.header__menu__venor').toggleClass('header__menu__venor--active');
		});

		$('.header__search__venor .close, .header__action--search button').on('click', function() {
			$('.header__search__venor').toggleClass('header__search--active');
		});


		$(".header__menu__venor .header__nav > li > a").each(function (i){
          var link = $(this).attr('href');
          var currentLocation = window.location.href;
          if(link == currentLocation) {
              $(this).addClass('active');
          }
          
     
      });

		if (jQuery(window).width() > 768) {
		if (jQuery('.pace-cover').length) {
			Pace.on('done',function(){window.sr=ScrollReveal();

				sr.reveal('.slider-content h1.active',{scale:1,duration:500,delay:200,reset: true});
				sr.reveal('.slider-content h2.active',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.slider-content .slider-body.active',{scale:1,duration:500,delay:400,reset: true}); 
				sr.reveal('.slider-count-0 .slider-image',{scale:1,duration:500,delay:500,reset: true});
				sr.reveal('.slider-venor-section .header-social-share',{scale:1,duration:600,delay:500,reset: true});

				sr.reveal('h4.about-heading1-home',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('h3.about-heading2-home',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('h3.about-heading2-home span',{scale:1,duration:500,delay:450,reset: true});
				sr.reveal('.about-section p',{scale:1,duration:500,delay:500,reset: true});
				sr.reveal('.about-section ul',{scale:1,duration:500,delay:600,reset: true});
				sr.reveal('.about-section .btn.btn-style1',{scale:1,duration:500,delay:600,reset: true});
				sr.reveal('.exp-about',{scale:1,duration:500,delay:700,reset: true});

				sr.reveal('.services-section h3',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.description-services p',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.service-boxes-slider',{scale:1,duration:500,delay:300,reset: true});

				sr.reveal('h3.fun-facts-heading1',{scale:1,duration:500,delay:100,reset: true});
				sr.reveal('.fun-facts-section p',{scale:1,duration:500,delay:200,reset: true});
				sr.reveal('.row.fun-facts-timer .col-md-3:nth-child(1) .radial',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.row.fun-facts-timer .col-md-3:nth-child(2) .radial',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('.row.fun-facts-timer .col-md-3:nth-child(3) .radial',{scale:1,duration:500,delay:500,reset: true});
				sr.reveal('.row.fun-facts-timer .col-md-3:nth-child(4) .radial',{scale:1,duration:500,delay:600,reset: true});

				sr.reveal('.portfolio-section h4',{scale:1,duration:500,delay:200,reset: true});
				sr.reveal('.portfolio-section h3',{scale:1,duration:500,delay:250,reset: true});
				sr.reveal('.project-box-div > a',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.project-number',{scale:1,duration:500,delay:350,reset: true});
				sr.reveal('.project-category',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('.project-meta-title',{scale:1,duration:500,delay:450,reset: true});
				sr.reveal('.portfolio-section .project-button',{scale:1,duration:500,delay:500,reset: true});   
				sr.reveal('.portfolio-slider .owl-nav',{scale:1,duration:500,delay:600,reset: true});
				sr.reveal('.portfolio-slider .owl-dots',{scale:1,duration:500,delay:650,reset: true});

				sr.reveal('.testimonial-section .container > h3',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.testimonial-section .container > p',{scale:1,duration:500,delay:350,reset: true});
				sr.reveal('.testimonial-section-slider',{scale:1,duration:500,delay:400,reset: true});

				sr.reveal('h3.blog-section-subtitle',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.blog-section .blog-section-title',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('.blog-section .col-md-4:nth-child(1) article.blog-single-post',{scale:1,duration:500,delay:500,reset: true});
				sr.reveal('.blog-section .col-md-4:nth-child(2) article.blog-single-post',{scale:1,duration:500,delay:550,reset: true});
				sr.reveal('.blog-section .col-md-4:nth-child(3) article.blog-single-post',{scale:1,duration:500,delay:600,reset: true});
				sr.reveal('a.btn.btn-style1.btn-style12',{scale:1,duration:500,delay:700,reset: true});


				sr.reveal('.typed-section H4',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.typed-section a.btn.btn-style1',{scale:1,duration:500,delay:300,reset: true});
	

				sr.reveal('.banner-section h1.banner-title',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.banner-section p.banner-desc',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('.banner-section .header-social-share',{scale:1,duration:500,delay:500,reset: true});

				sr.reveal('.about-us p',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.about-us ul',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('.about-us .btn.btn-style1',{scale:1,duration:500,delay:600,reset: true});


				sr.reveal('li.shape.shape-1 img',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('li.shape.shape-2 img',{scale:1,duration:500,delay:600,reset: true});
				sr.reveal('li.shape.shape-3 img',{scale:1,duration:500,delay:800,reset: true});


				sr.reveal('.pricing-elements h2',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.pricing-elements p',{scale:1,duration:500,delay:400,reset: true});
				sr.reveal('.pricing-elements .col-md-4:nth-child(1)',{scale:1,duration:500,delay:500,reset: true});
				sr.reveal('.pricing-elements .col-md-4:nth-child(2)',{scale:1,duration:500,delay:550,reset: true});
				sr.reveal('.pricing-elements .col-md-4:nth-child(3)',{scale:1,duration:500,delay:600,reset: true});



				sr.reveal('.members-section h3.members-heading1',{scale:1,duration:500,delay:300,reset: true});
				sr.reveal('.members-section .venor-team',{scale:1,duration:500,delay:400,reset: true});

				sr.reveal('.clients-slider',{scale:1,duration:500,delay:50,reset: true});

				
			});
		}
		}

		if (jQuery(window).width() > 768) {
			$('[data-tooltip-tit]').hover(function(){$('<div class="div-tooltip-tit"></div>').text($(this).attr('data-tooltip-tit')).appendTo('.avo-tooltip').fadeIn('slow')},function(){$('.div-tooltip-tit').remove()}).mousemove(function(e){$('.div-tooltip-tit').css({top:e.clientY+10,left:e.clientX+20})});
			$('[data-tooltip-sub]').hover(function(){$('<div class="div-tooltip-sub"></div>').text($(this).attr('data-tooltip-sub')).appendTo('.avo-tooltip').fadeIn('slow')},function(){$('.div-tooltip-sub').remove()}).mousemove(function(e){$('.div-tooltip-sub').css({top:e.clientY+60,left:e.clientX+20})});
		}



		/*==============================
		Multi level dropdowns
		==============================*/
		$('ul.dropdown-menu [data-toggle="dropdown"]').on('click', function(event) {
			event.preventDefault();
			event.stopPropagation();

			$(this).siblings().toggleClass('show');
		});

		$(document).on('click', function (e) {
			$('.dropdown-menu').removeClass('show');
		});

    	
    	/* HOME SLIDE */
    	$(window).on("load", function() {
		    $('body:not(.rtl) .slider-venor').owlCarousel({
			 	loop: false,
				rewind: true,
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				mouseDrag: true,
				touchDrag: true,
			    margin: 10,
			    lazyLoad: true,
			    responsiveClass: true,
			    smartSpeed: 500,
			    autoplayTimeout:8000,
			    dots: false,
			   	navText : ["<i class='fas fa-angle-double-left'></i>","<i class='fas fa-angle-double-right'></i>"],
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:1,
			            nav:true,
			        },
			        1000:{
			            items:1,
			            nav:true,
			        }
	    		}
		    });
	    });

	    /* HOME SLIDE */
    	$(window).on("load", function() {
		    $('body.rtl .slider-venor').owlCarousel({
			 	loop: false,
				rewind: true,
			 	rtl:true,
			    margin: 10,
			    lazyLoad: true,
			    responsiveClass: true,
			    smartSpeed: 500,
			    autoplayTimeout:8000,
			    dots: false,
			    navText : ["<i class='fas fa-angle-double-left'></i>","<i class='fas fa-angle-double-right'></i>"],
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:1,
			            nav:true
			        },
			        1000:{
			            items:1,
			            nav:true,
			        }
	    		}
		    });
	    });

	    /* HOME ABOUT PARALAX */
	    if (jQuery(window).width() > 768) {
			let img1 = document.getElementsByClassName('thumparallax');
			new simpleParallax(img1, {
			  	delay: 2
			});

			let img2 = document.getElementsByClassName('thumparallax-down');
			new simpleParallax(img2, {
			  	delay: 2,
			  	orientation: 'down'
			});
		}

		/* FUN FACTS COUNTS */
		if (jQuery('#fun-facts').length) {
			function isScrolledIntoView(el) {
			    var elemTop = el.getBoundingClientRect().top;
			    var elemBottom = el.getBoundingClientRect().bottom;

			    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
			    return isVisible;
			}

			$(window).on('scroll', function(e) {
			  if (isScrolledIntoView(document.getElementById('fun-facts'))) {
			    $('.timer').countTo();
			    $(window).off(e);
			  }
			});
		}

		/* SERVICES BOXES */
		$('body:not(.rtl) .service-boxes-slider').owlCarousel({
			autoplay:false,
			loop:false,
		    smartSpeed:500,
		    autoplayTimeout:6000,
		    margin: 10,
		    nav: true,
		    arrows: true,
		    dots: true,
		    responsiveClass:true,
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
		});




		$('.rtl .service-boxes-slider').owlCarousel({
			rtl:true,
			loop:false,
			autoplay:true,
		    smartSpeed:500,
		    autoplayTimeout:6000,
		    margin: 10,
		    nav: true,
		    arrows: true,
		    dots: true,
		    responsiveClass:true,
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
		});

		$('body:not(.rtl) .portfolio-slider').owlCarousel({
			autoplay:false,
			loop:false,
		    smartSpeed:500,
		    autoplayTimeout:6000,
		    margin: 10,
		    nav: true,
		    arrows: true,
		    dots: true,
		    responsiveClass:true,
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
		});

		$('.rtl .portfolio-slider').owlCarousel({
			rtl:true,
			autoplay:false,
			loop:false,
		    smartSpeed:500,
		    autoplayTimeout:6000,
		    margin: 10,
		    nav: true,
		    arrows: true,
		    dots: true,
		    responsiveClass:true,
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
		});

		/* TESTIMONIAL */
		$('body:not(.rtl) .testimonial-section-slider').owlCarousel({
			loop:true,
			autoplay:true,
		    smartSpeed: 500,
		    autoplayTimeout:4000,
		    nav: false,
		    arrows: false,
		    dots: false,
		    loop:true,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:2
		        }
		    }
		});

		$('.rtl .testimonial-section-slider').owlCarousel({
			rtl:true,
			autoplay:true,
		    smartSpeed: 500,
		    autoplayTimeout:4000,
		    nav: false,
		    arrows: false,
		    dots: false,
		    loop:true,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:2
		        }
		    }
		});


     /* SIDEBAR */
    jQuery('.header-burger').on( "click", function() {
        jQuery('body').toggleClass('menu-open');
        jQuery(this).toggleClass('open-menu');
        jQuery(this).parent().find('#navbar').toggleClass('hidden');
        jQuery('.fixed-sidebar-menu-overlay').toggleClass('visible');
    });
    jQuery('.fixed-sidebar-menu-overlay').on( "click", function() {
        jQuery('body').removeClass('menu-open');
        jQuery(this).removeClass('visible');
        jQuery('.side_panel_sidebar').removeClass('open-menu');
    });    

    jQuery(document).on("keyup", function(e) {
         if (e.keyCode == 27) {
            jQuery('body').removeClass('menu-open');
            jQuery('.fixed-sidebar-menu-overlay').removeClass('visible');
            jQuery('.side_panel_sidebar').removeClass('open-menu');
        }
    });

	  /* back to top */
	  var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);	
		var offset = 50;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});				
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
		
		/* CLIENTS */
		$('body:not(.rtl) .clients-slider').owlCarousel({
			loop:true,
			lazyLoad: true,
			autoplay:true,
		    smartSpeed: 500,
		    autoplayTimeout:4000,
		    margin: 15,
		    nav: false,
		    arrows: false,
		    dots: false,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		});





		$('.rtl .clients-slider').owlCarousel({
			rtl:true,
			loop:true,
			lazyLoad: true,
			autoplay:true,
		    smartSpeed: 500,
		    autoplayTimeout:4000,
		    margin: 15,
		    nav: false,
		    arrows: false,
		    dots: false,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		});


      if (jQuery('.gallery').length) {
	      jQuery('.gallery').magnificPopup({
	          delegate: 'a',
	          type: 'image',
	          gallery: {
	              enabled: true
	          },
	          // other options
	      });
	    }

	    if (jQuery('.popup-vimeo-video').length) {
		    $(".popup-vimeo-video").magnificPopup({
	        type:"iframe",
	        removalDelay: 160,
	        preloader: false,
	        fixedContentPos: false
	      });
	    }


      jQuery(window).on("scroll", function() {
          (jQuery(window).scrollTop() > 250 && jQuery(window).width() > 1200 && (
              jQuery("body").addClass("sticky"), 
              jQuery(".header-burger .burger").addClass("animated fadeInDown"),
              jQuery(".header__content__venor").addClass("animated fadeInDown"
          )),           
          jQuery(window).scrollTop() < 250 && (jQuery("body").removeClass("sticky"), 
          	jQuery(".header-burger .burger").removeClass("animated fadeInDown"),
      	   jQuery(".header__content__venor").removeClass("animated fadeInDown")))
     
      }), jQuery(window).resize(function() {
          jQuery(window).width() < 1200 && jQuery("body").removeClass("sticky") });
  

    })
} ( jQuery ) )


!function(window){
  var $q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      }
    , addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
          for (var i = 0; i < images.length; i++) {
            if (elementInViewport(images[i])) {
              loadImage(images[i], function () {
                images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

}(this);

		

function BackgroundNode({node, loadedClassName}) {
	let src = node.getAttribute('data-background-image-url');
	let show = (onComplete) => {
		requestAnimationFrame(() => {
			node.style.backgroundImage = `url(${src})`
			node.classList.add(loadedClassName);
			onComplete();
		})
	}

	return {
		node,

		// onComplete is called after the image is done loading.
		load: (onComplete) => {
			let img = new Image();
			img.onload = show(onComplete);
			img.src = src;
		}
	}
}

let defaultOptions = {
	selector: '[data-background-image-url]',
	loadedClassName: 'loaded'
}

function BackgroundLazyLoader({selector, loadedClassName} = defaultOptions) {
	let nodes = [].slice.apply(document.querySelectorAll(selector))
		.map(node => new BackgroundNode({node, loadedClassName}));

	let callback = (entries, observer) => {
		entries.forEach(({target, isIntersecting}) => {
			if (!isIntersecting) {
				return;
			}

			let obj = nodes.find(it => it.node.isSameNode(target));
			
			if (obj) {
				obj.load(() => {
					// Unobserve the node:
					observer.unobserve(target);
					// Remove this node from our list:
					nodes = nodes.filter(n => !n.node.isSameNode(target));
					
					// If there are no remaining unloaded nodes,
					// disconnect the observer since we don't need it anymore.
					if (!nodes.length) {
						observer.disconnect();
					}
				});
			}
		})
	};
	
	let observer = new IntersectionObserver(callback);
	nodes.forEach(node => observer.observe(node.node));
};

BackgroundLazyLoader();



