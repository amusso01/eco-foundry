// core version + navigation, pagination modules:
import SwiperCore, { Pagination ,EffectFlip } from 'swiper/core';

// configure Swiper to use modules
SwiperCore.use([Pagination , EffectFlip]);

export default function tabSlider() {
    const navigation = document.querySelectorAll('.gallery-nav .menuItem');

    const swiper = new SwiperCore('.gallery-slider', {
        autoHeight: true,
        effect: 'flip',
        grabCursor: false,
        allowTouchMove: false,
        centeredSlides: true,
        speed:500
      });

      navigation.forEach(el=>{
          el.addEventListener('click', goToSlide );
      })

      function goToSlide(el){
        let tabIndex =  el.target.dataset.index;
        swiper.slideTo(tabIndex);
        if(!el.target.classList.contains("active")){
            navigation.forEach(link=>{
                if(link.classList.contains('active')){
                    link.classList.remove('active');
                }
            })
        }
        el.target.classList.add('active');
      }
}