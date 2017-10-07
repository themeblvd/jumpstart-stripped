<?php
/*-------------------------------------------------------*/
/* Run Theme Blvd framework (required)
/*-------------------------------------------------------*/

require_once( get_template_directory() . '/framework/themeblvd.php' );

/*-------------------------------------------------------*/
/* Start Child Theme
/*-------------------------------------------------------*/

/**
 * Maintain options ID for saved options from parent
 * theme.
 *
 * This allows you to switch between parent and child theme,
 * with your theme options remaining saved to the same value
 * in your WordPress database.
 *
 * @param  string $id Current option ID.
 * @return string     Modified option ID.
 */
function jumpstart_option_id( $id ) {

    return 'jumpstart';

}
add_filter( 'themeblvd_option_id', 'jumpstart_option_id' );

/**
 * Empty out the header.
 *
 * Here, we're removing all of the default top-level header
 * action hooks when using the "Developer" theme base.
 */
remove_action( 'themeblvd_header_top', 'themeblvd_header_top_default' );
remove_action( 'themeblvd_header_above', 'themeblvd_header_above_default' );
remove_action( 'themeblvd_header_content', 'themeblvd_header_content_default' );
remove_action( 'themeblvd_header_menu', 'themeblvd_header_menu_default' );

/**
 * Add custom header.
 *
 * Our header content can now be edited from
 * /template-parts/content-header.php
 */
function my_site_header() {

	get_template_part( 'template-parts/content', 'header' );

}
add_action( 'themeblvd_header_content', 'my_site_header' );

/**
 * Empty out the footer.
 *
 * Here, we're removing all of the default top-level footer
 * action hooks when using the "Developer" theme base.
 */
remove_action( 'themeblvd_footer_content', 'themeblvd_footer_content_default' );
remove_action( 'themeblvd_footer_sub_content', 'themeblvd_footer_sub_content_default' );
remove_action( 'themeblvd_footer_below', 'themeblvd_footer_below_default' );

/**
 * Add custom header.
 *
 * Our footer content can now be edited from
 * /template-parts/content-footer.php
 */
function my_site_footer() {

	get_template_part( 'template-parts/content', 'footer' );

}
add_action( 'themeblvd_footer_content', 'my_site_footer' );
