<div class="section_form"  id="msg">

    <div class="container-fluid nopadding">
        <div class="col-lg-2 hidden-xs hidden-sm hidden-md nopadding"><img src="<?php echo get_template_directory_uri(); ?>/img/a1.png" class="a_pos1"></div>

        <!-- <div class="bg_app"></div> -->

        <div class="col-md-12 col-lg-8 padding_lr_20">
            <div class="mycontainer">
                <h1 class="color_white padding-bottom50 text-center font46 bold margin_tb_0">בואו נגרום לרעיון שלכם להתגשם
                </h1>

                <div class="custom_bg">
                    <div class="full_div back_white padding20 cus_shadow">

                        <form method="POST" class="contact_form" name="form_name" id="yourdata" onload="phonenumber(document.form_name.your-telephone)">
                            <?php 
                                // echo "<pre>";
                                // print_r($_POST['your-email']);
                                // echo "</pre>";
                                $email = $_POST['your-email'];
                                
                                if(!empty($email)){
                                    $home_url = home_url('/');
                                        ?>

                                    <script>
                                        //$('html, body').animate({ scrollTop: 3800 }, 500);
                                        
                                            // $(".bgbtn").click(function(){

                                            //     alert("yes");
                                            // });
                                    $(document).ready(function(){
                                        $('form').each(function(){
                                            $('html, body').animate({ scrollTop: $("#msg").position().top }, 500); // or simple this.id
                                        });
                                    });
                                    </script>
                                    
                                    <div class="wrapper_1040 footer_contact_thax_msg">
                                            <h1 class="font46 font_black bolder rtl">תודה  !</h1>
                                            <h2 class="font18 fontgrey rtl">ניצור איתך קשר בהקדם, בנתיים, למה שלא תשוטטו קצת באתר  ?</h2>         

                                            <div class"text-center">
                                               <a href="<?php echo $home_url; ?>" class="wpcf7-form-control wpcf7-submit btn btn-default text-center bgbtn">לעמוד הבית </a>
                                           </div>                
                                    </div>
                                    
                                    <?php 
                                }
                                else
                                {
                                    ?>
                                    <script>
                                        $(document).ready(function(){
                                            $('html, body').animate({ scrollTop: 0 });
                                        });
                                    </script>
                                    <?php 
                                    echo do_shortcode( '[contact-form-7 id="101" title="Contact form 1"]' );
                                } 
                            ?>
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
                            <a href="https://www.facebook.com/apptodate" class="icon_fb"></a>
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
                            <?php 
                                $year = date('Y');
                                $copy = the_field('copy_right', 'option'); 
                                echo $year.$copy;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
    // $(document).ready(function(){
    //     $(".footer_contact_thax_msg").hide();
        
    //     $(".bgbtn").on("click", function(){
    //         $(".contact_form").hide();
    //         $(".footer_contact_thax_msg").show();
    //         console.log("Click");
    //     });
    // });
    
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