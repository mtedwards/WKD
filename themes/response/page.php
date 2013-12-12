<?php get_header(); the_post();?>

<!-- Row for main content area -->
	<div class="small-12 medium-6 large-12 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
			  <h1 class="entry-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><?php //end entry-content ?>
		</article>
	</div><?php //end role main ?>
		
<?php get_footer(); ?>