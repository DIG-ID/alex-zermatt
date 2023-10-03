import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("post-type-archive-angebot")) {
      var angeboteSummerSwiper = new Swiper(".angebote-summer-swiper", {
        loop: true,
        spaceBetween: 35,
        slidesPerView: 2.5,
        navigation: {
          nextEl: ".summer-swiper-button-next",
          prevEl: ".summer-swiper-button-prev",
        },
      });
      var angeboteWinterSwiper = new Swiper(".angebote-winter-swiper", {
        loop: true,
        spaceBetween: 35,
        slidesPerView: 2.5,
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
        slidesPerView: 2.5,
        navigation: {
          nextEl: ".zimmer-swiper-button-next",
          prevEl: ".zimmer-swiper-button-prev",
        },
      });

      var postsTabsSwiper = new Swiper('.swiper-tabs-container', {
          effect: 'fade',
          pagination: {
              el: '.swiper-tabs-pagination',
              clickable: true,
              renderBullet: function (index, className) {
                  if (typeof swiperData.postLinks !== 'undefined' && swiperData.postLinks[index] !== '') {
                      return '<a href="' + swiperData.postLinks[index] + '" class="' + className + '">' + swiperData.postTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" alt="arrow"></a>';
                  } else {
                      return '<span class="' + className + '">' + swiperData.postTitles[index] + '<img src="/wp-content/themes/alex-zermatt/assets/images/slider-arrow.svg" alt="arrow"></span>';
                  }
              },
          },
      });
      //hover in slider pagination
      var paginationBullets = document.querySelectorAll('.swiper-tabs-pagination a');

      paginationBullets.forEach(function (bullet, index) {
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

  }, false);
});