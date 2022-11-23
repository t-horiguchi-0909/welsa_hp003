<?php 
/*
Template Name: about
*/
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-aboutMv c-mv l-wrapper">
            <div class="p-aboutMv__inner c-mv__inner l-inner">
                <div class="c-mv__contents">
                    <h1 class="p-aboutMv__head">WELSAの３つの特長</h1>
                    <ul class="p-aboutMv__list">
                        <li>データ化・見える化</li>
                        <li>分析・予測</li>
                        <li>対策プログラム</li>
                    </ul>
                </div>
                <figure class="p-aboutMv__img">
                    <img src="<?php echo $uri; ?>/img/about/mv.png" alt="">
                </figure>
            </div>
        </section>
        <section class="p-aboutSv l-wrapper">
            <div class="p-aboutSv__inner l-inner">
                <div class="p-aboutSv__left">
                    <h2 class="p-aboutSv__head">健康管理のDX化を推進</h2>
                    <p class="p-aboutSv__txt">
                        WELSAは、煩雑な産業保健業務を支援し、従業員と組織の「ココロとカラダ」の健康状態の把握、分析、予測をすることで企業の健康経営をサポートします。<br>
                        <br>
                        健康管理業務の改善を起点にして、健康経営度の可視化、健康リスク改善の優先順位付け、具体的な健康改善プログラムまでを一貫して提供できる点が特徴です。
                    </p>
                </div>
                <div class="p-aboutSv__right">
                    <h3 class="p-aboutSv__subHead">
                        WELSAの提供サービス
                    </h3>
                    <picture class="p-aboutSv__img">
                        <source srcset="<?php echo $uri; ?>/img/about/about-table-sp.png" media="(max-width: 1000px)">
                        <img src="<?php echo $uri; ?>/img/about/about-table.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="p-aboutContents --01 l-wrapper" id="about01">
            <div class="p-aboutContents__inner l-inner">
                <div class="p-aboutContent">
                    <picture class="p-aboutContent__img">
                        <source srcset="<?php echo $uri; ?>/img/about/about-img01-sp.png" media="(max-width: 1000px)">
                        <img src="<?php echo $uri; ?>/img/about/about-img01.png" alt="">
                    </picture>
                    <div class="p-aboutContent__txts">
                        <span class="p-aboutContent__num">01</span>
                        <p class="p-aboutContent__subhead"><span>データ化・見える化</span></p>
                        <h2 class="p-aboutContent__head">健康診断、ストレスチェック、バラバラな健康データを一元管理。再検診の対象者抽出も簡単に</h2>
                        <p class="p-aboutContent__txt">産業保険スタッフ、人事の健康管理に関する作業を軽減して業務を効率化します。健康診断、ストレスチェックなどバラバラな健康データを一元化して、データの見える化を実現。紙のデータはペーパーレス化を代行します。再検診の対象者や未受診者の抽出・管理や該当者の通知もメールで簡単にできます。</p>
                    </div>
                </div>
                <div class="p-aboutContents__functions">
                    <h3 class="p-aboutContents__functions--head">
                        関連機能
                    </h3>
                    <div class="p-aboutContents__functions--btns">
                        <a href="/function#health-care" class="p-aboutContents__functions--btn">健康診断</a>
                        <a href="/function#stress" class="p-aboutContents__functions--btn">ストレスチェック</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-aboutContents --02 l-wrapper" id="about02">
            <div class="p-aboutContents__inner l-inner">
                <div class="p-aboutContent">
                    <picture class="p-aboutContent__img">
                        <source srcset="<?php echo $uri; ?>/img/about/about-img02-sp.png" media="(max-width: 1000px)">
                        <img src="<?php echo $uri; ?>/img/about/about-img02.png" alt="">
                    </picture>
                    <div class="p-aboutContent__txts">
                        <span class="p-aboutContent__num">02</span>
                        <p class="p-aboutContent__subhead"><span>分析・予測</span></p>
                        <h2 class="p-aboutContent__head">
                            組織と従業員の健康リスク課題を分析・予測して、効率的な施策立案をサポート
                        </h2>
                        <p class="p-aboutContent__txt">
                            学術的エビデンスに基づいた健康リスク分析等によって、組織と従業員の健康課題を分析します。課題の分析と予測から健康改善の優先順位付けが可能になります。また、健康経営度の可視化によって、健康課題の解決につながる施策立案をサポート。健康経営のPDCAサイクルを推進します。
                        </p>
                    </div>
                </div>
                <div class="p-aboutContents__functions">
                    <h3 class="p-aboutContents__functions--head">
                        関連機能
                    </h3>
                    <div class="p-aboutContents__functions--btns">
                        <a href="/function#analysis" class="p-aboutContents__functions--btn">健康リスク分析</a>
                        <a href="/function#analysis-risk" class="p-aboutContents__functions--btn">重大疾病の発症リスク予測</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-aboutContents --03 l-wrapper" id="about03">
            <div class="p-aboutContents__inner l-inner">
                <div class="p-aboutContent">
                    <picture class="p-aboutContent__img">
                        <source srcset="<?php echo $uri; ?>/img/about/about-img03-sp.png" media="(max-width: 1000px)">
                        <img src="<?php echo $uri; ?>/img/about/about-img03.png" alt="">
                    </picture>
                    <div class="p-aboutContent__txts">
                        <span class="p-aboutContent__num">03</span>
                        <p class="p-aboutContent__subhead"><span>対策プログラム</span></p>
                        <h2 class="p-aboutContent__head">健康リスクに対する改善プログラム等の健康増進施策を提案</h2>
                        <p class="p-aboutContent__txt">健康課題に応じた改善プログラムの提供により、効果の高い健康増進施策支援を実現します。Welsaでは豊富な健康セミナー、フィットネスアプリなどのコンテンツを保有。「やりっぱなし」で終わらせず導入効果の測定も可能です。</p>
                    </div>
                </div>
                <div class="p-aboutContents__functions">
                    <h3 class="p-aboutContents__functions--head">
                        関連機能
                    </h3>
                    <div class="p-aboutContents__functions--btns">
                        <a href="/function#BfB" class="p-aboutContents__functions--btn">Beatfit for Biz</a>
                        <a href="/function#game" class="p-aboutContents__functions--btn">すごろく健康大冒犬</a>
                        <a href="/function#seminar" class="p-aboutContents__functions--btn">健康セミナー</a>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>