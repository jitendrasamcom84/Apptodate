<?php get_header(); ?>

<div class="full_div logo_section" id="clinet_logo_section">
    <div class="container">
        <div class="col-md-12 col-sm-12 text-center nopadding">

            <p class="font35 margin_b_30 bold rtl"><?php echo the_field('home_title'); ?></p>
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

<div class="full_div height_100p height_100vh">
    <!-- The carousel -->
    
    <!-- old_slider
     <div id="transition-timer-carousel" class="home_slider_one carousel slide transition-timer-carousel" data-ride="carousel" data-interval="2500">
            <ol class="carousel-indicators">
                <?php $numrows = count( get_field( 'home-slider' ) );
                        
                    $c = 0;
                    $d = 0;
                    $class = '';

                    for($i = 0; $i< $numrows; $i++){
                        $c++;
                        if ( $c == 1 ){ $class = ' active';}

                        else{ $class='';} 
                        ?>

                            <li data-target="#transition-timer-carousel" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                        <?php
                        $d++;
                    }
                ?>
            </ol>

            <div class="carousel-inner height_100p">
                <?php 
                    if( have_rows('home-slider') )
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
                                    <a href="<?php echo get_sub_field('post_link'); ?>">
                                    <img src="<?php echo $image; ?>"  />
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
     
                    <hr class="transition-timer-carousel-progress-bar animate" />
            </div>
    </div> -->

    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php $numrows = count( get_field( 'home-slider' ) );
                    
                $c = 0;
                $d = 0;
                $class = '';

                for($i = 0; $i< $numrows; $i++){
                    $c++;
                    if ( $c == 1 ){ $class = ' active';}

                    else{ $class='';} 
                    ?>   

                        <li data-target="#carousel" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                    <?php
                    $d++;
                }
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner height_100p">
            <?php 
                if( have_rows('home-slider') )
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
                                <a href="<?php echo get_sub_field('post_link'); ?>">
                                <img src="<?php echo $image; ?>"  />
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
                        <span class="back_black padding_lr_0 color_white bold font25">מי עושה  ?</span>
                    </h2>
                    <!-- Carousel ================================================== -->

                    <div id="myCarousel" class="carousel slide cls_mainslider" data-ride="carousel" data-interval="2000">
                        <div class="carousel-inner caro_pos fix_img_class">
                            <?php 
                                if( have_rows('testimonial-slider') )
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
                                            <div class="table_proparty">
                                            <div class="caption">
                                               <div class="new_class">
                                                <h2 class="font_sblue font46 text-center bold"><?php echo $text1; ?></h2>
                                                <p class="font_gray text-right small_center font25"><?php echo $text2; ?> </p>
                                               </div>
                                            </div>
                                            <a class="first_slider" href="#">
                                            <div class="thumbnail right">
		                                          <img class="pic_pos" src="<?php echo $image; ?>" />
		                                    </div>
                                            </a>
		                                    
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
                                for($i = 0; $i< $numrows; $i++)
                                {
                                    $c++;
                                    if ( $c == 1 ){ $class = ' active';}
                                    else{ $class='';} 
                                    ?> 
                                        <li data-target="#myCarousel" data-slide-to="<?php echo $d; ?>" class="<?php echo $class; ?>"></li>
                                    <?php
                                    $d++;
                                    }
                                    ?> 
                                    <a href="http://192.64.82.125/apptodate/%D7%9E%D7%99-%D7%90%D7%A0%D7%97%D7%A0%D7%95/">
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
                      <span class="back_black padding_lr_0 color_white bold font25">מה אנחנו עושים  ?</span>
                    </h2>

                    <div id="myCarousel2" class="secound_slider_home carousel slide cls_mainslider1 small_center" data-ride="carousel" data-interval="2000">
                        <div class="carousel-inner caro_pos1 fix_img_class">
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
                                            //$text2 = get_sub_field('testimonial2-text2');
                                            if ( $c == 1 ){ $class = ' active';}
                                            else{ $class='';} 
                                            ?>
                            <div class="item <?php echo $class; ?> height_290">
                               <div class="table_proparty">
                                <a href="" class="right_slide_img">
                                    <div class="slider_carsoul_2 dis_inline small_100p left padding_lr_20 margin_t_25 small_view">
                                        <img class="" src="<?php echo $image; ?>" />
                                    </div>
                                </a>
                                <div class="dis_inline secound_slider_text">
                                    <h2 class="color_white bold font55 margin_t_60 text-center"><?php echo $text1; ?></h2>
                                </div>
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
                        <a href="http://192.64.82.125/apptodate/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/">
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
            <section id="carousel" class="back_white back_white_n">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="4000" style="padding-top:35px;">
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
                                                    <div class="home_last_slider item <?php echo $class; ?>">
                                                       
                                                        	<?php 
                                                        		if(empty($image)){
                                                        			?>
                                                        			 <div class="">
                                                        			 <img class="profile-circle" src="<?php echo get_template_directory_uri(); ?>/img/No_image_available.svg.png" />
                                                        			</div>
                                                        			<?php 
                                                        		}
                                                        		else{
                                                        			?>
                                                        			<div class="">
                                                        				<img class="overlay_img" src="<?php echo get_template_directory_uri(); ?>/img/overlay.png" />
                                                        				<img class="profile-circle" src="<?php echo $image; ?>" />
                                                        			</div>
                                                        			<?php 
                                                        		}
                                                        	?>
                                                        	
                                                        <h3 class="font20 bold margin_t_25"><?php echo $name; ?></h3>
                                                        <span class="font16 font_darkgray"><?php echo $designation; ?></span>

                                                        <blockquote class="fix_height">
                                                            <p class="font16 line_h35 italic"><?php echo $massege; ?></p>
                                                        </blockquote>
                                                    </div>
                                                    <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

        <div class="full_div padding-bottom20 back_white">
            <div class="container">
                <?php 
                    if( have_rows('home-client-logo') )
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
                                        <div class="col-md-12 margin_b_20 nopadding"> <?php }   
                                            $c++; ?>
                                        <div class="wd_20 text-center" data-aos="zoom-in" data-aos-offset="<?php echo $i; ?>"><img class="all_logo " src="<?php echo $image; ?>" /></div>
                                        <?php $i = $i + 15;
                                }
                                ?>
                                    </div>
                <?php
                        }
                        ?>
            </div>
        </div>
<?php get_footer(); ?>