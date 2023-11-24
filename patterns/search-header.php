<?php
 /**
  * Title: Search Header
  * Slug: prime-fse/search-header
  * Categories: prime-fse
  * Inserter: false
  */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"13px","margin":{"top":"70px","bottom":"90px"},"padding":{"right":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:70px;margin-bottom:90px;padding-right:10px;padding-left:10px"><!-- wp:query-title {"type":"search","textAlign":"center"} /-->

<?php if ( function_exists('bcn_init') ) : ?>
<!-- wp:bcn/breadcrumb-trail /-->
<?php endif; ?>

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"70px"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:70px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->