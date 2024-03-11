<?php
 /**
  * Title: Latest Posts 2
  * Slug: prime-fse/latest-posts-2
  * Categories: prime-fse
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"90px","padding":{"right":"var:preset|spacing|normal","left":"var:preset|spacing|normal","top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--normal);padding-right:var(--wp--preset--spacing--normal);padding-bottom:var(--wp--preset--spacing--normal);padding-left:var(--wp--preset--spacing--normal)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-huge"} -->
<h2 class="wp-block-heading has-x-huge-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Latest posts</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Our Blog</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"140px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:query {"queryId":17,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|normal"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-1"}}}},"textColor":"color-1"} /-->

<!-- wp:paragraph -->
<p>|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"fontSize":"huge"} /-->

<!-- wp:post-author-name /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-1"}}}},"textColor":"color-1"} /-->

<!-- wp:paragraph -->
<p>|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}}} /-->

<!-- wp:post-author-name /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--normal);margin-bottom:var(--wp--preset--spacing--normal)"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->