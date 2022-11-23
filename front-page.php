<?php 
//top page
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-topMv l-wrapper">
            <div class="p-topMv__inner l-inner">
                <figure class="p-topMv__img">
                    <img src="<?php echo $uri; ?>/img/top/mv.png" alt="">
                </figure>
                <picture class="p-topMv__txt">
                    <source srcset="<?php echo $uri; ?>/img/top/mv-head-sp.svg" media="(max-width: 1000px)">
                    <img src="<?php echo $uri; ?>/img/top/mv-head.svg" alt="産業保健業務をかんたんに、一歩進める">
                </picture>
                <h1 class="p-topMv__head --green">
                    <span class="p-topMv__head--txt">健康管理システム</span><span class="p-topMv__head--welsa">WELSA</span>
                </h1>
                <a href="/referencedl/" class="p-topMv__btn c-btn-orange">資料ダウンロード</a>
            </div>
        </section>
        <section class="p-topNews l-wrapper">
            <div class="p-topNews__inner">
                <h2 class="u-en p-topNews__head">News</h2>
                <div class="p-topNews__link--wrapper">
                    <div class="p-topNews__link--inner news-slide01">
                        <?php
                            $args = array(
                                'post_type' => 'welsanews',
                                'posts_per_page' => 3,
                            );
                            $query = new WP_Query($args);
                        ?>
                        <?php if ($query->have_posts()): ?>
                        <?php while ($query->have_posts()):
                                    $query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="p-topNews__link c-link --01">
                            <span class="p-topNews__link--date"><?php echo get_the_date("Y/m/d"); ?></span>
                            <span class="p-topNews__link--ttl"><span><?php the_title(); ?></span></span>
                        </a>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <span class="p-topNews__link">お知らせがありません。</span>
                        <?php 
                            endif;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-topSv l-wrapper">
            <div class="p-topSv__inner l-inner">
                <figure class="p-topSv__img">
                    <img src="<?php echo $uri; ?>/img/top/top-sv.png" alt="">
                </figure>
                <div class="p-topSv__txts">
                    <h2 class="p-topSv__head">煩雑な産業保健業務を支援して、組織の生産性向上に貢献します。</h2>
                    <p class="p-topSv__txt">
                        WELSAは従業員と組織の「ココロとカラダ」の健康状態を集約して管理。見える化されたデータを分析、予測することで組織の健康経営をサポートします。<br>
                        健康診断・ストレスチェックなど健康管理業務の改善を起点にして、健康経営度の可視化、健康リスク改善の優先順位付け、具体的な健康改善プログラムまでを一貫して提供できる点が特徴です。
                    </p>
                </div>
            </div>
        </section>
        <section class="p-topIntroduction l-wrapper">
            <div class="p-topIntroduction__inner l-inner">
                <p class="c-head-en u-en"><span>Introduction</span></p>
                <h2 class="c-h2">WELSAができること</h2>
                <ul class="p-topIntroduction__list">
                    <li>
                        <a href="/service#about01" class="p-topIntroduction__list--link">
                            <div class="p-topIntroduction__list--inner">
                                <div class="p-topIntroduction__list--heads">
                                    <p class="p-topIntroduction__list--num u-en">01</p>
                                    <h3 class="p-topIntroduction__list--head">データ化・見える化</h3>
                                </div>
                                <p class="p-topIntroduction__list--txt">健康診断、ストレスチェック、バラバラな健康データを一元管理。再検診の対象者抽出も簡単に</p>
                            </div>
                            <picture class="p-topIntroduction__list--img">
                                <source srcset="<?php echo $uri; ?>/img/top/topIntroduction-bg01-sp.png" media="(max-width: 1000px)">
                                <img src="<?php echo $uri; ?>/img/top/topIntroduction-bg01.png" alt="">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="/service#about02" class="p-topIntroduction__list--link">
                            <div class="p-topIntroduction__list--inner">
                                <div class="p-topIntroduction__list--heads">
                                    <p class="p-topIntroduction__list--num u-en">02</p>
                                    <h3 class="p-topIntroduction__list--head">分析・予測</h3>
                                </div>
                                <p class="p-topIntroduction__list--txt">組織と従業員の健康リスク課題を分析・予測して、効率的な施策立案をサポート</p>
                            </div>
                            <picture class="p-topIntroduction__list--img">
                                <source srcset="<?php echo $uri; ?>/img/top/topIntroduction-bg02-sp.png" media="(max-width: 1000px)">
                                <img src="<?php echo $uri; ?>/img/top/topIntroduction-bg02.png" alt="">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="/service#about03" class="p-topIntroduction__list--link">
                            <div class="p-topIntroduction__list--inner">
                                <div class="p-topIntroduction__list--heads">
                                    <p class="p-topIntroduction__list--num u-en">03</p>
                                    <h3 class="p-topIntroduction__list--head">対策プログラム</h3>
                                </div>
                                <p class="p-topIntroduction__list--txt">健康リスクに対する改善プログラム等の健康増進施策を提案</p>
                            </div>
                            <picture class="p-topIntroduction__list--img">
                                <source srcset="<?php echo $uri; ?>/img/top/topIntroduction-bg03-sp.png" media="(max-width: 1000px)">
                                <img src="<?php echo $uri; ?>/img/top/topIntroduction-bg03.png" alt="">
                            </picture>
                        </a>
                    </li>
                </ul>
                <a href="/service/" class="p-topIntroduction__btn c-btn-green">WELSAとは</a>
            </div>
        </section>
        <section class="p-topSolution l-wrapper">
            <div class="p-topSolution__inner l-inner">
                <p class="c-head-en u-en"><span>Solution</span></p>
                <h2 class="c-h2">
                    健康管理に関する人事労務<br class="br-sp-only">の<br class="br-pc-only"><span class="--red">課題</span>を解決します
                </h2>
                <ul class="p-topSolution__list">
                    <li>
                        <p class="p-topSolution__list--task">
                            <span class="p-topSolution__list--taskTag">課題</span>再検査対象者の抽出と連絡に<br class="br-sp-only">時間がかかる
                        </p>
                        <div class="p-topSolution__list--contents">
                            <figure class="p-topSolution__list--img">
                                <img src="<?php echo $uri; ?>/img/top/topSolution-illust01.png" alt="">
                            </figure>
                            <div class="p-topSolution__list--txts">
                                <h3 class="p-topSolution__list--head">再受診勧奨の<br class="br-sp-only">効率化・自動化</h3>
                                <p class="p-topSolution__list--txt">
                                    再検査者者を自動で抽出して、該当者へ簡単にメールで通知することができます。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="p-topSolution__list--task">
                            <span class="p-topSolution__list--taskTag">課題</span>健康データがPDFや紙など<br class="br-sp-only">散在して探しにくい
                        </p>
                        <div class="p-topSolution__list--contents">
                            <figure class="p-topSolution__list--img">
                                <img src="<?php echo $uri; ?>/img/top/topSolution-illust02.png" alt="">
                            </figure>
                            <div class="p-topSolution__list--txts">
                                <h3 class="p-topSolution__list--head">データの一元管理</h3>
                                <p class="p-topSolution__list--txt">
                                    バラバラに管理されているデータを一元管理することで、必要な情報を即時に検索・表示可能にします。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="p-topSolution__list--task">
                            <span class="p-topSolution__list--taskTag">課題</span>紙の検診結果のファイリング・<br class="br-sp-only">データ化が手間だ
                        </p>
                        <div class="p-topSolution__list--contents">
                            <figure class="p-topSolution__list--img">
                                <img src="<?php echo $uri; ?>/img/top/topSolution-illust03.png" alt="">
                            </figure>
                            <div class="p-topSolution__list--txts">
                                <h3 class="p-topSolution__list--head">ペーパーレス化代行</h3>
                                <p class="p-topSolution__list--txt">
                                    紙の電子化はお任せください。ファイリングや電子化作業を代行して手間を削減します。
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="p-topSolution__list02">
                    <li>
                        <p class="p-topSolution__list02--task">
                            <span class="p-topSolution__list02--taskTag">課題</span>
                            健康課題の把握と<br>
                            分析ができていない
                        </p>
                        <div class="p-topSolution__list02--contents">
                            <h3 class="p-topSolution__list02--head">
                                学術的エビデンスに<br>
                                基づく評価・分析
                            </h3>
                            <p class="p-topSolution__list02--txt">
                                健康リスク分析、重大疾病リスク予測など、大学や研究所の手法に基づいて分析・予測を実施します。
                            </p>
                        </div>
                    </li>
                    <li>
                        <p class="p-topSolution__list02--task">
                            <span class="p-topSolution__list02--taskTag">課題</span>
                            健康経営優良法人の取得の<br>
                            仕方が分からない
                        </p>
                        <div class="p-topSolution__list02--contents">
                            <h3 class="p-topSolution__list02--head">
                                健康経営優良法人の<br>
                                取得を支援
                            </h3>
                            <p class="p-topSolution__list02--txt">
                                従業員の健康管理を経営的な視点で考えて実践する健康経営と、健康経営優良法人の認定をサポートします。
                            </p>
                        </div>
                    </li>
                    <li>
                        <p class="p-topSolution__list02--task">
                            <span class="p-topSolution__list02--taskTag">課題</span>
                            従業員が検診結果を参照<br>
                            活用しにくい
                        </p>
                        <div class="p-topSolution__list02--contents">
                            <h3 class="p-topSolution__list02--head">
                                従業員への情報提供が<br>
                                スマホで簡単に
                            </h3>
                            <p class="p-topSolution__list02--txt">
                                健康診断、ストレスチェック、健康リスクなどの結果を、いつでもスマホ、PCで確認できます。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-topFeature l-wrapper">
            <div class="p-topFeature__inner l-inner">
                <p class="c-head-en u-en"><span>Feature</span></p>
                <h2 class="c-h2">
                    機能
                </h2>
                <ul class="p-topFeature__list">
                    <li>
                        <figure class="p-topFeature__list--img">
                            <img src="<?php echo $uri; ?>/img/top/topFeature-illust01.png" alt="">
                        </figure>
                        <h3 class="p-topFeature__list--head">健康診断</h3>
                    </li>
                    <li>
                        <figure class="p-topFeature__list--img">
                            <img src="<?php echo $uri; ?>/img/top/topFeature-illust02.png" alt="">
                        </figure>
                        <h3 class="p-topFeature__list--head">ストレスチェック</h3>
                    </li>
                    <li>
                        <figure class="p-topFeature__list--img">
                            <img src="<?php echo $uri; ?>/img/top/topFeature-illust03.png" alt="">
                        </figure>
                        <h3 class="p-topFeature__list--head">健康リスク評価</h3>
                    </li>
                    <li>
                        <figure class="p-topFeature__list--img">
                            <img src="<?php echo $uri; ?>/img/top/topFeature-illust04.png" alt="">
                        </figure>
                        <h3 class="p-topFeature__list--head">重大疾病の発症リスク予測</h3>
                    </li>
                    <li>
                        <figure class="p-topFeature__list--img">
                            <img src="<?php echo $uri; ?>/img/top/topFeature-illust05.png" alt="">
                        </figure>
                        <h3 class="p-topFeature__list--head">安心のセキュリティ</h3>
                    </li>
                    <li>
                        <figure class="p-topFeature__list--img">
                            <img src="<?php echo $uri; ?>/img/top/topFeature-illust06.png" alt="">
                        </figure>
                        <h3 class="p-topFeature__list--head">テイラードストレス<br>マネジメントサービス</h3>
                    </li>
                </ul>
                <a href="/function/" class="p-topFeature__btn c-btn-green">機能一覧</a>
            </div>
        </section>
        <section class="p-case p-topCase l-wrapper">
            <div class="p-case__inner l-inner">
                <p class="c-head-en u-en"><span>Case Study</span></p>
                <h2 class="c-h2">
                    実際の導入効果は？<br class="br-sp-only">お客様の声
                </h2>
                <?php
                    $args02 = array(
                        'post_type' => 'excase',
                        'posts_per_page' => 3,
                    );
                    $query02 = new WP_Query($args02);
                ?>
                <?php if ($query02->have_posts()): ?>
                <ul class="p-case__list">
                    <?php while ($query02->have_posts()):
                        $query02->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <figure class="p-case__list--img">
                                <?php if(has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php else: ?>
                                <img src="<?php echo $uri; ?>/img/common/case-img.png" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </figure>
                            <div class="p-case__list--txts">
                                <h3 class="p-case__list--head">
                                    <?php the_title(); ?>
                                </h3>
                                <?php $name = get_field('name'); ?>
                                <?php if($name): ?>
                                <p class="p-case__list--name"><?php echo $name; ?></p>
                                <?php endif; ?>
                                <?php
                                    $terms = get_the_terms($post->ID, 'excase_kind');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo '<p class="p-case__list--cat">' . $term->name . '</p>';
                                        }
                                    endif;
                                ?>
                                <?php $number = get_field('number'); ?>
                                <?php if($numbaer): ?>
                                <p class="p-case__list--nop">従業員数<?php echo $number; ?>人</p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else: ?>
                    <p>まだ投稿がありません。</p>
                <?php 
                    endif;
                    wp_reset_postdata();
                ?>
                <a href="/excase/" class="p-topCase__btn c-btn-green">導入事例をもっと見る</a>
            </div>
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>