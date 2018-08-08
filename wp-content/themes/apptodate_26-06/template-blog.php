<?php
    /*
    *
    Template Name: Blog Page
    */
    get_header('blog'); ?>
     <div class="container">
      <div class="scroll_aritical"> 
        <?php
        //   $page_id = get_the_ID();

        //   $args = array(
        //     'post_type' => 'post',
        //     'post_status' => 'publish'
        // );

        //   $query = new WP_Query( $args );


        //   if ( $query->have_posts() ) {

        //     // Start looping over the query results.
        //     while ( $query->have_posts() ) { $query->the_post();
              // Contents of the queried post results go here.
              ?>

                <!-- <div class="artical_part_blog_background">
                <div class="row">

                  <div class="col-md-6 col-xs-12 col-sm-6 artical_contant_part">
                    <div class="artical_contant_background">
                       <h2><?php echo the_title($page_id); ?></h2>
                       <p><?php echo the_content(); ?></p>  
                       
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






          if( have_rows('blog_clients') ):
            
            while ( have_rows('blog_clients') ) : the_row();

              $blog_title = get_sub_field('blog_title');
              $blog_designation = get_sub_field('blog_description'); 
              $blog_image = get_sub_field('blog_image');
              $blog_link = get_sub_field('blog_full'); ?>

              <div class="artical_part_blog_background">
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
              </div>
              <?php
            endwhile;
          endif;
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
                                <div class="col-xs-12 col-sm-6 right">
                                    <div class="form-group margin_b_55">
                                        <label class="font28 bold" for="exampleInputUsername">שם</label>
                                        <input type="text" class="form-control padding_lr0" id="" placeholder="כי לא נגיד סתם היוש">
                                    </div>
                                    <div class="form-group margin_b_55">
                                        <label class="font28 bold" for="exampleInputEmail">מייל</label>
                                        <input type="email" class="form-control padding_lr0" id="exampleInputEmail" placeholder="זה שדה חובה">
                                    </div>
                                    <div class="form-group small_55b">
                                        <label class="font28 bold" for="telephone">טלפון</label>
                                        <input type="tel" class="form-control padding_lr0" id="telephone" placeholder="עוד קצת, זה באמת שדה חובה">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 form-line">
                                    <div class="form-group set_pos">
                                        <label class="font28 bold" for="description"> על מה נדבר?</label>
                                        <textarea class="form-control padding_lr0" id="description" placeholder="ספרו לנו בכמה מילים"></textarea>
                                    </div>

                                    <div class="text-center set_pos">

                                        <a class="grad_button grad_button--gradient" href="#link">שלח</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 hidden-xs hidden-sm hidden-md nopadding"><img src="<?php echo get_template_directory_uri(); ?>/img/a2.png" class="a_pos2"></div>
        </div>
    </div>
           
<?php get_footer(); ?>