<?php
session_start();   //SESSIONを使うときは最初にスタートさせる

if (isset($_SESSION['kinds'])) {
  $kinds = $_SESSION['kinds'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $title = $_SESSION['title'];
  $body = $_SESSION['body'];
}
// ここにトークンを生成するコードを記述
$token = sha1(uniqid(mt_rand(), true));
$_SESSION['token'] = $token;

// $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(48));
// $token = htmlspecialchars($_SESSION['token'], ENT_QUOTES);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/php.css">
    <title>確認画面</title>
</head>

<body>
    <div class="form-container l-confirm">
        <h2>お問い合わせ内容確認</h2>
        <table class="confirm-table">
            <tr>
                <th>種別</th>
                <td><?php echo $kinds; ?></td>
            </tr>
            <tr>
                <th>お名前</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>アドレス</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>件名</th>
                <td><?php echo $title; ?></td>
            </tr>
            <tr>
                <th>内容</th>
                <td><?php echo nl2br($body); ?></td>
            </tr>
        </table>
        <p> こちらの内容で送信してもよろしいですか？</p>
        <!-- POSTの送信先はsend.phpであることに注意してください -->
        <form method="post" action="send.php">
            <input type="hidden" name="token" value="<?php echo $token ?>">
            <button class="c-btn c-btn_link"><a href="form.php?action=edit">戻る</a></button>
            <button class="c-btn c-form" type="submit" value="送信">送信</button>
        </form>
    </div>
</body>

</html>