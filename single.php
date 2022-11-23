<?php 
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-single__wrapper l-wrapper">
            <div class="p-single__inner l-inner">
                <h1 class="p-single__head"><?php the_title(); ?></h1>
                <div class="p-single__contents" id="post">
                    <?php the_content(); ?>
                </div>

                <?php //--暫定CTA--
                 if(is_singular('media')):
                ?>
                <section class="inline-cta02">
                        <a href="/referencedl/" class="inline-cta02-link cta02">
                            <div class="inline-cta02-imgwrap">
                            <div class="inline-cta02-img" style="background-image: url(https://welsa.biz/cms/wp-content/uploads/2022/10/welsa_1200x675.png);"></div>
                            </div>
                            <div class="inline-cta02-wrap">
                                <div class="inline-cta02-title">産業保健業務をカンタンに！</div>
                                <div class="inline-cta02-lead">健康管理システム「WELSA」なら、バラバラに管理されている社員の健康診断結果をデータで管理。ファイリングの手間や紛失リスクを回避し、必要な情報を即時に検索・表示可能にします。</div>
                                <?php if(!empty($list1) && mb_strlen($list1) > 3) { ?>
                                <ul class="inline-cta02-list">
                                    <?php if(!empty($list1) && mb_strlen($list1) > 3) { ?>
                                        <li class="inline-cta02-list-item"><?php echo $list1 ?></li>
                                    <?php } ?>
                                    <?php if(!empty($list2) && mb_strlen($list2) > 3){ ?>
                                        <li class="inline-cta02-list-item"><?php echo $list2 ?></li>
                                    <?php } ?>
                                    <?php if(!empty($list3) && mb_strlen($list3) > 3){ ?>
                                        <li class="inline-cta02-list-item"><?php echo $list3 ?></li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                                <div class="inline-cta02-btn c-btn s-primary">資料ダウンロードはこちら</div>
                            </div>
                        </a>
                    </section>
                    <?php 
                    endif;
                    //--暫定CTA-- ?>
            </div>

            
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>