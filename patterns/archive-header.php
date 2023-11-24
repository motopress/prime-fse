<?php
 /**
  * Title: Archive Header
  * Slug: prime-fse/archive-header
  * Categories: prime-fse
  * Inserter: false
  */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"13px","margin":{"top":"70px","bottom":"90px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:70px;margin-bottom:90px;"><!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<?php if ( function_exists('bcn_init') ) : ?>
<!-- wp:bcn/breadcrumb-trail /-->
<?php endif; ?>

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"70px"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:70px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->