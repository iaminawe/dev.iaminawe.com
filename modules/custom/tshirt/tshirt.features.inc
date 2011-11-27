<?php
/**
 * @file
 * tshirt.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function tshirt_node_info() {
  $items = array(
    'tshirt' => array(
      'name' => t('tshirt'),
      'base' => 'node_content',
      'description' => t('Add a tshirt portfolio item'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
