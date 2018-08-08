 <?php /*
    *
    Template Name: Single
    */
    get_header('single'); ?>
    <?php 
    global $post;
    // echo $post_slug=$post->post_name;
    // print_r(get_page_by_path($post_slug));
    $page_id = get_the_ID(); ?>
    <div class="padding10">
        <div class="container clrbth tpdiv p20 rtl">
            <div class="back_white">
                <h1 class="bold font40"><?php echo get_field('single_blogs_title'); ?></h1>

                <div class="mt20">

                    <div class="cuspad">
                        <div class="dis_inline pull-right">
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Layer-2.png" class="posttype">
                        </div>

                        <div class="dis_inline">
                            <h4 class="bold mt20 text44">נכתב ע”י ישראל ישראלי</h4>
                            <p class="semibold">13/04/18</p>
                        </div>
                    </div>

                    <div>
                    <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); 
                                    ?>
                                    <p class="spectext cuspad"><?php get_the_content(); ?></p>
                                    <?php
                                    //the_content();
                                //
                                // Post Content here
                                //
                            endwhile;
                        endif;
                    ?>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/spec1.png" class="w100p">
                        </div>
                    </div>

                    <div class="mt10 pull-right">
                        <h3 class="bold cuspad">
                            כותרת משנה
                        </h3>

                        <p class="spectext cuspad mt0">
                            לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים.
                        </p>
                    </div>

                    <div class="mt10 pull-right">
                        <h3 class="bold cuspad">
                            כותרת משנה
                        </h3>

                        <p class="spectext cuspad mt0">
                            לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר
                        </p>
                    </div>
                    
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/spec2.png" class="w100p">

                        <p class="spectext cuspad">גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיע</p>
                    </div>

                    <div class="mt10 pull-right">
                        <h3 class="bold cuspad">
                            כותרת משנה
                        </h3>

                        <p class="spectext cuspad mt0">
                            לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>