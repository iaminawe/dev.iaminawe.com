<?php
/**
 * @file Drupal's settings.php file
 *
 * This file was automatically generated by Aegir 7.x-2.x
 * on Sun, 27 Nov 2011 04:00:07 +0200.
 *
 * If it is still managed by Aegir, changes to this file may be
 * lost. If it is not managed by aegir, you should remove this header
 * to avoid further confusion.
 */


  $databases['default']['default'] = array(
    'driver' => "mysql",
    'database' => "deviaminawecom",
    'username' => "deviaminawecom",
    'password' => "UXMkeeo3r4",
    'host' => "server.iaminawe.com",
    'port' => "3306",
   );
  $db_url['default'] = "mysql://deviaminawecom:UXMkeeo3r4@server.iaminawe.com:3306/deviaminawecom";


  $profile = "minimal";
  $install_profile = "minimal";

  /**
  * PHP settings:
  *
  * To see what PHP settings are possible, including whether they can
  * be set at runtime (ie., when ini_set() occurs), read the PHP
  * documentation at http://www.php.net/manual/en/ini.php#ini.list
  * and take a look at the .htaccess file to see which non-runtime
  * settings are used there. Settings defined here should not be
  * duplicated there so as to avoid conflict issues.
  */
  @ini_set('arg_separator.output',     '&amp;');
  @ini_set('magic_quotes_runtime',     0);
  @ini_set('magic_quotes_sybase',      0);
  @ini_set('session.cache_expire',     200000);
  @ini_set('session.cache_limiter',    'none');
  @ini_set('session.cookie_lifetime',  0);
  @ini_set('session.gc_maxlifetime',   200000);
  @ini_set('session.save_handler',     'user');
  @ini_set('session.use_only_cookies', 1);
  @ini_set('session.use_trans_sid',    0);
  @ini_set('url_rewriter.tags',        '');

  /**
  * Set the umask so that new directories created by Drupal have the correct permissions
  */
  umask(0002);

  global $conf;
  $conf['install_profile'] = 'minimal';
  $conf['file_directory_path'] = 'sites/dev.iaminawe.com/files';
  $conf['file_directory_temp'] = 'sites/dev.iaminawe.com/files/tmp';
  $conf['clean_url'] = 1;
  $conf['aegir_api'] = 2;

  
# Extra configuration from modules:

  /**
  * This was added from Drupal 5.2 onwards.
  */
  /**
  * We try to set the correct cookie domain. If you are experiencing problems
  * try commenting out the code below or specifying the cookie domain by hand.
  */
  if (isset($_SERVER['HTTP_HOST'])) {
    $domain = '.'. preg_replace('`^www.`', '', $_SERVER['HTTP_HOST']);
    // Per RFC 2109, cookie domains must contain at least one dot other than the
    // first. For hosts such as 'localhost', we don't set a cookie domain.
    if (count(explode('.', $domain)) > 2) {
      @ini_set('session.cookie_domain', $domain);
      $cookie_domain = $domain;
    }
  }

  # Additional host wide configuration settings. Useful for safely specifying configuration settings.
  if (file_exists('/data/disk/iaminawe/config/includes/global.inc')) {
    include_once('/data/disk/iaminawe/config/includes/global.inc');
  }

  # Additional site configuration settings.
  if (file_exists('/data/disk/iaminawe/distro/003/drupal-7.8-prod/sites/dev.iaminawe.com/local.settings.php')) {
    include_once('/data/disk/iaminawe/distro/003/drupal-7.8-prod/sites/dev.iaminawe.com/local.settings.php');
  }