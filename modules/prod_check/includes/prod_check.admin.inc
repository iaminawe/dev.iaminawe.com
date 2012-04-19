<?php

/**
 * Build status page.
 */
function prod_check_status() {
  drupal_set_title(t('Production check status'));

  $output = '';

  // Execute all functions per set as defined in the functions array in
  // _prod_check_functions().
  $functions = _prod_check_functions();
  unset($functions['prod_mon']);
  // Not needed here.
  unset($functions['perf_data']);

  foreach ($functions as $set => $data) {
    $result = array();
    foreach ($data['functions'] as $function => $title) {
      // We add this check to prevent breaking the whole page if some module
      // messes up with hook_prod_check_alter().
      if (function_exists($function)) {
        $result = array_merge($result, $function());
      }
    }
    $output .= '<h2>' . t($data['title']) . '</h2>' . "\n";
    $output .= '<div class="description"><p><em>' . t($data['description']) . '</em></p></div>' . "\n";
    $output .= theme('prod_check_status_report', array('requirements' => $result));
  }

  return $output;
}

/**
 * Build settings form.
 */
function prod_check_settings_form($form, &$form_state) {
  drupal_set_title(t('Production check settings'));
  $form = array();

  // Add stylesheets & CSS.
  $base = drupal_get_path('module', 'prod_check');
  $form['#attached'] = array(
    'css' => array(
      'type' => 'file',
      'data' => $base . '/css/prod-check.css',
    ),
    'js' => array(
      array (
        'type' => 'file',
        'data' => $base . '/js/jquery.equalheights.js',
      ),
      array (
        'type' => 'file',
        'data' => $base . '/js/jquery.maskedinput.min.js',
      ),
      array (
        'type' => 'file',
        'data' => $base . '/js/prod-check.js',
      ),
    ),
  );

  // E-mail settings.
  $form['prod_check_general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General settings'),
    '#description' => t('Settings to allow certain checks to function properly.'),
    '#collapsible' => FALSE,
  );
  $form['prod_check_general']['prod_check_sitemail'] = array(
    '#type' => 'textfield',
    '#title' => t('Sitemail check'),
    '#default_value' => variable_get('prod_check_sitemail', ''),
    '#size' => 60,
    '#description' => t('Enter (part of) the e-mail address you always use in the !link when developing a website. This is used in a regular expression in the "Site e-mail" check.', prod_check_link_array('site-information settings', 'admin/settings/site-information')),
    '#required' => FALSE,
  );

  $form['prod_check_apc'] = array(
    '#type' => 'fieldset',
    '#title' => t('Advanced APC settings'),
    '#description' => t(
        'These settings are used in the !link functionality.', prod_check_link_array('advanced APC', 'admin/reports/status/apc')),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  // Cache full count threshold
  $form['prod_check_apc']['prod_check_apc_expunge'] = array(
    '#type' => 'textfield',
    '#title' => t('APC cache full count threshold'),
    '#default_value' => variable_get('prod_check_apc_expunge', 0),
    '#size' => 2,
    '#description' => t('Issue a critical error when the cache full count is greater than the number entered here.'),
    '#required' => FALSE,
  );

  // APC user.
  $form['prod_check_apc']['prod_check_apcuser'] = array(
    '#type' => 'textfield',
    '#title' => t('APC advanced features username'),
    '#default_value' => variable_get('prod_check_apcuser', 'apc'),
    '#size' => 60,
    '#description' => t('The username for logging in to the APC settings page.'),
    '#required' => FALSE,
  );
  // APC password.
  $form['prod_check_apc']['prod_check_apcpass'] = array(
    '#type' => 'password_confirm',
    '#title' => t('APC advanced features password'),
    '#size' => 60,
    '#description' => t('The password for logging in to the APC settings page.'),
    '#required' => FALSE,
  );

  $form['prod_check_memcache'] = array(
    '#type' => 'fieldset',
    '#title' => t('Memcache settings'),
    '#description' => t(
      'These settings are used in the !link functionality.', prod_check_link_array('memcache', 'admin/reports/status/memcache')),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  // Memcache user.
  $form['prod_check_memcache']['prod_check_memcacheuser'] = array(
    '#type' => 'textfield',
    '#title' => t('Memcache username'),
    '#default_value' => variable_get('prod_check_memcacheuser', 'memcache'),
    '#size' => 60,
    '#description' => t('The username for logging in to the Memcache settings page.'),
    '#required' => FALSE,
  );
  // Memcache password.
  $form['prod_check_memcache']['prod_check_memcachepass'] = array(
    '#type' => 'password_confirm',
    '#title' => t('APC advanced features password'),
    '#size' => 60,
    '#description' => t('The password for logging in to the Memcache settings page.'),
    '#required' => FALSE,
  );

  // XMLRPC settings.
  $form['prod_check_xmlrpc'] = array(
    '#type' => 'fieldset',
    '#title' => t('Production monitor integration.'),
    '#description' => t('You can set up integration with the Production monitor module here.'),
    '#collapsible' => FALSE,
  );
  $form['prod_check_xmlrpc']['prod_check_enable_xmlrpc'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable XMLRPC API'),
    '#default_value' => variable_get('prod_check_enable_xmlrpc', 0),
    '#description' => t('Tick this box if you would like to the module to open up the XMLRPC api so that it can be queried externally to supply information to a base site for monitoring purposes.'),
    '#ajax' => array(
      'callback' => 'prod_check_enable_xmlrpc',
      'wrapper' => 'prod-check-xmlrpc',
      'effect' => 'fade',
    ),
    '#required' => FALSE,
  );
  // The #value here is necessary for the markup field to be rendered :-(
  $form['prod_check_xmlrpc']['xmlrpc'] = array(
    '#type' => 'markup',
    '#prefix' => '<div id="prod-check-xmlrpc">',
    '#suffix' => '</div>',
  );
  // Only show when the checkbox above is selected.
  if (!isset($form_state['values']['prod_check_enable_xmlrpc'])) {
    $form_state['values']['prod_check_enable_xmlrpc'] = variable_get('prod_check_enable_xmlrpc', 0);
  }
  if ($form_state['values']['prod_check_enable_xmlrpc']) {
    $form['prod_check_xmlrpc']['xmlrpc']['prod_check_xmlrpc_key'] = array(
      '#type' => 'textfield',
      '#title' => t('API key'),
      '#default_value' => variable_get('prod_check_xmlrpc_key', prod_check_generate_key()),
      '#maxlength' => 128,
      '#size' => 60,
      '#description' => t('Enter a key here to ensure secure transfer of data over the API. Use a mixture of alphanumeric and special characters for increased security.'),
      '#required' => FALSE,
    );
    $form['prod_check_xmlrpc']['xmlrpc']['prod_check_module_list_day'] = array(
      '#type' => 'select',
      '#title' => t('Report module list every'),
      '#options' => array(t('Sunday'), t('Monday'), t('Tuesday'), t('Wednesday'), t('Thursday'), t('Friday'), t('Saturday')),
      '#default_value' => variable_get('prod_check_module_list_day', 0),
      '#description' => t('Defines which day the module list will be fetchable by Production monitor for an update status check.'),
      '#required' => FALSE,
    );
    $form['prod_check_xmlrpc']['xmlrpc']['prod_check_module_list_time'] = array(
      '#type' => 'textfield',
      '#title' => t('at this time'),
      '#default_value' => variable_get('prod_check_module_list_time', '03:00'),
      '#maxlength' => 5,
      '#size' => 5,
      '#description' => t('Defines what time (HH:MM) the module list will be fetchable by Production monitor for an update status check.'),
      '#required' => FALSE,
    );
    // See http://drupal.org/node/1058896#comment-5594076 .
    if (variable_get('prod_check_module_list_lastrun', 0) != -1) {
      $form['prod_check_xmlrpc']['xmlrpc']['reset'] = array(
        '#prefix' => '<div class="clear">',
        '#type' => 'submit',
        '#value' => t('Force immediate module list reporting'),
        '#postfix' => '</div>',
      );
    }
    else {
      $form['prod_check_xmlrpc']['xmlrpc']['reset'] = array(
        '#markup' => '<div class="description clear">' . t('Production monitor will fetch the module list on next cron run or when manually invoked for this site!') . '</div>',
      );
    }
  }

  // Nagios settings.
  if (module_exists('nagios')) {
    $form['prod_check_nagios'] = array(
      '#type' => 'fieldset',
      '#title' => t('Nagios integration.'),
      '#description' => t('You can set up integration with the !link module here.', prod_check_link_array('Nagios', 'http://drupal.org/project/nagios')),
      '#collapsible' => FALSE,
    );
    $form['prod_check_nagios']['prod_check_enable_nagios'] = array(
      '#type' => 'checkbox',
      '#title' =>   t('Enable Nagios integration'),
      '#description' => t('Tick this box if you want to enable integration with Nagios. The !link module is required for this to function.', array('!link' => l(t('Nagios'), 'http://drupal.org/project/nagios', array('attributes' => array('title' => t('Nagios')))))),
      '#default_value' => variable_get('prod_check_enable_nagios', 0),
      '#ajax' => array(
        'callback' => 'prod_check_enable_nagios',
        'wrapper' => 'prod-check-nagios',
        'effect' => 'fade',
      ),
      '#required' => FALSE,
    );
  
    // The #value here is necessary for the markup field to be rendered :-(
    $form['prod_check_nagios']['nagios'] = array(
      '#type' => 'markup',
      '#prefix' => '<div id="prod-check-nagios">',
      '#suffix' => '</div>',
    );
    // Only show when the checkbox above is selected.
    if (!isset($form_state['values']['prod_check_enable_nagios'])) {
      $form_state['values']['prod_check_enable_nagios'] = variable_get('prod_check_enable_nagios', 0);
    }
    // TODO: find a way to detect when this is rendered so we can adjust the
    // prod-check.js and apply equalheights/width
    if ($form_state['values']['prod_check_enable_nagios']) {
      $form['prod_check_nagios']['nagios']['settings'] = _prod_check_functions_as_form();
      $options = variable_get('prod_check_nagios_checks', array());
      if (!empty($options)) {
        // Just to increase readability of the source here.
        $monitor_settings = &$form['prod_check_nagios']['nagios']['settings']['prod_check_settings']['monitor_settings'];
        // Set default values to last saved state
        foreach (element_children($monitor_settings) as $set) {
          if (isset($options[$set])) {
            $monitor_settings[$set]['#default_value'] = $options[$set];
          }
          else {
            // No settings available, so uncheck all.
            $monitor_settings[$set]['#default_value'] = array();
          }
        }
      }
  
      $form['prod_check_nagios']['nagios']['settings']['prod_check_nagios_unique'] = array(
        '#type' => 'select',
        '#title' => t('When Nagios unique ID not recieved'),
        '#description' => t('Select what should happen when the Nagios unique ID is not recieved by the nagios page.'),
        '#options' => array(
          'default' => t('default Nagios module behavior'),
          '404' => t('throw a 404 error'),
          'home' => t('redirect to homepege'),
        ),
        '#default_value' => variable_get('prod_check_nagios_unique', 'default'),
        '#required' => FALSE,
      );
      $form['prod_check_nagios']['nagios']['settings']['prod_check_nagios_takeover'] = array(
        '#markup' => '<p>' . t(
          'If you want prod_check to take over the Nagios status page, you can edit the !settings and enter %callback. Only then will the setting above have any effect!',
          array(
            '!settings' => l(t('Nagios page callback'), 'admin/config/system/nagios'),
            '%callback' => 'prod_check_nagios_status_page',
          )
        ) .'</p>',
      );
  
      $form['prod_check_nagios']['nagios']['settings']['prod_check_nagios_verbose'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show verbose status info'),
        '#description' => t('Tick this box if you want to see detailed information about every check. Useful for debugging or first setup, but <strong>not recommended for production use!</strong>'),
        '#default_value' => variable_get('prod_check_nagios_verbose', 0),
        '#required' => FALSE,
      );
    }
  }

  // Submit buttons.
  // Markup field for proper styling.
  $form['buttons'] = array(
    '#type' => 'markup',
    '#prefix' => '<div class="form-actions">',
    '#suffix' => '</div>',
  );
  $form['buttons']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save configuration'),
  );
  $form['buttons']['reset'] = array(
    '#type' => 'submit',
    '#value' => t('Reset to defaults'),
  );

  return $form;
}

/**
 * Parse the functions array and return a form fieldset with different sets of
 * checkboxes so it can be inserted 'as is' in another form array for rendering.
 * This is primlarily still here for integration with Nagios. Though not in use
 * now since Nagios would create far too much needless variables in my personal
 * opinion. It's left in for easy future integration with the
 * hook_nagios_settings().
 */
function _prod_check_functions_as_form($compatibility = 'all') {
  $form = array();

  $form['prod_check_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Configure what data you wish to monitor with <strong>Nagios</strong> for this site.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $form['prod_check_settings']['monitor_settings'] = array(
    '#type' => 'markup',
    '#prefix' => '<div id="prod-check-settings">',
    '#suffix' => '</div>',
    '#tree' => TRUE,
  );

  $i = 1;
  $functions = _prod_check_functions();
  if ($compatibility == 'all') {
    unset($functions['prod_mon']);
    unset($functions['perf_data']);
  }
  foreach ($functions as $set => $data) {
    $rest = $i % 2;
    $form['prod_check_settings']['monitor_settings'][$set] = array(
      '#type' => 'checkboxes',
      '#title' => t($data['title']),
      '#description' => t($data['description']),
      '#options' => $data['functions'],
      '#default_value' => array_keys($data['functions']),
      '#prefix' => '<div class="prod-check-settings ' . (($rest) ? 'odd' : 'even') . '">',
      '#suffix' => '</div>',
    );
    $i++;
  }

  return $form;
}

/**
 * Callback to add xmlrpc settings.
 */
function prod_check_enable_xmlrpc($form, &$form_state) {
  return $form['prod_check_xmlrpc']['xmlrpc'];
}

/**
 * Callback to add nagios settings.
 */
function prod_check_enable_nagios($form, &$form_state) {
  return $form['prod_check_nagios']['nagios'];
}

/**
 * Validation for settings form.
 */
function prod_check_settings_form_validate($form, &$form_state) {
  // Had to add CSS again here since it was lost on form errors. Weird, doesn't
  // seem logical...
  $base = drupal_get_path('module', 'prod_check');
  drupal_add_css($base . '/css/prod-check.css');
  drupal_add_js($base . '/js/jquery.equalheights.js', 'module', 'header');
  drupal_add_js($base . '/js/jquery.maskedinput.min.js', 'module', 'header');
  drupal_add_js($base . '/js/prod-check.js', 'module', 'header');

  if ($form_state['values']['prod_check_enable_xmlrpc']) {
    if (empty($form_state['values']['prod_check_xmlrpc_key'])) {
      form_set_error('prod_check_xmlrpc_key', t('When enabling the XPLRPC API, you <strong>must</strong> enter an API key!'));
    }
  }

  if (!empty($form_state['values']['prod_check_module_list_time'])) {
    // This check in case JavaScript is not enabled / malfunctioning.
    if (strpos($form_state['values']['prod_check_module_list_time'], ':') != 2) {
      form_set_error('prod_check_module_list_time', t('Time must be input in 24 hour format: HH:MM!'));
    }
    else {
      $time = explode(':', $form_state['values']['prod_check_module_list_time']);
      if (intval($time[0]) > 23) {
        form_set_error('prod_check_module_list_time', t('Hours must range from 00 (midnight) to 23!'));
      }
      if (intval($time[1]) > 59) {
        form_set_error('prod_check_module_list_time', t('Minutes must range from 00 to 59!'));
      }
    }
  }

  if (!is_numeric($form_state['values']['prod_check_apc_expunge'])) {
    form_set_error('prod_check_apc_expunge', t('Cache full count threshold should be numeric!'));
  }

  if ($form_state['values']['prod_check_enable_nagios']) {
    $checks = array();
    foreach ($form_state['values']['monitor_settings'] as $set => $data) {
      foreach ($data as $check => $value) {
        if ($value) {
          $checks[$set][] = $value;
        }
      }
    }
    if (empty($checks)) {
      form_set_error('monitor_settings', t('When enabling Nagios support, you <strong>must</strong> tick at least one of the checkboxes!'));
    }
  }
}

/**
 * Submit for settings form.
 *
 * TODO: is it better to split all of these in separate functions and use
 * buttons with the #submit property? The latter is better readability wise I
 * guess.
 */
function prod_check_settings_form_submit($form, &$form_state) {
  switch ($form_state['values']['op']) {
    case t('Force immediate module list reporting'):
      variable_set('prod_check_module_list_lastrun', -1);
      break;
    case t('Save configuration'):
      variable_set('prod_check_sitemail', $form_state['values']['prod_check_sitemail']);
      // APC.
      variable_set('prod_check_apc_expunge', $form_state['values']['prod_check_apc_expunge']);
      variable_set('prod_check_apcuser', $form_state['values']['prod_check_apcuser']);
      if (!empty($form_state['values']['prod_check_apcpass'])) {
        variable_set('prod_check_apcpass', $form_state['values']['prod_check_apcpass']);
      }
      else {
        variable_set('prod_check_apcpass', 'password');
      }
      // Memcache.
      variable_set('prod_check_memcacheuser', $form_state['values']['prod_check_memcacheuser']);
      if (!empty($form_state['values']['prod_check_memcachepass'])) {
        variable_set('prod_check_memcachepass', $form_state['values']['prod_check_memcachepass']);
      }
      else {
        variable_set('prod_check_memcachepass', 'password');
      }
      if ($form_state['values']['prod_check_enable_xmlrpc']) {
        // Enable.
        variable_set('prod_check_enable_xmlrpc', $form_state['values']['prod_check_enable_xmlrpc']);
        variable_set('prod_check_xmlrpc_key', $form_state['values']['prod_check_xmlrpc_key']);
        variable_set('prod_check_module_list_day', $form_state['values']['prod_check_module_list_day']);
        variable_set('prod_check_module_list_time', $form_state['values']['prod_check_module_list_time']);
      }
      else {
        // Disable.
        variable_set('prod_check_enable_xmlrpc', 0);
      }
      // This is why we didn't use a system_settings_form().
      if ($form_state['values']['prod_check_enable_nagios']) {
        $checks = array();
        foreach ($form_state['values']['monitor_settings'] as $set => $data) {
          foreach ($data as $check => $value) {
            if ($value) {
              $checks[$set][] = $value;
            }
          }
        }
        // Enable.
        variable_set('prod_check_enable_nagios', $form_state['values']['prod_check_enable_nagios']);
        variable_set('prod_check_nagios_checks', $checks);
        variable_set('prod_check_nagios_unique', $form_state['values']['prod_check_nagios_unique']);
        variable_set('prod_check_nagios_verbose', $form_state['values']['prod_check_nagios_verbose']);
      }
      else {
        // Disable.
        variable_set('prod_check_enable_nagios', 0);
      }
      drupal_set_message(t('The configuration options have been saved.'));
      break;
    case t('Reset to defaults'):
      // This beats multiple variable_del() calls.
      // Don't delete prod_check_module_list_lastrun!
      db_query('DELETE FROM {variable} WHERE name LIKE "prod_check_%" AND name <> "prod_check_module_list_lastrun"');
      cache_clear_all('variables', 'cache');
      drupal_set_message(t('The configuration options have been reset to their default values.'));
      break;
  }
}

function prod_check_apc() {
  define('ADMIN_USERNAME', variable_get('prod_check_apcuser', 'apc'));
  define('ADMIN_PASSWORD', variable_get('prod_check_apcpass', 'password'));
  include(drupal_get_path('module', 'prod_check') . '/includes/prod_check.apc.inc');
  exit;
}

function prod_check_memcache() {
  global $conf;

  define('ADMIN_USERNAME', variable_get('prod_check_memcacheuser', 'memcache'));
  define('ADMIN_PASSWORD', variable_get('prod_check_memcachepass', 'password'));
  if (isset($conf['memcache_servers'])) {
    global $MEMCACHE_SERVERS;
    $MEMCACHE_SERVERS = array_keys($conf['memcache_servers']);
    include(drupal_get_path('module', 'prod_check').'/includes/prod_check.memcache.inc');
  }
  else {
    print "No memcache servers found in settings.php.";
  }
  exit;
}

/**
 * Generate default key if none is present.
 */
function prod_check_generate_key($length = 25) {
  $chars = 'abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?';
  $size = strlen($chars);
  $key = '';
  for ($i = 0; $i < $length; $i++) {
    $key .= $chars[rand(0, $size - 1)];
  }

  return $key;
}
