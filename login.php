<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="人気コスメセレクトショップMiamo">
    <link rel="shortcut icon" href="images/favicon.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>あなたのすべての瞬間 Miamo</title>
</head>
<body id="login_page">
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
        <div class="formContainer">
            <form>
            <h2><?php
            echo $_POST['username'] . "さんこんにちは";
            ?></h2>
                <input type="hidden" name="name" value="<?php echo $_POST['username'];?>" >
            </form>
        </div>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>