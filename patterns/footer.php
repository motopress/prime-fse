<?php
 /**
  * Title: Footer
  * Slug: prime-fse/footer
  * Categories: prime-fse
  */
?>

<?php

if ( function_exists( 'getwid' ) ) {
    get_template_part( 'patterns/getwid/footer' );
} else {
    get_template_part( 'patterns/default/footer' );
}