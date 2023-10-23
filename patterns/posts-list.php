<?php
 /**
  * Title: Posts List
  * Slug: prime-fse/posts-list
  * Categories: prime-fse
  */
?>

<!-- wp:query {"queryId":18,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"blockGap":"13px","margin":{"bottom":"17px"}}},"className":"is-style-with-separator","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-with-separator" style="border-style:none;border-width:0px;margin-bottom:17px"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-1"}}}}} /-->

<!-- wp:paragraph {"textColor":"color-6"} -->
<p class="has-color-6-color has-text-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"17px"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|color-1"}},"color":{}}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{}}} /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->