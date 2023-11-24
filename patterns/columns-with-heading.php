<?php
 /**
  * Title: Columns with Heading
  * Slug: prime-fse/columns-with-heading
  * Categories: prime-fse
  */
?>

<?php

if ( function_exists( 'getwid' ) ) {
    get_template_part( 'patterns/getwid/columns-with-heading' );
} else {
    get_template_part( 'patterns/default/columns-with-heading' );
}
