<?php
 /**
  * Title: Blog Header
  * Slug: prime-fse/blog-header
  * Categories: prime-fse
  * Inserter: false
  */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"13px","margin":{"bottom":"90px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:90px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"100px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:100px;font-style:normal;font-weight:700;text-transform:uppercase">Blog</h2>
<!-- /wp:heading -->

<?php if ( function_exists('bcn_init') ) : ?>
<!-- wp:bcn/breadcrumb-trail /-->
<?php endif; ?>

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"70px"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:70px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
