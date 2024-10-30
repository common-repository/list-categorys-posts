=== List Category's Posts ===
Contributors: cstayyab
Tags: list, category, posts, listing
Requires at least: 4.6
Requires PHP: 5
Tested up to: 4.9
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

It lists all the posts in a specific category on a single page in the form of columns.

== Description ==

This is the simplest plugin that can list all the post in a category with it's featured image. The user can click on the title of post to navigate to the post.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/posts-in-category` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= How to use this plugin? =

You can use the short code "cateposts" to use this plugin. 

= What are the attributes of the shortcode? =

Currently, there is only on attribute "name" whose value should be the name of WordPress post category.

= Can you show me the complete example? =

Just write the following line in your WordPress page or post:
    [cateposts name="uncategorized"]
The above line will list all the posts with thier thumbnail and links in category named "uncategorized".

== Changelog ==

= 0.0.1 =
* List all posts in a category in columns with a border around it.

