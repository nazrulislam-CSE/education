/* -------------------------------------
		CUSTOM FUNCTION WRITE HERE
-------------------------------------- */
jQuery(document).on('ready', function() {
	"use strict";
	/*--------------------------------------
			MOBILE MENU
	--------------------------------------*/
	function collapseMenu(){
		jQuery('.tg-navigation ul li.menu-item-has-children').prepend('<span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>');
		jQuery('.tg-navigation ul li.menu-item-has-children span').on('click', function() {
			jQuery(this).parent('li').toggleClass('tg-open');
			jQuery(this).next().next().slideToggle(300);
		});
	}
	collapseMenu();
	/* --------------------------------------
			PROGRESS BAR
	-------------------------------------- */
	var _tg_skills = jQuery('.tg-skills');
	_tg_skills.appear(function () {
		var _tg_skillholder = jQuery('.tg-skillholder');
		_tg_skillholder.each(function () {
			jQuery(this).find('.tg-skillbar').animate({
				width: jQuery(this).attr('data-percent')
			}, 2500);
		});
	});
	/* -------------------------------------
			HOME SLIDER
	-------------------------------------- */
	var _tg_homeslider = jQuery('[id="tg-homeslidervone"], [id="tg-homeslidervtwo"], [id="tg-homeslidervthree"], [id="tg-homeslidervfour"], [id="tg-homeslidervfive"], [id="tg-homeslidervsix"], [id="tg-homeslidervseven"], [id="tg-homesliderveight"], [id="tg-homeslidervnine"], [id="tg-homeslidervten"], [id="tg-homesliderveleven"], [id="tg-homeslidervtwelve"], [id="tg-homeslidervthirteen"], [id="tg-homeslidervfourteen"]');
	if(_tg_homeslider.hasClass('tg-homeslider')){
		_tg_homeslider.owlCarousel({
			nav:true,
			items: 1,
			loop: true,
			dots: true,
			autoplay: false,
			dotsClass: 'tg-homesliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-homeslidernav',
			navText : ['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
		});
	}
	/* -------------------------------------
			THREE GRID SLIDER
	-------------------------------------- */
	var _tg_gridslider = jQuery('.tg-gridslider');
	_tg_gridslider.owlCarousel({
		nav:true,
		items: 3,
		margin:30,
		loop: true,
		dots: false,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{ items:1 },
			768:{ items:2 },
			1000:{ items:2 },
			1200:{ items:3 },
		}
	});
	/* -------------------------------------
			FOOTER ADDRESS SLIDER
	-------------------------------------- */
	var _tg_addressslider = jQuery('#tg-addressslider');
	_tg_addressslider.owlCarousel({
		items: 1,
		nav:false,
		loop: true,
		dots: false,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
	});
	/* -------------------------------------
			COUNTER
	-------------------------------------- */
	if(jQuery('.tg-statistics').length > 0){
		var _tg_statistics = jQuery('.tg-statistics');
		_tg_statistics.appear(function () {
			var _tg_statistic = jQuery('.tg-statistic h3');
			_tg_statistic.countTo();
		});
	}
	/* ---------------------------------------
			GALLERY FILTERABLE
	-------------------------------------- */
	if(jQuery('#tg-portfoliofilterable').length > 0){
		var $container = jQuery('#tg-portfoliofilterable');
		var $optionSets = jQuery('.tg-optionset');
		var $optionLinks = $optionSets.find('a');
		function doIsotopeFilter() {
			if (jQuery().isotope) {
				var isotopeFilter = '';
				$optionLinks.each(function () {
					var selector = jQuery(this).attr('data-filter');
					var link = window.location.href;
					var firstIndex = link.indexOf('filter=');
					if (firstIndex > 0) {
						var id = link.substring(firstIndex + 7, link.length);
						if ('.' + id === selector) {
							isotopeFilter = '.' + id;
						}
					}
				});
				$container.isotope({
					filter: isotopeFilter
				});
				$optionLinks.each(function () {
					var $this = jQuery(this);
					var selector = $this.attr('data-filter');
					if (selector === isotopeFilter) {
						if (!$this.hasClass('tg-active')) {
							var $optionSet = $this.parents('.option-set');
							$optionSet.find('.tg-active').removeClass('tg-active');
							$this.addClass('tg-active');
						}
					}
				});
				$optionLinks.on('click', function () {
					var $this = jQuery(this);
					var selector = $this.attr('data-filter');
					$container.isotope({itemSelector: '.tg-masonrygrid', filter: selector});
					if (!$this.hasClass('tg-active')) {
						var $optionSet = $this.parents('.tg-optionset');
						$optionSet.find('.tg-active').removeClass('tg-active');
						$this.addClass('tg-active');
					}
					return false;
				});
			}
		}
		var isotopeTimer = window.setTimeout(function () {
			window.clearTimeout(isotopeTimer);
			doIsotopeFilter();
		}, 1000);
	}
	if(jQuery('.tg-masonryfilterable').length > 0){
		var _tg_masonryfilterable =  jQuery('.tg-masonryfilterable');
		_tg_masonryfilterable.isotope({
			itemSelector: '.tg-masonrygrid',
			percentPosition: true,
			masonry: {
			columnWidth: '.grid-sizer'
			}
		});
	}
	/* -------------------------------------
			PRETTY PHOTO GALLERY
	-------------------------------------- */
	jQuery("a[data-rel]").each(function () {
		jQuery(this).attr("rel", jQuery(this).data("rel"));
	});
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'dark_square',
		slideshow: 3000,
		autoplay_slideshow: false,
		social_tools: false
	});
	/* -------------------------------------
			BRANDS SLIDER
	-------------------------------------- */
	var _tg_brandsslider = jQuery('.tg-brandsslider');
	_tg_brandsslider.owlCarousel({
		items: 6,
		nav: false,
		margin: 30,
		loop: true,
		dots: true,
		autoplay: true,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{ items:1 },
			600:{ items:3 },
			1000:{ items:6 },
		}
	});
	/* -------------------------------------
			THREE GRID SLIDER
	-------------------------------------- */
	var _tg_eventpostsslider = jQuery('#tg-eventpostsslider');
	_tg_eventpostsslider.owlCarousel({
		nav:true,
		items: 1,
		loop: true,
		dots: false,
		autoplay: true,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
	});
	/* -------------------------------------
			THREE GRID SLIDER
	-------------------------------------- */
	var _tg_testimonialslider = jQuery('#tg-testimonialslider');
	_tg_testimonialslider.owlCarousel({
		items: 1,
		nav:false,
		loop: true,
		dots: true,
		autoplay: true,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
	});
	/* -------------------------------------
			Google Map
	-------------------------------------- */
	if(jQuery('#tg-multilocationmap').length > 0){
		var _tg_multilocationmap = jQuery("#tg-multilocationmap");
		_tg_multilocationmap.gmap3({
			marker: {
				address: "1600 Elizabeth St, Melbourne, Victoria, Australia",
				options: {
					title: "Zock Theme",
					icon: "images/icons/icon-02.png",
				}
			},
			map: {
				options: {
					zoom: 16,
					scrollwheel: false,
					disableDoubleClickZoom: true,
				}
			}
		});
	}
	/* --------------------------------------
			THEME COLLAPSE
	-------------------------------------- */
	var _openFirst = jQuery('#tg-themecollapse');
	_openFirst.collapse({
		open: function() {this.slideDown('slow');},
		close: function() {this.slideUp('slow');},
		accordion: true,
	});
	/* -------------------------------------
			TEAM SLIDER
	-------------------------------------- */
	var _tg_teammembersslider = jQuery('#tg-teammembersslider');
	_tg_teammembersslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: false,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
	});
	/* -------------------------------------
			TEAM SLIDER
	-------------------------------------- */
	var _tg_ourmissionslider = jQuery('#tg-ourmissionslider');
	_tg_ourmissionslider.owlCarousel({
		items: 1,
		nav: false,
		loop: true,
		dots: true,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
	});
	/* -------------------------------------
			TEAM SLIDER
	-------------------------------------- */
	var _tg_portfoliodetailslider = jQuery('#tg-portfoliodetailslider');
	_tg_portfoliodetailslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: false,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
	});
	/* -------------------------------------
			SERVICES SLIDER
	-------------------------------------- */
	var _tg_servicesslider = jQuery('#tg-servicesslider');
	_tg_servicesslider.owlCarousel({
		nav:true,
		items: 3,
		margin:15,
		loop: true,
		dots: false,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{ items:1 },
			600:{ items:3 },
			1000:{ items:3 },
		}
	});
	/* -------------------------------------
			SERVICES SLIDER
	-------------------------------------- */
	var _tg_engineersSlider = jQuery('#tg-engineersSlider');
	_tg_engineersSlider.owlCarousel({
		nav:true,
		items: 4,
		margin:15,
		loop: true,
		dots: false,
		autoplay: false,
		navText : ['<i class="tg-btnprev fa fa-long-arrow-left"></i>','<i class="tg-btnnext fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{ items:1 },
			600:{ items:3 },
			1000:{ items:4 },
		}
	});
	/* -------------------------------------
			RANGE SLIDER
	-------------------------------------- */
	if(jQuery('#tg-budgetslider').length > 0){
		jQuery( "#tg-budgetslider" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				jQuery( "#tg-amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		jQuery( "#tg-amount" ).val( "$" + jQuery( "#tg-budgetslider" ).slider( "values", 0 ) + " - $" + jQuery( "#tg-budgetslider" ).slider( "values", 1 ) );
	}
	/*------------------------------------------
			PRODUCT INCREASE
	------------------------------------------*/
	jQuery('em.plus').on('click', function () {
		jQuery('.result').val(parseInt(jQuery('.result').val(), 10) + 1);
	});
	jQuery('em.minus').on('click', function () {
		jQuery('.result').val(parseInt(jQuery('.result').val(), 10) - 1);
	});
	/*--------------------------------------
			COMMING SOON COUNTER
	 -------------------------------------*/
	if(jQuery('#tg-themecounter').length > 0){
		// Set the date we're counting down to
		var countDownDate = new Date("Dec 31, 2017 24:00:00").getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {
			// Get todays date and time
			var now = new Date().getTime();
			// Find the distance between now an the count down date
			var distance = countDownDate - now;
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			// Display the result in an element with id="demo"
			document.getElementById("tg-themecounter").innerHTML = "<ul><li><div class='tg-holder'><h3>" + days + "</h3><h4>Days</h4></div></li><li><div class='tg-holder'><h3>" + hours + "</h3><h4>Hours</h4></div></li><li><div class='tg-holder'><h3>" + minutes + "</h3><h4>Mins</h4></div></li><li><div class='tg-holder'><h3>" + seconds + "</h3><h4>Secs</h4></div></li></ul>";
			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("tg-themecounter").innerHTML = "EXPIRED";
			}
		}, 1000);
	}
});
