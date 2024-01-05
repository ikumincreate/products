<div class="sidebar">
  <div class="sidebar_title">ブログ一覧</div>
  <ul>
    <?php
      $args = array(
        'posts_per_page' => 4 //表示件数の指定
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): //ループの開始
        setup_postdata( $post ); //記事データのセット
    ?>
      <li class="blog_title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>

    <?php
      endforeach;
      wp_reset_postdata(); //今回作成したクエリをリセットする
    ?>
  </ul>
</div>