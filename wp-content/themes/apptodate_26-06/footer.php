<div class="full_div section_footer">
            <div class="container footer_padding">
                <div class="col-md-12 border_bottom padding_bottom25 padding_lr0">
                    <div class="wd_16">
                        <h4 class="bold font24 margin_b_18"><a href="contactus.html">צור קשר</a></h4>
                        <address class="ads_foot">
                          <p class="margin_b_18">+972-54-24403305</p>
                            <p class="margin_b_18">INFO@APPTODATE.CO.IL</p> 
                            <p class="margin_b_18">הזיתים 96, גבעת-שמואל, ישראל</p>
                            <p class="margin_t_20">
                                <a href="#" class="icon_fb"></a>
                                <a href="#" class="icon_ln"></a>
                                <a href="#" class="icon_ig"></a>
                            </p>
                         </p>
                        </address>
                    </div>
                    <ul class="wd_24 link nodots">
                        <h4 class="bold font24 margin_b_18">שירותים</h4>
                        <li><a href="#" class="margin_b_18 font15">UX/UI</a></li>
                        <li><a href="#" class="margin_b_18 font15">שירות</a></li>
                        <li><a href="#" class="margin_b_18 font15">צד שרת</a></li>
                        <li><a href="#" class="margin_b_18 font15">צד שרת</a></li>
                        <li><a href="#" class="margin_b_18 font15">צד שרת</a></li>
                        <li><a href="#" class="margin_b_18 font15">צד שרת</a></li>

                    </ul>
                    <ul class="wd_20 link">
                        <li><a href="blog.html"><h4 class="bold font24 margin_b_18">בלוג </h4></a></li>
                        <li><a href="#" class="margin_b_18 font15">כתבה</a></li>
                        <li><a href="#" class="margin_b_18 font15">כתבה</a></li>
                        <li><a href="#" class="margin_b_18 font15">כתבה</a></li>
                        <li><a href="#" class="margin_b_18 font15">כתבה</a></li>
                        <li><a href="#" class="margin_b_18 font15">כתבה</a></li>
                        <li><a href="#" class="margin_b_18 font15">כתבה</a></li>
                    </ul>
                    <ul class="wd_20 link">
                        <li><a href="projects.html"><h4 class="bold font24 margin_b_18">פרוייקטים</h4></a>
                            <li><a href="#" class="margin_b_18 font15">תקינה</a></li>
                            <li><a href="#" class="margin_b_18 font15">השכונה שלי</a></li>
                            <li><a href="#" class="margin_b_18 font15">יוליב</a></li>
                            <li><a href="#" class="margin_b_18 font15">פרוייקט</a></li>
                    </ul>
                    <ul class="wd_20 link">
                        <li>
                            <h4 class="bold font24 margin_b_18">אנחנו</h4>
                            <li><a href="#" class="margin_b_18 font15">הבית</a></li>
                            <li><a href="#" class="margin_b_18 font15">עמוד</a></li>
                            <li><a href="aboutus.html" class="margin_b_18 font15">אודות</a></li>
                    </ul>
                </div>

                <div class="full_div form-group">
                    <div class="col-sm-6 col-xs-12 text-left nopadding txt-center margin_t_10px xsmall_center">
                        <a href="index.html"><img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png"></a>
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
                        //'menu_class' => ''
                        ) );
                ?>
                <!-- <li><a href="index.html">עמוד הבית</a></li>
                <li><a href="projects.html">פרוייקטים</a></li>
                <li><a href="#">מי אנחנו</a></li>
                <li><a href="services.html">מה אנחנו עושים</a></li>
                <li><a href="blog.html">בלוג</a></li>
                <li><a href="contactus.html">צור קשר</a></li> -->
            <!-- </ul> -->
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