	<div id="Sidebar">
      <?php /* If this is a 404 page */ if (is_404()) { ?>
      <?php /* If this is a category archive */ } elseif (is_category()) { ?>
      <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
      
      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p>You are currently browsing the archives for the day <?php the_time('l, F d, Y'); ?>.</p>
      
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p>You are currently browsing the archives for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p>You are currently browsing the archives for the year <?php the_time('Y'); ?>.</p>
      
     <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p>You have searched the archives for <strong>'<?php echo wp_specialchars($s); ?>'</strong>.
         If you are unable to find anything in these search results, you can try one of these links.</p>

      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> archives.</p>

      <?php } ?>

    <h2>Syndicate <a href="http://feeds.feedburner.com/GrindingRails"><img src="<?php bloginfo('template_directory');?>/images/rss.gif"></a></h2>
    <p>Subscribe to the <a href="http://feeds.feedburner.com/GrindingRails">RSS feed</a>.</p>

		<h2>Pages</h2>
		<p><a href="http://tuples.us/rails-guide">Rails Guide</a> - Get Rails setup on OS X and deploy your application to production.</p>
    
  
    <h2>About</h2>
    <p>Grinding Rails is the technical blog of <a href="http://jordan.mckible.com/">Jordan McKible</a>.  It's mostly about Ruby and Rails.</p>
    
     <h1><a href="http://twitter.com/jmckible">Twitter</a></h1>
     <p><span id="my_twitter_status"></span></p>
    
    <h2>Archives</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
    
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  
	</div>

