<?php
 /*
    *
    Template Name: services
    */

    get_header('services'); ?>
    <div class="projects-wrap">
        <span class="anchor" id="projects"></span>

        <div class="container nopadding">

            <ul>
               <?php 
                    if( have_rows('services') ):
            
                        while ( have_rows('services') ) : the_row();

                          $services_title = get_sub_field('title');
                          $services_sub_text = get_sub_field('sub_text1');
                          $services_image = get_sub_field('image');
                          $services_link = get_sub_field('link'); ?>
                            <li class="snake">
                                <a href="#" class="loadme1 trigger1 " aria-label="Now Project">
                                    <div class="back_ser tck box_spe btn-3">
                                        <div class="tck1">
                                            <div class="image-wrap1">
                                                <p class="image-wrap1 text-center">
                                                    <img src="<?php echo $services_image; ?>" class="text-center">
                                                </p>

                                                <div class="post-header">
                                                    <h3 class="post-title font20 bold text-center"><?php echo $services_title; ?></h3>
                                                    <p class="text-center font16 fontgrey reg fix_height_hidden"><?php echo $services_sub_text; ?></p> 
                                                    
                                                    <p class="project-btn1 relate_pos"><img id="ask" src="<?php echo get_template_directory_uri(); ?>/img/leftarrow_b.png" class="arrow_b_pos"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php
                        endwhile;
                    endif;
                    ?>
            </ul>
        </div>
    </div>

  <?php
	get_footer(); ?>

