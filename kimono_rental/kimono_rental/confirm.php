<?php get_header();?>

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


  <main>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「申し込む」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table class="confirm_table">
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

    <div id="btn_set">
      <button onclick="location.href='complete.php';" class="btn">申し込む</button>
      <button onclick="history.back();" class="btn">キャンセル</button>
    </div>
  </main>

<?php get_footer(); ?>
</body>

