<?php

/**
 * @file
 * template.php
 */
function bs_deludenoid_preprocess_page(&$variables) {
  $site_root = $GLOBALS['base_path'];
  $variables['site_root'] = $site_root;
}
