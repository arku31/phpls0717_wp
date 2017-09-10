<?php
/*
Plugin Name: DIE
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.6
Author URI: http://ma.tt/
*/


function VCcount()
{
    $id = get_the_ID();
    if (get_queried_object_id() == $id) {
        $result = get_post_meta($id, "counter");
        $result = $result[0] + 1;
        update_post_meta($id, 'counter', $result);
    }
}

function VCviewscount()
{
    $id = get_the_ID();
    $result = get_post_meta($id, "counter");
    if (empty($result[0])) {
        $result[0] = "Это первый просмотр!";
    } else {
        $result[0]++;
    }
    return $result[0];
}

add_action('shutdown', 'VCcount');
add_shortcode("views_count", 'VCviewscount');