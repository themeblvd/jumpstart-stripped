<?php
/**
 * Custom content for the website footer.
 *
 * In this file, you can mix your HTML and PHP the same
 * way you would with other content-*.php files, in order
 * to build your website footer from scratch.
 *
 * When inspecting your website on the frontend, this
 * is the basic struction you should see:
 *
 * <div id="bottom">
 *    <footer id="colophon" class="site-footer">
 *        <div class="wrap clearfix">
 *            <!-- Contents of this file will go here. -->
 *        </div>
 *    </footer>
 * </div>
 */
?>

<div class="site-copyright">
	<?php
	/**
	 * Output the footer copyright text from the theme
	 * options page.
	 */
	echo themeblvd_get_content( themeblvd_get_option( 'footer_copyright' ) );
	?>
</div>
