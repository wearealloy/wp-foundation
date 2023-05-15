<?php

add_action('wp_head', 'vite_scripts');

function vite_scripts () {
  if (VITE_DEV && VITE_DEV_ENABLED) {
    echo '<script type="module" crossorigin src="'.VITE_DEV_SERVER_URL . VITE_ENTRY_POINT.'"></script>';
  } else {
    $manifest_file = get_template_directory() . '/dist/manifest.json';

    if (file_exists($manifest_file)) {
      //$manifest_path = file_get_contents(get_template_directory_uri() . '/dist/manifest.json');
      $manifest = json_decode( file_get_contents($manifest_file), true);

      if (is_array($manifest)) {
        $manifest_css = preg_grep('/\.css$/', array_keys($manifest));
        $manifest_js = preg_grep('/\.js$/', array_keys($manifest));
        $manifest_js = implode($manifest_js);

        if (isset($manifest_js)) {

          echo "<script type='module'>!function(){const e=document.createElement('link').relList;if(!(e&&e.supports&&e.supports('modulepreload'))){for(const e of document.querySelectorAll('link[rel=modulepreload]'))r(e);new MutationObserver((e=>{for(const o of e)if('childList'===o.type)for(const e of o.addedNodes)if('LINK'===e.tagName&&'modulepreload'===e.rel)r(e);else if(e.querySelectorAll)for(const o of e.querySelectorAll('link[rel=modulepreload]'))r(o)})).observe(document,{childList:!0,subtree:!0})}function r(e){if(e.ep)return;e.ep=!0;const r=function(e){const r={};return e.integrity&&(r.integrity=e.integrity),e.referrerpolicy&&(r.referrerPolicy=e.referrerpolicy),'use-credentials'===e.crossorigin?r.credentials='include':'anonymous'===e.crossorigin?r.credentials='omit':r.credentials='same-origin',r}(e);fetch(e.href,r)}}();</script>";

          wp_print_script_tag([
            "type" => "module",
            "id" => "main-app-script",
            "src" => VITE_DIST_URI . $manifest[$manifest_js]['file'],
            "onload" => "e=new CustomEvent('vite-script-loaded', {detail:{path: 'src/js/app.js'}});document.dispatchEvent(e);",
          ]);
        }

        if (isset($manifest_css[0])) {
          $media_all = "this.media='all'";
          echo '<link href="'.VITE_DIST_URI . $manifest[$manifest_css[0]]['file'] .'" rel="stylesheet" media="print" onload="'.$media_all.'">';
        }
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
