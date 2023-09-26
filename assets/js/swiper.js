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


  }, false);
});