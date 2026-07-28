(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 

	/* Preloader Effect */
	$window.on('load', function(){
		$(".preloader").fadeOut(600);
	});

	/* Sticky Header with Hide/Show on Scroll */
	var lastScrollTop = 0;
	var scrollThreshold = 100; // Scroll threshold to activate sticky
	
		$window.on('resize', function(){
		if($('header .header-sticky').length){
			$("header.main-header").css("height", $('header .header-sticky').outerHeight());
		}
		});

		function setHeaderHeight(){
		if($('header .header-sticky').length){
	 		$("header.main-header").css("height", $('header .header-sticky').outerHeight());
		}
		}	
	
		$(window).on("scroll", function() {
		var scrollTop = $(window).scrollTop();
		var headerSticky = $("header .header-sticky");
		
		if(headerSticky.length){
			setHeaderHeight();
			
			// Make header sticky when scrolled past threshold
			if(scrollTop > scrollThreshold){
				headerSticky.addClass("active");
			} else {
				headerSticky.removeClass("active");
				headerSticky.removeClass("hide");
				lastScrollTop = 0;
				return;
			}
			
			// Hide/Show based on scroll direction
			if(scrollTop > lastScrollTop && scrollTop > scrollThreshold){
				// Scrolling down - hide header
				headerSticky.addClass("hide");
			} else {
				// Scrolling up - show header
				headerSticky.removeClass("hide");
			}
			
			lastScrollTop = scrollTop;
		}
	});	
	
	/* Slick Menu JS */
	$('#menu').slicknav({
		label : '',
		prependTo : '.responsive-menu'
	});

	if($("a[href='#top']").length){
		$("a[href='#top']").click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}

	/* Hero Slider Layout JS */
	const hero_slider_layout = new Swiper('.hero-slider-layout .swiper', {
		slidesPerView : 1,
		speed: 1000,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 4000,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	/* testimonial Slider JS */
	if ($('.testimonial-slider').length) {
		const testimonialSection = document.querySelector('.our-testimonial');
		let testimonialVideosEnabled = false;

		function loadLazyVideo(video) {
			if (!video || video.dataset.loaded === 'true') {
				return;
			}

			const source = video.querySelector('source[data-src]');
			if (!source) {
				return;
			}

			source.src = source.dataset.src;
			video.load();
			video.dataset.loaded = 'true';
		}

		function getTestimonialSlidesPerView() {
			const breakpoint = window.innerWidth;

			if (breakpoint >= 991) {
				return 3;
			}

			if (breakpoint >= 768) {
				return 2;
			}

			return 1;
		}

		function playVisibleVideos(swiper) {
			if (!testimonialVideosEnabled) {
				return;
			}

			const currentSlidesPerView = getTestimonialSlidesPerView();
			const visibleSlides = [];

			for (let i = 0; i < currentSlidesPerView; i++) {
				const slideIndex = swiper.activeIndex + i;
				if (swiper.slides[slideIndex]) {
					visibleSlides.push(swiper.slides[slideIndex]);
				}
			}

			swiper.el.querySelectorAll('video').forEach(function(video) {
				const slide = video.closest('.swiper-slide');
				const isVisible = slide && visibleSlides.indexOf(slide) !== -1;

				if (!isVisible) {
					video.pause();
					return;
				}

				loadLazyVideo(video);
				video.muted = true;

				const playPromise = video.play();
				if (playPromise !== undefined) {
					playPromise.catch(function() {});
				}
			});
		}

		function enableTestimonialVideos(swiper) {
			if (testimonialVideosEnabled) {
				return;
			}

			testimonialVideosEnabled = true;
			playVisibleVideos(swiper);
		}

		const testimonial_slider = new Swiper('.testimonial-slider .swiper', {
			slidesPerView : 1,
			speed: 1000,
			spaceBetween: 20,
			loop: true,
			navigation: {
				nextEl: '.testimonial-button-next',
				prevEl: '.testimonial-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			breakpoints: {
				768:{
				  	slidesPerView: 2,
				},
				991:{
				  	slidesPerView: 3,
				}
			},
			simulateTouch: true,
			touchStartPreventDefault: false,
			noSwiping: true,
			noSwipingClass: 'video-wrapper',
			on: {
				init: function() {
					playVisibleVideos(this);
				},
				slideChange: function() {
					playVisibleVideos(this);
				},
				resize: function() {
					playVisibleVideos(this);
				}
			}
		});

		if (testimonialSection && 'IntersectionObserver' in window) {
			const testimonialObserver = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						enableTestimonialVideos(testimonial_slider);
						testimonialObserver.disconnect();
					}
				});
			}, { rootMargin: '300px 0px' });

			testimonialObserver.observe(testimonialSection);
		} else {
			enableTestimonialVideos(testimonial_slider);
		}
	}

	/* Skill Bar */
	if ($('.skills-progress-bar').length) {
		$('.skills-progress-bar').waypoint(function() {
			$('.skillbar').each(function() {
				$(this).find('.count-bar').animate({
				width:$(this).attr('data-percent')
				},2000);
			});
		},{
			offset: '50%'
		});
	}

	/* Youtube Background Video JS */
	if ($('#herovideo').length) {
		var myPlayer = $("#herovideo").YTPlayer();
	}

	/* Init Counter */
	if ($('.counter').length) {
		$('.counter').counterUp({ delay: 6, time: 3000 });
	}

	/* Image Reveal Animation */
	if ($('.reveal').length) {
        gsap.registerPlugin(ScrollTrigger);
        let revealContainers = document.querySelectorAll(".reveal");
        revealContainers.forEach((container) => {
            let image = container.querySelector("img");
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "play none none none"
                }
            });
            tl.set(container, {
                autoAlpha: 1
            });
            tl.from(container, 1, {
                xPercent: -100,
                ease: Power2.out
            });
            tl.from(image, 1, {
                xPercent: 100,
                scale: 1,
                delay: -1,
                ease: Power2.out
            });
        });
    }

	/* Text Effect Animation */
	if ($('.text-anime-style-1').length) {
		let staggerAmount 	= 0.05,
			translateXValue = 0,
			delayValue 		= 0.5,
		   animatedTextElements = document.querySelectorAll('.text-anime-style-1');
		
		animatedTextElements.forEach((element) => {
			let animationSplitText = new SplitText(element, { type: "chars, words" });
				gsap.from(animationSplitText.words, {
				duration: 1,
				delay: delayValue,
				x: 20,
				autoAlpha: 0,
				stagger: staggerAmount,
				scrollTrigger: { trigger: element, start: "top 85%" },
				});
		});		
	}
	
	if ($('.text-anime-style-2').length) {				
		let	 staggerAmount 		= 0.03,
			 translateXValue	= 20,
			 delayValue 		= 0.1,
			 easeType 			= "power2.out",
			 animatedTextElements = document.querySelectorAll('.text-anime-style-2');
		
		animatedTextElements.forEach((element) => {
			let animationSplitText = new SplitText(element, { type: "chars, words" });
				gsap.from(animationSplitText.chars, {
					duration: 1,
					delay: delayValue,
					x: translateXValue,
					autoAlpha: 0,
					stagger: staggerAmount,
					ease: easeType,
					scrollTrigger: { trigger: element, start: "top 85%"},
				});
		});		
	}
	
	if ($('.text-anime-style-3').length) {		
		let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');
		
		 animatedTextElements.forEach((element) => {
			//Reset if needed
			if (element.animation) {
				element.animation.progress(1).kill();
				element.split.revert();
			}

			element.split = new SplitText(element, {
				type: "lines,words,chars",
				linesClass: "split-line",
			});
			gsap.set(element, { perspective: 400 });

			gsap.set(element.split.chars, {
				opacity: 0,
				x: "50",
			});

			element.animation = gsap.to(element.split.chars, {
				scrollTrigger: { trigger: element,	start: "top 90%" },
				x: "0",
				y: "0",
				rotateX: "0",
				opacity: 1,
				duration: 1,
				ease: Back.easeOut,
				stagger: 0.02,
			});
		});		
	}

	/* Parallaxie js */
	var $parallaxie = $('.parallaxie');
	if($parallaxie.length && ($window.width() > 991))
	{
		if ($window.width() > 768) {
			$parallaxie.parallaxie({
				speed: 0.55,
				offset: 0,
			});
		}
	}

	/* Contact form validation */
	var $contactform = $("#contactForm");
	$contactform.validator({focus: false}).on("submit", function (event) {
		if (!event.isDefaultPrevented()) {
			event.preventDefault();
			submitForm();
		}
	});

	function submitForm(){
		/* Initiate Variables With Form Content*/
		var name = $("#fullname").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var message = $("#msg").val();

		// Get submit button
		var $submitBtn = $contactform.find('button[type="submit"]');
		
		// Store original text if not already stored
		if (!$submitBtn.data('original-text')) {
			$submitBtn.data('original-text', $submitBtn.text().trim());
		}
		var originalText = $submitBtn.data('original-text');
		
		// Show loading state
		showButtonLoader($submitBtn);

		// Get CSRF token from meta tag
		var token = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			type: "POST",
			url: "/contact-submit",
			data: {
				_token: token,
				name: name,
				email: email,
				phone: phone,
				msg: message
			},
			success : function(response){
				hideButtonLoader($submitBtn, originalText);
				if (response.success){
					formSuccess();
				} else {
					submitMSG(false, response.message || "Failed to send message. Please try again.");
				}
			},
			error: function(xhr) {
				hideButtonLoader($submitBtn, originalText);
				var errorMsg = "Failed to send message. Please try again.";
				
				// Handle rate limiting (429 status)
				if (xhr.status === 429) {
					if (xhr.responseJSON && xhr.responseJSON.message) {
						errorMsg = xhr.responseJSON.message;
					} else {
						errorMsg = "Too many requests. Please wait a minute before submitting again.";
					}
				} else if (xhr.responseJSON && xhr.responseJSON.message) {
					errorMsg = xhr.responseJSON.message;
				}
				
				submitMSG(false, errorMsg);
			}
		});
	}

	function showButtonLoader($btn){
		$btn.prop('disabled', true);
		$btn.text('Sending...');
	}

	function hideButtonLoader($btn, originalText){
		$btn.prop('disabled', false);
		$btn.text(originalText);
	}

	function formSuccess(){
		$contactform[0].reset();
		submitMSG(true, "Message Sent Successfully!")
	}

	function submitMSG(valid, msg){
		var $msgSubmit = $("#msgSubmit");
		
		// Clear any existing timeout
		if ($msgSubmit.data('timeout')) {
			clearTimeout($msgSubmit.data('timeout'));
		}
		
		if(valid){
			var msgClasses = "h3 text-success";
		} else {
			var msgClasses = "h3 text-danger";
		}
		
		// Remove hidden class and show message
		$msgSubmit.removeClass("hidden").removeClass().addClass(msgClasses).text(msg);
		
		// Auto hide message after 5 seconds
		var timeout = setTimeout(function(){
			$msgSubmit.fadeOut(500, function(){
				$(this).addClass("hidden").text("").show();
			});
		}, 5000);
		
		// Store timeout reference
		$msgSubmit.data('timeout', timeout);
	}
	/* Contact form validation end */

	/* Appointment form validation */
	var $appointmentForm = $("#appointmentForm");
	$appointmentForm.validator({focus: false}).on("submit", function (event) {
		if (!event.isDefaultPrevented()) {
			event.preventDefault();
			submitappointmentForm();
		}
	});

	function submitappointmentForm(){
		/* Initiate Variables With Form Content*/
		var name = $("#name").val();
		var father_name = $("#father_name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var age = $("#age").val();
		var date = $("#date").val();
		var services = $("#services").val();
		var reason = $("#reason").val();

		// Get submit button
		var $submitBtn = $appointmentForm.find('button[type="submit"]');
		
		// Store original text if not already stored
		if (!$submitBtn.data('original-text')) {
			$submitBtn.data('original-text', $submitBtn.text().trim());
		}
		var originalText = $submitBtn.data('original-text');
		
		// Show loading state
		showAppointmentButtonLoader($submitBtn);

		// Get CSRF token from meta tag
		var token = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			type: "POST",
			url: "/appointment-submit",
			data: {
				_token: token,
				name: name,
				father_name: father_name,
				email: email,
				phone: phone,
				age: age,
				date: date,
				services: services,
				reason: reason
			},
			success : function(response){
				hideAppointmentButtonLoader($submitBtn, originalText);
				if (response.success){
					appointmentformSuccess();
				} else {
					appointmentsubmitMSG(false, response.message || "Failed to book appointment. Please try again.");
				}
			},
			error: function(xhr) {
				hideAppointmentButtonLoader($submitBtn, originalText);
				var errorMsg = "Failed to book appointment. Please try again.";
				
				// Handle rate limiting (429 status)
				if (xhr.status === 429) {
					if (xhr.responseJSON && xhr.responseJSON.message) {
						errorMsg = xhr.responseJSON.message;
					} else {
						errorMsg = "Too many requests. Please wait a minute before submitting again.";
					}
				} else if (xhr.responseJSON && xhr.responseJSON.message) {
					errorMsg = xhr.responseJSON.message;
				}
				
				appointmentsubmitMSG(false, errorMsg);
			}
		});
	}

	function showAppointmentButtonLoader($btn){
		$btn.prop('disabled', true);
		$btn.text('Sending...');
	}

	function hideAppointmentButtonLoader($btn, originalText){
		$btn.prop('disabled', false);
		$btn.text(originalText);
	}

	function appointmentformSuccess(){
		$appointmentForm[0].reset();
		appointmentsubmitMSG(true, "Appointment booked successfully!")
	}

	function appointmentsubmitMSG(valid, msg){
		var $msgSubmit = $("#msgSubmit");
		
		// Clear any existing timeout
		if ($msgSubmit.data('timeout')) {
			clearTimeout($msgSubmit.data('timeout'));
		}
		
		if(valid){
			var msgClasses = "h3 text-success";
		} else {
			var msgClasses = "h3 text-danger";
		}
		
		// Remove hidden class and show message
		$msgSubmit.removeClass("hidden").removeClass().addClass(msgClasses).text(msg);
		
		// Auto hide message after 5 seconds
		var timeout = setTimeout(function(){
			$msgSubmit.fadeOut(500, function(){
				$(this).addClass("hidden").text("").show();
			});
		}, 5000);
		
		// Store timeout reference
		$msgSubmit.data('timeout', timeout);
	}
	/* Appointment form validation end */

	/* Animated Wow Js */	
	new WOW().init();

	/* Popup Video */
	if ($('.popup-video').length) {
		$('.popup-video').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: true
		});
	}
	
})(jQuery);