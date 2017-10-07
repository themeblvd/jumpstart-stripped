<?php
/**
 * Custom content for the website header.
 *
 * In this file, you can mix your HTML and PHP the same
 * way you would with other content-*.php files, in order
 * to build your website header from scratch.
 *
 * When inspecting your website on the frontend, this
 * is the basic struction you should see:
 *
 * <div id="top">
 *    <header id="branding" class="site-header">
 *        <div class="wrap clearfix">
 *            <!-- Contents of this file will go here. -->
 *        </div>
 *    </header>
 * </div>
 *
 * Below are some examples of how to pull pieces of the
 * theme that one might want to incorporate in their header,
 * which you can remove or keep... But remember, you can
 * also just use static 'ol HTML in this file, too!
 */
?>

<div class="site-logo">
	<?php
	/**
	 * Output the main site logo setup from the theme
	 * options page.
	 */
	echo themeblvd_get_logo( themeblvd_get_option( 'logo' ) );
	?>
</div>

<div class="site-menu">
	<?php
	/**
	 * Output the site's main menu.
	 */
	wp_nav_menu( themeblvd_get_wp_nav_menu_args( 'primary' ) );
	?>
</div>

<?php
/**
 * Output mobile-specific navigation elements.
 *
 * This includes the mobile menu toggle (hamburger)
 * button and the shopping cart link, if you're using
 * WooCommerce.
 *
 * Note: The menu itself will get built with JavaScript
 * when the page loads; so all you need to add here is
 * the button to open it.
 */
themeblvd_responsive_menu_toggle();
?>
