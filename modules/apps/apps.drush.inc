<?php

/**
 * @file
 *   Features module drush integration.
 */

/**
 * Implements hook_drush_command().
 * 
 * @See drush_parse_command() for a list of recognized keys.
 *
 * @return
 *   An associative array describing your command(s).
 */
function apps_drush_command() {
  $items = array();

  $items['apps-server-list'] = array(
    'description' => "List all the available servers for your site.",
    'drupal dependencies' => array('apps'),
    'aliases' => array('asl', 'apps-servers'),
  );
  $items['apps-list'] = array(
    'description' => "List Apps from a server.",
    'arguments' => array(
      'server' => 'A space-delimited list of server keys.',
    ),
    'drupal dependencies' => array('apps'),
    'aliases' => array('al'),
  );
  $items['apps-install'] = array(
    'description' => "Install App.",
    'arguments' => array(
      'app' => 'A space-delimited list of apps to install.',
    ),
    'drupal dependencies' => array('apps'),
    'aliases' => array('ai'),
  );
  return $items;
}

/**
 * Implements hook_drush_help().
 */
function apps_drush_help($section) {
  switch ($section) {
    case 'drush:apps':
      return dt("List all the available apps for your site.");
    case 'drush:apps-install':
      return dt("Install an App to your site.");
  }
}

/**
 * Get a list of all feature modules.
 */
function drush_apps_server_list() {
  module_load_include('inc', 'apps', 'apps.manifest');
  $servers = apps_servers();
  $rows = array(array(dt('Key'), dt('Name'), dt('desc'), dt('URL')));
  foreach ($servers as $k => $server) {
    $rows[] = array(
      $k,
      $server['title'],
      $server['description'],
      $server['manifest'],
    );
  }
  drush_print_table($rows, TRUE);
}

/**
 * Get a list of all feature modules.
 */
function drush_apps_list() {
  $servers = func_get_args();
  module_load_include('inc', 'apps', 'apps.manifest');
  $servers = !empty($servers)? $servers : array_keys(apps_servers());
  $rows = array(array(dt('Key'), dt('Name'),dt('version'),dt('server'), dt('status')));
  foreach($servers as $server) {
    $apps = apps_apps($server);
    foreach ($apps as $k => $app) {
      $status = '';
      switch($app['status']) {
        CASE INCOMPATABLE : $status = 'Incompatable'; break;
        CASE DISABLED : $status = 'Disabled'; break;
        CASE ENABLED : $status = 'Enabled'; break;
        CASE INSTALLABLE : $status = 'Installable'; break;
      }
      $rows[] = array(
        $k,
        $app['name'],
        $app['version'],
        $server,
        $status,
        //print_r($app, TRUE),
      );
    }
    unset($apps);
  }
  drush_print_table($rows, TRUE);
}



/**
 * Create a feature module based on a list of components.
 */
function drush_apps_export() {
  $args = func_get_args();

  if (count($args) == 1) {
    // Assume that the user intends to create a module with the same name as the
    // "value" of the component.
    list($source, $component) = explode(':', $args[0]);
    $stub = array($source => array($component));
    $sources = apps_get_components();
    if (empty($component) || empty($sources[$source])) {
      _apps_drush_set_error($args[0], 'FEATURES_COMPONENT_NOT_FOUND');
      exit;
    }
    else {
      _drush_apps_export($stub, $component);
    }
  }
  elseif (count($args) > 1) {
    // Assume that the user intends to create a new module based on a list of 
    // components. First argument is assumed to be the name.
    $name = array_shift($args);
    $stub = array();
    foreach ($args as $v) {
      list($source, $component) = explode(':', $v);
      $stub[$source][] = $component;
    }
    _drush_apps_export($stub, array(), $name);
  }
  else {
    $rows = array(array(dt('Available sources')));
    foreach (apps_get_components(TRUE) as $component => $info) {
      if ($options = apps_invoke($component, 'apps_export_options')) {
        foreach ($options as $key => $value) {
          $rows[] = array($component .':'. $key);
        }
      }
    }
    drush_print_table($rows, TRUE);
  }
}

/**
 * Update an existing feature module.
 */
function drush_apps_update() {
  if ($args = func_get_args()) {
    foreach ($args as $module) {
      if (($feature = feature_load($module, TRUE)) && module_exists($module)) {
        _drush_apps_export($feature->info['apps'], $feature->info['dependencies'], $feature->name, dirname($feature->filename));
      }
      else if ($feature) {
        _apps_drush_set_error($module, 'FEATURES_FEATURE_NOT_ENABLED');
      }
      else {
        _apps_drush_set_error($module);
      }
    }
  }
  else {
    // By default just show contexts that are available.
    $rows = array(array(dt('Available apps')));
    foreach (apps_get_apps(NULL, TRUE) as $name => $info) {
      $rows[] = array($name);
    }
    drush_print_table($rows, TRUE);
  }
}

/**
 * Update all enabled apps. Optionally pass in a list of apps to
 * exclude from being updated.
 */
function drush_apps_update_all() {
  $apps_to_update = array();
  $apps_to_exclude = func_get_args();
  foreach (apps_get_apps() as $module) {
    if ($module->status && !in_array($module->name, $apps_to_exclude)) {
      $apps_to_update[] = $module->name;
    }
  }
  drush_print(dt('The following modules will be updated: !modules', array('!modules' => implode(', ', $apps_to_update))));
  if (drush_confirm(dt('Do you really want to continue?'))) {
    foreach ($apps_to_update as $module_name) {
      drush_backend_invoke('apps-update '. $module_name);
    }
  }
  else {
    drush_die('Aborting.');
  }
}

/**
 * Write a module to the site dir.
 *
 * @param $requests
 *   An array of the context requested in this export.
 * @param $module_name
 *  Optional. The name for the exported module.
 */
function _drush_apps_export($stub, $dependencies, $module_name = NULL, $directory = NULL) {
  $root = drush_get_option(array('r', 'root'), drush_locate_root());
  if ($root) {
    $destination = drush_get_option(array('destination'), 'sites/all/modules');
    $directory = isset($directory) ? $directory : $destination . '/' . $module_name;
    if (is_dir($directory)) {
      drush_print(dt('Module appears to already exist in !dir', array('!dir' => $directory)));
      if (!drush_confirm(dt('Do you really want to continue?'))) {
        drush_die('Aborting.');
      }
    }
    else {
      drush_op('mkdir', $directory);
    }
    if (is_dir($directory)) {
      drupal_flush_all_caches();
      module_load_include('inc', 'apps', 'apps.export');
      $export = apps_populate($stub, $dependencies, $module_name);
      if (!feature_load($module_name)) {
        $export['name'] = $module_name;
      }
      $files = apps_export_render($export, $module_name, TRUE);
      foreach ($files as $extension => $file_contents) {
        if (!in_array($extension, array('module', 'info'))) {
          $extension .= '.inc';
        }
        drush_op('file_put_contents', "{$directory}/{$module_name}.$extension", $file_contents);
      }
      drush_log(dt("Created module: !module in !directory", array('!module' => $module_name, '!directory' => $directory)), 'ok');
    }
    else {
      drush_die(dt('Couldn\'t create directory !directory', array('!directory' => $directory)));
    }
  }
  else {
    drush_die(dt('Couldn\'t locate site root'));
  }
}

/**
 * Revert a feature to it's code definition.
 */
function drush_apps_revert() {
  if ($args = func_get_args()) {
    module_load_include('inc', 'apps', 'apps.export');
    apps_include();

    // Determine if revert should be forced.
    $force = drush_get_option('force');
    foreach ($args as $module) {
      if (($feature = feature_load($module, TRUE)) && module_exists($module)) {

        $components = array();
        // Forcefully revert all components of a feature.
        if ($force) {
          foreach (array_keys($feature->info['apps']) as $component) {
            if (apps_hook($component, 'apps_revert')) {
              $components[] = $component;
            }
          }
        }
        // Only revert components that are detected to be Overridden/Needs review.
        else {
          $states = apps_get_component_states(array($feature->name), FALSE);
          foreach ($states[$feature->name] as $component => $state) {
            if (in_array($state, array(FEATURES_OVERRIDDEN, FEATURES_NEEDS_REVIEW)) && apps_hook($component, 'apps_revert')) {
              $components[] = $component;
            }
          }
        }

        if (empty($components)) {
          drush_log(dt('Current state already matches defaults, aborting.'), 'ok');
        }
        else {
          foreach ($components as $component) {
            if (drush_confirm(dt('Do you really want to revert !component?', array('!component' => $component)))) {
              apps_revert(array($module => array($component)));
              drush_log(dt('Reverted !component.', array('!component' => $component)), 'ok');
            }
            else {
              drush_log(dt('Skipping !component.', array('!component' => $component)), 'ok');
            }
          }
        }
      }
      else if ($feature) {
        _apps_drush_set_error($module, 'FEATURES_FEATURE_NOT_ENABLED');
      }
      else {
        _apps_drush_set_error($module);
      }
    }
  }
  else {
    drush_apps_list();
    return;
  }
}

/**
 * Revert all enabled apps to their definitions in code. Optionally pass in
 * a list of apps to exclude from being reverted.
 */
function drush_apps_revert_all() {
  $apps_to_revert = array();
  $apps_to_exclude = func_get_args();
  $force = drush_get_option('force');
  foreach (apps_get_apps() as $module) {
    if ($module->status && !in_array($module->name, $apps_to_exclude)) {
      $apps_to_revert[] = $module->name;
    }
  }
  drush_print(dt('The following modules will be reverted: !modules', array('!modules' => implode(', ', $apps_to_revert))));
  if (drush_confirm(dt('Do you really want to continue?'))) {
    foreach ($apps_to_revert as $module_name) {
      drush_backend_invoke('apps-revert '. $module_name, array('force' => $force));
    }
  }
  else {
    drush_die('Aborting.');
  }
}

/**
 * Show the diff of a feature module.
 */
function drush_apps_diff() {
  if (!$args = func_get_args()) {
    drush_apps_list();
    return;
  }
  $module = $args[0];
  $feature = feature_load($module);
  if (!module_exists($module)) {
    drush_log(dt('No such feature is enabled: ' . $module), 'error');
    return;
  }
  module_load_include('inc', 'apps', 'apps.export');
  $overrides = apps_detect_overrides($feature);
  if (empty($overrides)) {
    drush_log(dt('Feature is in its default state. No diff needed.'), 'ok');
    return;
  }
  module_load_include('inc', 'diff', 'diff.engine');

  if (!class_exists('DiffFormatter')) {
    if (drush_confirm(dt('It seems that the Diff module is not available. Would you like to download and enable it?'))) {
      // Download it if it's not already here.
      $project_info = drush_get_projects();
      if (empty($project_info['diff']) && !drush_backend_invoke('dl diff')) {
        return drush_set_error(dt('Diff module could not be downloaded.'));
      }

      if (!drush_backend_invoke('en diff')) {
        return drush_set_error(dt('Diff module could not be enabled.'));
      }
    }
    else {
      return drush_set_error(dt('Diff module is not enabled.'));
    }
    // If we're still here, now we can include the diff.engine again.
    module_load_include('inc', 'diff', 'diff.engine');
  }

  $formatter = new DiffFormatter();
  $formatter->leading_context_lines = 2;
  $formatter->trailing_context_lines = 2;
  $formatter->show_header = FALSE;

  if (drush_get_context('DRUSH_NOCOLOR')) {
    $red = $green = "%s";
  }
  else {
    $red = "\033[31;40m\033[1m%s\033[0m";
    $green = "\033[0;32;40m\033[1m%s\033[0m";
  }

  // Print key for colors
  drush_print(dt('Legend: '));
  drush_print(sprintf($red,   dt('Code:       drush apps-revert will remove the overrides.')));
  drush_print(sprintf($green, dt('Overrides:  drush apps-update will update the exported feature with the displayed overrides')));
  drush_print();

  foreach ($overrides as $component => $items) {
    $diff = new Diff(explode("\n", $items['default']), explode("\n", $items['normal']));
    drush_print();
    drush_print(dt("Component: !component", array('!component' => $component)));
    $rows = explode("\n", $formatter->format($diff));
    foreach ($rows as $row) {
      if (strpos($row, '>') === 0) {
        drush_print(sprintf($green, $row));
      }
      elseif (strpos($row, '<') === 0) {
        drush_print(sprintf($red, $row));
      }
      else {
        drush_print($row);
      }
    }
  }
}

/** Helper function to call drush_set_error().
 *
 * @param $feature The string name of the feature.  @param $error A text string
 * identifying the type of error.  @return FALSE.  See drush_set_error().
 */
function _apps_drush_set_error($feature, $error = '') { $args =
array('!feature' => $feature);

  switch ($error) { case 'FEATURES_FEATURE_NOT_ENABLED': $message = 'The
  feature !feature is not enabled.'; break; case
  'FEATURES_COMPONENT_NOT_FOUND': $message = 'The given component !feature
  could not be found.'; break; default: $error = 'FEATURES_FEATURE_NOT_FOUND';
  $message = 'The feature !feature could not be found.'; }

  return drush_set_error($error, dt($message, $args)); }
