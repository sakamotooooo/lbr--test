//ドロワーメニュー
jQuery(function ($) {
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      // $('.js-drawer-menu').fadeOut(200);
      $(this).removeClass("is-open");
      $(".js-drawer-menu,body").removeClass("panelactive");
    } else {
      // $('.js-drawer-menu').fadeIn(200);
      $(this).addClass("is-open");
      $(".js-drawer-menu,body").toggleClass("panelactive");
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

  // スムーススクール
  $('a[href^="#"]').click(function () {
    const speed = 600;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
  var topBtn = $(".pagetop");
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

window.addEventListener("DOMContentLoaded", function () {
  new Splide('.lp-splide', {
    type: "loop", // ループさせる
    arrows: false, // 矢印ボタンを非表示
    pagination: false, // ページネーションを非表示
    drag: "free", // フリードラッグモード
    gap: 0, // スライド間の余白
    perPage: 8, // 表示するスライドの枚数
    breakpoints: {
      768: {
        perPage: 2, // 画面幅768px未満で表示枚数
        gap: 0, // 画面幅768px未満でスライド間の余白
      },
    },
    autoScroll: {
      speed: 0.5, // スクロール速度
      pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
    },
  }).mount(window.splide.Extensions);
});

new Splide(".top-splide", {
  type: "loop", // ループさせる
  arrows: false, // 矢印ボタンを非表示
  pagination: false, // ページネーションを非表示
  drag: "free", // フリードラッグモード
  gap: 15, // スライド間の余白
  perPage: 4, // 表示するスライドの枚数
  breakpoints: {
    768: {
      perPage: 2, // 画面幅768px未満で表示枚数
      gap: 10, // 画面幅768px未満でスライド間の余白
    },
  },
  autoScroll: {
    speed: 0.5, // スクロール速度
    pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
  },
}).mount(window.splide.Extensions);

new Splide(".splide");



// FVスライド
const swiperFv = new Swiper(".fv-swiper", {
  effect: "fade",
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  // 自動再生
  autoplay: {
    delay: 4000, // 4秒後に次のスライドへ
    disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
  },
  speed: 2000, // 3秒かけてフェード
});
