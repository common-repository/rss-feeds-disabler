<?php

/*
  Plugin Name: RSS Feeds Disabler
  Plugin URI: http://strony.pro/disable-rss-wordpress-plugin/
  Description:  Disables RSS Feeds from a Wordpress Installation.
  Version: 1.0
  Author: ppiekarc
  Author URI: http://strony.pro
 */


remove_action('wp_head', 'feed_links', 2);
add_action('wp_head', 'my_feed_links');

function my_feed_links() {

    if (!current_theme_supports('automatic-feed-links'))
        return;
    ?>

    <?php
}

function remove_comments_rss($for_comments) {
    return;
}

add_filter('post_comments_feed_link', 'remove_comments_rss');

remove_action('wp_head', 'feed_links_extra', 3); // Removes the links to the extra feeds
remove_action('wp_head', 'feed_links', 2); // Removes links to the general feeds

?>
