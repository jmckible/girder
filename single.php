<?php get_header(); ?>

<div id="Copy">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post_<?php the_ID(); ?>">
      <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
      <div class="byline">
        <cite><?php the_author() ?></cite>
  	    <span class="date"><?php the_time('F j, Y') ?></span>
        
      </div>
			<div class="content">
        <?php the_content('<p class="serif">Continue reading...</p>'); ?>
       	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>
		</div>
	  <?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>