jQuery(document).ready(function($){
  
  if (typeof $.fn.swiperight == 'function') {
    $('.carousel.slide').swiperight(function () {
      $(this).carousel('prev');
    });
    $('.carousel.slide').swipeleft(function () {
      $(this).carousel('next');
    });
  }

  if (typeof $.fn.lightSlider == 'function') {
    $('#locations .location-row').lightSlider({
      item: 3,
      loop: true,
      slideMargin: 0,
      auto: true,
      pauseOnHover: true,
      pager: false,
      keyPress: true,
      pause: 3000,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            item: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            item: 1
          }
        }
      ]
    });
  }
});