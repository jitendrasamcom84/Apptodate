<?php
    /*
    *
    Template Name: Blog Page
    */
    get_header('blog'); ?>

     <!-- <div class="container">
      <div class="scroll_aritical">
 -->
        <?php
        
          // $page_id = get_the_ID();

          // $args = array(
          //   'post_type' => 'post',
          //   'post_status' => 'publish'
          // );

          // $query = new WP_Query( $args );


          // if ( $query->have_posts() ) {

          //   // Start looping over the query results.
          //   while ( $query->have_posts() ) { $query->the_post();
              // Contents of the queried post results go here.
              ?>

                <!-- <div class="artical_part_blog_background">
                <div class="row">

                  <div class="col-md-6 col-xs-12 col-sm-6 artical_contant_part">
                    <div class="artical_contant_background">
                       <h2><?php echo the_title(); ?></h2>
                       <p><?php echo the_excerpt(10,20); ?></p>  
                       
                       <a href="<?php the_permalink(); ?>" class="trigger1 loadme1 pull-right w45">
                         <div class="post-header">
                            <p class="project-btn1 relate_pos cus_posa w50pxs"><img id="ask" src="<?php echo get_template_directory_uri(); ?>/img/leftarrow_b.png" class="arrow_b_pos"></p>
                         </div>
                       </a> 
                    </div>
                 </div>

                 <div class="col-md-6 col-xs-12 col-sm-6 artical_image_part">
                    <div class="artical_image_background">
                       <img src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                 </div> 

                </div>
              </div> -->


          <?php
          //   }
          // }

///////////////////////////////////////////////////////////////////////////////////////////////////




          // if( have_rows('blog_clients') ):
            
          //   while ( have_rows('blog_clients') ) : the_row();

          //     $blog_title = get_sub_field('blog_title');
          //     $blog_designation = get_sub_field('blog_description'); 
          //     $blog_image = get_sub_field('blog_image');
          //     $blog_link = get_sub_field('blog_full'); ?>

              <!-- <div class="artical_part_blog_background">
                <div class="row">

                  <div class="col-md-6 col-xs-12 col-sm-6 artical_contant_part">
                    <div class="artical_contant_background">
                       <h2><?php echo $blog_title; ?></h2>
                       <p><?php echo $blog_designation; ?></p>  
                       
                       <a href="<?php echo $blog_link; ?>" class="trigger1 loadme1 pull-right w45">
                         <div class="post-header">
                            <p class="project-btn1 relate_pos cus_posa w50pxs"><img id="ask" src="<?php echo get_template_directory_uri() ?>/img/leftarrow_b.png" class="arrow_b_pos"></p>
                         </div>
                       </a> 
                    </div>
                 </div>

                 <div class="col-md-6 col-xs-12 col-sm-6 artical_image_part">
                    <div class="artical_image_background">
                       <img src="<?php echo $blog_image; ?>">
                    </div>
                 </div> 

                </div>
              </div> -->
              <?php
          //   endwhile;
          // endif;
        ?>
        </div>
    </div>
           
<?php get_footer(); ?>