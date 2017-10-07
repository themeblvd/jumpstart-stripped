# A Stripped-Down Jump Start Child Theme

This is an example [Jump Start](https://wpjumpstart.com) child theme for developers that want to truly strip things down and build a custom design.

Even when using the "Developer" theme base of Jump Start, often developers looking to create a really custom design can find it challenging to navigate through all of the action hooks. So hopefully we can simplify things a bit with this child theme starting point.

## The Basic Setup

This child theme example takes a fairly simple approach to basically just strip away everything from the top-level action hooks that output the header and footer of the website. Then, files `content-header.php` and `content-footer.php` are included to hold the inner content of the header and footer.

Now, instead of dealing with the confusion of tracking down action hooks within action hooks and all the default callbacks, we just strip everything away at the top-level and manage it all within our simple files located in the `template-parts` directory.

This also creates a nice separation of HTML markup and template tags, from the PHP code organized within your child theme's `functions.php`.

## Useable Pieces

Now that you're stripping things down, it's up to you how much of the end-user features from the theme options page you actually want to incorporate.

While your `content-header.php` and `content-footer.php` can contain nothing but static HTML if you want, here are some pre-built theme elements you can optionally incorporate within.

### Website Logo

Output the website logo setup at *Appearance > Theme Options > Layout > Header*.

	<?php echo themeblvd_get_logo( themeblvd_get_option( 'logo' ) ); ?>

### Main Menu

Output the main menu assigned to the "Primary Navigation" location at *Appearance > Menus*. &mdash; The following will output the main menu with some default styling already in place as a starting point, along with support for features like dropdown menus and mega menus.

	<?php wp_nav_menu( themeblvd_get_wp_nav_menu_args( 'primary' ) ); ?>

### A More Stripped-Down Main Menu

Alternately to the previous example, if you're looking to just output a stripped down version of the main menu that you can style from scratch, you could do something like the following.

	<?php
	wp_nav_menu( array(
		'theme_location' => apply_filters( 'themeblvd_primary_menu_location', 'primary' )
	));
	?>

*Note: Keeping that `themeblvd_primary_menu_location` filter in place can come in handy if you ever want to filter in different menus for difference scenarios. For example, maybe users logged into your site see a different menu? Or maybe different pages of your site use different menus?*

### Minimal Side Menu

And for the more minimalist folks, you may want to go the route of using a hidden menu for desktop users that can be shown from a hamburger button.

In this case, add your site's main navigation to one of the "Side Menu" locations at *Appearance > Menus* and then simply output the button to toggle it open.

	<?php themeblvd_side_trigger(); ?>

*Note: The menu itself will be outputted by the theme automatically (if assigned from Appearance > Menus) and will be hidden with CSS. So that's why all you need to do is display the hamburger button with the above code, to give the user a way to actually toggle the menu open and closed.*

*Note: Also note that the "side menu" is for desktop users ONLY; it is completely separate from the hidden mobile menu which is for mobile users only.*

### Mobile Menu

Don't forget that your header will also need a way for your mobile users to show the main menu of your site, whether you've used the primary location or one of the side menu locations.

	<?php themeblvd_responsive_menu_toggle(); ?>

*Note: The mobile menu itself is built and inserted with JavaScript when the page loads, taking any menu items assigned to the primary and side menu locations. So, all you need is the button to toggle the menu open and closed.*

### Footer Copyright

Output the "Copyright" text setup from *Appearance > Theme Options > Layout > Footer*.

	<?php echo themeblvd_get_content( themeblvd_get_option( 'footer_copyright' ) ); ?>
