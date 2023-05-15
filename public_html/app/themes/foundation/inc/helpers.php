<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package foundation
 */

function get_component($component, $props = null) {
  return get_template_part('components/component', $component, $props);
}

function get_snippet($snippet, $props = null) {
  $snippet_path = 'snippets/' . $snippet;
  return get_template_part($snippet_path, null, $props);
}

function get_icon($icon) {
  return get_template_part('snippets/icon', $icon, null);
}

function get_meta($slug) {
  $file_path = 'meta/' . $slug;
  return get_template_part($file_path, null, null);
}