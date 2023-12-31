<?php
 /**
  * Title: Page Header
  * Slug: prime-fse/page-header
  * Categories: prime-fse
  * Inserter: false
  */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"13px","margin":{"bottom":"90px"},"padding":{"right":"10px","left":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:90px;padding-right:10px;padding-left:10px"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"100px","fontStyle":"normal","fontWeight":"700"}}} /-->

<?php if ( function_exists('bcn_init') ) : ?>
<!-- wp:bcn/breadcrumb-trail /-->
<?php endif; ?>

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"70px"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:70px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->