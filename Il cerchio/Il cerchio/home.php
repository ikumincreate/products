<?php get_header();?>

  <!-- トップ画像 -->
  <div class="main_container">
    <div class="main_inner">
      <p id="shop_name"><span>trattoria<br></span>Il cerchio</p>
    </div>
    <div class="main_inner">
    <!-- TODO プラグインMeta Sliderで1枚ずつスライド表示させる -->
      <ul class="slider">
        <img src="<?php echo get_template_directory_uri(); ?>/images/main1.png" class="main_img" alt="メイン画像　ピザ" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/main2.png" class="main_img" alt="メイン画像　お店の外観" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/main3.png" class="main_img" alt="メイン画像　ワインと肉料理" />
      </ul>
    </div>
  </div>

<main>
  <!-- 店の紹介文 -->
  <section id="about">
  Il cerchio（イル　チェルキオ）は家族や仲間と”輪”になって楽しんでいただける料理と空間を
  コンセプトに2023年に札幌狸小路の東側・創成川沿いにオープンしました。
  厳選した道産食材をつかった自慢のイタリアンメニューをお楽しみください。
  </section>

  <!-- 店内の写真 -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/bistro.png" id="shop_photo" alt="お店の店内" />

  <!-- メニュー -->
  <section id="menu">
    <div class="section_title">Menu</div>
    <!-- TODO メニューはプラグインtablepress　or RESTAURANT MENUにする -->
    Antipasto…前菜<br>
    ・十勝牧場のモッツアレラチーズとトマトのカプレーゼ<br>
    ・サーモンのカルパッチョ<br>
    ・生ハム４種<br>
    ・佐藤牧場のチーズ盛り合わせ<br>
    Primo piatto…パスタ、ピザ<br>
    ・マルゲリータ（バジル、モッツアレラチーズ、トマトソース）<br>
    ・ビスマルク（半熟たまご、モッツアレラチーズ、トマトソース）<br>
    ・ポルチーニ茸とベーコンのクリームパスタ<br>
    ・ふらの和牛のボロネーゼ<br>
    Secondo piatto…メイン料理<br>
    ・白老牛のブラケット<br>
    ・平取産黒豚のロースト<br>
    ・本日の鮮魚のソテー<br>
    Dessert…デザート<br>
    ・カタラーナ<br>
    ・ピスタチオのジェラート<br>
    Scopo…アルコール<br>
    ・本日のグラスワイン<br>
    ・白ワイン各種<br>
    ・赤ワイン各種<br>
    ・生ビール<br>
    Bevanda analcolica…ソフトドリンク<br>
    ・自家製ジンジャエール<br>
    ・自家製赤ブドウジュース<br>
    ・オレンジジュース<br>
    ・ウーロン茶<br>
  </section>

  <!-- TODO　料理画像をプラグインMeta Sliderで3枚ずつスライド表示させる -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/menu1.png" alt="カプレーゼ" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/menu2.png" alt="サーモンのカルパッチョ" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/menu3.png" alt="ボロネーゼ" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/menu4.png" alt="豚肉のロースト" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/menu5.png" alt="カタラーナ" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/menu6.png" alt="ワインとアラカルト" />

  

  <!-- 予約はこちらから -->  
  <section id="reservation">
    <div class="section_title">Reservation</div>
    ご予約はこちらから
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
                <a href="<?php the_permalink(); ?>">
                  <!-- 投稿記事のアイキャッチ画像を表示する -->
                  <?php the_post_thumbnail(); ?>
                  <br>
                  <!--  投稿記事のタイトルを表示する -->
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
          </div>  

          <?php endforeach; ?>
        </div>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
        
    一覧
  </section>

</main>


<?php get_footer(); ?>