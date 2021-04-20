// core version + navigation, pagination modules:
import SwiperCore, { Pagination, Thumbs } from 'swiper/core';

// configure Swiper to use modules
SwiperCore.use([Pagination, Thumbs]);

export default function teamSlider() {
    const galleryThumbs = new SwiperCore('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 10,
        slideToClickedSlide: true,
        threshold: 55
      });

    const galleryTop = new SwiperCore('.gallery-top', {
        loop: true,
        autoHeight:true,
        navigation: {
          nextEl: '.swiper-button-next',
        },
        thumbs: {
          swiper: galleryThumbs,
        },
      });
}