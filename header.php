<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">

    <meta charset="utf-8">
    
    <?php wp_head() ?>   
   	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
   
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class(); ?>>

<!-- check if the header theme is dark or light from global variable initiated, it is initiated in functions.php and used in different template and page-->

<?php 
if ($GLOBALS['THEME_VARIANTS']['header_choice'] == 'dark') {
  echo '<div class="header-dark">';
  $logo='logo_dark.svg';
}
else {
  echo '<div class="header-light">';
  $logo='logo_dark.svg';
}
?>

      <div class="wrapper max-width">
      <nav class="navbar navbar-light">        
          <a class="navbar__logo" href="<?php echo get_site_url(); ?>"><img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $logo;?>"/></a>
          
                    <menu>
                      <!-- dynamic menu from backend -->               
                        <?php
                          wp_nav_menu(
                            array(
                              'theme_location'=>'top-menu',
                              )
                          );
                        ?>
                      <!-- dynamic menu from backend ends-->               
                     
                  <!-- mobile hamburger menu and close menu -->
                  <div class="mobile-menu">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                  </div>

                </menu>
        </nav>
        <!-- mobile hamburger menu and close menu ends -->
      </div>
    </div>
                 


    <!-- END .head-wrap -->
   

  <script type="text/javascript">
   jQuery(document).ready(function(){
    jQuery('.mobile-menu').click(function(){
      jQuery('.mobile-menu').toggleClass('nav-active');
      jQuery('.menu-top-nav-menu-container').toggleClass('nav-active');
    });
    jQuery('.menu-top-nav-menu-container').click(function(){
      jQuery('.mobile-menu').removeClass('nav-active');
      jQuery('.menu-top-nav-menu-container').removeClass('nav-active');
    });

    
   });
  
  </script>
