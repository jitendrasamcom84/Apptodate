
<?php
 /*
    *
    Template Name: Project
    */
	
    get_header('project'); ?>
    

<div class="projects-wrap project_rtl">
        <span class="anchor" id="projects"></span>

        <div class="container nopadding">

            <ul>
                <?php
                  $page_id = get_the_ID();

                  $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );

                $query = new WP_Query( $args );


                if ( $query->have_posts() ) {
                    $i = 0;
                    // Start looping over the query results.
                    while ( $query->have_posts() ) { $query->the_post();
                      // Contents of the queried post results go here.
                        $post_tags = wp_get_post_tags(get_the_ID());
                        
                        // echo "<pre>";
                        // print_r($post_tags);
                        // echo "</pre>";
                        
                        
                       
                      ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="loadme" aria-label="Now Project">
                                <div class="image-wrap">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                </div>
                                <div class="post-header text-right pr0">
                                    <h3 class="post-title bold"><?php echo the_title(); ?></h3>
                                    <h4 class="description">
                                    <!-- <?php 
                                        foreach ($post_tags as $key => $value) { ?>
                                            <span class="rtl"><?php echo $value->name; ?></span>
                                        <?php 
                                            //echo $value->name;
                                        }
                                    ?> -->
                                    <?php echo the_field("post_short_description"); ?>
                                    
                                    </h4>
                                    <p class="project-btn relate_pos"><img src="<?php echo get_template_directory_uri();  ?>/img/leftarrow.png" class="margin_r_10 arrow_pos">לפרוייקט  </p>
                                </div>
                            </a>
                        </li>
                        <?php
                    };
                }   ;
                ?>
            </ul>
        </div>
    </div>

  <?php
	get_footer(); ?>


