<?php

/**
 * @file
 * CTools plugin. Provides support for core actions.
 */

$plugin = array(
  'title' => t('Action'),
  'list callback' => 'views_bulk_operations_operation_action_list',
  'handler' => array(
    'file' => 'action.class.php',
    'class' => 'ViewsBulkOperationsAction',
  ),
);

/**
 * Returns a prepared list of available actions.
 *
 * Actions are fetched by invoking hook_action_info() and by loading
 * advanced actions from the database.
 *
 * @param $operation_id
 *   The full, prefixed operation_id of the operation (in this case, action)
 *   to return, or NULL to return an array with all operations.
 */
function views_bulk_operations_operation_action_list($operation_id = NULL) {
  $operations = &drupal_static(__FUNCTION__);

  if (!isset($operations)) {
    $actions_list = actions_list() + views_bulk_operations_operation_advanced_action_list();
    $operations = array();
    foreach ($actions_list as $callback => $action) {
      $key = isset($action['key']) ? $action['key'] : $callback;
      // All operations must be prefixed with the operation type.
      $new_operation_id = 'action::' . $key;

      $operations[$new_operation_id] = array(
        'operation_type' => 'action',
        'type' => $action['type'],
        // Keep the unprefixed key around, for use in admin labels and action permissions.
        'key' => $key,
        'callback' => $callback,
        'label' => isset($action['label']) ? $action['label'] : '',
        'parameters' => isset($action['parameters']) ? $action['parameters'] : array(),
        'configurable' => !empty($action['configurable']),
        'aggregate' => !empty($action['aggregate']),
        'behavior' => isset($action['behavior']) ? $action['behavior'] : array(),
        'permissions' => isset($action['permissions']) ? $action['permissions'] : NULL,
        'pass rows' => !empty($action['pass rows']),
      );
    }
  }

  if (isset($operation_id)) {
    return isset($operations[$operation_id]) ? $operations[$operation_id] : FALSE;
  }
  else {
    return $operations;
  }
}

/**
 * Get a list of advanced actions (created through the Action UI).
 */
function views_bulk_operations_operation_advanced_action_list() {
  $actions = array();
  $static_actions = actions_list();
  $result = db_query("SELECT * FROM {actions} WHERE parameters > ''");
  foreach ($result as $action) {
    $parameters = unserialize($action->parameters);
    $actions[$action->aid] = array(
      'label' => isset($action->label) ? $action->label : '',
      'callback' => $action->callback,
      'type' => $action->type,
      'configurable' => FALSE,
      'parameters' => $parameters,
      'key' => $action->callback . (empty($parameters) ? '' : ':'. md5($action->parameters)),
    );
    foreach (array('aggregate', 'behavior', 'permissions', 'pass rows') as $attribute) {
      if (isset($static_actions[$action->callback][$attribute])) {
        $actions[$action->aid][$attribute] = $static_actions[$action->callback][$attribute];
      }
    }
    if (isset($static_actions[$action->callback['parameters']])) {
      $actions[$action->aid]['parameters'] = array_merge($actions[$action->aid]['parameters'], $static_actions[$action->callback]['parameters']);
    }
  }
  return $actions;
}
