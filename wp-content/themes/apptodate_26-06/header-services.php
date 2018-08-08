<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body id="nscroll">

    <!-- Page Title  -->

    <div class="title_wrap2">
        <div class="projects_title">
            <div class="wrapper_1040">
                <h1 class="font46 font_black bolder">מה אנחנו עושים</h1>
                <h2 class="font25 fontgrey">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם</h2>
            </div>
        </div>
        <div class="clear"></div>
    </div>

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
                                                    <p class="text-center font16 fontgrey reg"><?php echo $services_sub_text; ?></p>
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

    <div class="section_form">

        <div class="container-fluid nopadding">
            <div class="col-lg-2 hidden-xs hidden-sm hidden-md nopadding"><img src="<?php echo get_template_directory_uri(); ?>/img/a1.png" class="a_pos1"></div>

            <!-- <div class="bg_app"></div> -->

            <div class="col-md-12 col-lg-8 padding_lr_20">
                <div class="mycontainer">
                    <h1 class="color_white padding-bottom50 text-center font46 bold margin_tb_0">אנחנו תמיד עונים, גם למכתבי שרשרת
                    </h1>

                    <div class="custom_bg">
                        <div class="full_div back_white padding20 cus_shadow">
                            <form>
                                <?php echo do_shortcode( '[contact-form-7 id="101" title="Contact form 1"]' ); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 hidden-xs hidden-sm hidden-md nopadding"><img src="<?php echo get_template_directory_uri(); ?>/img/a2.png" class="a_pos2"></div>
        </div>
    </div>