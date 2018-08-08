<?php
/*
    *
    Template Name: Chickypic
    */ 
	get_header("chickypic");
?>

<div class="container">
    <div class="mt10 pull-right ptb50 text-right">
        <h3 class="bold font35 colorch">
            
        </h3>
        <?php 
           if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
                    <p class="font25 mt0 semibold colorch"><?php the_content(); ?></p>
                <?php endwhile;
            endif;
        ?>
    </div>
</div>

        <div>
            <?php
                $images = get_field('image'); 
            ?>
            <img src="<?php echo $images; ?>" width="100%">
        </div>



        <div class="row nomargin">
            <?php 
                if(have_posts('two_images') ):
                    while( have_rows('two_images') ): the_row(); 
                        $images1 = get_sub_field('image1');
                        $images2 = get_sub_field('image2');
                        ?>
                        
                        <div class="col-sm-4 nopadding h69vh">
                            <img src="<?php echo $images1 ?>" width="100%" class="h69vh cover">
                        </div>

                        <div class="col-sm-8 nopadding h69vh">
                            <img src="<?php echo $images2; ?>" width="100%" class="h69vh cover">
                        </div>
                        <?php
                        endwhile;
                endif;
            ?>
        </div>

        <div class="row nomargin ptb50">
            <div class="container">
                <?php 
                   if(have_posts('second_section') ):
                        while( have_rows('second_section') ): the_row(); 
                            $title  = get_sub_field('title');
                            $content  = get_sub_field('content');
                            $animals  = get_sub_field('animals');
                            $mobile_images = get_sub_field('mobile_images');
                        ?>
                        <div class="col-md-4 nopadding text-center">
                            <img src="<?php echo $mobile_images; ?>" class="contain" width="100%">
                        </div>

                <div class="col-md-8 nopadding">
                    <div class="mt10 pull-right ptb50 text-right">
                        <h3 class="bold font35 colorch">
                            <?php echo $title; ?>
                        </h3>

                        <p class="font25 mt0 semibold colorch"><?php echo $content; ?></p>

                        <div class="mt50 text-center">
                            <img src="<?php echo $animals; ?>" width="80%">
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
                endif;
                ?>
            </div>
        </div>

        <div>
        <?php 
            $full_images = get_field('full_images'); ?>
            <img src="<?php echo $full_images; ?>" width="100%">
        </div>

        <div class="row nomargin ptb50">
            <div class="container">
            <?php 
                $content = get_field("content");
                //$bollate = get_field("bollate");
                $secont_content = get_field("secont_content");
                $images = $image = get_field("images");
                ?>
                <div class="col-md-6">
                    <div class="mt10 text-right">
                        <h3 class="bold font35 colorch">
                                    האתגר הטכנולוגי
                            </h3>

                        <p class="font25 mt0 semibold colorch text-right margin_t_20"><?php echo $content; ?></p>
                            <ul class="font25 mt0 semibold colorch text-right rtl chicky">
                            <?php 
                                if( have_rows('bollate') ) :
                                    while( have_rows('bollate') ) : the_row(); 
                                        $bollate = get_sub_field('bollate_content');
                                        ?>
                                            <li><?php echo $bollate; ?></li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>

                            <p class="font25 mt0 semibold colorch text-right"><?php echo $secont_content; ?></p>
                        </p>

                    </div>
                </div>

                <div class="col-md-6 ptb50o text-center">
                    <img src="<?php echo $image; ?>" class="contain">
                </div>

            </div>
        </div>

        <div class="row nomargin ptb50">
            <div class="container">
            <?php 
                $content2 = get_field("content2");
                $bollate2 = get_field("bollate2");
                $secont_content2 = get_field("secont_content2");
                $images2 = $image = get_field("images2");
                ?>
                <div class="col-md-6 text-center">
                    <img src="<?php echo $images2; ?>" class="contain">
                </div>

                <div class="col-md-6 nopadding">
                    <div class="mt10 text-right">
                        <h3 class="bold font35 colorch">
                                        האתגר הטכנולוגי
                                </h3>

                        <p class="font25 mt0 semibold colorch text-right margin_t_20">
                            <?php echo $content2; ?>
                            <ul class="font25 mt0 semibold colorch text-right rtl chicky">
                            <?php 
                                if( have_rows('bollate2') ) :
                                    while( have_rows('bollate2') ) : the_row(); 
                                        $bollate2 = get_sub_field('second_bollate_content');
                                        ?>
                                            <li><?php echo $bollate2; ?></li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>

                            <p class="font25 mt0 semibold colorch text-right"><?php echo $secont_content2; ?></p>
                    </div>
                </div>

            </div>
        </div>


        <!-- sign -->

        <div class="max400 get_center">
            <div class="disblock text-center">
            <?php $go_to_site = get_field('go_to_site');?>
                <img src="<?= $go_to_site; ?>" class="contain">
            </div>

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

        <div>

        </div>
<?php get_footer(); ?>