<?php
 /**
  * Title: Image with Text
  * Slug: prime-fse/image-text
  * Categories: prime-fse
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"140px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/image-2.jpg' ) ); ?>" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p>Start Today</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size">Makes the block editor your best tool</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vivamus accumsan sapien vel pulvinar volutpat. Duis nisi augue, consectetur eget ornare eu, malesuada sit amet enim. Sed mollis nulla eget elementum tristique.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|normal"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--normal)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Explore</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->