<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package foundation
 */

function has_child_items($nav, $parent_id) {
    $parents_IDs = array_column($nav, "menu_item_parent");
    $found_child_items = array_search($parent_id, $parents_IDs);

    return $found_child_items;
}
