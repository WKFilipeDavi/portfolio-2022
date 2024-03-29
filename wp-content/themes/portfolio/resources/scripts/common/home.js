import Swiper, { Navigation, Pagination } from "swiper";

function init() {
  console.log('home');
  const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

export default {
  init,
}
