<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="search">
    <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="text" />
    <input type="submit" id="searchsubmit" value="Search" class="button"/>
  </div>
</form>