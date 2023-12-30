<!-- ブログページ -->

<!-- header読み込み -->
<?php get_header();?>

<!-- TODO 配置調整 -->
<!-- タイトル読み込み -->
<div class="article_title">
<?php the_title(); ?></h1>
</div>

<!-- アイキャッチ画像読み込み -->
<div class="article_thumbnail">
<?php the_post_thumbnail(); ?>
</div>

<!-- 本文読み込み -->
<div class="article_content">
<?php the_content(); ?>
</div>

<!-- footer読み込み -->
<?php get_footer(); ?>
