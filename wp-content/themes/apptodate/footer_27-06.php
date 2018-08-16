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
<div class="full_div section_footer">
            <div class="container footer_padding">
                <div class="col-md-12 border_bottom padding_bottom25 padding_lr0">
                
                    <div class="wd_16">
                        <address class="ads_foot">
                          <?php dynamic_sidebar('footer-address'); ?>
                            <a href="#" class="icon_fb"></a>
                            <a href="#" class="icon_ln"></a>
                            <a href="#" class="icon_ig"></a>
                        </address>
                    </div>

                    <ul class="wd_24 link nodots">
                        <?php dynamic_sidebar( 'footer-service' ); ?>
                    </ul>

                    <ul class="wd_20 link">
                        <?php dynamic_sidebar( 'footer-blog' ); ?>
                    </ul>

                    <ul class="wd_20 link">
                        <?php dynamic_sidebar('footer-project'); ?>
                    </ul>

                    <ul class="wd_20 link">
                        <?php dynamic_sidebar('footer-we'); ?>
                    </ul>

                </div>

                <div class="full_div form-group">
                    <div class="col-sm-6 col-xs-12 text-left nopadding txt-center margin_t_10px xsmall_center">
                            <?php

                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                $home_url = home_url( '/' );
                                
                                if ( has_custom_logo() ) {
                                        echo '<a href="'.$home_url.'"><img src="'. esc_url( $logo[0] ) .'"></a>';
                                } else {
                                        echo '<a href="'.$home_url.'"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
                                }
                            ?>

                        <!-- <a href="index.html"><img src="'. esc_url( $logo[0] ) .'"></a> -->
                    </div>
                    <div class="col-sm-6 col-xs-12 text-right nopadding margin_t_10px">
                        <div class="copyright xsmall_center">

                            © 2018כל הזכויות שמורות לאפטודייט טכנולוכיות בע”מ

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full_heder">
        <a href="index.html"><img class="logo_container" id="logo" src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" /></a>
        <div class="button_container back_white" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
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
            <a href="#" class="icon_fb"></a>
            <a href="#" class="icon_ln"></a>
            <a href="#" class="icon_ig"></a>
         </p>
        </address>
        </div>
    </div>
    <script>
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() + 120 > $(".section_form").position().top) {
                    $('.full_heder img').attr('src', 'img/main_logo.png');
                } else if ($(this).scrollTop() + 120 > $(".changelgo").position().top) {
                    $('.full_heder img').attr('src', 'img/main_logo1.png');
                } else if ($(this).scrollTop() + 120 < $(".changelgo").position().top) {
                    $('.full_heder img').attr('src', 'img/main_logo.png');
                }

            })
        });

        $(window).scroll( function() {
            if( $(this).scrollTop() > 0 ) {
                // $("#logo").hide();
                $("#logo").slideUp(300);
            }
            else {
                // $("#logo").show();
                $("#logo").slideDown(300);
            }
        });

        window.smoothScroll = function(target) {
            var scrollContainer = target;
            do { //find scroll container
                scrollContainer = scrollContainer.parentNode;
                if (!scrollContainer) return;
                scrollContainer.scrollTop += 1;
            } while (scrollContainer.scrollTop == 0);

            var targetY = 0;
            do { //find the top of target relatively to the container
                if (target == scrollContainer) break;
                targetY += target.offsetTop;
            } while (target = target.offsetParent);

            scroll = function(c, a, b, i) {
                    i++;
                    if (i > 30) return;
                    c.scrollTop = a + (b - a) / 30 * i;
                    setTimeout(function() {
                        scroll(c, a, b, i);
                    }, 20);
                }
                // start scrolling
            scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
        }

        $('#myCarousel').carousel({
            interval: 4000,

        });
    </script>

    
   
    <script>
        new WOW().init();
    </script>

    <!-- <script type="text/javascript">
        jQuery(".submit").hover(function(){
            jQuery(".hovthis").toggle(".gethov");
        });
</script> -->
<?php wp_footer(); ?>
</body>

</html>