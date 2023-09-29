//ドロワーメニュー
jQuery(function ($) {
$('.js-hamburger').on('click', function () {
  if ($('.js-hamburger').hasClass('is-open')) {
    // $('.js-drawer-menu').fadeOut(200);
    $(this).removeClass('is-open');
    $(".js-drawer-menu").removeClass('panelactive');
  } else {
    // $('.js-drawer-menu').fadeIn(200);
    $(this).addClass('is-open');
    $(".js-drawer-menu").toggleClass('panelactive');
  }
});

$('.js-drawer-menu a').on('click',function() {
  // $('.js-drawer-menu').fadeOut();
  $('.js-hamburger').removeClass('is-open');
});

  // ヘッダーの分だけコンテンツを下げる
  var height = $(".header").height();
  $("main").css("margin-top", height);
});

//topページスライダー
const swiper = new Swiper(".swiper", {
  loop: true,
  autoplay: {
    delay: 0,
		disableOnInteraction: false,
  },
	spaceBetween: 15,
  slidesPerView:4,
  loopedSlides: 8,
  speed: 8000,
  allowTouchMove: false, // スワイプ無効,
  breakpoints: {
    768: {
      slidesPerView: 4,
    }
  },
});
