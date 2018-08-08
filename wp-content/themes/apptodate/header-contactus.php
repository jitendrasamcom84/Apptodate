<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script type="text/javascript">
        // $(window).scroll( function() {
        //     if( $(this).scrollTop() > 0 ) {
        //         // $("#logo").hide();
        //         $("#logo").slideUp(300);
        //     }
        //     else {
        //         // $("#logo").show();
        //         $("#logo").slideDown(300);
        //     }
        // });


        $(function() {
            $(window).scroll(function() {
                var p = $(".section_footer");
                var position = p.position();

                var q = $(".footer-inner");
                var positionq = q.position();
        
                if ($(this).scrollTop() + 120 < position.top) {
                    $('.full_heder img').attr('src', 'http://192.64.82.125/apptodate/wp-content/uploads/2018/06/main_logo.png');
                }
                else if ($(this).scrollTop() + 120 > position.top) {
                    $('.full_heder img').attr('src', 'http://192.64.82.125/apptodate/wp-content/uploads/2018/06/main_logo.png');
                }
                
                if ($(this).scrollTop() + 120 > positionq.top && $(this).scrollTop() + 120 < position.top) {
                    $('.full_heder img').attr('src', 'http://192.64.82.125/apptodate/wp-content/uploads/2018/06/main_logo1.png');
                }
                
            })
        });

    </script>
    <?php wp_head(); ?>

</head>

<body id="nscroll" <?php body_class(); ?>>

    <div>
        <div class="video-container full-height">
            <video autoplay loop muted class="set-cover">
                <source src="<?php echo get_field("contact_video"); ?>" type="video/mp4"> Your browser does not support the video tag.
            </video>
            
            <div class="overlay-desc">   
                <form method="POST" class="contact_page_form">

                    <h1 class="font46 text-center font_white bolder margin_b_40">צור קשר</h1>
                        <?php 
                            echo do_shortcode( '[contact-form-7 id="449" title="Contact form"]' ); 
                        ?>
                </form>
            </div>
        </div>

        <div class="footer-inner margin-t-5m">
            <div class="google_map">
                
            </div>

            <!-- desktop -->

            <div class="contact_us_wrap hidden-xs">
                <div class="contact_us">
                    <div class="vertical-align-wrap">
                        <div class="vertical-align vertical-align--middle">
                            <address class="ads_foot font_white text-center">
                                <p class="margin_b_18">+972-54-24403305</p>
                                <p class="margin_b_18">INFO@APPTODATE.CO.IL</p> 
                                <p class="margin_b_18">הזיתים 96, גבעת-שמואל, ישראל</p>
                                <p class="margin_t_20">
                                    <a href="https://www.facebook.com/apptodate" class="icon_fb"></a>
                                    <a href="#" class="icon_ln"></a>
                                    <a href="#" class="icon_ig"></a>
                                </p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full_heder">
        <?php 

            $logo = get_field( 'logo' ); 
            $home_url = home_url('/');
            
            if ( $logo ) : ?>
        
                <a href="<?php echo $home_url; ?>">
                    <img class="logo_container" id="logo" src="<?php echo $logo; ?>" />
                </a>
                
                <div class="button_container back_white" id="toggle">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
                <?php
            endif; 
        ?>
    </div>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <!-- <ul> -->
                <?php  
                    wp_nav_menu( array( 
                    'theme_location' => 'header-menu' ,
                    'container' => ''
                    //'menu_class' => 'menu'
                    ) );
                ?>
        </nav>
        <div class="full_div font20">
            <address class="add_info line_h1p75 margin_t_10m">
          <p>+972-54-24403305<br>
            INFO@APPTODATE.CO.IL</br>
          הזיתים 96, גבעת-שמואל, ישראל</p>
            <p>
            <a href="https://www.facebook.com/apptodate" class="icon_fb"></a>
            <a href="#" class="icon_ln"></a>
            <a href="#" class="icon_ig"></a>
         </p>
        </address>
        </div>
    </div>

