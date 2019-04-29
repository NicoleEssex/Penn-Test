<?php
/**
 * Single
 *
 * @package Base
 */

get_header();
?>
<div class="single-post-hero" style="width: 1450px; margin: auto;">
	<img src="<?php the_field('post_hero');?>" alt="image of coins spilling out of a jar"/>
	<div id="color-overlay-header" style="width:1450px; height: 100px; position: relative; background-color:#015AE1; bottom: 48px; border-top: 2px solid #063882; box-shadow: 0px -20px 96px -15px black;"></div>
	<div id="second-color-overlay" style="width:1450px; height: 100px; position: relative; background-color:#015AE1; bottom: 74px; box-shadow: 0px 5px 5px -3px grey; transform: matrix(1, -0.035, 0, 1, 0, 0);"></div>
	<h1 style="z-index: 10; position: relative; bottom: 309px; margin-left: 100px; font-weight: 800; color: white; font-size: 72px;"><?php the_field('post_title_line_one');?></h1>
	<h1 style="z-index: 10; position: relative; bottom: 336px; margin-left: 100px; font-weight: 800; color: white; font-size: 72px;"><?php the_field('post_title_line_two');?></h1>
</div>
<main style="display: block; width: 900px; margin-left: 200px; position: relative; bottom: 160px;">
	<div class="post-intro" style="margin-bottom: 7%;">
		<div style="margin-bottom: 7%;"><?php the_field('post_author_and_date');?></div>
		<div style="color: #015AE1; font-size: 36px;"><?php the_field('post_description');?></div>
	</div>
	<div class="paragraph-one" style="margin-bottom: 7%;">
		<h2 style="margin-bottom: 20px;"><?php the_field('post_subtitle_one');?></h2>
		<p style="margin-bottom: 20px; color:#48515C;"><?php the_field('post_paragraph_one');?></p>
		<?php 

		$image = get_field('post_paragraph_one_image');
		$caption = $image['caption'];
		if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<p class="wp-caption-text"><?php echo $caption; ?></p>
		<?php endif; ?>

	</div>
	<div class="paragraph-two" style="margin-bottom: 7%; clear:both; display: table; ">
		<h2 style="margin-bottom: 20px;"><?php the_field('post_subtitle_two');?></h2>
		<img src="<?php the_field('post_paragraph_two_image');?>" alt="image of family in the woods" style="float: right; margin: 30px; margin-left: 80px; margin-right: 0px;"/>
		<p style="margin-bottom: 20px; color:#48515C"><?php the_field('post_paragraph_two');?></p>
		<p style="margin-bottom: 20px; color:#48515C"><?php the_field('post_paragraph_two_a');?></p>
		<p style="margin-bottom: 20px; color:#48515C"><?php the_field('post_paragraph_two_b');?></p>
	</div>
	<div class="paragraph-three" style="margin-bottom: 7%;">
		<h2 style="margin-bottom: 20px;"><?php the_field('post_subtitle_three');?></h2>
		<p style="margin-bottom: 20px; color:#48515C"><?php the_field('post_paragraph_three');?></p>
	</div>
	<div>
		<a href="<?php the_field('button_url');?>"><button type="button" name="button" style="background-color: #015AE1; padding: 10px 40px; color: white;font-size: 28px; border-radius: 50px;"><?php the_field('button_text');?></button>
	</div>
</main>
<?php get_footer(); ?>
