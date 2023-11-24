<?php
 /**
  * Title: Header
  * Slug: prime-fse/header
  * Categories: prime-fse
  */
?>

<?php

if ( function_exists( 'getwid' ) && function_exists( 'getwid_megamenu_init' ) ) {
    get_template_part( 'patterns/getwid/header' );
} else {
    get_template_part( 'patterns/default/header' );
}