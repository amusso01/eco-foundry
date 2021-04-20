import backToNav from "./backToNav";

export default function nav() {
    const header = document.querySelector('.site-header');
    const backNavButton = document.getElementById('backNav');
    const navBack = document.getElementById('blockNavigation');
 

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
        if(verticalScroll > 700){
            header.classList.add('scrolled')
            if (typeof(backNavButton) != 'undefined' && backNavButton != null)
            {
              backNavButton.classList.add('active');
              backToNav(backNavButton, navBack)
            }       
        }else{
            header.classList.remove('scrolled')
            if (typeof(backNavButton) != 'undefined' && backNavButton != null){
              backNavButton.classList.remove('active');
            }
        }
    }

}