<?php
// POSTリクエストから入力データを取得
$name = $_POST['user_name'];
$count = $_POST['user_count'];
$day = $_POST['hope_day'];
$firsttime = $_POST['first_time'];
$secondtime = $_POST['second_time'];
$plan = $_POST['hope_plan'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['message'];
?>

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
        <a href="index.html#rental_flow">レンタルの流れ</a>
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
      onclick="document.getElementById('nav_sp').style.display = 'none'">レンタルの流れ</a>
    <a class="menu" href="index.html#reservation"
      onclick="document.getElementById('nav_sp').style.display = 'none'">ご予約</a>
    <a class="menu" href="index.html#gallery"
      onclick="document.getElementById('nav_sp').style.display = 'none'">ギャラリー</a>
    <a class="menu" href="index.html#access"
      onclick="document.getElementById('nav_sp').style.display = 'none'">アクセス</a>
  </nav>
  </header>

  <main>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「申し込む」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>お名前</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>着付人数</td>
            <td><?php echo $count; ?></td>
        </tr>
        <tr>
            <td>希望日</td>
            <td><?php echo $day; ?></td>
        </tr>
        <tr>
            <td>希望時間（第一希望）</td>
            <td><?php echo $firsttime; ?></td>
        </tr>
        <tr>
            <td>希望時間（第二希望）</td>
            <td><?php echo $secondtime; ?></td>
        </tr>
        <tr>
            <td>希望プラン</td>
            <td><?php echo $plan; ?></td>
        </tr>
        <tr>
            <td>お電話番号</td>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>お問い合わせ・ご要望</td>
            <td><?php echo $message; ?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">申し込む</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
  </main>
</body>

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

</html>