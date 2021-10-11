Welcome to the Bikashweb. theme.
Here is a quick summary of this theme.

## Getting started

- Have a local version of WordPress in your machine. 
- Inside your wp-contents/themes clone the repo. This project has been preconfigured with the Laravel mix. You need to have The Node installed in your machine to run this project smoothly.
- Publish the local site [Wonsta](https://wonsta.io/)

```
cd .../wp-content/themes
git clone https://github.com/thebikashweb/wp-laravel-starter
cd bikashweb
npm install
npm run watch
```

## Pre-configured

#### This theme has pre configured laravel mix.

- All the SASS file are rendered from `sass/style.scss` to `public/css`
- All node related Javascript files are under `resources/js` which are rendered to `public/js`
- Check webpack.mix.js to add/edit or understand the configuration.
- Furthermore, read [Compiling Assets in Laravel](https://laravel.com/docs/8.x/mix#working-with-scripts)

### slick carousel

- Slick carousel related to js is inside `resources/slick`
- Slick carousel CSS is inside `sass/slick`
- js file is enqueed in functions.php
- To use slick carousel wrap slide inside a div block.

```
<div class="your-class">
  <div>your content</div>
  <div>your content</div>
  <div>your content</div>
</div>
```

- Initialize your slider in your script file or an inline script tag

```
$(document).ready(function(){
  $('.your-class').slick({
    setting-name: setting-value
  });
});

```

- Read more [Getting started](https://kenwheeler.github.io/slick/)
- Additionally, you can use npm to install if you want to use with Vue or React.

#### Featherlight for dialog/modal

- Both js and css files are inside `resources/featherlight`
- js and cs files are enqueed in functions.php
- To use create a `div element` for modal/dialog, initially hide it with `display:none`
- Give the modal div an id, trigger modal by using `data-featherlight="#id"`

```
<a href="#" data-featherlight="#mylightbox">Open element in lightbox</a>
<div id="mylightbox">This div will be opened in a lightbox</div>

```

- Read more [Usage](https://github.com/noelboss/featherlight/#usage)
- Additionally, you can use npm to install featherlight.

## Folders and development structures

#### This theme is modular-based of sections.

- Every section of design should be treated as a seperate section.
- Each section will have its own `section-name.php` file and `_name. scss` file associate with it.
- PHP file will go under `sections` folder and .scss file will go under `sass/sections`. Import .scss in `_sections.scss`
- Try to make sections as generic as possible i.e it can be used for multiple edge cases. For example, a block row with Image and text can have an image on left or right. It may also have only text or text with heading or text, heading, and a button. A button can be a primary call to action button or just a text.
- If it takes too much on styling layout, it is better to break the section into a new section instead of trying to make it too generic.
- Include `<script></script>` and everything related to section inside the `section php` file.
- Idea is, if you need a similar block in another project, you should be able to copy the `section-name.php` file and `_name.scss` and it should work perfectly except for the color and branding.

#### Blocks

- A repeated/re-usable component inside a section can be further splitted into blocks.
- For example a card with an icon, a heading, a description and a button can be splitted into a block.
- Blocks will have their own class name naming pattern (different from parent section) and a .scss file associated with it which goes inside the `sass/blocks` folder.

#### Argument and variables to blocks and sections

- Sections and blocks may have different variation. 3rd argument is passed in template call to pass extra props/arguments.
- Example

```
<!-- Image and text block , 3rd argment is for the image side, links etc for dummy data now, //TODO get it from acf--->
<?php $args = array(
'image_side' => 'left',
'image_url'=>get_template_directory_uri().'/images/man-machine.png',
'is_link'=>true,
'link_url'=>'https://##',
'button_label'=>'About us',
'info_title'=>'',
'heading_title'=>'Do you want to contact us?',

);?>
<?php get_template_part( 'sections/section', 'textimage', $args);?>
<?php unset($args); ?>
<!-- Image and text block ends --->

```

- Above is an example of how argument variables can be defined and pass as props in template call.
- Below is an example of section-textimage.php where props are destructured from the argument and used

```

<?php
/** This argument is for dummy data now but can be modified with real data from ACF or backend */
/** @var array $args */

//get data from argument passed in section template and attach it to variables
$image_side=$args['image_side']; // image side left or right
$image_url=$args['image_url']; // image url/link
$is_link=$args['is_link'];  // if the button is needed //TODO set button variant
$link_url=$args['link_url']; // link url
$button_label=$args['button_label']; // button label
$info_title=$args['info_title']; // info title goes above the heading title
$heading_title=$args['heading_title']; //heading title

//TODO get other variables such image url as paragraph, tag etc
?>



<section class="container max-width mb-5">
  <!-- //TODO get $image_side, link url etc variable from back-end acf for now it is manually set here -->

		<!-- section text-image row image on left text on right -->
    <?php if($image_side=='left'):?>
		<div class="text-image">
			<div class="row d-flex justify-space-between">

				<div class="text-image__image col-lg-6">
          <?php if($args['image_url']) {?>
					<img class="" src="<?php echo $image_url ?>" alt="" />
          <?php }?>
				</div>
</section>
```

#### SASS

- This folder contains all the styling files for this theme.
- Most of the subfolders and files are self-explanatory.
- \_common.scss has all the common override, please check this file before your proceed.
- singles, parts, templates will have scss files related to single-.php, parts-.php, and templates\_.php.
- all the sections will have .scss file under sass/sections
- all the blocks will have .scss file under sass/blocks

#### Adding external css/SCSS

- If possible download css file and avoid using CDN URL
- If possible use scss file. Create a folder inside the sass folder and insert .scss file. Import it to style.scss file.
- If it is .css file, create a folder inside the resources folder and insert your .css file. You will need to enqueue it inside functions.php
- You can take an example of featherlight

#### Adding javascript

- If it is a custom js insert it inside resources/js and enqueue it in functions.php
- If it is a part of the plugin/package, better to create a folder. You can take an example of featherlight.
- Remember to enqueue it in functions.php

## HAPPY CODING 😎😎
