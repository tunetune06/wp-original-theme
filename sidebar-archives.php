<aside class="aside">
  <h2 class="aside__title">月別アーカイブ</h2>
  <ul class="aside__list">
    <?php
    $args = [
      'type' => 'monthly', //月別指定
    ];
    wp_get_archives($args);
    ?>
  </ul>
</aside>