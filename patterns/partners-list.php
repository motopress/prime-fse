<?php
 /**
  * Title: Partners List
  * Slug: prime-fse/partners-list
  * Categories: prime-fse
  */
?>

<?php

if ( function_exists( 'getwid' ) ) {
    get_template_part( 'patterns/getwid/partners-list' );
} else {
    get_template_part( 'patterns/default/partners-list' );
}
