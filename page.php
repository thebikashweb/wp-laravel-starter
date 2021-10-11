<?php

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


<!-- hero section with full-width image for pages -->
                    <!--argument to pass as a prop/3rd argument in template call check block-iconheadingdetail.php, edit value with ACF -->
                    <?php $args = array(
                        'image_url' => get_template_directory_uri().'/images/page-header-image1.png',          
                        'date'=>'',                    
                        'heading'=>'Palvelut',
                        'detail'=>'Kauppakorkeakoulun dekaanin mukaan paikalle haetaan kovan luokan tutkijaa, jonka yksi tehtävä on yhteiskunnallinen vaikuttaminen.',
                        'link_url'=>'',
                        'button_label'=>'Katso lisää',
                     );?>
<?php get_template_part('sections/section','pageherohalf',$args );?>
<?php unset($args); ?>
<!-- hero section with full-width image for pages ends -->

<!-- custon section margin check common.scss -->
<div class="section-margin-top-3x"></div>


<!-- accordion with image on side -->
<?php get_template_part('sections/section', 'accordionsideimage');?>
<!-- accordion with image on side ends -->


<!-- blog card section-->
<?php $args = array(
'image_side' => 'left',
'image_url'=>get_template_directory_uri().'/images/blog-thumb-1.png',
'date'=>'22.3.2021',
'heading_h4'=>'',
'heading_h3'=>'Talvi tulee – toimiiko maalämpöpumppu?',
'detail'=>'',
'link_url'=>'https://##',
'button_label'=>'Lue artikkeli',

);?>
<?php get_template_part( 'sections/section', 'textimagev3', $args);?>
<?php unset($args); ?>
<!-- blog card section ends-->

<!--sankaritarina image text card-->
<?php $args = array(
              'image_side' => 'left',
              'image_url'=>get_template_directory_uri().'/images/carousel-image-1.png',
              'is_link'=>true,
              'link_url'=>'https://##',
              'button_label'=>'Lue sankaritarina',
              'tag_label'=>'Sankaritarina',
              'info_title'=>'',
              'heading_1'=>'Markku Rantasalmi',
              'heading_2'=>'After Sales, MV114',
              );?>
          <?php get_template_part( 'sections/section', 'textimagev2', $args);?>
          <?php unset($args); ?>
<!--sankaritarina image text cardends -->


<!-- CTA with text block, 3rd argument is the variation primar or grey for now-->
<?php get_template_part( 'sections/section', 'textcta', 'primary');?>
<?php get_template_part( 'sections/section', 'textcta', 'grey');?>
<!-- CTA with text block -->



   
<?php get_footer() ?>
