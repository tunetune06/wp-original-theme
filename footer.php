<!-- フッターパーツ -->
<footer class="footer">
  <div class="footer__inner">
      <?php if(is_active_sidebar('footer')) : ?>
        <ul class="footer__widgets">
          <li class="widget">
            <h3 class="widgettitle">プロフィール</h3>
            <p class="profile-img"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-icon.jpg" alt=""></p>
            <p class="profile-name">渡辺 俊</p>
            <p class="profile-text">
              渡辺俊と申します。未経験からエンジニアを目指し活動中。
              勉強内容等を発進しています。
            </p>
          </li>
          <?php dynamic_sidebar('footer'); ?>
        </ul>
      <?php endif; ?>
  </div>
  <div class="copyright">
  <p><small>&copy; 2020 Shun Watanebe</small></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>