<?php
/**
 * @file
 * video.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function video_node_info() {
  $items = array(
    'video' => array(
      'name' => t('Video'),
      'base' => 'node_content',
      'description' => t('Add a video portfolio item'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
