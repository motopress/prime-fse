<?php
 /**
  * Title: Latest Posts 5
  * Slug: prime-fse/latest-posts-5
  * Categories: prime-fse
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"90px","padding":{"right":"var:preset|spacing|normal","left":"var:preset|spacing|normal","top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--normal);padding-right:var(--wp--preset--spacing--normal);padding-bottom:var(--wp--preset--spacing--normal);padding-left:var(--wp--preset--spacing--normal)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-huge"} -->
<h2 class="wp-block-heading has-text-align-center has-x-huge-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Latest posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":17,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-featured-image {"aspectRatio":"1"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"15px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-1"}}}},"textColor":"color-1"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"15px","bottom":"15px"}}}} /-->

<!-- wp:post-author-name /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->