<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
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
                var p = $(".section_form");
                var position = p.position();

                var q = $(".logo_change");
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

<body id="nscroll">
    <div class="container1">
        <div class="full_div">
            <div class="embed-responsive embed-responsive-16by9 h100vh">
                <!-- <img src="img/chickypic_bg.png"> -->
                <div class="outerel">
                    <div class="middlesp">
                        <div class="inner">
                            <p class="tit_heading">Electionapp</p>
                            <p class="tag_head">Your compaign assistant</h1>
                        </div>
                    </div>
                </div>
                <div class="full_div">
                    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                        <div id="section05" class="demo">
                            <a href="#clinet_logo"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                $logo = get_field( 'logo' ); 
                $home_url = home_url('/'); ?>
        <div class="full_heder">
        <a href="<?php echo $home_url; ?>"><img class="logo_container" id="logo" src="<?php echo $logo; ?>" /></a>
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
                        <a href="https://www.facebook.com/apptodate" class="icon_fb"></a>
                        <a href="#" class="icon_ln"></a>
                        <a href="#" class="icon_ig"></a>
                    </p>
                </address>
            </div>
        </div>