<?php get_header();?>

  <!-- メイン画像 -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/main4.png" alt="着物を着た女性の後ろ姿" />
  <!-- <img src="img/main4.png" alt="着物を着た女性の後ろ姿"> -->

  <main>


    <h1 id="main_text">
      古典的な和柄から、華やかなモダン柄まで豊富な着物を取り揃えていますので<br>
      かならずお客様にぴったりの１枚が見つかるはずです<br>
      お気に入りの着物で京都の町を巡りませんか？<br>
    </h1>

    <!-- レンタルプラン -->
    <section id="rental_plan">
      <h2 class="title">レンタルプラン</h2>
      <div class="plans">
        <div class="plan">
          <img src="<?php echo get_template_directory_uri(); ?>/images/plan1.jpg" alt="フルセットプラン" />
          <!-- <img src="img/plan1.jpg" alt=""> -->
          <p class="sales_point">迷ったらこのプラン！</p>
          <p class="plan_name">フルセットプラン<span class="price">５,０００円</span></p>
          <p class="plan_text">
            ・着物レンタル<br>
            ・着付け<br>
            ・ヘアセット<br>
          </p>
        </div>
        <div class="plan">
          <img src="<?php echo get_template_directory_uri(); ?>/images/plan2.jpg" alt="" />
          <!-- <img src="img/plan2.jpg" alt=""> -->
          <p class="sales_point">お手軽プラン</p>
            <p class="plan_name">シンプルプラン<span class="price">４,０００円</span></p>
            <p class="plan_text">
              ・着物レンタル<br>
              ・着付け<br>
            </p>
        </div>
        <div class="plan">
          <img src="<?php echo get_template_directory_uri(); ?>/images/plan3.jpg" alt="" />
          <!-- <img src="img/plan3.jpg" alt=""> -->
          <p class="sales_point">７～８月限定プラン</p>
          <p class="plan_name">浴衣プラン<span class="price">３,０００円</span></p>
          <p class="plan_text">
            ・浴衣レンタル<br>
            ・着付け<br>
          </p>
        </div>
        <div class="plan">
          <img src="<?php echo get_template_directory_uri(); ?>/images/plan4.jpg" alt="" />
          <!-- <img src="img/plan4.jpg" alt=""> -->
          <p class="sales_point">プロによる撮影付き</p>
          <p class="plan_name">写真撮影プラン<span class="price">８,０００円</span></p>
          <p class="plan_text">
            ・着物レンタル<br>
            ・着付け<br>
            ・ヘアセット<br>
            ・写真撮影<br>
          </p>
        </div>
      </div>
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
            <!-- <img src="img/link.png"> -->
            <a class="flow_link" href="index.php#reservation">フォームはこちら</a>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="02">ご来店</p>
          <p class="flow_text">
            予約時間の５分前までにお店にお越しください。<br>
            万が一ご予約時間に遅れる際は、お電話にてご連絡いただきますよう、よろしくお願いいたします。<br>
            <img src="<?php echo get_template_directory_uri(); ?>/images/link.png" alt="指差し" />
            <!-- <img src="img/link.png"> -->
            <a class="flow_link" href="index.php#access">京都駅からのアクセスはこちら</a>
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
      <form action="confirm.php" method="post">
        <div class="reserve_container">
          <div class="reserve_heading">
            <label>お名前<span class="reserve_span">＊必須</span></label>
          </div>

          <input type="text" placeholder="名前を入力してください" class="reserve_textbox" name="user_name">
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>着付人数<span class="reserve_span">＊必須</span></label>
          </div>

          <input type="text" placeholder="例：2人" class="reserve_textbox" name="user_count">
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>希望日<span class="reserve_span">＊必須</span></label>
          </div>

          <input type="text" placeholder="例：2023年12月1日" class="reserve_textbox" name="hope_day">
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>希望時間（第一希望）<span class="reserve_span">＊必須</span></label>
          </div>

          <select name="first_time"> 
            <option value="９：００～">　９：００～</option>
            <option value="１０：００～">１０：００～</option>
            <option value="１１：００～">１１：００～</option>
            <option value="１２：００～">１２：００～</option>
            <option value="３：００～">１３：００～</option>
            <option value="１４：００～">１４：００～</option>
            <option value="５：００～">１５：００～</option>
          </select>
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>希望時間（第二希望）<span class="reserve_span">＊必須</span></label>
          </div>

          <select name="second_time">           
            <option value="９：００～">　９：００～</option>
            <option value="１０：００～">１０：００～</option>
            <option value="１１：００～">１１：００～</option>
            <option value="１２：００～">１２：００～</option>
            <option value="３：００～">１３：００～</option>
            <option value="１４：００～">１４：００～</option>
            <option value="５：００～">１５：００～</option>
          </select>
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>希望プラン<span class="reserve_span">＊必須</span></label>
          </div>

          <select name="hope_plan"> 
            <option value="フルセットプラン">フルセットプラン ５,０００円</option>
            <option value="シンプルプラン">シンプルプラン ４,０００円</option>
            <option value="浴衣プラン">浴衣プラン ３,０００円</option>
            <option value="写真撮影プラン">写真撮影プラン ８,０００円</option>
          </select>
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>お電話番号</label>
          </div>

          <input type="text" placeholder="例：000-0000-0000" class="reserve_textbox" name="user_phone">
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>メールアドレス<span class="reserve_span">＊必須</span></label>
          </div>

          <input type="text" placeholder="例：kimono.kojima@example.jp" class="reserve_textbox" name="user_email">
        </div>

        <div class="reserve_container">
          <div class="reserve_heading">
            <label>お問い合わせ・ご要望</label>
          </div>

          <textarea class="reserve_textarea" name="message"></textarea>
        </div>

        <input type="submit" value="内容確認" class="btn">
      </form>
      </section> 

    <!-- ギャラリー -->
    <section id="gallery">
      <h2 class="title">ギャラリー</h2>
      <div id="gallery_container">
        <div id="gallery_item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery1.jpg" alt="お祈りする女性" />
          <!-- <img src="img/gallery1.jpg" class="gallery_sp" alt="お祈りする女性"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery2.jpg" alt="背を向けた女性" />
          <!-- <img src="img/gallery2.jpg" class="gallery_sp" alt="背を向けた女性"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery3.jpg" alt="チェック柄の着物を着た2人の女性" />
          <!-- <img src="img/gallery3.jpg" class="gallery_sp" alt="チェック柄の着物を着た2人の女性"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery4.jpg" alt="着物を着たカップル" />
          <!-- <img src="img/gallery4.jpg" class="gallery_sp" alt="着物を着たカップル"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery5.jpg" alt="淡い着物を着た女性" />
          <!-- <img src="img/gallery5.jpg" class="gallery_sp" alt="淡い着物を着た女性"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/gallery6.jpg" alt="おみくじを結んでお祈りする女性" />
          <!-- <img src="img/gallery6.jpg" class="gallery_sp" alt="おみくじを結んでお祈りする女性"> -->
        </div>
        </div>
      <div id="insta">
        <a id="link" href="https://www.instagram.com/">Instagramでもっと見る</a>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>

