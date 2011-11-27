<?php
/**
 * @file
 * packaging.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function packaging_node_info() {
  $items = array(
    'packaging' => array(
      'name' => t('packaging'),
      'base' => 'node_content',
      'description' => t('Add a packaging portfolio item including CD/DVD Covers'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
