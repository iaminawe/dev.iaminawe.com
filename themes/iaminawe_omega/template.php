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

function iaminawe_omega_theme_userreference_formatter_default($element) {
  $output = '';

  if (isset($element['#item']['uid']) && $account = user_load(array('uid' => $element['#item']['uid']))) {
$output = theme('imagecache', 'tiny_thumb', $account->picture, $alt, $title, $attributes);
  }
  return $output;
}
*/

function iaminawe_omega_theme_user_reference_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display) {
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