<?php
/*
Plugin Name: List Category's Posts
Description: It lists all the posts in a specific category on a single page in the form of columns.
Author: Muhammad Tayyab Sheikh
Author URI: https://cstayyab.wordpress.com/
Text Domain: posts-in-category
Version: 0.0.1
*/

add_shortcode( 'cateposts', 'cateposts_func' );
function cateposts_func( $atts ) {
    $attribs = shortcode_atts(array('name'=>''), $atts);
    $catID = get_cat_ID($attribs['name']);
    if($catID ==0) {
        return null;
    }
    $cat_posts = get_posts(array('numberposts' => -1, 'category'=>$cat_ID));
    $out = "";
    foreach($cat_posts as $thispost) {
        $thumbURL = get_the_post_thumbnail_url($thispost);
        $thumbALT = the_post_thumbnail_caption($thispost);    

        $thumb = wp_get_attachment_url( get_post_thumbnail_id($thispost->ID), 'thumbnail' );
        $out .= "<div style=\"display:inline-block; margin:2px; padding:0px;\"><figure  style=\"border: darkgray solid 1px; border-radius:10px;\"><img style=\"border-top-left-radius:10px; border-top-right-radius:10px;\" src=\"".$thumbURL."\" alt=\"".$thumbALT."\" width=\"300\" height=\"300\"><figcaption><a href=\"".get_permalink($thispost)."\"><center>".$thispost->post_title."</center></a></figcaption></figure></div>";
    }
    return $out;
}
?>
