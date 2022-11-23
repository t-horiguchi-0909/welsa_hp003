<?php 
/*
Template Name: inquiry
*/
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-downloadMv c-mv l-wrapper">
            <div class="c-mv__inner l-inner">
                <div class="c-mv__contents">
                    <h1 class="c-mv__head">
                        お問い合わせ
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
                                <img src="https://welsa.biz/cms/wp-content/uploads/2022/11/img_contact.jpg" alt="">
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
<!--
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
-->
                    <p class="p-downloadContents__txt">サービスや料金プランなど不明点やご質問等ございましたら、 お気軽にお問い合わせください。</p>
                  
                </div>
                <div class="p-downloadContents__right">
                    <p class="p-downloadContents__form--head">下記フォームにご記入ください<br class="br-sp-only">（所要時間1分）</p>
                    <!--<p class="p-downloadContents__form--subHead"></p>-->
                    <p class="p-downloadContents__form--agreement">
                        <a href="https://welsa.biz/privacy/" target="_blank">個人情報の取り扱い</a>について
                    </p>
                    <div class="p-downloadContents__form--wrapper">
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                        <script data-hubspot-rendered="true">
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "8612317",
                                formId: "9a27680f-0788-4c4d-b88d-8f0e85e7b128"
                            });
                        </script>
                        <div id="hbspt-form-242635bd-b94a-46fd-b31b-4efe9a0cc016"></div>
                    </div>
                </div>
        </section>
    </main>
<?php get_footer(); ?>