<?php get_header(); the_post();?>

<!-- Row for main content area -->
	<div class="small-12 medium-12 large-12 columns the-cast" role="main">		
  <?php
  	$args = array( 
  	    'post_type' => 'people',	   
  	    'posts_per_page' => 100,                
  	    'orderby'   => 'menu_order',
        'order'     => 'ASC'
  	    );
  	
  	$the_query = new WP_Query( $args );
  	
  	// The Loop
  	if ( $the_query->have_posts() ) :
  	while ( $the_query->have_posts() ) : $the_query->the_post();
  	 if ( has_post_thumbnail() ) {
        $small_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small-feature');
        $med_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-feature');
      } ?>
  	
  	 <article>
      <a href="#">
        <img src="<?php echo $small_url[0]; ?>" data-interchange="[<?php echo $small_url[0]; ?>, (only screen and (min-width: 1px))], [<?php echo $med_url[0]; ?>, (only screen and (min-width: 450px))]">
          <div>
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('role'); ?></h2>
          </div>
  		</a>
  		<div class="cast-content">
  		  <div class="row">
  		  	<div class="hide-for-medium-down large-6 columns">
  		  		<img src="<?php echo $small_url[0]; ?>" data-interchange="[<?php echo $small_url[0]; ?>, (only screen and (min-width: 1px))], [<?php echo $med_url[0]; ?>, (only screen and (min-width: 450px))]">
  		  	</div> 
  		  	<div class="small-12 medium-12 large-6 columns">
  		  	  <h1 class="hide-for-small"><?php the_title(); ?></h1>
            <h2 class="hide-for-small"><?php the_field('role'); ?></h2>
  		  		<?php the_excerpt(); ?>
  		  		<a class="alignright" href="<?php the_permalink(); ?>">Read More</a>
  		  	</div> 
  		  </div>
  		  
  		</div>
  	 </article>
  	 
  	<?
  	endwhile;
  	endif;
  	
  	// Reset Post Data
  	wp_reset_postdata();
  	
  	?>
    <div class="content"></div>
	</div><?php //end role main ?>
		
<?php get_footer(); ?>