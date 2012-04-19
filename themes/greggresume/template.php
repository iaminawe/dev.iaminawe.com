<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
/**/

/**
* Theme function for 'default' userreference field formatter.

function gregg_resume_theme_userreference_formatter_default($element) {
  $output = '';

  if (isset($element['#item']['uid']) && $account = user_load(array('uid' => $element['#item']['uid']))) {
$output = theme('imagecache', 'tiny_thumb', $account->picture, $alt, $title, $attributes);
  }
  return $output;
}
*/

function greggresume_theme_user_reference_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display) {
  $result = array();

  // @todo Optimisation: use hook_field_formatter_prepare_view() to load
  // user names or full user entities in 'multiple' mode.

  // Collect the list of user ids.
  $uids = array();
  foreach ($items as $delta => $item) {
    $uids[$item['uid']] = $item['uid'];
  }

  switch ($display['type']) {
    case 'user_reference_default':
    case 'user_reference_plain':
      $titles = _user_reference_get_user_names($uids);
      foreach ($items as $delta => $item) {
        if ($display['type'] == 'user_reference_default') {
          $result[$delta] = array(
            '#type' => 'link',
            '#title' => $titles[$item['uid']],
            '#href' => 'user1/' . $item['uid'],
          );
        }
        else {
          $result[$delta] = array(
            '#markup' => check_plain($titles[$item['uid']]),
          );
        }
      }
      break;
  }

  return $result;
}

function greggresume_preprocess_html(&$vars) {
  // give shadowbox its own html
  if (isset($_GET['template']) && $_GET['template'] == 'modalwindow') {
    $vars['theme_hook_suggestions'][] = 'html__modalwindow';
  }
}

function greggresume_preprocess_page(&$vars) {
  // give shadowbox its own page
  if (isset($_GET['template']) && $_GET['template'] == 'modalwindow') {
    $vars['theme_hook_suggestions'][] = 'page__modalwindow';
  }
}

function greggresume_preprocess_custom_pager(&$vars){
  $nav = $vars['nav_array'];
 
  $next_node = array();
  if (!empty($nav['next'])){
    $next_node = get_node_pager_details($nav['next']);
  }
 
  $previous_node = '';
  if (!empty($vars['nav_array']['prev'])){ 
    $previous_node = get_node_pager_details($nav['prev']);
  }
 
  $vars['previous'] = '';
  if(!empty($nav['prev'])){
    $vars['previous'] = drupal_render($previous_node);
    $vars['relation'] = 'Previous Article';
  }
  $vars['next'] = '';
  if(!empty($nav['next'])){
    $vars['next'] = drupal_render($next_node);
    $vars['relation'] = 'Next Article';
  }

}

function get_node_pager_details($nid){
  $node_details = array();
  //this will return the renderable array for the display we created for the pager (2nd argument)
  $node_details = node_view(node_load($nid), 'node_pager');
  return $node_details;
}
