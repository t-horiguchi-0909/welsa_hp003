<?php 
/*
Template Name: blogall
*/
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-caseMv c-mv l-wrapper">
            <div class="c-mv__inner l-inner">
                <div class="c-mv__contents">
                    <h1 class="c-mv__head">全記事一覧</h1>
                </div>
            </div>
        </section>
        <section class="p-caseContents l-wrapper">
            <div class="p-caseContents__inner l-inner">
                
            <ul class="p-case__list blogall">
   <?php
     $paged = get_query_var('paged') ?: 1; //ページネーションを使いたいなら指定
     $args = array(
      'paged' => $paged, //ページネーションを使いたいなら指定
      'posts_per_page' => 9999, //記事の出力数
      'post_status' => 'publish', //公開の記事だけ
      'post_type' => 'media', //カスタム投稿slag
      'orderby' => 'date', //日付を出力する基準
      'order' => 'DESC' //表示する順番（逆はASC）
                            
     );
                            
     $the_query = new WP_Query( $args );
     if ( $the_query->have_posts() ) :
     ?>
                    
     <?php global $previousday; //この表記と$previousday = '';で同じ日付の投稿でも表示される
       while ( $the_query->have_posts() ) : $the_query->the_post();
       $previousday = '';
     //-------- ここから繰り返し---------- 
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
                                <?php if($number): ?>
                                <p class="p-case__list--nop">従業員数<?php echo $number; ?>人</p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </li>
     <?php //-------- 繰り返しここまで-----------
     endwhile; ?>
                    
     <?php //-------- WP_query終了-----------
                 wp_reset_postdata();      
     endif; ?>
</ul>
           
            </div>

        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>