//ドロワーメニュー
jQuery(function ($) {
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      $(this).removeClass("is-open");
      $(".js-drawer-menu,body").removeClass("panelactive");
      $("body").css("overflow", "auto"); // スクロールを再度許可
    } else {
      $(this).addClass("is-open");
      $(".js-drawer-menu,body").toggleClass("panelactive");
      $("body").css("overflow", "hidden"); // スクロールを無効化
    }
  });

  $(".js-sp-nav__item").on("click", function () {
    $(".js-hamburger").removeClass("is-open");
    $("body").css("overflow", "auto"); // スクロールを再度許可
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
  const headerHeight = $(".header").height();
  $('a[href^="#"]').click(function () {
    const speed = 600;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    // ヘッダーの高さ分下げる
    let position = target.offset().top - headerHeight;
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

  // タイトルのフェードアップ
  $(".js-fadeUp").on("inview", function () {
    $(this).addClass("is-inview");
  });
});
// FVスライド
const swiperFv = new Swiper(".fv-swiper", {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  loop: true,
  // 自動再生
  autoplay: {
    delay: 4000, // 4秒後に次のスライドへ
    disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
  },
  speed: 2000, // 3秒かけてフェード
});

document.addEventListener("DOMContentLoaded", function () {
  var radios = document.querySelectorAll('[name="radio"]');
  if (radios && radios.length > 0) {
    radios[0].checked = true; // この例では最初のラジオボタンを選択します
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // 画面の再描画の直前に関数を実行する
  requestAnimationFrame(function () {
    // mainタグに`error-page`クラスが存在するか確認
    const isMainErrorPage = document.querySelector("main.error-page");

    if (isMainErrorPage) {
      const footerElement = document.querySelector(".footer");
      const topContactElement = document.querySelector(".top-contact");

      if (footerElement) {
        footerElement.style.marginTop = "initial";
      }

      if (topContactElement) {
        topContactElement.style.marginTop = "auto";
      }
    }
  });
});
