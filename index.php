<?php get_header(); ?>

<div id="Copy">
  <?php if (have_posts()) : ?>
	  <?php while (have_posts()) : the_post(); ?>
	    <div class="post" id="post_<?php the_ID(); ?>">
	      <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	      <div class="byline">
	  	    <span class="date"><?php the_time('F j') ?></span>
          <cite><?php the_author() ?></cite>
        </div>
				<div class="content"><?php the_content('Continue reading...'); ?></div>
				<div class="comments"><?php comments_popup_link('Leave a comment', '1 comment', '% comments'); ?></div>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>