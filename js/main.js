// ハンバーガーメニュー

// ハンバーガーメニューアイコンを受け取る
let menuIcon = document.querySelector('#menu-icon');
// クリックしたらオープン&クローズ
menuIcon.addEventListener('click', () => {
  document.body.classList.toggle('menu-open');
}, true);


// ハンバーガーメニューの中のリストを受け取る
let lists = document.querySelectorAll('.list');

// それぞれのリンクをクリックしたら、bodyについてるクラスをとる
lists.forEach(list => {
  list.addEventListener('click', () => {
    document.body.classList.remove('menu-open');
  });
});
