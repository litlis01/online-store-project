<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="survey.css">
    <link rel="shortcut icon" href="images/favicon.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>スキンケア診断</title>
</head>
<body>
<div class="wrapper">
        <header class="flex">
            <p class="logotype"><a href="index.html"><img src="images/logotype.svg"></a></p>
            <input type="text" id="search" name="dami" placeholder="Search..">
            <ul class="button">
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
            </ul>
        </header>
        <div class="menu">
            <nav class="glonav">
                <a href="join.html" id="join">新規登録</a>
                <a href="login.html" id="login">ログイン</a>
                <h2>Categories</h2>
                <ul>
                    <li><a href="#">skin care</a></li>
                    <li><a href="#">face makeup</a></li>
                    <li><a href="#">eye makeup</a></li>
                    <li><a href="#">lip makeup</a></li>
                    <li><a href="#">body care</a></li>
                    <li><a href="#">hair care</a></li>
                </ul>
                <p class="logosymbol"><a href="index.html"><img src="images/symbol.svg"></a></p>
            </nav>
        </div>
        <div>
            <nav class="top-nav">
                <ul class="flex">
                    <li><a href="#">Only</a></li>
                    <li><a href="#">Best</a></li>
                    <li><a href="#">New</a></li>
                    <li><a href="#">Brand</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Event</a></li>
                </ul>
            </nav>
        </div>

    <div class="container">
        <div class="result">
            <h2><?php
            echo $_POST['username'] . "さんにピッタリのスキンケアは";
            ?></h2>
            <?php 
                echo "<h3>クレンジング</h3>";
                if ($_POST['userage'] <= 2 and $_POST['cleanser'] == 1){
                    echo "<p>メイクはしっかり落として、肌の水分感は持続できるオイルクレンザーがおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['cleanser'] == 1){
                    echo "<p>肌に優しいバームタイプまたはクリームタイプのクレンザーがおすすめ</p>";
                } else if ($_POST['userage'] <= 2 and $_POST['cleanser'] == 2){
                    echo "<p>BHA/PHA成分が入ってるてるクレンジングフォームがおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['cleanser'] == 2){
                    echo "<p>ウォータータイプのクレンザーがおすすめ</p>";
                }

                echo "<h3>化粧水</h3>";
                if ($_POST['userage'] <= 2 and $_POST['toner'] == 1){
                    echo "<p>エッセンスタイプのトナーがおすすめ<p>";
                } else if ($_POST['userage'] >= 3 and $_POST['toner'] == 1){
                    echo "<p>乳液タイプのトナーがおすすめ</p>";
                } else if ($_POST['userage'] <= 2 and $_POST['toner'] == 2){
                    echo "<p>AHA/BHA成分が入ってるてるトナーパットがおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['toner'] == 2){
                    echo "<p>AHA/BHA成分が入ってるエッセンスタイプのトナーがおすすめ</p>";
                }

                echo "<h3>美容液</h3>";
                if ($_POST['userage'] <= 2 and $_POST['serum'] == 1){
                    echo "<p>ヒアルロン酸成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['serum'] == 1){
                    echo "<p>セラミド成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] <= 2 and $_POST['serum'] == 2){
                    echo "<p>CICA成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['serum'] == 2){
                    echo "<p>EGF成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] <= 2 and $_POST['serum'] == 3){
                    echo "<p>コラーゲン成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['serum'] == 3){
                    echo "<p>アデノシン成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] <= 2 and $_POST['serum'] == 4){
                    echo "ビタミンC成分が入ってる美容液がおすすめ</p>";
                } else if ($_POST['userage'] >= 3 and $_POST['serum'] == 4){
                    echo "<p>ナイアシンアミド成分が入ってる美容液がおすすめ</p>";
                }

            ?>
        </div>
            <form action="survey.html" method="post">
                <input type="hidden" name="username" value="<?php echo $_POST['username'];?>">
                <input type="hidden" name="userage" value="<?php echo $_POST['userage'];?>">
                <input type="hidden" name="cleanser" value="<?php echo $_POST['cleanser'];?>">
                <input type="hidden" name="toner" value="<?php echo $_POST['toner'];?>">
                <input type="hidden" name="serum" value="<?php echo $_POST['serum'];?>">
                <input type="submit" value="もう一回診断してみる">
                <p class=homebtn><a href="index.html">ホームに戻る</a></p>
            </form>

            <!-- <p><input type="radio" name="serum" value="1">乾燥</p>
            <p><input type="radio" name="serum" value="2">毛穴・トラブル</p>
            <p><input type="radio" name="serum" value="3">弾力・はり・しわ</p>
            <p><input type="radio" name="serum" value="4">色むら、シミ</p> -->

            <!-- <p><input type="radio" name="toner" value="1">良い</p>
            <p><input type="radio" name="toner" value="2">良くない</p> -->

            <!-- <p><input type="radio" name="cleanser" value="1">カサカサ</p>
            <p><input type="radio" name="cleanser" value="2">テカテカ</p> -->
            <!-- <input class="username" type="text" name="username" placeholder="名前を入力してください">
            <p>恐れ入りますが年齢も教えてください</p>
            <p><input type="radio" name="userage" value="1">10代</p>
            <p><input type="radio" name="userage" value="2">20代</p>
            <p><input type="radio" name="userage" value="3">30代</p>
            <p><input type="radio" name="userage" value="4">40代以上</p>
            <p><input type="submit" value="送信"></p> -->

    </div>
</div>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

</body>
</html>