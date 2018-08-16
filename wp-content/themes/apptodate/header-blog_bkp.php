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
    <?php wp_head(); ?>
</head>

<body id="nscroll" <?php body_class(); ?>>
    <!-- Page Title  -->
  <div class="container1">
    <div class="stay_apptodate"> 
       <div class="stay_apptodate_background">
        <div class="container">
           <h2>Stay Apptodate</h2>
           <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                  echo "<span class='txt_pdng font20 line_h45 letter_s2'>";
                      if(get_field('blog-about')):
                          echo get_field('blog-about');
                      endif;
                  echo "</span>";

                  the_content();

                  if ( comments_open() || get_comments_number() ) {
                      comments_template();
                  } 

                  ?>                         
                  <?php
                  // End of the loop.
                endwhile;
            ?>
           <!-- <span>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית לורם</span> -->
        </div>
       </div> 
    </div>
    
    
    <div class="full_heder">
        <a href="index.html"><img class="logo_container"  id="logo" src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" /></a>
        <div class="button_container back_white" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    </div>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
                <li><a href="index.html">עמוד הבית</a></li>
                <li><a href="projects.html">פרוייקטים</a></li>
                <li><a href="#">מי אנחנו</a></li>
                <li><a href="services.html">מה אנחנו עושים</a></li>
                <li><a href="blog.html">בלוג</a></li>
                <li><a href="contactus.html">צור קשר</a></li>
            </ul>
        </nav>
        <div class="full_div font20">
            <address class="add_info line_h1p75 margin_t_10m">
          		<p>+972-54-24403305<br />INFO@APPTODATE.CO.IL</br>הזיתים 96, גבעת-שמואל, ישראל</p>
            <a href="#" class="icon_fb"></a>
            <a href="#" class="icon_ln"></a>
            <a href="#" class="icon_ig"></a>
         </p>
        </address>
        </div>
    </div>
