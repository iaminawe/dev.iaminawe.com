<?php
/**
 * @file
 * mobile.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function mobile_node_info() {
  $items = array(
    'mobile' => array(
      'name' => t('mobile'),
      'base' => 'node_content',
      'description' => t('Add a mobile portfolio item'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
