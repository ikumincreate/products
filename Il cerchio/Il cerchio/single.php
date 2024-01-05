<!-- ブログページ -->

<!-- header読み込み -->
<?php get_header();?>

<div class ="single_container">
  <div class ="single_inner">
    <!-- タイトル読み込み -->
    <div class="article_title">
      <?php the_title(); ?></h1>
    </div>

    <!-- 日付読み込み -->
    <div class="article_date">
      <?php echo get_the_date(); ?>
    </div>

    <!-- アイキャッチ画像読み込み -->
    <div >
      <div class="articl_thumbnaile">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>

    <!-- 本文読み込み -->
    <div class="article_content">
      <?php the_content(); ?>
    </div>
  </div>

  <!-- サイドバー読み込み -->
  <div class ="single_inner">
    <?php get_sidebar(); ?>
  </div>
</div>


<!-- footer読み込み -->
<?php get_footer(); ?>
