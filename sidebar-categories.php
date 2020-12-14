<aside class="aside">
  <h2 class="aside__title">カテゴリー一覧</h2>
  <ul class="aside__list">
    <?php
    $args = [
      'title_li' => '', //見出しを削除
    ];
    wp_list_categories($args);
    ?>
  </ul>
</aside>