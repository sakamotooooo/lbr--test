//ドロワーメニュー
jQuery(function ($) {
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      // $('.js-drawer-menu').fadeOut(200);
      $(this).removeClass("is-open");
      $(".js-drawer-menu").removeClass("panelactive");
    } else {
      // $('.js-drawer-menu').fadeIn(200);
      $(this).addClass("is-open");
      $(".js-drawer-menu").toggleClass("panelactive");
    }
  });

  $(".js-drawer-menu a").on("click", function () {
    // $('.js-drawer-menu').fadeOut();
    $(".js-hamburger").removeClass("is-open");
  });

  // ヘッダーの分だけコンテンツを下げる
  var height = $(".header").height();
  $("main").css("margin-top", height);

  // アコーディオン
  // 最初のコンテンツは表示
  $(".faq__item:first-of-type .faq__content").css("display", "block");
  // 最初の矢印は開いた時の状態に
  $(".faq__item:first-of-type .js-accordion-title").addClass("open");
  // タイトルをクリックすると
  $(".js-accordion-title").on("click", function () {
    // クリックしたタイトル以外のopenクラスを外す
    $(".js-accordion-title").not(this).removeClass("open");
    // クリックしたタイトル以外のcontentを閉じる
    $(".js-accordion-title").not(this).next().slideUp(300);
    // クリックしたタイトルにopenクラスを付与
    $(this).toggleClass("open");
    // クリックしたタイトルのcontentを開閉
    $(this).next().slideToggle(300);
  });
});

//topページスライダー
const swiper = new Swiper(".top-swiper", {
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
<<<<<<< HEAD
  slidesPerView:"auto",
  spaceBetween: 10,
=======
  spaceBetween: 15,
  slidesPerView: 4,
>>>>>>> 2d83a2ee66af61b93648dcf68e99c729fd08c4e6
  loopedSlides: 8,
  speed: 8000,
  allowTouchMove: false, // スワイプ無効,
  breakpoints: {
    768: {
<<<<<<< HEAD
      spaceBetween: 15,
    }
=======
      slidesPerView: 4,
    },
>>>>>>> 2d83a2ee66af61b93648dcf68e99c729fd08c4e6
  },
});
//LPページスライダー
const swiperLp = new Swiper(".lp-swiper", {
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
<<<<<<< HEAD
  slidesPerView:4,
	spaceBetween: 0,
=======
  slidesPerView: 3,
  spaceBetween: 0,
>>>>>>> 2d83a2ee66af61b93648dcf68e99c729fd08c4e6
  loopedSlides: 8,
  speed: 8000,
  allowTouchMove: false, // スワイプ無効,
  breakpoints: {
    768: {
      slidesPerView: 8,
    },
  },
});
