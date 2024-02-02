<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="EDA,AI,IOT,エレクトロニクス" />
  <title>kojima eDesign office</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">

  <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" /> -->
  <!-- <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/style.css" rel="stylesheet" type="text/css" /> -->
  <link rel="stylesheet" type="text/css" href="style.css" />

  <!-- 使用フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
</head>

<body>

<header>
  <div id="main_container">
    <!-- PCナビゲーション -->
    <nav id="nav_pc">
      <div id="nav_pc_item">
        <a href="" class="nav_item">Top</a>
        <a href="#about_us" class="nav_item">About us</a>
        <a href="#profile" class="nav_item">Profile</a>
        <a href="#topics&archive" class="nav_item">Topics&Archive</a>
        <a href="#contact" class="nav_item">Contact</a>
      </div>
    </nav>

    <!-- スマホナビゲーション -->
    <img id="menu_sp" src="images/menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav_sp').style.display = 'block'">
    <nav id="nav_sp">
      <img id="close" src="images/close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav_sp').style.display = 'none'">
      <a id="logo_sp" href="index.php" onclick="document.getElementById('nav_sp').style.display = 'none'">

      <div id="nav_sp_container">
        <ul>
          <li><a class="menu" href="index.php#"
            onclick="document.getElementById('nav_sp').style.display = 'none'">Top</a></li>
          <li><a class="menu" href="index.php#about_us"
            onclick="document.getElementById('nav_sp').style.display = 'none'">About us</a></li>
          <li><a class="menu" href="index.php#profile"
            onclick="document.getElementById('nav_sp').style.display = 'none'">Profile</a></li>
          <li><a class="menu" href="index.php#topics&archive"
            onclick="document.getElementById('nav_sp').style.display = 'none'">Topics&Archive</a></li>
          <li><a class="menu" href="index.php#contact"
            onclick="document.getElementById('nav_sp').style.display = 'none'">Contact</a></li>
        </ul>
      </div>
    </nav>

    <div id="title">
      <div class="main_title">KOJIMA eDesign office</div>
      <div class="main_subtitle">Insights into Emerging Technologies</div>
    </div>
  </div>
</header>

<main>
<section id="about_us">
  <div class="heading">About us</div>
  <div class="lead">エレクトロニクスの先端技術に関わるビジネスコンサルティングを行っています</div>
  <div id="aboutus_containter">
    <div class="aboutus_inner">
      <div class="aboutus_img">
        <img src="images/aboutus1.png" alt="仮画像">
      </div>
      <p class="aboutus_heading">Strategic Marketing</p>
      <p class="aboutus_lead">ハイテク製品の技術マーケティング</p>
    </div>
    <div class="aboutus_inner">
      <div class="aboutus_img">
        <img src="images/aboutus2.png" alt="仮画像">
      </div>
      <p class="aboutus_heading">Design Environment</p>
      <p class="aboutus_lead">標準設計記述言語による設計環境の開発</p>
    </div>
    <div class="aboutus_inner">
      <div class="aboutus_img">
        <img src="images/aboutus3.png" alt="仮画像">
      </div>
      <p class="aboutus_heading">Emerging Markets</p>
      <p class="aboutus_lead">AI、IoTとBig Data解析等の新技術による市場開拓</p>
    </div>
  </div>
</section>

<section id="profile">
  <div class="heading">Profile</div>
  <div id="profile_container">
    <div class="profile_inner">
      <img src="images/test.jpg" alt="仮画像"><!-- TODO 自画像写真 -->
    </div>
    <div class="profile_inner">
      <div id="name">小島  聡 Satoshi Kojima</div>
      <ul class="profile_heading">職歴</ul>
        <li class="profile_list">1980年 日立製作所入社、ＬＳＩ設計技術開発に従事</li>
        <li class="profile_list">2002年 メンターグラフィックス入社、ＬＳＩ設計ツールの技術統括</li>
        <li class="profile_list">2007年 ＮＥＣシステムテクノロジー入社、設計ツール／設計サービス事業統括</li>
        <li class="profile_list">2015年 コジマイーデザインオフィス開業、現在代表</li>
      <ul class="profile_heading">国際標準化活動</ul>
        <li class="profile_list">IEC TC91(電子実装技術) WG12国際コンベナー</li>
      <ul class="profile_heading">ボランティア活動</ul>
        <li class="profile_list">サッカー3級審判員</li>
    </div>
  </div>

</section>

<section id="topics&archive">
  <div class="heading">Topics&Archive</div>
  <div class="lead">エレクトロニクスに関する技術情報、国際学会や講演会の記事を掲載していきます</div>
  <div id="topic_archive_container">
    <div class="topic_archive_inner">
      <div class="topic_archive_item">
        <img src="images/test.jpg" alt="仮画像">
        <div class="topic_archive_title">タイトル</div>
      </div>
    </div>
    <div class="topic_archive_inner">
      <div class="topic_archive_item">
        <img src="images/test.jpg" alt="仮画像">
        <div class="topic_archive_title">タイトル</div>
      </div>
    </div>
    <div class="topic_archive_inner">
      <div class="topic_archive_item">
        <img src="images/test.jpg" alt="仮画像">
        <div class="topic_archive_title">タイトル</div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="heading">Contact</div>
  <div class="lead">ご質問・お問い合わせがございましたら、下記よりご連絡ください</div>
  <!-- TODO 問い合わせフォームボタン -->
</section>
</main>

<footer>
<p id="copyright">Copyright © 2015-<?php echo date("Y");?> KOJIMA edesign office inc. All Rights Reserved.</p>
</footer>



</body>
</html>

