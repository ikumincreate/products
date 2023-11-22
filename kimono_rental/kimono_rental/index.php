<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="京都にある着物レンタルサービス店のサイトです。" />
  <title>着物レンタル 小島</title>
  <link rel="stylesheet" href="css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=M+PLUS+Rounded+1c:wght@100&family=Noto+Sans+JP:wght@100;200;500&family=Sawarabi+Gothic&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap" rel="stylesheet">

</head>

<body>
  <!-- ナビゲーションメニュー -->
  <header>
  <!-- PC用ナビゲーションメニュー -->
    <div class="innner">
      <a id="logo" href="index.html"><img src="img/logo.png" alt="トップページに戻る"></a>
    </div>
    <div class="innner">
      <nav id="nav_pc">
        <a href="index.html#rental_plan">レンタルプラン</a>
        <a href="index.html#rental_flow">当日の流れ</a>
        <a href="index.html#reservation">ご予約</a>
        <a href="index.html#gallery">ギャラリー</a>
        <a href="index.html#access">アクセス</a>
      </nav>
  </div>

  <!-- スマホ用ナビゲーションメニュー -->
  <img id="menu_sp" src="img/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav_sp').style.display = 'block'">
  <nav id="nav_sp">
    <img id="close" src="img/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav_sp').style.display = 'none'">
    <a id="logo_sp" href="index.html" onclick="document.getElementById('nav_sp').style.display = 'none'">
      <img src="img/logo.png" alt="トップページに戻る"></a>

    <a class="menu" href="index.html#rental_plan"
      onclick="document.getElementById('nav_sp').style.display = 'none'">レンタルプラン</a>
    <a class="menu" href="index.html#rental_flow"
      onclick="document.getElementById('nav_sp').style.display = 'none'">当日の流れ</a>
    <a class="menu" href="index.html#reservation"
      onclick="document.getElementById('nav_sp').style.display = 'none'">ご予約</a>
    <a class="menu" href="index.html#gallery"
      onclick="document.getElementById('nav_sp').style.display = 'none'">ギャラリー</a>
    <a class="menu" href="index.html#access"
      onclick="document.getElementById('nav_sp').style.display = 'none'">アクセス</a>
  </nav>
  </header>

  <main>
    <!-- メイン画像 -->
    <section id="main_visual">
      <img src="img/main4.png" alt="着物を着た女性の後ろ姿">
    </section>

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
          <img src="img/plan1.jpg" alt="">
          <p class="sales_point">迷ったらこのプラン！</p>
          <p class="plan_name">フルセットプラン<span class="price">５,０００円</span></p>
          <p class="plan_text">
            ・着物レンタル<br>
            ・着付け<br>
            ・ヘアセット<br>
          </p>
        </div>
        <div class="plan">
          <img src="img/plan2.jpg" alt="">
          <p class="sales_point">お手軽プラン</p>
            <p class="plan_name">シンプルプラン<span class="price">４,０００円</span></p>
            <p class="plan_text">
              ・着物レンタル<br>
              ・着付け<br>
            </p>
        </div>
        <div class="plan">
          <img src="img/plan3.jpg" alt="">
          <p class="sales_point">７～８月限定プラン</p>
          <p class="plan_name">浴衣プラン<span class="price">３,０００円</span></p>
          <p class="plan_text">
            ・浴衣レンタル<br>
            ・着付け<br>
          </p>
        </div>
        <div class="plan">
          <img src="img/plan4.jpg" alt="">
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
            <img src="img/link.png"><a class="flow_link" href="index.html#reservation">フォームはこちら</a>
          </p>
        </div>
        <div class="flow">
          <p class="flow_title" data-number="02">ご来店</p>
          <p class="flow_text">
            予約時間の５分前までにお店にお越しください。<br>
            万が一ご予約時間に遅れる際は、お電話にてご連絡いただきますよう、よろしくお願いいたします。<br>
            <img src="img/link.png"><a class="flow_link" href="index.html#access">京都駅からのアクセスはこちら</a>
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
            <option value="ンプルプラン">シンプルプラン ４,０００円</option>
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
          <img src="img/gallery1.jpg" class="gallery_sp" alt="お祈りする女性">
          <img src="img/gallery2.jpg" class="gallery_sp" alt="背を向けた女性">
          <img src="img/gallery3.jpg" class="gallery_sp" alt="チェック柄の着物を着た2人の女性">
          <img src="img/gallery4.jpg" class="gallery_sp" alt="着物を着たカップル">
          <img src="img/gallery5.jpg" class="gallery_sp" alt="淡い着物を着た女性">
          <img src="img/gallery6.jpg" class="gallery_sp" alt="おみくじを結んでお祈りする女性">
        </div>
        </div>
      <div id="insta">
        <a id="insta_link" href="https://www.instagram.com/">instagramでもっと見る</a>
      </div>
    </section>

  </main>

  <footer>
    <!-- アクセス -->
    <section id="access">
      <div id="info">
        <p id="shop_name">着物レンタル　小島</p>
        <p class="shop_info">住所：〒600-8216 京都府京都市下京区塩小路通不明門東入東塩小路町７１７−１</p>
        <p class="shop_info">京都駅中央口から徒歩5分</p>
        <p class="shop_info">電話：000-000-0000</p>
        <p class="shop_info">営業時間：9:00～20:00</p>
        <p class="shop_info">instagram：@kimonokojima</p>
      </div>
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.7717740574244!2d135.75792757575695!3d34.98738097281916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108ae35cc5255%3A0x2d926c53f55b49b2!2z44CSNjAwLTgyMTYg5Lqs6YO95bqc5Lqs6YO95biC5LiL5Lqs5Yy65aGp5bCP6Lev6YCa5LiN5piO6ZaA5p2x5YWl5p2x5aGp5bCP6Lev55S677yX77yR77yX4oiS77yRIOS6rOmDvemnheWJjeODk-ODqw!5e0!3m2!1sja!2sjp!4v1700555449564!5m2!1sja!2sjp" 
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>
    <p id="copy">&copy; kimonorental KOJIMA. All rights reserved.</p>
  </footer>
</body>


</html>

