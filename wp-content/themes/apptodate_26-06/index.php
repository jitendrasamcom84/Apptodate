<?php get_header(); ?>

<div class="full_div logo_section" id="clinet_logo_section">
    <div class="container">
        <div class="col-md-12 col-sm-12 text-center nopadding">

            <p class="font35 margin_b_30 bold rtl">כשקידמה פוגשת מקצועיות, ואתם פוגשים אותנו.</p>
            <?php
                // Start the loop.
            
                while ( have_posts() ) : the_post();
                    echo "<p class='txt_pdng font20 line_h45 letter_s2'>";
                        if(get_field('home-about')):
                            echo get_field('home-about');
                        endif;
                    echo "</p>";

                    the_content();

                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    } 

                    ?>                         
                    <?php
                    // End of the loop.
                endwhile;
            ?>
        </div>
        
        <div class="col-sm-12 text-center margin_b_20">
            <div class="hr_white" width="50px"></div>
        </div>

        <div class="col-md-12 text-center nopadding">
            <?php 
                if( have_rows('home-icons-list') ) { 
                    $i = 20;            
                    while( have_rows('home-icons-list') ) { 
                        
                        the_row(); 
                        
                        $image = get_sub_field('icon-image'); ?>

                        <div class="img_border" data-aos="zoom-in" data-aos-offset="<?php echo $i; ?>"><img src="<?php echo $image; ?>" style="transform: matrix(1, 0, 0, 1, 0, 0);" /></div>
                        
                        <?php
                        $i = $i + 20;
                    }
                }
            ?>
        </div>
    </div>
</div>

        <div class="full_div height_100p">
            <!-- The carousel -->
            <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel" data-interval="2500">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php $numrows = count( get_field( 'home-slider' ) );
                            
                        $c = 0;
                        $d = 0;
                        $class = '';

                        for($i = 0; $i< $numrows; $i++){
                            $c++;
                            if ( $c == 1 ){ $class = ' active';}

                            else{ $class='';} ?>

                            <li data-target="#transition-timer-carousel" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                            
                            <?php
                            $d++;
                        }
                    ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner height_100p">
                    <?php if( have_rows('home-slider') )
                            { 
                                $c = 0;
                                $class = '';
                                while( have_rows('home-slider') )
                                { 
                                    $c++;
                                    the_row(); 
                                    $image = get_sub_field('slider-image');
                                    if ( $c == 1 ){ $class = ' active';}
                                    else{ $class='';} 
                                    ?>
                    <div class="item <?php echo $class; ?>">
                        <img src="<?php echo $image; ?>" />
                        <a href="#">
                            <div class="container carousel-caption cls_txt">
                                <h1 class="carousel-caption-header bold margin_l_15m"><?php echo get_sub_field('slide_text'); ?></h1>
                                <h1 class="carousel-caption-text bold"><?php echo get_sub_field('slider_content'); ?></h1>
                            </div>
                        </a>
                    </div>
                    <?php
                            }
                            }
                            ?>
                    <!-- <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/IPad_free1.png" />
                        <a href="#">
                            <div class="carousel-caption cls_txt">
                                <h1 class="carousel-caption-header bold margin_l_15m">תקינה</h1>
                                <h1 class="carousel-caption-text bold">
                                    בדיקת בטיחות מתקנים
                          </h1>

                            </div>
                        </a>
                    </div> -->

                    <!-- <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/IPad_free1.png" />
                        <a href="#">
                            <div class="carousel-caption cls_txt">
                                <h1 class="carousel-caption-header bold margin_l_15m">מדיה פארם</h1>
                                <h1 class="carousel-caption-text bold">
                                    ניהול אתרי הרופאים בישראל
                          </h1>

                            </div>
                        </a>
                    </div>
                </div> -->

                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
        <span class="arrow_back"><img src="<?php echo get_template_directory_uri(); ?>/img/back.png"/></span>
      </a>
      <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
        <span class="arrow_next"><img src="<?php echo get_template_directory_uri(); ?>/img/next.png"/></span>
      </a> -->

                <!-- Timer "progress bar" -->
                <hr class="transition-timer-carousel-progress-bar animate" />
            </div>
        </div>
        <div class="full_div section_clientslider nopadding">
            <div class="container">
                <div class="row padding_30">
                    <!-- <div class="col-md-2"></div> -->

                    <!-- desktop -->

                    <div class="col-md-6 col-sm-6 sld_line">
                        <h2 class="text-center nomargin">
                            <span class="back_black padding_lr_0 color_white bold font25">?מי עושה</span>
                        </h2>
                        <!-- Carousel
            ================================================== -->

                        <div id="myCarousel" class="carousel slide cls_mainslider" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner caro_pos">
                                <?php if( have_rows('testimonial-slider') )
                                        { 
                                          $c = 0;
                                              $class = '';
                                            while( have_rows('testimonial-slider') )
                                            { 
                                              $c++;
                                                the_row(); 
                                                $image = get_sub_field('testimonial-image');
                                                $text1 = get_sub_field('testimonial-text1');
                                                $text2 = get_sub_field('testimonial-text-2');
                                                if ( $c == 1 ){ $class = ' active';}
                                                else{ $class='';} 
                                                ?>
                                <div class="item <?php echo $class; ?>">

                                    <div class="thumbnail right">
                                        <img class="pic_pos" src="<?php echo $image; ?>" />
                                    </div>
                                    <div class="caption">
                                        <h2 class="font_sblue font46 text-center bold"><?php echo $text1; ?></h2>
                                        <p class="font_gray text-right small_center font30"><?php echo $text2; ?> </p>
                                    </div>

                                </div>


                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators text-left">
                                <?php $numrows = count( get_field( 'testimonial-slider' ) );
                                        $c = 0;
                                        $d = 0;
                                        $class = '';                                        
                                        for($i = 0; $i< $numrows; $i++){
                                        $c++;
                                        if ( $c == 1 ){ $class = ' active';}
                                        else{ $class='';} 
                                            ?> 
                                <li data-target="#myCarousel" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                                <?php
                                        $d++;
                                        }
                                        ?> 
                                <a href="">
                                    <button class="color_sblue">לכל הצוות</button>
                                </a>
                            </ol>
                        </div>
                        <!-- End Carousel -->
                    </div>

                    <!-- /Desktop -->

                    <!-- mobile -->

                    <!-- /mobile -->

                    <div class="col-md-6 col-sm-6">
                        <!-- Carousel
            ================================================== -->
                        <h2 class="text-center nomargin">
                          <span class="back_black padding_lr_0 color_white bold font25">?מה אנחנו עושים</span>
                        </h2>

                        <div id="myCarousel2" class="carousel slide cls_mainslider1 small_center" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner caro_pos1">
                                <?php if( have_rows('testimonial2') )
                                        { 
                                          $c = 0;
                                              $class = '';
                                            while( have_rows('testimonial2') )
                                            { 
                                              $c++;
                                                the_row(); 
                                                $image = get_sub_field('testimonial2-image');
                                                $text1 = get_sub_field('testimonial2-text');
                                                $text2 = get_sub_field('testimonial2-text2');
                                                if ( $c == 1 ){ $class = ' active';}
                                                else{ $class='';} 
                                                ?>
                                <div class="item <?php echo $class; ?> height_290">

                                    <a href="#">
                                        <div class="dis_inline small_100p left padding_lr_20 margin_t_25 small_view">
                                            <img class="" src="<?php echo $image; ?>" />
                                        </div>
                                    </a>
                                    <div class="dis_inline">
                                        <h2 class="color_white bold font55 margin_t_60 text-center"><?php echo $text1; ?></h2>
                                    </div>

                                </div>
                                <?php
                                            }
                                        }
                                    ?>
                             </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators cls_active text-right">
                                <?php $numrows = count( get_field( 'testimonial2' ) );
                                        $c = 0;
                                        $d = 0;
                                        $class = '';                                        
                                        for($i = 0; $i< $numrows; $i++){
                                        $c++;
                                        if ( $c == 1 ){ $class = ' active';}
                                        else{ $class='';} 
                                            ?>
                                <li data-target="#myCarousel2" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                                <?php
                                        $d++;
                                        }
                                        ?>
                            </ol>
                            <a href="services.html">
                                <button class="color_purp">לכל מה שאנחנו עושים</button>
                            </a>
                        </div>
                        <!-- End Carousel -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Everything below this is part of the menu-->
        <div class="full_div changelgo">
            <section id="carousel" class="back_white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="4000" style="padding-top: 20px;">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <?php $numrows = count( get_field( 'home-clients' ) );
                                            $c = 0;
                                            $d = 0;
                                            $class = '';                                        
                                            for($i = 0; $i< $numrows; $i++){
                                            $c++;
                                            if ( $c == 1 ){ $class = ' active';}
                                            else{ $class='';} 
                                                ?> 
                                    <li data-target="#fade-quote-carousel" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                                    <?php
                                            $d++;
                                            }
                                            ?>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <?php 
                                        if( have_rows('home-clients') ) { 
                                          $c = 0;
                                              $class = '';
                                            while( have_rows('home-clients') )
                                            { 
                                              $c++;
                                                the_row(); 
                                                $image = get_sub_field('home-client-image');
                                                $name = get_sub_field('home-client-name');
                                                $designation = get_sub_field('home-client-designation');
                                                $massege = get_sub_field('home-client-massege');
                                        
                                                    if ( $c == 1 ){ $class = ' active';}
                                                    else{ $class='';} 
                                                    ?>
                                                    <div class="item <?php echo $class; ?>">
                                                        <div class="">
                                                            <img class="overlay_img" src="<?php echo get_template_directory_uri(); ?>/img/overlay.png" />
                                                            <img class="profile-circle" src="<?php echo $image; ?>" /></div>
                                                        <h3 class="font20 bold margin_t_25"><?php echo $name; ?></h3>
                                                        <span class="font16 font_darkgray"><?php echo $designation; ?></span>

                                                        <blockquote>
                                                            <p class="font16 line_h35 italic"><?php echo $massege; ?></p>
                                                        </blockquote>
                                                    </div>
                                                    <?php
                                            }
                                        }
                                        ?>
                                    <!-- <div class="item active">
                                        <div>
                                            <img class="overlay_img" src="<?php echo get_template_directory_uri(); ?>/img/overlay.png" />
                                            <img class="profile-circle" src="<?php echo get_template_directory_uri(); ?>/img/obama.png" />
                                            <h3 class="font20 bold margin_t_25">ברק אובמה</h3>
                                            <span class="font16 font_darkgray">מנכ”ל - השכונה שלי</span>
                                        </div>
                                        <blockquote>
                                            <p class="font16 line_h35 italic">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב”</br>
                                                לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</br>
                                                “לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</p>
                                        </blockquote>
                                    </div> -->

                                    <!-- <div class="item">
                                        <div>
                                            <img class="overlay_img" src="<?php echo get_template_directory_uri(); ?>/img/overlay.png" />
                                            <img class="profile-circle" src="<?php echo get_template_directory_uri(); ?>/img/obama.png" />
                                            <h3 class="font20 bold margin_t_25">ברק אובמה</h3>
                                            <span class="font16 font_darkgray">מנכ”ל - השכונה שלי</span>
                                        </div>
                                        <blockquote>
                                            <p class="font16 line_h35 italic">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב”</br>
                                                לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</br>
                                                “לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</p>
                                        </blockquote>
                                    </div> -->
                                    <!-- <div class="item">
                                        <div>
                                            <img class="overlay_img" src="<?php echo get_template_directory_uri(); ?>/img/overlay.png" />
                                            <img class="profile-circle" src="<?php echo get_template_directory_uri(); ?>/img/obama.png" />
                                            <h3 class="font20 bold margin_t_25">ברק אובמה</h3>
                                            <span class="font16 font_darkgray">מנכ”ל - השכונה שלי</span>
                                        </div>
                                        <blockquote>
                                            <p class="font16 line_h35 italic">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב”</br>
                                                לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</br>
                                                “לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</p>
                                        </blockquote>
                                    </div> -->
                                    <!-- <div class="item">
                                        <div>
                                            <img class="overlay_img" src="<?php echo get_template_directory_uri(); ?>/img/overlay.png" />
                                            <img class="profile-circle" src="<?php echo get_template_directory_uri(); ?>/img/obama.png" />
                                            <h3 class="font20 bold margin_t_25">ברק אובמה</h3>
                                            <span class="font16 font_darkgray">מנכ”ל - השכונה שלי</span>
                                        </div>
                                        <blockquote>
                                            <p class="font16 line_h35 italic">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב”</br>
                                                לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</br>
                                                “לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם איפסום דולור סיט אמט, קונסקטורר סת אלמנקום ניסי נון ניב</p>
                                        </blockquote>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- <div class="full_div padding-bottom20">
          <div class="container">
              <div class="col-md-12">
                <div class="col-md-1"></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 17.png"/></div>
                 <div class="col-md-2 col-sm-4 col-xs-6"> <img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 15.png"/></div>
                 <div class="col-md-2 col-sm-4 col-xs-6"> <img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 24.png"/></div>
                 <div class="col-md-2 col-sm-4 col-xs-6"> <img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object-1.png"/></div>
                 <div class="col-md-2 col-sm-4 col-xs-6"> <img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 12.png"/></div>
                </div>
                <div class="col-md-12">
                <div class="col-md-1"></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object-4.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 21.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 23.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/lisa.png"/></div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-1"></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object-5.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 20.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object-2.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Vector Smart Object-3.png"/></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><img class="all_logo " src="<?php echo get_template_directory_uri(); ?>/img/Layer 25.png"/></div>
              </div>
          </div>   
        </div> -->

        <div class="full_div padding-bottom20 back_white">
            <div class="container">
                 <?php if( have_rows('home-client-logo') )
                        { 
                            ?>
                <div class="col-md-12 margin_b_20 nopadding">
                     <?php
                            $c = 0;
                            $class = '';
                            $i = 15;
                              while( have_rows('home-client-logo') )
                              { 
                                  the_row(); 
                                  $image = get_sub_field('client-logo');
                                  if ( $c %5 == 0){ 
                                    ?>

                    </div>
                <div class="col-md-12 margin_b_20 nopadding">
                    <?php
                            }   
                            $c++;
                            ?>
                    <div class="wd_20 text-center" data-aos="zoom-in" data-aos-offset="<?php echo $i; ?>"><img class="all_logo " src="<?php echo $image; ?>" /></div>
                    <?php
                        $i = $i + 15;
                            }
                            ?>
                </div>
                <?php
                        }
                        ?>
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
<?php get_footer(); ?>