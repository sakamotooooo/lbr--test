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

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });
});

const swiperFv = new Swiper(".fv-swiper", {
  loop: true,
  effect: "fade", // フェード切り替え
  // 自動再生
  autoplay: {
    delay: 4000, // 4秒後に次のスライドへ
    disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
  },
  speed: 2000, // 2秒かけてフェード
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//topページスライダー
const swiperTop = new Swiper(".top-swiper", {
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  slidesPerView:"auto",
  spaceBetween: 10,
  loopedSlides: 8,
  speed: 8000,
  allowTouchMove: false, // スワイプ無効,
  breakpoints: {
    768: {
      spaceBetween: 15,
    }
  },
});
//LPページスライダー
const swiperLp = new Swiper(".lp-swiper", {
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  slidesPerView: 3,
  spaceBetween: 0,
  loopedSlides: 8,
  speed: 8000,
  allowTouchMove: false, // スワイプ無効,
  breakpoints: {
    768: {
      slidesPerView: 8,
    },
  },
});
