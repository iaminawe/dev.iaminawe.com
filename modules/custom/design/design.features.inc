<?php
/**
 * @file
 * design.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function design_node_info() {
  $items = array(
    'design' => array(
      'name' => t('design'),
      'base' => 'node_content',
      'description' => t('Add a design portfolio item including illustrations, identities and streams'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
