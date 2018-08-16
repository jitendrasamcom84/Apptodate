<?php 
	/*
    *
    Template Name: About Page
    */
    get_header('about'); ?>

    <div class="full_div">
    	<?php 
    		if( have_rows('about_left_first_section') ):
            
	            while ( have_rows('about_left_first_section') ) : the_row();

	              $about_top_image = get_sub_field('top_left_section_image');
	              $about_designation = get_sub_field('center_first_section_description'); 
	              $about_bottom_image = get_sub_field('bottom_left_section_image'); 
	              
	              $about_right_description = get_sub_field('right_description'); 
	              $about_videos = get_sub_field('about_videos'); 
	              $about_second_description = get_sub_field('second_description'); 
	              ?>

			        <div class="col-sm-6 nopadding aditon">
			            <img src="<?php echo $about_top_image; ?>" class="imgpro" style="height: 425px;">
			            <div class="contact_us" style="height: 500px">
			                <div class="vertical-align-wrap1">
			                    <div class="vertical-align vertical-align--middle text-center">
			                        <p class="small_width semibold font25 sm18 text-right dis_inline rtl"><?php echo substr($about_designation,0,500); ?></p>
			                    </div>
			                </div>
			            </div>
			            <img src="<?php echo $about_bottom_image; ?>" class="imgpro" style="height: 758px;">
			        </div>

			        <div class="col-sm-6 nopadding">
			            <div class="contact_us" style="height: 500px; background-color: #10032e">
			                <div class="vertical-align-wrap1">
			                    <div class="vertical-align vertical-align--middle text-center">
			                        <p class="small_width semibold font25 sm18 font_white text-right dis_inline rtl"><?php echo substr($about_right_description,0,500); ?></p>
			                    </div>
			                </div>
			            </div>

			            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/about3.png" class="imgpro" style="height: 680px;"> -->
			            <div class="videodiv">
			                <video class="vidstyle" width="100%" autoplay loop muted>
			                    <source src="<?php echo $about_videos; ?>" type="video/mp4">
			                    <source src="" type="<?php echo get_field("webm"); ?>"> Your browser does not support the video tag.
			                </video>
			            </div>
			            
			            <div class="contact_us" style="height: 503px; background-color: #10032e">
			                <div class="vertical-align-wrap1">
			                    <div class="vertical-align vertical-align--middle text-center">
			                        <p class="small_width semibold font25 sm18 font_white text-right dis_inline rtl"><?php echo substr($about_second_description, 0,500) ?></p>
			                    </div>
			                </div>
			            </div>
			        </div>
	        		<?php
	            endwhile;
          	endif;
        ?>
    </div>

        <div class="get_float bgf7">
            <div class="container pddi_tb about_icon_research">
            	<?php 
            		if( have_rows('about_second_section') ):
            
			            while ( have_rows('about_second_section') ) : the_row();

				            $about_featured_image = get_sub_field('about_featured_image');
				            $about_featured_title = get_sub_field('about_featured_title'); 
				            $about_featured_description = get_sub_field('about_featured_description'); 
				            ?>
			                <div class="col-sm-6 col-lg-3 text-center img-height_about">
			                	<div class="img_back">
			                    <img src="<?php echo $about_featured_image; ?>">
			                    </div>
			                    <h1 class="bold margin_t_20" style="margin-bottom: 30px !important"><?php echo $about_featured_title; ?></h1>

			                    <p class="semibold font14" style="margin:0px;"><?php echo $about_featured_description; ?></p>
			                </div>
			             	<?php 
			          	endwhile;
			        endif;
			    ?>
			</div>
        </div>


       

        <div class="full_div padding-bottom20 back_white about_page_logo">
            <div class="container">
                <?php 
                    if( have_rows('about_client_logo') )
                    { 
                        ?>
                        <div class="col-md-12 margin_b_20 nopadding">
                            <?php
                                $c = 0;
                                $class = '';
                                $i = 15;
                                
                                while( have_rows('about_client_logo') )
                                { 
                                    the_row(); 
                                    $image = get_sub_field('about_client_logo');
                                    
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

        <div class="full_div">
        	<?php 
        		if( have_rows('about_owner_name') ):
        
		            while ( have_rows('about_owner_name') ) : the_row(); 

	        			$about_owner_name = get_sub_field('owner_name');
			            $about_owner_status = get_sub_field('owner_status'); 
			            $about_owner_images = get_sub_field('owner_images'); 
			            ?>
			            <div class="col-sm-6 wd_201 nopadding">
			                <img src="<?php echo $about_owner_images; ?>" class="imgpro" style="height: 425px;">
			                <div class="text-right p10">
			                    <h3 class="bold mt0"><?php echo $about_owner_name; ?></h3>
			                    <p class="semibold"><?php echo $about_owner_status; ?></p>
			                </div>
			            </div>
			        	<?php 
			        endwhile;
			    endif;
			?>
        </div>

<?php get_footer(); ?>