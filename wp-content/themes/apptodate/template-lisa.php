<?php 
/*
    *
    Template Name: Lisa
    */
    get_header("lisa");
    $background_images = get_template_directory_uri(); 
?>
    <div class="container">

            <div class="mt10 pull-right ptb50 text-right logo_change">
                <h3 class="bold font35 colorch">
                    <?php //echo $post->post_title; ?>
                </h3>
                <?php 
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <p class="font25 mt0 semibold colorch lh40"><?php the_content(); ?></p>
                        <?php endwhile;
                    endif;
                ?>

            <!-- <div class="lisa_parts_one">
               <div class="lisa_back_img" style="background-image: url('<?php echo $background_images.'/img/lisa_first_back.png'; ?>');background-repeat: no-repeat; height: 220px; text-align: center; display: flex; margin-top: 140px; align-items: center;background-size: cover;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lisa_first_Screen.png">
                </div>    
            </div> 

            <div class="lisa_secound_part">
               <div class="lisa_secound_back" style="background-image: url('<?php echo $background_images.'/img/lisa_secound_back.png'; ?>');background-repeat: no-repeat; height:150px; text-align: center; display: flex; margin-top:400px; align-items: center;background-size: cover;">
                   
                   <div class="text_parts"><span>בביטוח חוסכים במחיר !לא בסוכן </span></div>
                   <img src="<?php echo get_template_directory_uri(); ?>/img/lisa_secound_screen.png">
               </div>
            </div>

            <div class="lisa_secound_part lisa_thard_part">
               <div class="lisa_secound_back" style="background-image: url('<?php echo $background_images.'/img/lisa_secound_back.png'; ?>');background-repeat: no-repeat; height:150px; text-align: center; display: flex; margin-top:400px; align-items: center;background-size: cover;">
                   
                   <img src="<?php echo get_template_directory_uri(); ?>/img/lisa_thard_screen.png">
                   <div class="text_parts"><span>,מכל מקום  !כל הזמ  </span></div>
               </div>
            </div> -->
            
            </div>

        </div>

        <section class="contents cross_part">
            <div class="contents_inner">
                <div class="row nomargin ptb50">
                    <div class="container">
                        <?php 
                                $content = get_field("content");
                                $bollate = get_field("bollate");
                                $secont_content = get_field("secont_content");
                                $images = $image = get_field("images");
                                ?>
                                <div class="col-md-6">
                                    <div class="mt10 text-right">
                                        <h3 class="bold font35 font_yellow">
                                            האתגר הטכנולוגי
                                        </h3>
                                       
                                        <p class="font25 mt0 semibold color_white text-right margin_t_20"><?php echo $content; ?></p>
                                        
                                            <ul class="font25 mt0 semibold color_white text-right rtl lisa">
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

                                            <p class="font25 mt0 semibold color_white text-right"><?php echo $secont_content; ?></p>
                                                    
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
                                    <h3 class="bold font35 font_yellow">
                                            חווית המשתמש
                                            </h3>
            
                                    <p class="font25 mt0 semibold color_white text-right margin_t_20">
                                        <?php echo $content2; ?>
                                        <ul class="font25 mt0 semibold color_white text-right rtl lisa">
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
                                        <p class="font25 mt0 semibold color_white text-right"><?php echo $secont_content2; ?></p>
            
                                </div>
                            </div>
            
                        </div>
                    </div>
            </div>
        </section>

        

        

        


        <!-- sign -->

        <div class="max400 get_center">
            
                <div class="disblock text-center">
                <?php $go_to_site = get_field('go_to_site');?>
                    <img src="<?= $go_to_site; ?>" class="contain">
                </div>

                <div class="text-center mb20 margin_t_20">
                    <button class="greyborbtn" href="#link">למעבר לאתר</button>
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