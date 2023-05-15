<?php

define('VITE_DIST', '/dist/');
define('VITE_DIST_PATH', get_template_directory_uri() . VITE_DIST);
define('VITE_MANIFEST', get_template_directory() . '/dist/manifest.json');
define('VITE_DIST_URI', get_template_directory_uri() . '/dist/');
define('VITE_DEV_SERVER_URL', 'http://localhost:3000');
define('VITE_ENTRY_POINT', '/src/js/app.js');
define('VITE_DEV_ENTRY_POINT_URL', VITE_DEV_SERVER_URL . VITE_ENTRY_POINT);