<?php 
/*
    *
    Template Name: Election
    */
    get_header('election');
?>
<div class="">
    <div class="mt10 pull-right ptb50 text-right logo_change">
        <h3 class="container bold font35 colorch" style="padding: 0">
            <?php //echo $post->post_title; ?>
        </h3>
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
                    get_the_content();

                    the_content();
                endwhile;
            endif;
        ?>

    </div>
</div>
<div class="max400 get_center">
            
               <div class="disblock text-center">
                <div class="dis_inline get_center margin_t_20">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/apple.png" class="contain">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/playstore.png" class="contain">
                </div>
            </div>
            
            <div class="disblock text-center mt30 social_icons_size">
                <div class="dis_inline get_center margin_t_20">

                <?php 
                    if( have_rows('social_icon') ):
                        while ( have_rows('social_icon') ) : the_row(); 
                        $social_img = get_sub_field('social_img');
                        $social_link = get_sub_field('social_link'); 
                    ?>

                    <a href="<?=  $social_link; ?>" target="_blank"> <img src="<?= $social_img;?>" class="contain"></a>
                <?php
                        endwhile;
                    endif;
                ?>
                   
                </div>
            </div>

            <div class="disblock text-center mt50">
                <div class="text-center set_pos mb20">
                    <a class="grad_button grad_button--gradient borbtn" href="#link">לכל הפרוייקטים שלנו</a>
                </div>
            </div>

        </div>
<!-- sign -->
        

<?php get_footer(); ?>