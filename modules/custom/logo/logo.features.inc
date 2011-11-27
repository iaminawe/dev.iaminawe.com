<?php
/**
 * @file
 * logo.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function logo_node_info() {
  $items = array(
    'logo' => array(
      'name' => t('logo Project'),
      'base' => 'node_content',
      'description' => t('Add a logo portfolio item including illustrations, identities and streams'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
