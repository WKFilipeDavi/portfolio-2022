import Swiper, { Navigation, Pagination, Scrollbar } from "swiper";

function init() {
  console.log('home');
  const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination, Scrollbar],
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

    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },
  });
}

export default {
  init,
}
