# A Stripped-Down Jump Start Child Theme

Even when using the "Developer" theme base of [Jump Start](https://wpjumpstart.com), often developers faced with creating a really custom-looking design that deviates from the default end-user features to setup the website header and footer can find it challenging to navigate through all of the action hooks of Jump Start.

This child theme example takes a fairly simple approach to basically just strip away everything from the top-level action hooks that output the header and footer of the website. Then, files *content-header.php* and *content-footer.php* are included to hold the inner content of the header and footer.

By doing this, instead of having to track down the confusion of action hooks within action hooks, we just strip everything away at the top-level and contain it all within our two simple files.
