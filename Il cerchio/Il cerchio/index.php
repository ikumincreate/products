<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="札幌創成川沿いにある架空のイタリアンレストラン" />
  <title>Il cerchio（イル　チェルキオ）</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="style.css">

  <!-- メインフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=M+PLUS+Rounded+1c:wght@100&family=Noto+Sans+JP:wght@100;200;300;400;500&family=Sawarabi+Gothic&display=swap" rel="stylesheet">

  <!-- セクションタイトルフォント --> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic&family=Josefin+Sans:wght@100&family=Kiwi+Maru:wght@300&family=M+PLUS+1p&family=Pattaya&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap" rel="stylesheet">
</head>

<body>

<!-- PC用ナビゲーション -->
  <nav id="nav_pc">
    <a href="">Top</a>
    <a href="">About</a>
    <a href="">Menu</a>
    <a href="">Reservation</a>
    <a href="">Blog</a>
    <a href="">Access</a>
  </nav>

  <!-- TODO SP用navi -->
  <!-- TODO ハンバーガーメニューを自作する -->

  <!-- トップ画像 -->
  <div class="main_container">
    <div class="main_inner">
      <div class="section_title">
        trattoria <br>Il cerchio</div>
    </div>
    <div class="main_inner">
    <!-- TODO プラグインMeta Sliderで1枚ずつスライド表示させる -->
      <img src="images/main1.png" class="main_img" alt="メイン画像 ピザ">
      <img src="images/main2.png" class="main_img" alt="メイン画像 お店の外観">
      <img src="images/main3.png" class="main_img" alt="メイン画像 ワインと肉料理">
    </div>
  </div>
  <!-- 店の紹介文 -->
  <section id="about">
  Il cerchio（イル　チェルキオ）は家族や仲間と”輪”になって楽しんでいただける料理と空間を
  コンセプトに2023年に札幌狸小路の東側・創成川沿いにオープンしました。
  厳選した道産食材をつかった自慢のイタリアンメニューをお楽しみください。
  </section>

  <!-- 店内の写真 -->
  <img src="images/bistro.png" alt="お店の店内">

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
  <img src="images/menu1.png" alt="カプレーゼ">
  <img src="images/menu2.png" alt="サーモンのカルパッチョ">
  <img src="images/menu3.png" alt="ボロネーゼ">
  <img src="images/menu4.png" alt="豚肉のロースト">
  <img src="images/menu5.png" alt="カタラーナ">
  <img src="images/menu6.png" alt="ワインとアラカルト">

  

  <!-- 予約はこちらから -->  
  <section id="reservation">
    <div class="section_title">Reservation</div>
    ご予約はこちらから
  </section>


  <!-- ブログ -->
  <section id="blog">
    <div class="section_title">Blog</div>
    大通の秋の味覚に参加します！
    2023.9.1
    大通で開催される「札幌オータムフェスト2023」に参加させていただくことになりました！…<br>
    <img src="images/blog1.png" alt="札幌大通の写真">

    富良野へ
    2023.8.25
    いつもお世話になっている農家さんにお会いするために富良野へ行ってきました。その帰りに…<br>
    <img src="images/blog2.png" alt="富良野の花畑">
    <br>
    一覧
  </section>


</body>

<footer>
  <section id="access">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364.4004965762741!2d141.3580290384819!3d43.058177445755824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29824f0c18b3%3A0x623659729cc19874!2z6YWS6I-c44KEIOOBiuOBn-OBteOBjw!5e0!3m2!1sja!2sjp!4v1702130648089!5m2!1sja!2sjp" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    trattoria Il cerchio(トラットリア  イル  チェルキオ)
    〒000-0000 北海道札幌市中央区南３条東１丁目７−２
    札幌大通駅34番出口（丸井今井札幌さんビル）から徒歩5分
    営業時間...17：00-22:30 (L.O 21:30)
    定休日...毎週火曜日
  </section>
</footer>

</html>