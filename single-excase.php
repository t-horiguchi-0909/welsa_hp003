<?php 
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
<?php 
    $name = get_field('name');
    $number = get_field('number');
    $logo = get_field('logo');
    $point01 = get_field('point01');
    $point02 = get_field('point02');
    $point03 = get_field('point03');
    $point04 = get_field('point04');
    $point05 = get_field('point05');
?>
    <main>
        <section class="p-single__wrapper l-wrapper">
            <div class="p-single__inner">
                <h1 class="p-single__head"><?php the_title(); ?></h1>
                <?php if(has_post_thumbnail()): ?>
                <figure class="p-single__img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </figure>
                <?php endif; ?>
                <div class="p-single__info">
                    <?php if($logo): ?>
                        <figure class="p-single__info--logo">
                            <img src="<?php echo $logo; ?>" alt="">
                        </figure>
                    <?php else: ?>
                        <div class="p-single__info--logo"></div>
                    <?php endif; ?>
                    <div class="p-single__info--txts">
                        <?php if($name): ?>
                        <dl>
                            <dt>社名</dt>
                            <dd class="p-single__info--name"><?php echo $name; ?></dd>
                        </dl>
                        <?php endif; ?>
                        <?php
                            $terms = get_the_terms($post->ID, 'excase_kind');
                            if ($terms) :
                        ?>
                        <dl>
                            <dt>業種</dt>
                        <?php foreach ($terms as $term) {
                            echo '<dd>' . $term->name . '</dd>';
                        } ?>
                        <?php endif; ?>
                        </dl>
                        <?php if($number): ?>
                        <dl>
                            <dt>業種</dt>
                            <dd><?php echo $number; ?>名</dd>
                        </dl>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($point01): ?>
                <div class="p-single__point">
                    <h2 class="p-single__point--head">ポイント</h2>
                    <ul class="p-single__point--list">
                        <li><?php echo $point01; ?></li>
                        <?php if($point02): ?>
                        <li><?php echo $point02; ?></li>
                        <?php endif; ?>
                        <?php if($point03): ?>
                        <li><?php echo $point03; ?></li>
                        <?php endif; ?>
                        <?php if($point04): ?>
                        <li><?php echo $point04; ?></li>
                        <?php endif; ?>
                        <?php if($point05): ?>
                        <li><?php echo $point05; ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="p-single__contents" id="post">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
        <section class="p-caseSingle__recommend l-wrapper">
            <div class="p-caseSingle__recommend--inner l-inner">
                <h2 class="p-caseSingle__recommend--head">こちらの事例もあわせて<br class="br-sp-only">読まれています。</h2>
                <?php
                    $args = array(
                        'post_type' => 'excase',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()): ?>
                <ul class="p-case__list">
                    <?php while ($query->have_posts()):
                        $query->the_post();
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
                                <?php $name02 = get_field('name'); ?>
                                <?php if($name02): ?>
                                <p class="p-case__list--name"><?php echo $name02; ?></p>
                                <?php endif; ?>
                                <?php
                                    $terms = get_the_terms($post->ID, 'excase_kind');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo '<p class="p-case__list--cat">' . $term->name . '</p>';
                                        }
                                    endif;
                                ?>
                                <?php $number02 = get_field('number'); ?>
                                <?php if($number02): ?>
                                <p class="p-case__list--nop">従業員数<?php echo $number02; ?>人</p>
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
                <a href="/excase/" class="p-caseSingle__recommend--btn c-btn-green02"><span class="c-btn-green02__txt">他の導入事例</span><span class="c-btn-green02__bg"></span></a>
            </div>
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>