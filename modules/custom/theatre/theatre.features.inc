<?php
/**
 * @file
 * theatre.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function theatre_node_info() {
  $items = array(
    'theatre' => array(
      'name' => t('theatre'),
      'base' => 'node_content',
      'description' => t('Add a theatre portfolio item including illustrations, identities and streams'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
