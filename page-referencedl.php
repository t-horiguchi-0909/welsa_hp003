<?php 
/*
Template Name: download
*/
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-downloadMv c-mv l-wrapper">
            <div class="c-mv__inner l-inner">
                <div class="c-mv__contents">
                    <h1 class="c-mv__head">
                        WELSA<br>
                        サービス紹介資料<br class="br-sp-only">ダウンロード
                    </h1>
                </div>
            </div>
        </section>
        <section class="p-downloadContents l-wrapper">
            <div class="p-downloadContents__inner">
                <div class="p-downloadContents__left">
                    <ul class="p-downloadContents__slider">
                        <li class="js-slide01 js-slide js-active">
                            <figure>
                                <img src="https://welsa.biz/cms/wp-content/uploads/2022/11/welsa_960x600.png" width="480" height="300" alt="">
                            </figure>
                        </li>
                        <li class="js-slide02 js-slide">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide01.png" alt="">
                            </figure>
                        </li>
                        <li class="js-slide03 js-slide">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide02.png" alt="">
                            </figure>
                        </li>
                        <li class="js-slide04 js-slide">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide03.png" alt="">
                            </figure>
                        </li>
                    </ul>
                    <?php /*-- ?>
                    <ul class="p-downloadContents__slider02">
                        <li class="js-slide01-thumb js-slide-thumb js-active">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide.png" alt="">
                            </figure>
                        </li>
                        <li class="js-slide02-thumb js-slide-thumb">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide01.png" alt="">
                            </figure>
                        </li>
                        <li class="js-slide03-thumb js-slide-thumb">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide02.png" alt="">
                            </figure>
                        </li>
                        <li class="js-slide04-thumb js-slide-thumb">
                            <figure>
                                <img src="<?php echo $uri; ?>/img/common/slide03.png" alt="">
                            </figure>
                        </li>
                    </ul>
                    <?php --*/ ?>
                    <p class="p-downloadContents__txt">健康管理システム「WELSA」の特徴・機能をまとめたサービス紹介資料です。この資料で下記のことがわかります。</p>
                    <ul class="p-downloadContents__list">
                        <li>健康管理システム「WELSA」で出来ること</li>
                        <li>WELSAの機能や導入メリット</li>
                    </ul>
                </div>
                <div class="p-downloadContents__right">
                    <p class="p-downloadContents__form--head">下記フォームにご記入ください<br class="br-sp-only">（所要時間1分）</p>
                    <p class="p-downloadContents__form--subHead">フォーム送信完了後、資料のダウンロード画面が表示されます。</p>
                    <p class="p-downloadContents__form--agreement">
                        <a href="https://welsa.biz/privacy/" target="_blank">個人情報の取り扱い</a>について
                    </p>
                    <div class="p-downloadContents__form--wrapper">
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                        <script data-hubspot-rendered="true">
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "8612317",
                                formId: "641fb8eb-f101-4f69-9f5f-a83917e59f11"
                            });
                        </script>
                        <div id="hbspt-form-242635bd-b94a-46fd-b31b-4efe9a0cc016"></div>
                    </div>
                </div>
        </section>
    </main>
<?php get_footer(); ?>