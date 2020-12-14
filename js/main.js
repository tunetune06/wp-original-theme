jQuery(function($) {
  // ハンバーガーメニュー
  $('#burger').on('click', function() {
    $('body').toggleClass('menu-open');
  });
  // それぞれのリンクをクリックしたら、bodyについてるクラスをとる
  $('.list').click(function() {
    if(hasClass('menu-open')) {
      $('body').removeClass('menu-open');
    }
  });
}); 


