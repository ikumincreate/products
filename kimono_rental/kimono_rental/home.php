<?php get_header();?>

  <!-- メイン画像 -->
  <!-- <div class="slider">
    <div>
      <img class="carouselImg" src="<?php echo get_template_directory_uri(); ?>/images/main1.png" alt="メイン画像...着物を着た女性の後ろ姿" />
    </div>
    <div>
      <img class="carouselImg" src="<?php echo get_template_directory_uri(); ?>/images/main2.png" alt="" />
    </div>
    <div>
      <img class="carouselImg" src="<?php echo get_template_directory_uri(); ?>/images/main3.png" alt="" />
    </div>
  </div> -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/main1.png" alt="着物を着た女性の後ろ姿" />

  <main>

    <h1 id="main_text">
      古典的な和柄から、華やかなモダン柄まで豊富な着物を取り揃えていますので<br>
      かならずお客様にぴったりの１枚が見つかるはずです<br>
      お気に入りの着物で京都の町を巡りませんか？<br>
    </h1>

    <!-- レンタルプラン -->
    <section id="rental_plan">
      <h2 class="title">レンタルプラン</h2>
        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
            // 投稿タイプ
            'post_type'      => 'post',
            // カテゴリー名
            'category_name' => 'plan',
            // 1ページに表示する投稿数
            'posts_per_page' => 4,
          );
           // データの取得
          $posts = get_posts($args);
        ?>

      
        <!-- ループ処理 -->
        <div class="plan_list">
          <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <div class="plans">
            <div class="news_post_small">
              <div class="news_post_meta">
                <!-- aタグで投稿記事へのリンクを作成 -->
                <a href="<?php echo get_permalink(); ?>"></a>
              </div>
              <div class="news_post_small_title">
                <!--  aタグで投稿記事へのリンクを作成する -->
                <p class="plan_name">
                  <a href="<?php the_permalink(); ?>">
                    <!-- 投稿記事のアイキャッチ画像を表示する -->
                    <?php the_post_thumbnail(); ?>
                    <br>
                    <!--  投稿記事のタイトルを表示する -->
                    <?php the_title(); ?>
                  </a>
                </p>
              </div>
            </div>
          </div>  

          <?php endforeach; ?>
        </div>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>

      <p class="point">
        すべてのプランにバッグ・草履（下駄）のレンタルも含まれていますので手ぶらでご来店いただけます♪<br>
      </p>
    </section>

    <!-- レンタルの流れ -->
    <section id="rental_flow">
      <h2 class="title">レンタルの流れ</h2>
        <div class="flow">
          <p class="flow_title" data-number="01">ご予約</p>
          <p class="flow_text">
            当サイトのフォームからお申込みをしてください。ご予約完了後、メールにて教らせいたします。<br>
            <img src="<?php echo get_template_directory_uri(); ?>/images/link.png" alt="指差し" />
            <a href="index.php#reservation" class="flow_link">フォームはこちら</a>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="02">ご来店</p>
          <p class="flow_text">
            予約時間の５分前までにお店にお越しください。<br>
            万が一ご予約時間に遅れる際は、お電話にてご連絡いただきますよう、よろしくお願いいたします。<br>
            <img src="<?php echo get_template_directory_uri(); ?>/images/link.png" alt="指差し" />
            <a href="index.php#access" class="flow_link">京都駅からのアクセスはこちら</a>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="03">着物選び</p>
          <p class="flow_text">
            お好きな着物と帯をお選びください。コーディネートにお悩みの場合は、お気軽にスタッフにお声掛けください。<br>
            お客様のご希望にそったコーディネートをご提案させていただきます。<br>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="04">着付け</p>
          <p class="flow_text">
            プロによる着付けをさせていただきます。長時間歩いても着崩れせず苦しくない着付けですのでご安心ください。<br>
            所要時間目安：４０分<br>
            （ヘアセットを含むプランを選択の場合、別途３０分ほどお時間をいただきます）<br>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="05">お支払い</p>
          <p class="flow_text">
            料金のお支払いは現金・クレジット決済のいずれかとなります。<br>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="06">ご出発</p>
          <p class="flow_text">
            お荷物は当店にてお預かりし、お戻りの際にご返却いたします。着物での京都散策をお楽しみください。<br>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="07">ご返却</p>
          <p class="flow_text">
            当日返却の場合は、お着替えのお時間もありますので、１９時３０分までに店舗へご来店ください。<br>
            翌日返却の場合は１２時までにご来店ください。<br>
          </p>
        </div>
    </section>

    <!-- 予約フォーム -->
    <section id="reservation">
      <h2 class="title">ご予約</h2>
      <div id="wpforms">
        <?php echo do_shortcode('[wpforms id="32"]'); ?>
      </div>
    </section> 

    <!-- ギャラリー -->
    <section id="gallery">
      <h2 class="title">ギャラリー</h2>
      <div id="gallery_container">
        <div id="gallery_item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery1.jpg" class="gallery_sp" alt="お祈りする女性" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery2.jpg" class="gallery_sp" alt="背を向けた女性" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery3.jpg" class="gallery_sp" alt="チェック柄の着物を着た2人の女性" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery4.jpg" class="gallery_sp" alt="着物を着たカップル" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery5.jpg" class="gallery_sp" alt="淡い着物を着た女性" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery6.jpg" class="gallery_sp" alt="おみくじを結んでお祈りする女性" />
        </div>
      </div>
      <div id="insta">
        <a href="https://www.instagram.com/">Instagramでもっと見る</a>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>

