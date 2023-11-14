<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGYME</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/icon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
jQuery(document).ready(function() {
    var offset = 100;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.pagetop').fadeIn(duration);
        } else {
            jQuery('.pagetop').fadeOut(duration);
        }
    });

    jQuery('.pagetop').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
});
</script>

<body>
    <header id="header">
        <a class="headerLogo" href="#header">
            <img src="img/whitelogo.svg" alt="logo" />
        </a>
        <nav>
            <div class="menu">
                <div class="box">
                    <a href="#reserveInfomation">予約</a>
                </div>
                <div class="box">
                    <a href="#pricePlan">料金</a>
                </div>
                <div class="box">
                    <a href="#access">アクセス</a>
                </div>
                <div class="box">
                    <a href="#infomation">お問合せ</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="mainvisual">
            <img src="img/mainvisual (2).jpg" alt="mainvisual1" />
            <img src="img/mainvisual (2).jpg" alt="mainvisual1" />
            <img src="img/mainvisual (3).jpg" alt="mainvisual2" />
            <img src="img/mainvisual (4).jpg" alt="mainvisual3" />
        </div>
        <div class="title">
            <h1 class="h1Title">REGYME</h1>
            <h2 class="h2Title">成果が出るパーソナルジム</h2>
        </div>
    </main>
    <section id="reserveInfomation">
        <div class="content">
            <h1 class="contentTitleOdd">予約のご案内</h1>
        </div>
        <div class="infomation wrapper">
            <p>
                REGYMEは「成果が出るパーソナルジム」をコンセプトにコンセプトに、お客様に寄り添ったパーソナルトレーニングを提供いたします。
            </p>
            <p>
                REGYMEは8回のパーソナルトレーニングを3種類ご用意しております。ご予約をされる際は料金プランをご確認のうえ、手続きをお願いいたします。
            </p>
            <p>
                ジム内にウォーターサーバーをご用意しております。
                トレーニングウェア、トレーニングシューズの無料レンタルも行っております。
            </p>
        </div>
        <div class="reserveBtn">
            <a href="/form.php">予約はこちら</a>
        </div>
    </section>
    <section id="pricePlan">
        <div class="content">
            <h1 class="contentTitleEven">料金プラン</h1>
        </div>
        <div class="plan wrapper">
            <div class="plans">
                <h3>トレーニングプラン</h3>
                <p>
                    ダイエットやボディメイクを目指す方へ。ウェイトトレーニングや自重トレーニングを集中的に行います。
                </p>
                <p>￥<span>30,000</span>/8回</p>
                <a href="/plan.php#header">詳しく見る</a>
            </div>
            <div class="plans">
                <h3>サポートプラン</h3>
                <p>
                    食事管理からダイエットやボディメイクを目指す方へ。栄養士による食事指導を含め、目的にあったトレーニングを行います。
                </p>
                <p>￥<span>60,000</span>/8回</p>
                <a href="/plan.php#support">詳しく見る</a>
            </div>
            <div class="plans">
                <h3>ケアプラン</h3>
                <p>
                    体のケアを行いたい方へ。体調や身体の状態に合わせて、最適なストレッチやケアを行います。
                </p>
                <p>￥<span>90,000</span>/8回</p>
                <a href="/plan.php#care">詳しく見る</a>
            </div>
        </div>
    </section>
    <section id="infomation">
        <div class="content">
            <h1 class="contentTitleOdd">お問合せ</h1>
        </div>
        <div class="inquiry wrapper">
            <p>
                見学の予約も受け付けております。お電話でのお問合せも可能です。お気軽にお問い合わせください。
            </p>
            <div class="reserveBtn">
                <a href="/form.php">お問合せ</a>
            </div>
            <div class="number">
                <a href="tel:0312345678">03-1234-5678</a>
            </div>
            <table>
                <tr>
                    <th>受付時間</th>
                    <td>月曜日</td>
                </tr>
                <tr>
                    <th>定休日</th>
                    <td>9:00～20:00</td>
                </tr>
            </table>
            <p>※ご予約のキャンセルは事前にお電話にてご連絡お願いいたします。</p>
        </div>
    </section>
    <section id="access">
        <div class="contact">
            <h1 class="contentTitleEven">アクセス</h1>
        </div>
        <div class="access wrapper">
            <p>〒123-4567</p>
            <p>東京都　墨田区　押上　一丁目　1－2</p>
            <table>
                <tr>
                    <th>TEL</th>
                    <td><a href="tel:0312345678">03-1234-5678</a></td>
                </tr>
                <tr>
                    <th>OPEN</th>
                    <td>9:00～20:00</td>
                </tr>
                <tr>
                    <th>CLOSED</th>
                    <td>月曜日</td>
                </tr>
            </table>
        </div>
    </section>
    <section id="map">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6479.313243238863!2d139.80579424309326!3d35.710066690311685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ed0d12f9adf%3A0x7d1d4fb31f43f72a!2z5p2x5Lqs44K544Kr44Kk44OE44Oq44O8!5e0!3m2!1sja!2sjp!4v1681695553310!5m2!1sja!2sjp"
                width="800" height="600" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <footer class="footer">
        <div class="footerImg">
            <a href="#header">
                <img src="img/blacklogo.svg" alt="logo" />
            </a>
        </div>
        <div class="footerMenu">
            <ul>
                <li><a href="/index.php">ホーム</a></li>
                <li><a href="#reserveInfomation">予約</a></li>
                <li><a href="#pricePlan">料金</a></li>
                <li><a href="#infomation">お問合せ</a></li>
                <li><a href="#access">アクセス</a></li>
            </ul>
        </div>
        <p><small>&copy;髙田真沙斗. 2023.</small></p>
    </footer>
    <div class="pagetop">
        ↑
    </div>
</body>

</html>