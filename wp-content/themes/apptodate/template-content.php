<?php 
/*
    *
    Template Name: Single Template
    */
    get_header('single');
?>
<div class="padding10 blog_detail_heading_padding_left_right">
        <div class="container clrbth tpdiv p20 rtl">
            <div class="back_white">
                <h1 class="bold font40 margin_right_10"><?php //echo $post->post_title; ?></h1>

                <div class="mt20 blog_video">

                    <div class="cuspad">
                        <div class="dis_inline pull-right img_left_margin_blog">
                            <?php $author_image = get_field('author_image'); ?>
                            <img src="<?php echo $author_image;  ?>" class="posttype">
                        </div>

                        <div class="dis_inline">
                            <h4 class="bold mt20 text44"><?php the_field('post_written'); ?></h4>
                            <?php
                                $post_date = get_the_date('d-m-y');; 
                            ?>
                            <p class="semibold"><?php echo $post_date;; ?></p>
                        </div>
                    </div>

                    <div>
                    <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); 
                                ?>
                                <p class="spectext cuspad"><?php get_the_content(); ?></p>
                                <?php
                                the_content();
                            endwhile;
                        endif;
                    ?>
                       
                    </div>

                    
                    
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>