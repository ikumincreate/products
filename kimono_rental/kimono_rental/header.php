<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="京都にある着物レンタルサービス店のサイトです。" />
  <title>着物レンタル 小島</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <!-- <link rel="stylesheet" href="style.css"> -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=M+PLUS+Rounded+1c:wght@100&family=Noto+Sans+JP:wght@100;200;500&family=Sawarabi+Gothic&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body>
  <header>
  <!-- ナビゲーションメニュー -->
  <!-- PC用ナビゲーションメニュー -->
  <a href="/" id="logo" ><img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.png" alt="トップページに戻る"></a>
  <nav id="nav_pc">
    <a href="<?php echo home_url(); ?>#rental_plan">レンタルプラン</a>
    <a href="<?php echo home_url(); ?>#rental_flow">レンタルの流れ</a>
    <a href="<?php echo home_url(); ?>#reservation">ご予約</a>
    <a href="<?php echo home_url(); ?>#gallery">ギャラリー</a>
    <a href="<?php echo home_url(); ?>#access">アクセス</a>
  </nav>


  <!-- スマホ用ナビゲーションメニュー -->
  <img id="menu_sp" src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav_sp').style.display = 'block'">
  <!-- <img id="menu_sp" src="images/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav_sp').style.display = 'block'"> -->
  <nav id="nav_sp">
    <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav_sp').style.display = 'none'">
    <!-- <img id="close" src="images/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav_sp').style.display = 'none'"> -->
    <a id="logo_sp" href="index.php" onclick="document.getElementById('nav_sp').style.display = 'none'">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.png" alt="トップページに戻る" />
      <!-- <img src="images/logo.png" alt="トップページに戻る"></a> -->

    <a class="menu" href="index.php#rental_plan"
      onclick="document.getElementById('nav_sp').style.display = 'none'">レンタルプラン</a>
    <a class="menu" href="index.php#rental_flow"
      onclick="document.getElementById('nav_sp').style.display = 'none'">レンタルの流れ</a>
    <a class="menu" href="index.php#reservation"
      onclick="document.getElementById('nav_sp').style.display = 'none'">ご予約</a>
    <a class="menu" href="index.php#gallery"
      onclick="document.getElementById('nav_sp').style.display = 'none'">ギャラリー</a>
    <a class="menu" href="index.php#access"
      onclick="document.getElementById('nav_sp').style.display = 'none'">アクセス</a>
  </nav>
  </header>
