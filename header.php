<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>サイトタイトル</title>
        <meta name="description" content="ディスクリプションを入力">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Montserrat:wght@400;500;600&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet "href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/scripts.min.js"></script>
        <?php wp_head(); ?>
    </head>  
    <body>
        <header class="header">
            <div class="header__wrap">
                <div class="header__logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="">
                    </a>
                    <p>Mika Terada</p> 
                </div>
                <!-- スマホ用グローバルメニュー -->
                <nav class="header__g-nav-sp">
                    <ul>
                    <li><a href="/about/">ABOUT</a></li>
                    <li><a href="/works/">WORKS</a></li>
                    <li><a href="/contact/">CONTACT</a></li>
                </nav>
                <!-- PC用グローバルメニュー -->
                <nav class="header__g-nav-pc">
                    <ul>
                    <li><a href="/about/">ABOUT</a></li>
                    <li><a href="/works/">WORKS</a></li>
                    <li><a href="/contact/">CONTACT</a></li>
                </nav>
                <!-- スマホのみ表示のハンバーガーメニュー -->
                <button class="sp__hamburger-menu">
                    <span class="bar bar__top"></span>
                    <span class="bar bar__mid"></span>
                    <span class="bar bar__bottom"></span>
                </button>
            </div>   
        </header>
