$(function(){
    
    
  // 矢印がクリックされたら、スムーススクロール
  $('.arrow-up').click(() => {
      $('body, html').animate({ scrollTop: 0,}, 600);
  })

  
  // 画面がスクロールされたら
  $(window).scroll(function () {
      
      // 画面のスクロールされた量を取得
      let scrollTop = $(document).scrollTop();
      // スクロールの量が300以上なら表示、それ以外は非表示
      if (scrollTop >= 300) {
          $('.arrow-up').fadeIn();
      } else {
          $('.arrow-up').fadeOut();
      }


      let scene2Top = $('.scene2').offset().top;
      if (scrollTop >= scene2Top -190) {
          $('.scene2-text').fadeIn();
      } else {
          $('.scene2-text').fadeOut();
      }

      let scene4Top = $('.scene4').offset().top;
      if (scrollTop >= scene4Top -190) {
          $('.scene4-text').fadeIn();
      } else {
          $('.scene4-text').fadeOut();
      }

      let scene10Top = $('.scene10').offset().top;
      if (scrollTop >= scene10Top -190) {
          $('.scene10-text').fadeIn();
      } else {
          $('.scene10-text').fadeOut();
      }

      let scene11Top = $('.scene11').offset().top;
      if (scrollTop >= scene11Top -500) {
          $('.scene11-text').fadeIn();
      } else {
          $('.scene11-text').fadeOut();
      }



      // 画面表示時アニメーション
      let scene5Top = $('.scene5').offset().top;
      if (scrollTop >= scene5Top -550) {
          $('.scene5').animate({ left: 0}, 1000);
      }

      let scene6Top = $('.scene6').offset().top;
      if (scrollTop >= scene6Top -550) {
          $('.scene6').animate({ left: 0}, 1000);
      }

      let scene7Top = $('.scene7').offset().top;
      if (scrollTop >= scene7Top -550) {
          $('.scene7').animate({ left: 0}, 1000);
      }

      let scene8Top = $('.scene8').offset().top;
      if (scrollTop >= scene8Top -550) {
          $('.scene8').animate({ left: 0}, 1000);
      }

      let scene9Top = $('.scene9').offset().top;
      if (scrollTop >= scene9Top -550) {
          $('.scene9').animate({ left: 0}, 1000);
      }

    

      
  });
})




// swiperの動き
var mySwiper = new Swiper ('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed: 1000,
  effect: "cube",

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

  autoplay: {
      delay: 1500,
  },
})

// $('#js-show-btn').click(function ()　{

// $('#newAlbum').fadeIn();

// })