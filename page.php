<?php 
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-single__wrapper l-wrapper">
            <div class="p-single__inner l-inner">
                <div class="p-single__contents" id="post">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>