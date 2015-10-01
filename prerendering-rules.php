<?php
/*
* Plugin Name: Prerendering Rules by Max (Demorden)
* Description: Snippet that allows per-post override of prerendering rules. REQUIRES "WordPress Instant Articles" AND (for now) "Advanced Custom Fields".
* Plugin URI: https://github.com/Demorden/prerendering-rules-for-wp-instant-articles
* Author: Max (Demorden)
* Version: 1.0
* Author URI: http://fantazine.eu/
* License: GNU AGPL
* GitHub Plugin URI: https://github.com/Demorden/prerendering-rules-for-wp-instant-articles
* GitHub Branch:     master
*/

/*
FIRST USE ACF TO CREATE A FIELD GROUP, NAME IT AS YOU LIKE, I SUGGEST SOMETHING ALONG THE LINES OF 'PRERENDERING RULES OVERRIDE' OR SOMETHING;
CREATE POST OBJECT FIELD, IN MY EXAMPLE IT'S CALLED 'ARTICOLO_PRERENDER', AND A TRUE-FALSE FIELD ('OVERRIDE' IN MY EXAMPLE)
CHOOSE FIELDS SETTINGS AS NEEDED, I WANT BOTH ACTIVE EVERYWHERE FOR ADMINS
*/

//function to check dependency
function rewrite_prerendering_init() {
	if( class_exists( 'WPInstantArticles_Plugin' ) && class_exists( 'acf' ) ) {

// FIRST we create ADDITIONAL rules: add selected posts to the list of prerendered posts in this page
add_filter('wpinstant_prerendered_urls', function($urls) {
    $values = get_field('articolo_prerender'); //change this according to your actual field name
        if($values) {
            foreach($values as $value) {
                $permalink = get_permalink( $value );
                if($permalink) {
                    $urls[] = $permalink;
                }
            }
        }
return $urls;
});

// SECOND we IGNORE DEFAULT RULES (the ones set in the "WordPress Instant Articles" Settings Page), if -and only if- the override option is checked on page.
// If we don't check the option, the plugin will prerender our hand-picked links AND ALSO its default ones.

add_filter('wpinstant_prerendered_urls_override_defaults', function($overresult) {
	$override = get_field('override'); //change this according to your actual field name
	if ( $override != 1 ) { return false; }
	return true;
});

//close function for dependency
}
}
add_action( 'plugins_loaded', 'rewrite_prerendering_init' );
