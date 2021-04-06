export default function nav() {
    const header = document.querySelector('.site-header');

    function throttle(fn, wait) {
        var time = Date.now();
        return function() {
          if ((time + wait - Date.now()) < 0) {
            fn();
            time = Date.now();
          }
        }
      }

    window.addEventListener('scroll', throttle(resizeNav, 100));

    function resizeNav(){
        let verticalScroll = window.pageYOffset;
        if(verticalScroll > 650){
            header.classList.add('scrolled')
        }else{
            header.classList.remove('scrolled')
        }
    }

}