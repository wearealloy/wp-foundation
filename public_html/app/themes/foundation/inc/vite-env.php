<?php

function set_env() {

  define('VITE_DEV', wp_get_environment_type() === 'development');

  if (VITE_DEV) {
    $response = wp_remote_get(VITE_DEV_ENTRY_POINT_URL);

    if (is_array($response) && !is_wp_error($response)) {
      $code = $response["response"]["code"];
      //echo $code;
      define('VITE_DEV_ENABLED', $code === 200);
    } else {
      $code = false;
      define('VITE_DEV_ENABLED', false);
    }
  } else {
    define('VITE_DEV_ENABLED', false);
  }
}

add_action('init', 'set_env');