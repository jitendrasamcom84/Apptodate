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
                                //echo $year;
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
    //     alert("Yed");
    //     var li_ele = $(".container").find("li.snake");
    //     $(li_ele).each(function(){
    //         console.log($(this).html());
    //     });
    // });
        //index();
    $(document).ready(function(){
            function InvalidMsg(textbox) {
            
                if (textbox.value == '') {
                    textbox.setCustomValidity('Lütfen işaretli yerleri doldurunuz');
                }
                else if(textbox.validity.typeMismatch){
                    textbox.setCustomValidity('אנא הזן כתובת דוא"ל תקנית');
                }
                else {
                    textbox.setCustomValidity('');
                }
                return true;
        }  
        });    


        $('.trigger').hover(function() { // hover in
                $('#ask').attr('src', 'img/leftarrow1.png');
            },

            function() { // hover in
                $('#ask').attr('src', 'img/leftarrow_b.png');
            });

        
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

        // var textarea = document.querySelector('textarea');

        // textarea.addEventListener('keydown', autosize);
                     
        // function autosize(){
        //   var el = this;
        //   setTimeout(function(){
        //     el.style.cssText = 'height:auto; padding:0';
        //     // for box-sizing other than "content-box" use:
        //     // el.style.cssText = '-moz-box-sizing:content-box';
        //     el.style.cssText = 'height:' + el.scrollHeight + 'px';
        //   },0);
        // }

        $("#description").on('input', function() {
            var scroll_height = $("#description").get(0).scrollHeight;

            $("#description").css('height', scroll_height + 'px');
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