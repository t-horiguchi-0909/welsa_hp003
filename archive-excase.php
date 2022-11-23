<?php 
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-caseMv c-mv l-wrapper">
            <div class="c-mv__inner l-inner">
                <div class="c-mv__contents">
                    <h1 class="c-mv__head">導入事例</h1>
                    <p class="c-mv__txt">
                        WELSAを導入いただいた企業様の<br>
                        活用事例をご紹介します
                    </p>
                </div>
            </div>
        </section>
        <section class="p-caseContents l-wrapper">
            <div class="p-caseContents__inner l-inner">
                <?php if( have_posts() ): ?>
                <ul class="p-case__list">
                    <?php while ( have_posts() ) : the_post(); ?>
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
                                <?php if($number): ?>
                                <p class="p-case__list--nop">従業員数<?php echo $number; ?>人</p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else: ?>
                    <p>まだ投稿がありません。</p>
                <?php endif ?>
                <div class="p-case__pagination">
                    <!-- <a href="" class="p-case__pagination--btn --prev"></a>
                    <a href="" class="p-case__pagination--btn">1</a>
                    <a href="" class="p-case__pagination--btn">2</a>
                    <a href="" class="p-case__pagination--btn">3</a>
                    <span class="p-case__pagination--btn --active">4</span>
                    <a href="" class="p-case__pagination--btn --next"></a> -->
                    <?php echo paginate_links( array ( 'type' => 'list',
                        'mid_size' => 2,
                        'prev_text' => '',
                        'next_text' => ''
                    )); ?>
                </div>
            </div>
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>