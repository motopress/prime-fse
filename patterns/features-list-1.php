<?php
 /**
  * Title: Features List 1
  * Slug: prime-fse/features-list-1
  * Categories: prime-fse
  */
?>

<?php

if ( function_exists( 'getwid' ) ) {
    get_template_part( 'patterns/getwid/features-list-1' );
} else {
    get_template_part( 'patterns/default/features-list-1' );
}
