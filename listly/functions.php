<?php

/**
 * For advanced users:
 *
 * Place any custom WordPress hooks or theme functions into this file.
 *
 * This file is optional and can be omitted from your custom theme.
 */

function category_id() {
	$my_category = get_term_by( 'id', $post_categories[0]->cat_ID, 'ai1ec_event' );
	echo "$my_category";
}

?>
