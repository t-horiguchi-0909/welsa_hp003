<?php $uri = get_theme_file_uri(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php echo $uri; ?>/js/viewport.js"></script>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo $uri; ?>/css/reset.min.css" media="all">
<!-- <link rel='stylesheet' href='https://welsa.biz/cms/wp-content/themes/astra/assets/css/minified/frontend.min.css' media='all'> -->
<link rel="stylesheet" href="<?php echo $uri; ?>/css/style.css" media="all">
<?php if ( is_home() || is_front_page() ) : ?>
<link rel="stylesheet" href="<?php echo $uri; ?>/css/top.css" media="all">
<?php else: ?>
<link rel="stylesheet" href="<?php echo $uri; ?>/css/lower.css" media="all">
<?php endif; ?>
<?php if ( is_archive() || is_single()|| is_tax()) :?>
<link rel="stylesheet" href="<?php echo $uri; ?>/css/case.css" media="all">
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="js-hamburger">
    <header>
        <div class="p-header__inner">
            <a href="/" class="p-header__logo c-link">
                <img src="<?php echo $uri; ?>/img/common/logo_welsa.svg" alt="WELSA">
            </a>
            <ul class="p-header__nav js-hamburger">
                <li><a href="/service/" class="p-header-link">WELSAとは</a></li>
                <li><a href="/function/" class="p-header-link">機能</a></li>
                <li><a href="/excase/" class="p-header-link">導入事例</a></li>
                <li><a href="/welsanews/" class="p-header-link">ニュース</a></li>
                <li><a href="/price/" class="p-header-link">料金プラン</a></li>
                <li class="p-header__nav--info">
                    <span class="p-header__nav--infoHead">お役立ち情報</span>
                    <ul class="p-header__nav02">
                        <li><a href="/media/">お役立ち記事</a></li>
                        <li><a href="/whitepaper/">お役立ち資料</a></li>
                    </ul>
                </li>
                <li><a href="/referencedl/" class="p-header__btn c-btn-orange">資料ダウンロード</a></li>
            </ul>
            <div class="p-hamburger sp-only js-hamburger">
                <div class="p-hamburger__trigger js-hamburger js-hamburger-btn">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>