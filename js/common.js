$(document).ready(function() {

	//Цели для Яндекс.Метрики и Google Analytics
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	}));
	new WOW().init();
	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};


	$(".fancybox").click(function() {
		$(".fancybox").fancybox({
			maxWidth: 800,
			maxHeight: 600,
			fitToView: false,
			width: document.documentElement.clientWidth > 700 ? '80%' : '90%',
			height: document.documentElement.clientWidth > 700 ? '80%' : '50%',
			autoSize: false,
			closeClick: false,
			openEffect: 'fade',
			closeEffect: 'elastic',
			helpers: {
				title: {
					type: 'inside'
				}
			}
		});
	});
	//$('#app').on('click',function() {
    //
	//});
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("#application").submit(function() {
		var data = {
			name : document.querySelector('input[name="name"]').value,
			telephone : document.querySelector('input[name="telephone"]').value,
		}
		$.ajax({
			type: "POST",
			url: "wp-content/themes/kazyna_gold/mail.php",
			data: data,
		}).done(function( value ) {
			$('#mail')[0].innerHTML = value;
			$('#mail').removeClass('not_visible_mail');
			setTimeout(function() {
				$("#application").trigger("reset");
			}, 1000);
			setTimeout(function() {
				$('#mail')[0].setAttribute('style', 'opacity: 0;');
				setTimeout(function() {
					$('#mail').addClass('not_visible_mail');
				}, 500);
			}, 5000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

	function loadApp() {

		$('#canvas').fadeIn(1000);

		var flipbook = $('.magazine');

		// Check if the CSS was already loaded

		if (flipbook.width()==0 || flipbook.height()==0) {
			setTimeout(loadApp, 10);
			return;
		}

		// Create the flipbook

		flipbook.turn({

			// Magazine width

			width: 800,

			// Magazine height

			height: 400,

			// Duration in millisecond

			duration: 1000,

			// Hardware acceleration

			acceleration: !isChrome(),

			// Enables gradients

			gradients: false,

			// Auto center this flipbook

			autoCenter: false,

			// Elevation from the edge of the flipbook when turning a page

			elevation: 50,

			// The number of pages

			pages: 12,

			// Events

			when: {
				turning: function(event, page, view) {

					var book = $(this),
						currentPage = book.turn('page'),
						pages = book.turn('pages');

					// Update the current URI

					Hash.go('page/' + page).update();

					// Show and hide navigation buttons

					//disableControls(page);


					$('.thumbnails .page-'+currentPage).
					parent().
					removeClass('current');

					$('.thumbnails .page-'+page).
					parent().
					addClass('current');



				},

				turned: function(event, page, view) {

					//disableControls(page);

					//$(this).turn('center');

					if (page==1) {
						$(this).turn('peel', 'br');
					}

				},

				missing: function (event, pages) {

					// Add pages that aren't in the magazine

					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], $(this));

				}
			}

		});

		// Zoom.js

		//	$('.magazine-viewport').zoom({
		//		flipbook: $('.magazine'),
		//
		//		max: function() {
		//
		//			return largeMagazineWidth()/$('.magazine').width();
		//
		//		},
		//
		//		when: {
		//
		//			swipeLeft: function() {
		//
		//				$(this).zoom('flipbook').turn('next');
		//
		//			},
		//
		//			swipeRight: function() {
		//
		//				$(this).zoom('flipbook').turn('previous');
		//
		//			},
		//
		//			resize: function(event, scale, page, pageElement) {
		//
		//				if (scale==1)
		//					loadSmallPage(page, pageElement);
		//				else
		//					loadLargePage(page, pageElement);
		//
		//			},
		//
		//			zoomIn: function () {
		//
		//				$('.thumbnails').hide();
		//				$('.made').hide();
		//				$('.magazine').removeClass('animated').addClass('zoom-in');
		//				$('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');
		//
		//				if (!window.escTip && !$.isTouch) {
		//					escTip = true;
		//
		//					$('<div />', {'class': 'exit-message'}).
		//						html('<div>Press ESC to exit</div>').
		//							appendTo($('body')).
		//							delay(2000).
		//							animate({opacity:0}, 500, function() {
		//								$(this).remove();
		//							});
		//				}
		//			},
		//
		//			zoomOut: function () {
		//
		//				$('.exit-message').hide();
		//				$('.thumbnails').fadeIn();
		//				$('.made').fadeIn();
		//				$('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');
		//
		//				setTimeout(function(){
		//					$('.magazine').addClass('animated').removeClass('zoom-in');
		//					resizeViewport();
		//				}, 0);
		//
		//			}
		//		}
		//	});

		// Zoom event

		//	if ($.isTouch)
		//		$('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
		//	else
		//		$('.magazine-viewport').bind('zoom.tap', zoomTo);


		// Using arrow keys to turn the page

		$(document).keydown(function(e){

			var previous = 37, next = 39, esc = 27;

			switch (e.keyCode) {
				case previous:

					// left arrow
					$('.magazine').turn('previous');
					e.preventDefault();

					break;
				case next:

					//right arrow
					$('.magazine').turn('next');
					e.preventDefault();

					break;
				case esc:

					$('.magazine-viewport').zoom('zoomOut');
					e.preventDefault();

					break;
			}
		});

		// URIs - Format #/page/1

		Hash.on('^page\/([0-9]*)$', {
			yep: function(path, parts) {
				var page = parts[1];

				if (page!==undefined) {
					if ($('.magazine').turn('is'))
						$('.magazine').turn('page', page);
				}

			},
			nop: function(path) {

				if ($('.magazine').turn('is'))
					$('.magazine').turn('page', 1);
			}
		});


		//	$(window).resize(function() {
		//		resizeViewport();
		//	}).bind('orientationchange', function() {
		//		resizeViewport();
		//	});

		// Events for thumbnails

		$('.thumbnails').click(function(event) {

			var page;

			if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {

				$('.magazine').turn('page', page[1]);
			}
		});

		$('.thumbnails li').
		bind($.mouseEvents.over, function() {

			$(this).addClass('thumb-hover');

		}).bind($.mouseEvents.out, function() {

			$(this).removeClass('thumb-hover');

		});

		if ($.isTouch) {

			$('.thumbnails').
			addClass('thumbanils-touch').
			bind($.mouseEvents.move, function(event) {
				event.preventDefault();
			});

		} else {

			$('.thumbnails ul').mouseover(function() {

				$('.thumbnails').addClass('thumbnails-hover');

			}).mousedown(function() {

				return false;

			}).mouseout(function() {

				$('.thumbnails').removeClass('thumbnails-hover');

			});

		}


		// Regions

		if ($.isTouch) {
			$('.magazine').bind('touchstart', regionClick);
		} else {
			$('.magazine').click(regionClick);
		}

		// Events for the next button

		$('.next-button')/*.bind($.mouseEvents.over, function() {

		 $(this).addClass('next-button-hover');

		 }).bind($.mouseEvents.out, function() {

		 $(this).removeClass('next-button-hover');

		 }).bind($.mouseEvents.down, function() {

		 $(this).addClass('next-button-down');

		 }).bind($.mouseEvents.up, function() {

		 $(this).removeClass('next-button-down');

		 })*/.click(function() {

			$('.magazine').turn('previous');

		});

		// Events for the next button

		$('.previous-button')/*.bind($.mouseEvents.over, function() {

		 $(this).addClass('previous-button-hover');

		 }).bind($.mouseEvents.out, function() {

		 $(this).removeClass('previous-button-hover');

		 }).bind($.mouseEvents.down, function() {

		 $(this).addClass('previous-button-down');

		 }).bind($.mouseEvents.up, function() {

		 $(this).removeClass('previous-button-down');

		 })*/.click(function() {

			$('.magazine').turn('next');

		});


		resizeViewport();

		$('.magazine').addClass('animated');

	}

	// Zoom icon

	$('.zoom-icon').bind('mouseover', function() {

		if ($(this).hasClass('zoom-icon-in'))
			$(this).addClass('zoom-icon-in-hover');

		if ($(this).hasClass('zoom-icon-out'))
			$(this).addClass('zoom-icon-out-hover');

	}).bind('mouseout', function() {

		if ($(this).hasClass('zoom-icon-in'))
			$(this).removeClass('zoom-icon-in-hover');

		if ($(this).hasClass('zoom-icon-out'))
			$(this).removeClass('zoom-icon-out-hover');

	}).bind('click', function() {

		if ($(this).hasClass('zoom-icon-in'))
			$('.magazine-viewport').zoom('zoomIn');
		else if ($(this).hasClass('zoom-icon-out'))
			$('.magazine-viewport').zoom('zoomOut');

	});

	$('#canvas').hide();


	// Load the HTML4 version if there's not CSS transform

	yepnope({
		test : Modernizr.csstransforms,
		yep: ['wp-content/themes/kazyna_gold/libs/turnjs/turn.js'],
		nope: ['wp-content/themes/kazyna_gold/libs/turnjs/turn.html4.min.js'],
		both: ['wp-content/themes/kazyna_gold/libs/turnjs/zoom.min.js',
			'wp-content/themes/kazyna_gold/libs/turnjs/magazine.js',
			'wp-content/themes/kazyna_gold/css/magazine.css'],
		complete: loadApp
	});


	location.hash = '#page/2';
	$('#canvas')[0].removeAttribute('style');

	function initialize_main() {
		var myLatlng = new google.maps.LatLng(43.207504, 76.883809);
		var myCenterMarker = new google.maps.LatLng(43.207504, 76.883809);
		var myOptions = {
			zoom: 14,
			center: myLatlng,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map_canvas_main"), myOptions);

		var marker = new google.maps.Marker({
			position: myCenterMarker,
			map: map,
			icon: 'wp-content/themes/kazyna_gold/img/geolabel.png'
		});
	};
	//Инициализация карты
	initialize_main();
	;(function($){
		$(document).on('click', 'a[href^=#]', function () {
			$('html, body').animate({ scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top - 152 }, 1000 );
			return false;
		});
	})(jQuery);

	setInterval(function(){
		if(window.pageYOffset > 300){
			document.querySelector('#top_header2').classList.remove('closed_menu');
			document.querySelector('#top_header2').classList.add('opened_menu');
		}else{
			document.querySelector('#top_header2').classList.add('closed_menu');
			document.querySelector('#top_header2').classList.remove('opened_menu');
		};
	},200);
});

