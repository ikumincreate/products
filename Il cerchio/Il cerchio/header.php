<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="札幌創成川沿いにある架空のイタリアンレストラン" />
  <title>Il cerchio（イル　チェルキオ）</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

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

<?php wp_head(); ?>
</head>

</body>

<!-- PC用ナビゲーション -->
  <nav id="nav_pc">
    <a href="<?php echo home_url(); ?>" class="nav_item">Top</a>
    <a href="<?php echo home_url(); ?>#about" class="nav_item">About</a>
    <a href="<?php echo home_url(); ?>#menu" class="nav_item">Menu</a>
    <a href="<?php echo home_url(); ?>#reservation" class="nav_item">Reservation</a>
    <a href="<?php echo home_url(); ?>#blog" class="nav_item">Blog</a>
    <a href="<?php echo home_url(); ?>#access" class="nav_item">Access</a>
  </nav>

<!-- スマホ用ナビゲーションメニュー -->
  <img id="menu_sp" src="<?php echo get_template_directory_uri(); ?>/images/sp_navi.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav_sp').style.display = 'block'">
  <nav id="nav_sp">
    <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/sp_close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav_sp').style.display = 'none'">
    <a id="logo_sp" href="index.php" onclick="document.getElementById('nav_sp').style.display = 'none'">

    <div id="nav_container">
      <a class="menu" href="index.php#about"
        onclick="document.getElementById('nav_sp').style.display = 'none'">About</a>
      <a class="menu" href="index.php#menu"
        onclick="document.getElementById('nav_sp').style.display = 'none'">Menu</a>
      <a class="menu" href="index.php#reservation"
        onclick="document.getElementById('nav_sp').style.display = 'none'">Reservation</a>
      <a class="menu" href="index.php#blog"
        onclick="document.getElementById('nav_sp').style.display = 'none'">Blog</a>
      <a class="menu" href="index.php#access"
        onclick="document.getElementById('nav_sp').style.display = 'none'">Access</a>
    </div>
  </nav>

