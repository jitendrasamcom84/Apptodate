<?php 
$page_id = get_the_ID(); 

$post_id = get_post($page_id);
    
    global $post;
    $post_slug=$post->post_name;

    if($post_slug == "election"){
        get_template_part('template-election');
    }
    elseif($post_slug == "lisa"){
        get_template_part('template-lisa');
    }
    elseif($post_slug == "chickypic"){
        get_template_part('template-chickypic');
    }
    else{
        get_template_part('template-content');
    }




//print_r(get_post(get_the_ID()));
get_footer(); ?>
