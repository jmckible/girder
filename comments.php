<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

  if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

      <p class="nocomments">This post is password protected. Enter the password to view comments.<p>

<?php
      return;
    }
  }
?>

<!-- You can start editing here. -->
<a name="comments"></a>
<?php if ($comments) : ?>
  <h2>Comments</h2>
  <ul id="Comments">
  <?php foreach ($comments as $comment) : ?>
    <li>
      <div class="byline">
        <cite><?php comment_author_link() ?></cite>
        <span class="date"><?php comment_time('F j') ?></span>
      
        <?php if ($comment->comment_approved == '0') : ?>
          <small>Awaiting moderation</small>
        <?php endif; ?>
          <small><?php edit_comment_link('edit','',''); ?></small>
      </div>
      <div class="content"><?php comment_text() ?></div>
    </li>
  <?php endforeach; /* end for each comment */ ?>
  </ul>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<?php if (!( get_option('comment_registration') && !$user_ID )) : ?>

<h2>Add a Comment</h2>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="AddComment" method="post">

<?php if ( $user_ID ) : ?>

   <p>
     Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.<br />
     <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">Logout &raquo;</a>
   </p>

 <?php else : ?>


  <p>Name<br/>
  <input name="author" id="author" value="<?php echo $comment_author; ?>" size="30" type="text" tabindex="1" /></p>

  <p>Email<br />
  <input name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" type="text" tabindex="2" /></p>

  <p>Web Site<br />
  <input name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" type="text" tabindex="3" /></p>

 <?php endif; ?>
 
  <p>
     <label>
       Comments<br />
       <textarea name="comment" id="comment" tabindex="4"></textarea></p>

   <p>
     <input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
     <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
   <?php do_action('comment_form', $post->ID); ?>
 </form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
