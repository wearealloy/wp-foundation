<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package foundation
 */

function menu_items($nav_id)
{
    $wp_nav = wp_get_nav_menu_items($nav_id);
    $cleaned_nav = [];

    foreach ($wp_nav as $item) {
        // if item has children
        if (has_child_items($wp_nav, $item->ID) !== false) {
            $parent_url = $item->url;
            $cleaned_nav[] = [
                "ID" => url_to_postid($item->url),
                "title" => $item->title,
                "url" => $item->url,
                "children" => [],
            ];
            continue;
        }

        // if item is a child
        if ($item->menu_item_parent != 0) {
            // child items are preceded by their parent so we can use array_key_last
            $is_hash = $item->url[0] === "#" ? true : false;
            $parent = array_key_last($cleaned_nav);
            array_push($cleaned_nav[$parent]["children"], [
                "ID" => url_to_postid($item->url),
                "title" => $item->title,
                "url" => $is_hash ? $parent_url . $item->url : $item->url,
            ]);
            continue;
        }

        // item that not a child or parent
        $cleaned_nav[] = [
            "ID" => url_to_postid($item->url),
            "title" => $item->title,
            "url" => $item->url,
        ];
    }

    return $cleaned_nav;
}
