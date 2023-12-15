import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {


		if (document.body.classList.contains("page-template-page-home")) {
			var heroSwiper = new Swiper(".hero-swiper", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 800,
				loop: true,
				effect: "fade",
				fadeEffect: {
					crossFade: true
				},
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
			});
		}

		if (document.body.classList.contains("post-type-archive-angebot")) {
			var angeboteSummerSwiper = new Swiper(".angebote-summer-swiper", {
				loop: true,
				spaceBetween: 35,
				slidesPerView: 1,
				//centeredSlides: true,
				breakpoints: {
					768: {
						slidesPerView: 1.5,
					},
					1024: {
						slidesPerView: 2.5,
					},
				},
				navigation: {
					nextEl: ".summer-swiper-button-next",
					prevEl: ".summer-swiper-button-prev",
				},
			});
			var angeboteWinterSwiper = new Swiper(".angebote-winter-swiper", {
				loop: true,
				spaceBetween: 35,
				slidesPerView: 1,
				breakpoints: {
					768: {
						slidesPerView: 1.5,
					},
					1024: {
						slidesPerView: 2.5,
					},
				},
				navigation: {
					nextEl: ".winter-swiper-button-next",
					prevEl: ".winter-swiper-button-prev",
				},
			});
		}

		if (document.body.classList.contains("post-type-archive-zimmer")) {
			var angeboteZimmerSwiper = new Swiper(".angebote-zimmer-swiper", {
				loop: true,
				spaceBetween: 35,
				slidesPerView: 1,
				breakpoints: {
					768: {
						slidesPerView: 1.5,
					},
					1024: {
						slidesPerView: 2.5,
					},
				},
				navigation: {
					nextEl: ".zimmer-swiper-button-next",
					prevEl: ".zimmer-swiper-button-prev",
				},
			});
			//rooms category - zimmer
			var postsTabsSwiper = new Swiper('.swiper-tabs-container', {
				effect: 'fade',
				pagination: {
					el: '.swiper-tabs-pagination',
					clickable: true,
					renderBullet: function (index, className) {
						if (typeof swiperData.zimmerLinks !== 'undefined' && swiperData.zimmerLinks[index] !== '') {
							return '<a href="' + swiperData.zimmerLinks[index] + '" class="' + className + '">' + swiperData.zimmerTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow w-20 2xl:w-[118px]" alt="arrow"></a>';
						} else {
							return '<span class="' + className + '">' + swiperData.zimmerTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></span>';
						}
					},
				},
				navigation: {
					nextEl: ".zimmer-swiper-slider-button-next",
					prevEl: ".zimmer-swiper-slider-button-prev",
				},
			});
			//hover in slider pagination
			var paginationBulletsZimmer = document.querySelectorAll('.swiper-tabs-pagination a');

			paginationBulletsZimmer.forEach(function (bullet, index) {
				bullet.addEventListener('mouseenter', function () {
					postsTabsSwiper.slideTo(index);
				});
			});
			//click event in slider pagination
			document.querySelector('.swiper-tabs-pagination').addEventListener('click', function (event) {
				event.preventDefault();
				var link = event.target.closest('a');
				if (link) {
					window.location.href = link.href;
				}
			});
			//rooms category - Suite
			var postsSuiteSwiper = new Swiper('.swiper-suite-container', {
				effect: 'fade',
				pagination: {
					el: '.swiper-suite-pagination',
					clickable: true,
					renderBullet: function (index, className) {
						if (typeof swiperData.suiteLinks !== 'undefined' && swiperData.suiteLinks[index] !== '') {
							return '<a href="' + swiperData.suiteLinks[index] + '" class="' + className + '">' + swiperData.suiteTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></a>';
						} else {
							return '<span class="' + className + '">' + swiperData.suiteTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></span>';
						}
					},
				},
				navigation: {
					nextEl: ".suite-swiper-slider-button-next",
					prevEl: ".suite-swiper-slider-button-prev",
				},
			});
			//hover in slider pagination
			var paginationBulletsSuite = document.querySelectorAll('.swiper-suite-pagination a');

			paginationBulletsSuite.forEach(function (bullet, index) {
				bullet.addEventListener('mouseenter', function () {
					postsSuiteSwiper.slideTo(index);
				});
			});
			//click event in slider pagination
			document.querySelector('.swiper-suite-pagination').addEventListener('click', function (event) {
				event.preventDefault();
				var link = event.target.closest('a');
				if (link) {
					window.location.href = link.href;
				}
			});
		}

		if (document.body.classList.contains("single-zimmer")) {
			var angeboteZimmerSwiper = new Swiper(".single-zimmer-swiper", {
				loop: true,
				spaceBetween: 0,
				slidesPerView: 1,
				navigation: {
					nextEl: ".single-zimmer-swiper-button-next",
					prevEl: ".single-zimmer-swiper-button-prev",
				},
			});
		}

		/* Activities */
		if (document.body.classList.contains("post-type-archive-activities")) {
	
			//Sommer Category
			var aSommerSwiper = new Swiper('.swiper-sommer-container', {
				effect: 'fade',
				pagination: {
					el: '.swiper-sommer-pagination',
					clickable: true,
					renderBullet: function (index, className) {
						if (typeof swiperData.sommerLinks !== 'undefined' && swiperData.sommerLinks[index] !== '') {
							return '<a href="' + swiperData.sommerLinks[index] + '" class="' + className + '">' + swiperData.sommerTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></a>';
						} else {
							return '<span class="' + className + '">' + swiperData.sommerTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></span>';
						}
					},
				},
				navigation: {
					nextEl: ".swiper-sommer-button-next",
					prevEl: ".swiper-sommer-button-prev",
				},
			});

			//hover in slider pagination
			var paginationBulletsSommer = document.querySelectorAll('.swiper-sommer-pagination a');

			paginationBulletsSommer.forEach(function (bullet, index) {
				bullet.addEventListener('mouseenter', function () {
					aSommerSwiper.slideTo(index);
				});
			});


			//click event in slider pagination
			document.querySelector('.swiper-sommer-pagination').addEventListener('click', function (event) {
				event.preventDefault();
				var link = event.target.closest('a');
				if (link) {
					window.location.href = link.href;
				}
			});

			//Winter Category
			var aWinterSwiper = new Swiper('.swiper-winter-container', {
				effect: 'fade',
				pagination: {
					el: '.swiper-winter-pagination',
					clickable: true,
					renderBullet: function (index, className) {
						if (typeof swiperData.winterLinks !== 'undefined' && swiperData.winterLinks[index] !== '') {
							return '<a href="' + swiperData.winterLinks[index] + '" class="' + className + '">' + swiperData.winterTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></a>';
						} else {
							return '<span class="' + className + '">' + swiperData.winterTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" class="swiper-arrow" alt="arrow"></span>';
						}
					},
					navigation: {
						nextEl: ".swiper-winter-button-next",
						prevEl: ".swiper-winter-button-prev",
					},
				},
			});
			//hover in slider pagination
			var paginationBulletsWinter = document.querySelectorAll('.swiper-winter-pagination a');

			paginationBulletsWinter.forEach(function (bullet, index) {
				bullet.addEventListener('mouseenter', function () {
					aWinterSwiper.slideTo(index);
				});
			});
			//click event in slider pagination
			document.querySelector('.swiper-winter-pagination').addEventListener('click', function (event) {
				event.preventDefault();
				var link = event.target.closest('a');
				if (link) {
					window.location.href = link.href;
				}
			});
		}


	}, false);
});