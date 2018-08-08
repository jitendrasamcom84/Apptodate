<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body id="nscroll">

    <div>
        <div class="video-container full-height">
            <video autoplay loop muted class="set-cover">
                <source src="http://newsite.apptodate.co.il/apptodate/wp-content/uploads/2018/02/FINAL-MOVIE.mp4" type="video/mp4"> Your browser does not support the video tag.
            </video>

            <div class="overlay-desc">   
                <form>

                    <?php //echo do_shortcode( '[contact-form-7 id="177" title="Contact form 1"]' ); ?>
                    <h1 class="font46 text-center font_white bolder margin_b_40">צור קשר</h1>

                    <div class="group">
                        <input type="text" required>
                        <label>שם</label>
                    </div>

                    <div class="group">
                        <input type="text" required>
                        <label>מייל</label>
                    </div>

                    <div class="group">
                        <input type="text" required>
                        <label>טלפון</label>
                    </div>

                    <div class="group">
                        <input type="text" required>
                        <label>תוכן ההודעה</label>
                    </div>

                    <div class="text-center set_pos">
                        <button href="#link" style="width: 100%; height: 55px;">שלח</button>
                    </div>
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
                                    <a href="#" class="icon_fb"></a>
                                    <a href="#" class="icon_ln"></a>
                                    <a href="#" class="icon_ig"></a>
                                </p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>