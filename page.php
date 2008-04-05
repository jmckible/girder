<?php get_header(); ?>

<div id="Copy">
  <?php if (have_posts()) : ?>
	  <?php while (have_posts()) : the_post(); ?>
	    <div class="post" id="post_<?php the_ID(); ?>">
	      <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<div class="content"><?php the_content('Continue reading...'); ?></div>
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>
	
		<?php endwhile; ?>
		
	<?php else : ?>

		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

  <?php endif; ?>

</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>