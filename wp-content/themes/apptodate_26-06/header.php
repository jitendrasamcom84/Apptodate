<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Apptodate</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<?php wp_head(); ?>
</head>

<body id="nscroll" <?php body_class(); ?>>
    <?php 
        if( is_front_page() ) : ?>

            <div class="container1">
                <div class="full_div">
                    <div class="embed-responsive embed-responsive-16by9 h100vh">
                        <?php
                            if(get_field("mp4video")):
                                ?>
                                <video class="cover" width="100%" height="250" autoplay loop muted>
                                    <source src="<?php echo get_field("mp4video"); ?>" type="video/mp4">
                                    <source src="" type="<?php echo get_field("webm"); ?>"> Your browser does not support the video tag.
                                </video>
                                <?php
                            endif;
                        ?>
                        <div class="full_div">
                            <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                                
                                <div id="section05" class="demo">
                                    <a href="#clinet_logo_section"><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php
        endif;
    ?>