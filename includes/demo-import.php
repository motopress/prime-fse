<?php

/**
 *
 * Demo data
 *
 **/

 function prime_fse_ocdi_import_files() {

	return array(
		array(
            'import_file_name' => 'Prime FSE Demo',
			'import_file_url' => '',
			'preview_url' => 'https://themes.getmotopress.com/prime',
		)
	);
}
add_filter( 'pt-ocdi/import_files', 'prime_fse_ocdi_import_files' );

function prime_fse_ocdi_after_import_setup($selected_import)
{

	// Assign front page and posts page (blog page).
	$front_page = prime_fse_get_page_by_title('Home');
	$blog_page = prime_fse_get_page_by_title('Blog');

    if ( $front_page ) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page->ID);
    }

    if ( $blog_page ) {
        update_option('page_for_posts', $blog_page->ID);
    }

	//update taxonomies
	$update_taxonomies = array(
		'post_tag',
		'category'
	);

	foreach ($update_taxonomies as $taxonomy) {
		prime_fse_ocdi_update_taxonomy($taxonomy);
	}

	//set site default logo
	$logo = prime_fse_get_attachment_by_name('logo');
	if ($logo) {
		set_theme_mod('custom_logo', $logo->ID);
	}

}

add_action('pt-ocdi/after_import', 'prime_fse_ocdi_after_import_setup');

// Disable generation of smaller images (thumbnails) during the content import
//add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

// Disable the branding notice
add_filter('pt-ocdi/disable_pt_branding', '__return_true');

function prime_fse_ocdi_update_taxonomy($taxonomy)
{
	$get_terms_args = array(
		'taxonomy' => $taxonomy,
		'fields' => 'ids',
		'hide_empty' => false,
	);

	$update_terms = get_terms($get_terms_args);
	if ($taxonomy && $update_terms) {
		wp_update_term_count_now($update_terms, $taxonomy);
	}
}

function prime_fse_get_attachment_by_name($name)
{
	$args = array(
		'post_type' => 'attachment',
		'name' => $name,
		'posts_per_page' => 1,
		'post_status' => 'inherit',
	);

	$image = get_posts($args);

	return $image ? array_pop($image) : null;
}

function prime_fse_get_page_by_title( $title )
{
	$posts = get_posts(
		array(
			'post_type' => 'page',
			'title' => $title,
			'post_status' => 'all',
			'numberposts' => 1,
			'update_post_term_cache' => false,
			'update_post_meta_cache' => false,
			'orderby' => 'post_date',
			'order' => 'DESC',
		)
	);

	if ( ! empty( $posts ) ) {
		$page_got_by_title = $posts[0];
	} else {
		$page_got_by_title = null;
	}

	return $page_got_by_title;

}
