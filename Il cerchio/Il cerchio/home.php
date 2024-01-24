<?php get_header();?>

  <!-- トップ画像 -->
  <div class="main_container">
    <div class="main_shopname">
        <img src="<?php echo get_template_directory_uri(); ?>/images/cerchio_logo.png"  alt="お店の店内" />
      </div>
    <div class="main_img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/main.png"  alt="お店の店内" />
    </div>
  </div>

<main>
  <!-- 店の紹介文 -->
  <section id="about">
    <div id="about_content">
    Il cerchio（イル　チェルキオ）は家族や仲間と”輪”になって楽しんでいただける料理と空間を
    コンセプトに<br>
    2023年に札幌狸小路の東側・創成川沿いにオープンしました。<br>
    厳選した道産食材をつかった自慢のイタリアンメニューをお楽しみください。
    </div>
  </section>


  <!-- 店内の写真 -->
  <div id="shop_photo">
    <?php echo do_shortcode('[smartslider3 slider="6"]'); ?>
  </div>


  <!-- メニュー -->
  <section id="menu">
    <div class="section_title">Menu</div>
      <!-- メニューリストの表示 -->
      <div class="menu_list">
        <?php echo do_shortcode('[fdm-menu id="37"]'); ?>
      </div>
      
      <!-- メニューの画像の表示 -->
      <div class="menu_img">
        <?php echo do_shortcode('[smartslider3 slider="5"]'); ?>
      </div>
  </section>

  <!-- 予約の案内 -->  
  <section id="reservation">
    <div class="section_title">Reservation</div>
    <p id="">食べログからネット予約が可能です</p>
    <div id="reserve_link">
      <a href="https://tabelog.com/">ご予約はこちらから</a>
    </div>
    <p></p>
  </section>


  <!-- ブログ -->
  <section id="blog">
    <div class="section_title">Blog</div>
      <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'blog',
          // 1ページに表示する投稿数
          'posts_per_page' => 2,
        );
        // データの取得
        $posts = get_posts($args);
      ?>
      
      <!-- ループ処理 -->
      <div class="blog_list">
        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>
          <div class="blog">
            <div class="news_post_small">
              <div class="news_post_meta">
                <!-- aタグで投稿記事へのリンクを作成 -->
                <a href="<?php echo get_permalink(); ?>"></a>
              </div>
              <div class="news_post_small_title">
                <!--  aタグで投稿記事へのリンクを作成する -->
                <div class="blog_container">
                  <!-- 投稿記事のアイキャッチ画像を表示する -->
                  <div class="blog_img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="blog_inner">
                    <a href="<?php the_permalink(); ?>">
                      <!--  投稿記事のタイトルを表示する -->
                      <div class="blog_title">
                        <?php the_title(); ?>
                      </div>
                      <!-- 投稿記事の日付を表示する -->
                      <div class="blog_date">
                        <?php echo get_the_date(); ?>
                      </div>
                      <!-- 投稿記事の本文の一部を表示する -->
                      <div chlas="blog_words">
                        <?php echo wp_trim_words( get_the_content() , 30, '...'); ?>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <?php endforeach; ?>
      </div>
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
  </section>

</main>


<?php get_footer(); ?>