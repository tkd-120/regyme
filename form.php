<?php
session_start();

// 送信ボタンが押されたかどうか
if (isset($_POST['submit'])) { // #1

  // POSTされたデータをエスケープ処理して変数に格納
  $kinds = htmlspecialchars($_POST['kinds'], ENT_QUOTES | ENT_HTML5);
  $name  = htmlspecialchars($_POST['name'], ENT_QUOTES | ENT_HTML5);
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES | ENT_HTML5);
  $title = htmlspecialchars($_POST['title'], ENT_QUOTES | ENT_HTML5);
  $body = htmlspecialchars($_POST['body'], ENT_QUOTES | ENT_HTML5);

  $errors = []; //エラー格納用配列
  if (trim($name) === '' || trim($name) === "　") {
    $errors['name'] = "名前を入力してください";
  }
  if (trim($title) === '' || trim($title) === "　") {
    $errors['title'] = "タイトルを入力してください";
  }
  if (trim($body) === '' || trim($body) === "　") {
    $errors['body'] = "内容を入力してください";
  }
  // エラー配列がなければ完了
  if (count($errors) === 0) { // #2
    $_SESSION['kinds'] = $kinds; //⇦エスケープ処理をして値を変数に格納済みの入力値
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['title'] = $title;
    $_SESSION['body'] = $body;
    // URLは「http」or「https」に注意
    header('Location:/confirm.php');
    // header('Location:http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/confirm.php');
  } else {   // #2
    // エラー配列があればエラーを表示
    echo $errors['name'];
    echo $errors['title'];
    echo $errors['body'];
  }  // #2
}  // #1

// confirm.phpから戻ってきたときに値を保持
if (isset($_GET) && isset($_GET['action']) && $_GET['action'] === 'edit') {
  $kinds = $_SESSION['kinds'];
  $name  = $_SESSION['name'];
  $email = $_SESSION['email'];
  $title = $_SESSION['title'];
  $body  = $_SESSION['body'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/php.css">
    <title>お問い合わせフォーム</title>
</head>

<body>
    <div class="plan">

        <div class="plans">
            <h3>トレーニングプラン</h3>
            <p>
                ダイエットやボディメイクを目指す方へ。ウェイトトレーニングや自重トレーニングを集中的に行います。
            </p>
            <p>￥<span>30,000</span>/8回</p>
        </div>
        <div class="plans">
            <h3>サポートプラン</h3>
            <p>
                食事管理からダイエットやボディメイクを目指す方へ。栄養士による食事指導を含め、目的にあったトレーニングを行います。
            </p>
            <p>￥<span>60,000</span>/8回</p>
        </div>
        <div class="plans">
            <h3>ケアプラン</h3>
            <p>
                体のケアを行いたい方へ。体調や身体の状態に合わせて、最適なストレッチやケアを行います。
            </p>
            <p>￥<span>90,000</span>/8回</p>
        </div>
    </div>

    <form method="post" action="form.php">
        <div class="input">
            <p>予約種別</p>
            <div class="inputcolumn">



                <div>

                    <input type="radio" name="kinds" value="トレーニングプラン" id="trainingplan"
                        <?php if (isset($kinds) && $kinds === "トレーニングプラン") {echo "checked";} else {echo "checked";} ?>><label
                        for="trainingplan">トレーニングプラン</label>
                </div>

                <div>

                    <input type="radio" name="kinds" value="サポートプラン" id="supportplan"
                        <?php if (isset($kinds) && $kinds === "サポートプラン") {echo "checked";} ?>><label
                        for="supportplan">サポートプラン</label>
                </div>
                <div>

                    <input type="radio" name="kinds" value="ケアプラン" id="careplan"
                        <?php if (isset($kinds) && $kinds === "ケアプラン") {echo "checked";} ?>><label
                        for="careplan">ケアプラン</label>
                </div>
                <div>

                    <input type="radio" name="kinds" value="お問い合わせ" id="contact"
                        <?php if (isset($kinds) && $kinds === "お問い合わせ") {echo "checked";} ?>><label
                        for="contact">お問い合わせ</label>
                </div>
            </div>
        </div>
        <label for="name">

            <p>お名前</p>
        </label>
        <input id="name" type="text" name="name" value="<?php if (isset($name)) {echo $name;} ?>" placeholder="お名前"
            required>
        <label for="email">

            <p>メールアドレス</p>
        </label>

        <input id="email" type="email" name="email" value="<?php if (isset($email)) {echo $email;} ?>"
            placeholder="メールアドレス" required>
        <label for="title">

            <p>件名</p>
        </label>

        <input id="title" type="text" name="title" value="<?php if (isset($title)) {echo $title;} ?>"
            placeholder="（例）予約　日程の相談　など" required>
        <p>内容</p>

        <textarea id="body" type="text" name="body"
            placeholder="ご予約の場合、希望の日程、お時間、電話番号をご入力ください。その他、お問い合わせは、その内容を詳しくご入力ください。" rows="7"
            required><?php if (isset($body)) {echo $body;} ?></textarea>
        <button class="submitBtn" type="submit" name="submit" value="確認">確認</button>
    </form>
</body>

</html>