<?php
 /**
  * Title: Search Header
  * Slug: prime-fse/search-header
  * Categories: prime-fse
  * Inserter: false
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"15px","margin":{"bottom":"90px","top":"0"},"padding":{"right":"var:preset|spacing|normal","left":"var:preset|spacing|normal","top":"60px","bottom":"60px"}},"border":{"bottom":{"color":"var:preset|color|color-7","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--color-7);border-bottom-width:1px;margin-top:0;margin-bottom:90px;padding-top:60px;padding-right:var(--wp--preset--spacing--normal);padding-bottom:60px;padding-left:var(--wp--preset--spacing--normal)"><!-- wp:query-title {"type":"search","textAlign":"center"} /-->

<?php if ( function_exists('bcn_init') ) : ?>
<!-- wp:bcn/breadcrumb-trail /-->
<?php endif; ?>

</div>
<!-- /wp:group -->