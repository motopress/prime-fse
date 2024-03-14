<?php
 /**
  * Title: Post Header
  * Slug: prime-fse/post-header
  * Categories: prime-fse
  * Inserter: false
  */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px","margin":{"top":"60px","bottom":"70px"},"padding":{"right":"var:preset|spacing|normal","left":"var:preset|spacing|normal"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:60px;margin-bottom:70px;padding-right:var(--wp--preset--spacing--normal);padding-left:var(--wp--preset--spacing--normal)"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"textColor":"color-1"} /-->

<!-- wp:paragraph {"textColor":"color-6"} -->
<p class="has-color-6-color has-text-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-1"}}}}} /-->

<!-- wp:paragraph {"textColor":"color-6"} -->
<p class="has-color-6-color has-text-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"huge"} /-->

<?php if ( function_exists('bcn_init') ) : ?>
<!-- wp:bcn/breadcrumb-trail /-->
<?php endif; ?>

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"60px"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:60px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->