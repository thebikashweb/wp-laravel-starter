<?php
/*
* Template Name: Home page
*/



// passing header variant dark to global variable. Hard coded dark or light can be changed with dynamic variable from the Dashboard
// this is used to render different header for dark or light theme, check header.php and functions.php for GlOBAL Variable defination
$GLOBALS['THEME_VARIANTS']['header_choice'] = 'dark';
get_header();
?>
 

<!--- 
This is a default page php file. At the moment all the blocks are inserted here. 
Later each block can be attached with flexibile content's layout from the WP Dashboard for seperate pages. 
----> 

<!-- Breadcrumb-->
<?php get_template_part('blocks/block', 'breadcrumb');?>
<!-- Breadcrumb ends-->

<p>This is good thing </p>

<!-- custon section margin check common.scss -->
<div class="section-margin-top-3x"></div>


   
<?php get_footer() ?>
