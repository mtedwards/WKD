<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<h2><?php the_field('role'); ?></h2>
			</header>
			<div class="entry-content">
			 <div class="row">
			 	<div class="small-12 medium-12 large-4 large-push-8 columns">
			 	 <?php
            if ( has_post_thumbnail() ) {
              $small_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small-feature');
              $med_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-feature');
              $large_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
            }
          ?>
			 		<img src="<?php echo $small_url[0]; ?>" data-interchange="[<?php echo $small_url[0]; ?>, (only screen and (min-width: 1px))], [<?php echo $med_url[0]; ?>, (only screen and (min-width: 450px))], [<?php echo $large_url[0]; ?>, (only screen and (min-width: 700px))]">
			 	</div> 
			 	<div class="small-12 medium-12 large-8 large-pull-4 columns">
  			 	<?php the_content(); ?>
			 	</div> 
			 </div>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php// get_sidebar(); ?>
		
<?php get_footer(); ?>