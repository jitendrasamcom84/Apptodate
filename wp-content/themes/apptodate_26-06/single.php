<?php get_header('single'); 


$page_id = get_the_ID(); 

$post_id = get_post($page_id);

//print_r(get_post(get_the_ID()));
?>

	<div class="padding10">
        <div class="container clrbth tpdiv p20 rtl">
            <div class="back_white">
                <h1 class="bold font40"><?php echo $post_id->post_title; ?></h1>

                <div class="mt20">

                    <div class="cuspad">
                        <div class="dis_inline pull-right">
                            <?php $author_image = get_field('author_image'); ?>
                            <img src="<?php echo $author_image;  ?>" class="posttype">
                        </div>

                        <div class="dis_inline">
                            <h4 class="bold mt20 text44"><?php the_field('post_written'); ?></h4>
                            <?php 
                            	$date = get_field('post_date', false, false); 
                            	$date = new DateTime($date);
                            ?>
                            <p class="semibold"><?php echo $date->format('d-m-y'); ?></p>
                        </div>
                    </div>

                    <div>
                    <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); 
                                    ?>
                                    <p class="spectext cuspad"><?php get_the_content(); ?></p>
                                    <?php
                                    the_content();
                                //
                                // Post Content here
                                //
                            endwhile;
                        endif;
                    ?>
                       
                    </div>

                    

                    
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>