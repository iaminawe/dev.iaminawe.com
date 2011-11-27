<?php
/**
 * @file
 * business_card.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function business_card_node_info() {
  $items = array(
    'business_card' => array(
      'name' => t('business_card Project'),
      'base' => 'node_content',
      'description' => t('Add a business_card portfolio item including illustrations, identities and streams'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
