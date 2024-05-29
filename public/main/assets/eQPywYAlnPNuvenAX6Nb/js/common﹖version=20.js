// $('body').hide()


$("body").on("click", ".topline-current-lang", function (e) {
	e.preventDefault();
});
$("body").on("mouseup", function (e) {
	var langPanel = $(".topline-lang-dropdown");
	var langLink = $(".topline-current-lang");
	if (langLink.is(e.target)) {
		if ($(".topline-current-lang").is(".active")) {
			langLink.removeClass("active").next().fadeOut(300);
		}
		else {
			langLink.addClass("active").next().fadeIn(300)
		}
	} else {
		if (!langPanel.is(e.target) && langPanel.has(e.target).length === 0) {
			if ($(".topline-current-lang").is(".active")) {
				$(".topline-current-lang").removeClass("active").next().fadeOut(300);
			} else {
			}
		}
	}
});


$("body").on("click", ".footer-current-lang", function (e) {
	e.preventDefault();
});
$("body").on("mouseup", function (e) {
	var footerLangPanel = $(".footer-lang-dropdown");
	var footerLangLink = $(".footer-current-lang");
	if (footerLangLink.is(e.target)) {
		if ($(".footer-current-lang").is(".active")) {
			footerLangLink.removeClass("active").next().fadeOut(300);
		}
		else {
			footerLangLink.addClass("active").next().fadeIn(300)
		}
	} else {
		if (!footerLangPanel.is(e.target) && footerLangPanel.has(e.target).length === 0) {
			if ($(".footer-current-lang").is(".active")) {
				$(".footer-current-lang").removeClass("active").next().fadeOut(300);
			} else {
			}
		}
	}
});



$("body").on("click", ".products-menu-btn", function (e) {
	e.preventDefault();
});
$("body").on("mouseup", function (e) {
	var productsMenuPanel = $(".products-menu");
	var productsMenuLink = $(".products-menu-btn");
	if (productsMenuLink.is(e.target)) {
		if ($(".products-menu-btn").is(".active")) {
			productsMenuLink.removeClass("active").next().removeClass("active");
		}
		else {
			productsMenuLink.addClass("active").next().addClass("active")
		}
	} else {
		if (!productsMenuPanel.is(e.target) && productsMenuPanel.has(e.target).length === 0) {
			if ($(".products-menu-btn").is(".active")) {
				$(".products-menu-btn").removeClass("active").next().removeClass("active");
			} else {
			}
		}
	}
});



var topNav = priorityNav.init({
	mainNavWrapper: ".func-menu",
	navDropdownLabel: "more",
	navDropdownBreakpointLabel: "more",
	throttleDelay: 0,
});


var dashboardNav = priorityNavDb.init({
	mainNavWrapper: ".db-topmenu",
	navDropdownLabel: "more",
	navDropdownBreakpointLabel: "more",
	breakPoint: 575,
	throttleDelay: 0,
});




$("body").on("click", ".mobile-panel-btn", function (e) {
	e.preventDefault();
});
$("body").on("click", function (e) {
	var mobilePanel = $(".mobile-panel-block");
	var mobilePanelLink = $(".mobile-panel-btn");
	if (mobilePanelLink.is(e.target)) {
		if ($(".mobile-panel-btn").is(".active")) {
			mobilePanelLink.removeClass("active")
			mobilePanel.removeClass("active")
		}
		else {
			mobilePanelLink.addClass("active")
			mobilePanel.addClass("active")
		}
	} else {
		if (!mobilePanel.is(e.target) && mobilePanel.has(e.target).length === 0) {
			if ($(".mobile-panel-btn").is(".active")) {
				$(".mobile-panel-btn").removeClass("active")
				mobilePanel.removeClass("active")
			} else {
			}
		}
	}
});
$("body").on("click", ".mobile-panel-close-btn", function (e) {
	e.preventDefault();
	$(".mobile-panel-btn").removeClass("active")
	$(".mobile-panel-block").removeClass("active")
});



$("body").on("click", ".transactions-filter-heading", function (e) {
	e.preventDefault();

	var transactionsAccepted = $(".transactions-accepted-filters-block");
	if ($(this).parent().is(".active")) {

		if (!transactionsAccepted.is(e.target) && transactionsAccepted.has(e.target).length === 0) {
			$(this).parent().removeClass("active");
			$(this).next().slideUp();
		}
	} else {

		if (!transactionsAccepted.is(e.target) && transactionsAccepted.has(e.target).length === 0) {
			$(this).parent().addClass("active");
			$(this).next().slideDown();
		}
	}
});



$("body").on("click", ".transactions-accepted-filter__remove-link", function (e) {
	e.preventDefault();
	e.stopPropagation()
	$(this).parents(".transactions-accepted-filter-wrapper").remove()
});



$("body").on("click", ".change-pswd-type-link", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active")
		$(this).parents(".field").find('input').attr("type", "password")
	}
	else {
		$(this).addClass("active")
		$(this).parents(".field").find('input').attr("type", "text")
	}
});


$(".registration-type-tab").on('click', function () {
	$(this).parents(".registration-type-tabs").find(".registration-type-tab").removeClass("active").eq($(this).parent().index()).addClass("active");
	$(this).parents(".registration-type-tabs-block").next().find(".registration-type-tab-content").hide().eq($(this).parent().index()).fadeIn()
}).eq(0).addClass("active");


$('.select').selectpicker({
});

// $('.select-language').selectpicker({
// 	liveSearch: true,
// 	liveSearchPlaceholder: "lang_search"
// });


$('.select-currency').selectpicker({
});

$('.select-phone-country').selectpicker({
	liveSearch: true,
	liveSearchPlaceholder: "Search"
});



var clipboardField = new ClipboardJS('.field-copy-btn', {
})
clipboardField.on('success', function (e) {
	console.info('Action:', e.action);
	console.info('Text:', e.text);
	console.info('Trigger:', e.trigger);

	e.trigger.classList.add("active");

	setTimeout(function (e) {
		$('.field-copy-btn.active').removeClass('active')
	}, 2000);
});
clipboardField.on('error', function (e) {
	console.error('Action:', e.action);
	console.error('Trigger:', e.trigger);
});




$("body").on("click", ".show-more-currency-radio-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active").html("Show more")
		$(".currency-radio-item-wrapper").removeClass('currency-radio-item-wrapper--shown')
	}
	else {
		$(this).addClass("active").html("Show less")
		$(".currency-radio-item-wrapper").addClass('currency-radio-item-wrapper--shown')
	}
});

autosize($('textarea'));



if (document.getElementById('deposits-stats-chart') != null) {


	const depositsChart = document.getElementById('deposits-stats-chart');

	new Chart(depositsChart, {
		type: 'doughnut',
		legend: 'false',
		data: {
			datasets: [{
				label: 'My First Dataset',
				data: [1000, 1000, 1000, 1000],
				backgroundColor: [
					'rgba(238, 104, 29, 1)',
					'rgba(29, 160, 37, 1)',
					'rgba(129, 43, 224, 1)',
					'rgba(162, 154, 207, 1)'
				],
				hoverOffset: 0,
				borderWidth: 0,
				cutout: '84%',
				spacing: 3,
				borderRadius: 5,
			}]
		},
	});

}


if (document.getElementById('transactions-stats-chart') != null) {


	const depositsChart = document.getElementById('transactions-stats-chart');

	new Chart(depositsChart, {
		type: 'doughnut',
		legend: 'false',
		data: {
			datasets: [{
				label: 'My First Dataset',
				data: [1239000, 100000],
				backgroundColor: [
					'rgba(129, 43, 224, 1)',
					'rgba(29, 160, 37, 1)'
				],
				hoverOffset: 0,
				borderWidth: 0,
				cutout: '84%',
				spacing: 3,
				borderRadius: 5,
			}]
		},
	});

}



// $("body").on("click", ".wallet-item-heading", function (e) {
// 	e.preventDefault();

// 	var walletNumberBlock = $(".wallet-item-heading-wallet-number-block");
// 	if ($(this).parent().is(".active")) {

// 		if (!walletNumberBlock.is(e.target) && walletNumberBlock.has(e.target).length === 0) {
// 			$(this).parent().removeClass("active");
// 			$(this).next().slideUp();
// 		}
// 	} else {

// 		if (!walletNumberBlock.is(e.target) && walletNumberBlock.has(e.target).length === 0) {
// 			$(this).parent().addClass("active");
// 			$(this).next().slideDown();
// 		}
// 	}
// });
$("body").on("click", ".wallet-item-heading", function (e) {
	e.preventDefault();

	if ($(this).parent().is(".active")) {

		$(this).parent().removeClass("active");
		$(this).next().slideUp();
	} else {

		$(this).parent().addClass("active");
		$(this).next().slideDown();
	}
});



$("body").on("click", ".wallet-item-heading-wallet-toggle-btn", function (e) {
	e.preventDefault();
	e.stopPropagation()

	if ($(this).is(".active")) {
		$(this).removeClass("active")
		$(this).parents(".wallet-item-heading-wallet-number-block").find('input').attr("type", "password")
	}
	else {
		$(this).addClass("active")
		$(this).parents(".wallet-item-heading-wallet-number-block").find('input').attr("type", "text")
	}
});


if (document.getElementById('partners-stats-chart') != null) {


	const depositsChart = document.getElementById('partners-stats-chart');

	new Chart(depositsChart, {
		type: 'doughnut',
		legend: 'false',
		data: {
			datasets: [{
				label: 'My First Dataset',
				data: [1000, 1000, 1000, 1000],
				backgroundColor: [
					'rgba(238, 104, 29, 1)',
					'rgba(29, 160, 37, 1)',
					'rgba(129, 43, 224, 1)',
					'rgba(162, 154, 207, 1)'
				],
				hoverOffset: 0,
				borderWidth: 0,
				cutout: '84%',
				spacing: 3,
				borderRadius: 5,
			}]
		},
	});

}



$("body").on("click", ".partners-filter-heading", function (e) {
	e.preventDefault();

	var partnersAccepted = $(".partners-accepted-filters-block");
	if ($(this).parent().is(".active")) {

		if (!partnersAccepted.is(e.target) && partnersAccepted.has(e.target).length === 0) {
			$(this).parent().removeClass("active");
			$(this).next().slideUp();
		}
	} else {

		if (!partnersAccepted.is(e.target) && partnersAccepted.has(e.target).length === 0) {
			$(this).parent().addClass("active");
			$(this).next().slideDown();
		}
	}
});



$("body").on("click", ".partners-accepted-filter__remove-link", function (e) {
	e.preventDefault();
	e.stopPropagation()
	$(this).parents(".partners-accepted-filter-wrapper").remove()
});


$(".filter-range-slider").ionRangeSlider({
	type: "double",
	grid: false,
	// min: 0,
	// max: 1000,
	// from: 200,
	// to: 800,
	// prefix: "$"

});



$("body").on("click", ".partner-item-h-view-more-btn", function (e) {
	e.preventDefault();

	if ($(this).parents(".partner-item").is(".active")) {
		$(this).removeClass("active").html('View more')
		$(this).parents(".partner-item").removeClass("active");
		$(this).parents(".partner-item").find('.partner-item-body').slideUp();

	} else {


		$(this).addClass("active").html('Hide info')
		$(this).parents(".partner-item").addClass("active");
		$(this).parents(".partner-item").find('.partner-item-body').slideDown();

	}
});


if (document.getElementById('earning-stats-chart') != null) {


	const depositsChart = document.getElementById('earning-stats-chart');

	new Chart(depositsChart, {
		type: 'doughnut',
		legend: 'false',
		data: {
			datasets: [{
				label: 'My First Dataset',
				data: [1239000, 100000],
				backgroundColor: [
					'rgba(129, 43, 224, 1)',
					'rgba(29, 160, 37, 1)'
				],
				hoverOffset: 0,
				borderWidth: 0,
				cutout: '84%',
				spacing: 3,
				borderRadius: 5,
			}]
		},
	});

}



$("body").on("click", ".show-more-balance-items-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active").html("Show more")
		$(".balance-item-wrapper").removeClass('balance-item-wrapper--shown')
	}
	else {
		$(this).addClass("active").html("Show less")
		$(".balance-item-wrapper").addClass('balance-item-wrapper--shown')
	}
});



const depositSlider = new Swiper('.deposit-slider .swiper', {
	// direction: 'horizontal',
	slidesPerView: 3,
	// loop: true,

	navigation: {
		nextEl: '.deposit-slider .swiper-button-next',
		prevEl: '.deposit-slider .swiper-button-prev',
	},

	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		}
	}
});


var clipboard = new ClipboardJS('.copy-btn', {
})
clipboard.on('success', function (e) {
	console.info('Action:', e.action);
	console.info('Text:', e.text);
	console.info('Trigger:', e.trigger);

	e.trigger.classList.add("active");

	setTimeout(function (e) {
		$('.copy-btn.active').removeClass('active')
	}, 2000);
});
clipboard.on('error', function (e) {
	console.error('Action:', e.action);
	console.error('Trigger:', e.trigger);
});



$(".promo-tab").on('click', function () {
	$(this).parents(".promo-tabs").find(".promo-tab").removeClass("active").eq($(this).parent().index()).addClass("active");
	$(".promo-tabs-content-block").find(".promo-tab-content").hide().eq($(this).parent().index()).fadeIn()
}).eq(0).addClass("active");


$(".setting-tab").on('click', function () {
	$(this).parents(".setting-tabs").find(".setting-tab").removeClass("active").eq($(this).parent().index()).addClass("active");
	$(".setting-tabs-content-block").find(".setting-tab-content").hide().eq($(this).parent().index()).fadeIn()
}).eq(0).addClass("active");



const depositsEmptySlider = new Swiper('.deposits-empty-slider .swiper', {
	// direction: 'horizontal',
	slidesPerView: 1,
	loop: true,
	autoplay: {
		delay: 15000,
		disableOnInteraction: true,
	},
	pagination: {
		el: ".swiper-pagination",
		type: "progressbar",
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		480: {
			slidesPerView: 1,
		},
		640: {
			slidesPerView: 1,
		}
	}
});



const invPlanTabSlider = new Swiper('.inv-plan-tab-slider .swiper', {
	// direction: 'horizontal',
	slidesPerView: 'auto',
	// loop: true,


	navigation: {
		nextEl: '.inv-plan-tab-slider .swiper-button-next',
		prevEl: '.inv-plan-tab-slider .swiper-button-prev',
	},

	breakpoints: {
		320: {
			slidesPerView: 'auto',
		},
		480: {
			slidesPerView: 'auto',
		},
		640: {
			slidesPerView: 'auto',
		}
	}
});


// $(".inv-plan-tab-slide-item").on('click', function () {
// 	$(this).parents(".swiper-wrapper").find(".inv-plan-tab-slide-item").removeClass("active").eq($(this).parent().index()).addClass("active");
// 	$(".inv-plan-tabs-content").find(".inv-plan-tab-content").hide().eq($(this).parent().index()).fadeIn()
// }).eq(0).addClass("active");




$("body").on("click", ".show-more-currency-icon-radio-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active").html("Show more")
		$(".currency-icon-radio-item-wrapper").removeClass('currency-icon-radio-item-wrapper--shown')
	}
	else {
		$(this).addClass("active").html("Show less")
		$(".currency-icon-radio-item-wrapper").addClass('currency-icon-radio-item-wrapper--shown')
	}
});




$("body").on("click", ".show-more-tr-type-calc-arb-radio-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active").html("Show more")
		$(".tr-type-calc-arb-item-wrapper").removeClass('tr-type-calc-arb-item-wrapper--shown')
	}
	else {
		$(this).addClass("active").html("Show less")
		$(".tr-type-calc-arb-item-wrapper").addClass('tr-type-calc-arb-item-wrapper--shown')
	}
});


$("body").on("click", ".affiliate-reward-t-show-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active").html("Show more")
		$(".affiliate-reward-t-item").removeClass('affiliate-reward-t-item--shown')
	}
	else {
		$(this).addClass("active").html("Show less")
		$(".affiliate-reward-t-item").addClass('affiliate-reward-t-item--shown')
	}
});


$("body").on("click", ".faq-item-heading", function (e) {
	e.preventDefault();

	if ($(this).parent().is(".active")) {
		$(this).parent().removeClass("active");
		$(this).next().slideUp();
	} else {
		$(this).parent().addClass("active");
		$(this).next().slideDown();
	}
});




$("body").on("click", ".faq-sort-item", function (e) {
	e.preventDefault();

	if ($(this).is(".active")) {
		$(this).removeClass("active");
		$('.faq-sort-item[data-type="all"]').addClass('active')
		$('.faq-item').show()

		$('.faq-sort-mobile-dropdown-menu-btn').html($('.faq-sort-mobile-dropdown-menu-link[data-type="all"]').html())
	} else {
		$('.faq-sort-item').removeClass('active')
		$(this).addClass("active");

		if ($(this).is(':not([data-type="all"])')) {
			$type = $(this).data('type')
			$('.faq-item').hide()
			$('.faq-item[data-type="' + $type + '"]').show()

			$('.faq-sort-mobile-dropdown-menu-btn').html($('.faq-sort-mobile-dropdown-menu-link[data-type="' + $type + '"]').html())

		} else {
			$('.faq-item').show()

			$('.faq-sort-mobile-dropdown-menu-btn').html($('.faq-sort-mobile-dropdown-menu-link[data-type="all"]').html())
		}
	}

});


$("body").on("click", ".faq-sort-mobile-dropdown-menu-link", function (e) {
	e.preventDefault();

	$('.faq-sort-mobile-dropdown-menu-btn').html($(this).html())


	if ($(this).is(':not([data-type="all"])')) {
		$type = $(this).data('type')
		$('.faq-item').hide()
		$('.faq-item[data-type="' + $type + '"]').show()

		$('.faq-sort-item').removeClass("active");
		$('.faq-sort-item[data-type="' + $type + '"]').addClass("active")

	} else {
		$('.faq-item').show()

		$('.faq-sort-item').removeClass("active");
		$('.faq-sort-item[data-type="all"]').addClass("active")
	}


});



$("body").on('click', '.policy-menu-link', function (e) {
	e.preventDefault();
	var fixed_offset = 0;
	$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 0);
	// $('.policy-menu-item').removeClass('active')
	// $(this).parent().addClass('active')
});

var $sections = $('.policy-content-item');


$(window).scroll(function () {

	$sections.each(function (i, el) {
		var top = $(el).offset().top - 20;
		var bottom = top + $(el).height();
		var scroll = $(window).scrollTop();
		var id = $(el).attr('id');
		if (scroll > top && scroll < bottom) {
			$('.policy-menu-item.active').removeClass('active');
			$('.policy-menu-link[href="#' + id + '"]').parent().addClass('active');

			// console.log(id)
		}

	})
});


$("body").on("click", ".show-more-ps-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active").html("Show more")
		$(".ps-item-wrapper").removeClass('ps-item-wrapper--shown')
	}
	else {
		$(this).addClass("active").html("Show less")
		$(".ps-item-wrapper").addClass('ps-item-wrapper--shown')
	}
});



const roadmapSlider = new Swiper('.roadmap-slider .swiper', {
	// direction: 'horizontal',
	slidesPerView: 1,
	// loop: true,

	navigation: {
		nextEl: '.roadmap-slider .swiper-button-next',
		prevEl: '.roadmap-slider .swiper-button-prev',
	},

	breakpoints: {
		320: {
			slidesPerView: 1,
			autoHeight: true,
		},
		576: {
			slidesPerView: 1,
			autoHeight: true,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 4,
		}
	}
});


$(".academy-tab").on('click', function() {
	$(this).parents(".academy-tabs").find(".academy-tab").removeClass("active").eq($(this).parent().index()).addClass("active");
	$(".academy-tab-content").hide().eq($(this).parent().index()).fadeIn()
}).eq(0).addClass("active");



var $videoSrc = '';
$('.video-popup-link').click(function () {
	$videoSrc = $(this).data("src");
});
console.log($videoSrc);

$('#modal-video').on('shown.bs.modal', function (e) {
	$("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
})


$('#modal-video').on('hide.bs.modal', function (e) {
	$("#video").attr('src', '');
})


$("body").on("click", ".cookies-close-btn", function (e) {
	e.preventDefault();
	$('.cookies-block').remove()
});
$("body").on("click", ".page-info-close", function (e) {
	e.preventDefault();
	$('.page-info-block').remove()
});

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))