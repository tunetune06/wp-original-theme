<!-- フロントページ -->
<?php get_header(); ?>
<section class="fv">
  <div class="fv__inner">
    <div class="tape"></div>
    <div class="main-copy">
      <h2 class="main-copy_text">Shun<br>Watanabe</h2>
    </div>
  </div>
</section>
<section class="message-sec">
  <div class="message-sec__inner">
    <h2 class="message-sec__title">Web制作にかける思い</h2>
    <p class="message-sec__text">はじめたきっかけは所謂副業ブームにのったことがきっかけです。HTML/CSSを勉強したてはめちゃめちゃわくわくしていたのを覚えています。その後、勉強がものすごく楽しかったので、本職にしようと決意し、サーバーサイド言語に力を入れて勉強しておりました。ポートフォリオもでき、転職活動を開始したのですが、これが撃沈でした。まず相手にしてもらってなかったです。500社以上はエントリーしたのですが、全く決まる気配がありません。しかし、その中でも真摯に対応してくださり、アドバイスまでいただける企業様がWeb制作会社様が多かったのです。また成果物できたら見せてくださいって言っていただける企業様が何件かありました。そのアドバイスを実践し、デザインにも挑戦したり、サイトを作成するなど、Web制作の勉強に完全にシフトしました。そこで、勉強して気づきました。Webサイトは誰かの経済を活性化させる力があると。コロナの影響により、世の中の元気がない気がします。自分も転職活動で苦しい思いをしています。経済が活性化されたほうが、絶対楽しいんです。だから、僕はWeb制作の力で誰かの経済を活性化させるお役に立ちたい。そして世の中を少しでも明るくする力になりたいです。</p>
  </div>
</section>
<section class="nav-sec">
  <ul class="nav-sec__list">
    <a href="<?php echo home_url(); ?>/about">
      <li class="nav-sec__item1 hover-ef">
        <img src="<?php echo get_template_directory_uri(); ?>/images/glenn-carstens-peters-npxXWgQ33ZQ-unsplash.jpg" alt="">
      </li>
    </a>
    <a href="<?php echo home_url(); ?>/blog">
      <li class="nav-sec__item2 hover-ef">
        <img src="<?php echo get_template_directory_uri(); ?>/images/aaron-burden-xG8IQMqMITM-unsplash.jpg" alt="">
      </li>
    </a>
    <a href="<?php echo home_url(); ?>/works">
      <li class="nav-sec__item3 hover-ef">
        <img src="<?php echo get_template_directory_uri(); ?>/images/muhannad-ajjan-sL2BRR1cuvM-unsplash.jpg" alt="">
      </li>
    </a>
    <a href="<?php echo home_url(); ?>/contact">
      <li class="nav-sec__item4 hover-ef"><img src="<?php echo get_template_directory_uri(); ?>/images/mailbox-507594_640.jpg" alt=""></li>
    </a>
  </ul>
</section>
<?php get_footer(); ?>