<?php
/**
 * @file
 * website.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function website_node_info() {
  $items = array(
    'website' => array(
      'name' => t('website'),
      'base' => 'node_content',
      'description' => t('Add a website portfolio item'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
