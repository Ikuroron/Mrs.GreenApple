$(function(){
    
    
  // 矢印がクリックされたら、スムーススクロール
  $('.arrow-up').click(() => {
      $('body, html').animate({ scrollTop: 0,}, 600);
      
  })
  
  // 画面がスクロールされたら
  $(window).scroll(function () {
      
      // 画面のスクロールされた量を取得
      let scrollTop = $(document).scrollTop();
      // console.log(scrollTop);
      
      // スクロールの量が500以上なら表示、それ以外は非表示
      if (scrollTop >= 300) {
          $('.arrow-up').fadeIn();
      } else {
          $('.arrow-up').fadeOut();
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