<?php
 /**
  * Title: Call to Action 1
  * Slug: prime-fse/call-to-action-1
  * Categories: prime-fse
  */
?>

<?php

if ( function_exists( 'getwid' ) ) {
    get_template_part( 'patterns/getwid/call-to-action-1' );
} else {
    get_template_part( 'patterns/default/call-to-action-1' );
}
