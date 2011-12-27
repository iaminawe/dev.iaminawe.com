<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'server.iaminawe.com';
$options['db_port'] = '3306';
$options['db_passwd'] = 'UXMkeeo3r4';
$options['db_name'] = 'deviaminawecom';
$options['db_user'] = 'deviaminawecom';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.8',
      'description' => 'This platform is running Drupal 7.8',
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'name' => 'minimal',
      'filename' => '/data/all/003/drupal-7.8-prod/profiles/minimal/minimal.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Drupal 7 Minimal',
        'old_short_name' => 'testing',
        'description' => 'Start with only a few modules enabled.',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'dblog',
        ),
        'files' => 
        array (
          0 => 'minimal.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'version' => '7.8',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aaa_update_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'admin' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/admin/admin.module',
      'name' => 'admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Admin',
        'description' => 'UI helpers for Drupal admins and managers.',
        'package' => 'Administration',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'admin.admin.inc',
          1 => 'admin.install',
          2 => 'admin.module',
          3 => 'includes/admin.devel.inc',
          4 => 'includes/admin.theme.inc',
          5 => 'theme/admin-panes.tpl.php',
          6 => 'theme/admin-toolbar.tpl.php',
          7 => 'theme/theme.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'admin',
        'datestamp' => '1292541646',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin',
      'version' => '7.x-2.0-beta3',
    ),
    'aggregator' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'aggregator_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'agrcache' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/agrcache/agrcache.module',
      'name' => 'agrcache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregate cache',
        'description' => 'imagecache style generation of css and javascript aggregates.',
        'core' => '7.x',
        'version' => '7.x-1.0-alpha2',
        'project' => 'agrcache',
        'datestamp' => '1295487707',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'agrcache',
      'version' => '7.x-1.0-alpha2',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'ajax_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'automodal' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'automodal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'batch_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'better_formats' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/better_formats/better_formats.module',
      'name' => 'better_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6110',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Better Formats',
        'description' => 'Enhances the core input format system by managing input format defaults and settings.',
        'core' => '7.x',
        'configure' => 'admin/config/content/formats',
        'version' => '7.x-1.x-dev',
        'project' => 'better_formats',
        'datestamp' => '1309219453',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'better_formats',
      'version' => '7.x-1.x-dev',
    ),
    'better_perms' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'better_perms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'block' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/blockcache_alter/blockcache_alter.module',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Cache Alter',
        'description' => 'Alter the cache settings per block.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'version' => '7.x-1.x-dev',
        'project' => 'blockcache_alter',
        'datestamp' => '1300968126',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'blockcache_alter',
      'version' => '7.x-1.x-dev',
    ),
    'block_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'blog' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'book' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'boost' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/boost/boost.module',
      'name' => 'boost',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boost',
        'description' => 'Caches generated output as a static file to be served directly from the webserver.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'boost.module',
          1 => 'boost.admin.inc',
        ),
        'configure' => 'admin/config/system/boost',
        'version' => '7.x-1.x-dev',
        'project' => 'boost',
        'datestamp' => '1301918551',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'boost',
      'version' => '7.x-1.x-dev',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'color' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'comment' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'common_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'contact' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'contemplate' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'contemplate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '10',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'content' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6010',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'content_copy' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'content_copy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'content_taxonomy_options' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'content_taxonomy_options',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'content_type_overview' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/content_type_overview/content_type_overview.module',
      'name' => 'content_type_overview',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Content type overview',
        'description' => 'Provides easy access to all basic content type settings.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'content_type_overview.install',
          1 => 'content_type_overview.module',
        ),
        'package' => 'Administration',
        'version' => '7.x-1.0-beta2',
        'project' => 'content_type_overview',
        'datestamp' => '1265887205',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'content_type_overview',
      'version' => '7.x-1.0-beta2',
    ),
    'contextual' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'context_contrib' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'context_contrib',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'core_library' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/core_library/core_library.module',
      'name' => 'core_library',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Core Library',
        'description' => 'Extends Drupal core and allows you to override other modules\' libraries definition and aggregation rules.',
        'package' => 'Performance',
        'version' => '7.x-1.0-beta6',
        'core' => '7.x',
        'configure' => 'admin/config/development/library',
        'files' => 
        array (
          0 => 'core_library.module',
          1 => 'core_library.admin.inc',
        ),
        'project' => 'core_library',
        'datestamp' => '1294778152',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'core_library',
      'version' => '7.x-1.0-beta6',
    ),
    'core_library_ui' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/core_library/modules/core_library_ui/core_library_ui.module',
      'name' => 'core_library_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Core Library Advanced UI',
        'description' => 'Provide configuration screens for the Core Library module. You should enable this module the first time you use it, then disable it once in production.',
        'package' => 'Performance',
        'version' => '7.x-1.0-beta6',
        'core' => '7.x',
        'configure' => 'admin/config/development/library',
        'files' => 
        array (
          0 => 'core_library_ui.module',
          1 => 'core_library_ui.admin.inc',
        ),
        'project' => 'core_library',
        'datestamp' => '1294778152',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'core_library',
      'version' => '7.x-1.0-beta6',
    ),
    'css_emimage' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/css_emimage/css_emimage.module',
      'name' => 'css_emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS Embedded Images',
        'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
        'core' => '7.x',
        'php' => '5',
        'package' => 'Performance and scalability',
        'files' => 
        array (
          0 => 'css_emimage.install',
          1 => 'css_emimage.module',
        ),
        'version' => '7.x-1.1',
        'project' => 'css_emimage',
        'datestamp' => '1297789576',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'css_emimage',
      'version' => '7.x-1.1',
    ),
    'cvs_deploy' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'cvs_deploy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'dashboard' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.8',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'database_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'dblog' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'default' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'default',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'elysia_cron' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/elysia_cron/elysia_cron.module',
      'name' => 'elysia_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Elysia Cron',
        'description' => 'Extended cron support with crontab-like scheduling and other features.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'elysia_cron_update.php',
          1 => 'elysia_drupalconv.php',
        ),
        'configure' => 'admin/config/system/cron',
        'version' => '7.x-1.x-dev',
        'project' => 'elysia_cron',
        'datestamp' => '1302091574',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'elysia_cron',
      'version' => '7.x-1.x-dev',
    ),
    'emfield' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'emfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'emvideo' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'emvideo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6019',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'error_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'field' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'fieldgroup' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'fieldgroup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '9',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'field_group' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'field_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'field_ui' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'file' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'filefield' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'filefield_nginx_progress' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress.module',
      'name' => 'filefield_nginx_progress',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'FileField Nginx Progress',
        'description' => 'Adds upload progress functionality for Nginx webservers',
        'files' => 
        array (
          0 => 'filefield_nginx_progress.install',
          1 => 'filefield_nginx_progress.module',
        ),
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'package' => 'CCK',
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'filefield_nginx_progress',
        'datestamp' => '1298619258',
        'php' => '5.2.4',
      ),
      'project' => 'filefield_nginx_progress',
      'version' => '7.x-1.x-dev',
    ),
    'file_module_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'file_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'filter' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'filter_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'flood_control' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/flood_control/flood_control.module',
      'name' => 'flood_control',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flood control',
        'description' => 'Interface for hidden flood control options.',
        'core' => '7.x',
        'configure' => 'admin/config/system/flood-control',
        'version' => '7.x-1.x-dev',
        'project' => 'flood_control',
        'datestamp' => '1295655601',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flood_control',
      'version' => '7.x-1.x-dev',
    ),
    'form_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'forum' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'fpa' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/fpa/fpa.module',
      'name' => 'fpa',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fast Permissions Administration',
        'description' => 'Provides quick access to a content type\'s or field\'s permissions.',
        'core' => '7.x',
        'version' => '7.x-2.0',
        'project' => 'fpa',
        'datestamp' => '1301965915',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'fpa',
      'version' => '7.x-2.0',
    ),
    'help' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'image' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'imageapi' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'imageapi_gd' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'imagecache' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'imagecache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'imagecache_ui' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'imagecache_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'imagefield' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'image_module_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'image_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'jquery_plugin' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'jquery_plugin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jquery_slideshow' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'jquery_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jquery_ui' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jquery_update' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '99',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'lightbox2' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'lightbox2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'list' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'list_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'locale' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'locale_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'menu' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'menu_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'minimal' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/profiles/minimal/minimal.profile',
      'name' => 'minimal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Drupal 7 Minimal',
        'old_short_name' => 'testing',
        'description' => 'Start with only a few modules enabled.',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'dblog',
        ),
        'files' => 
        array (
          0 => 'minimal.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'modalframe' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'modalframe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'modalframe_example' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'modalframe_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'modal_noderef' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'modal_noderef',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'module_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'node' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7012',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'nodereference' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'nodereference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'nodereferrer' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'nodereferrer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_access_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'node_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'number' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'openid' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.8',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'openid_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'options' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'optionwidgets' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'optionwidgets',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'overlay' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'path' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'php' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'poll' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'profile' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'rdf' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'rdf_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'robotstxt' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/robotstxt/robotstxt.module',
      'name' => 'robotstxt',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'robots.txt',
        'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'robotstxt.module',
          1 => 'robotstxt.admin.inc',
          2 => 'robotstxt.install',
        ),
        'configure' => 'admin/config/search/robotstxt',
        'version' => '7.x-1.x-dev',
        'project' => 'robotstxt',
        'datestamp' => '1298620089',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'robotstxt',
      'version' => '7.x-1.x-dev',
    ),
    'search' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'session_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'shortcut' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'simpletest' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/password.test',
          22 => 'tests/path.test',
          23 => 'tests/registry.test',
          24 => 'tests/schema.test',
          25 => 'tests/session.test',
          26 => 'tests/tablesort.test',
          27 => 'tests/theme.test',
          28 => 'tests/unicode.test',
          29 => 'tests/update.test',
          30 => 'tests/xmlrpc.test',
          31 => 'tests/upgrade/upgrade.test',
          32 => 'tests/upgrade/upgrade.comment.test',
          33 => 'tests/upgrade/upgrade.filter.test',
          34 => 'tests/upgrade/upgrade.forum.test',
          35 => 'tests/upgrade/upgrade.locale.test',
          36 => 'tests/upgrade/upgrade.menu.test',
          37 => 'tests/upgrade/upgrade.node.test',
          38 => 'tests/upgrade/upgrade.taxonomy.test',
          39 => 'tests/upgrade/upgrade.translatable.test',
          40 => 'tests/upgrade/upgrade.upload.test',
          41 => 'tests/upgrade/upgrade.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'site_verify' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/site_verify/site_verify.module',
      'name' => 'site_verify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Verification',
        'description' => 'Verifies ownership of a site for use with search engines.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_verify.module',
          1 => 'site_verify.admin.inc',
          2 => 'site_verify.install',
          3 => 'site_verify.test',
        ),
        'configure' => 'admin/config/search/verifications',
        'version' => '7.x-1.0',
        'project' => 'site_verify',
        'datestamp' => '1298242613',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'site_verify',
      'version' => '7.x-1.0',
    ),
    'standard' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Drupal 7 Standard',
        'old_short_name' => 'minimal',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'files' => 
        array (
          0 => 'standard.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'statistics' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'syslog' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'system' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7071',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'system_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'text' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'textile' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/textile/textile.module',
      'name' => 'textile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Textile',
        'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
        'package' => 'Input filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'vars (2.x)',
        ),
        'version' => '7.x-2.0-rc9',
        'project' => 'textile',
        'datestamp' => '1294765588',
        'php' => '5.2.4',
      ),
      'project' => 'textile',
      'version' => '7.x-2.0-rc9',
    ),
    'theme_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'toolbar' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'total_control' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'total_control',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'tracker' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'translation' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'translation_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'trigger' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'trigger_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.8',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update_test_1' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update_test_2' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update_test_3' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.8',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'user' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7017',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'userreference' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'user_form_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'variable_clean' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/variable_clean/variable_clean.module',
      'name' => 'variable_clean',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable Cleanup',
        'description' => 'Allows you to remove variables not currently used.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_clean.module',
          1 => 'variable_clean.test',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'variable_clean',
        'datestamp' => '1298620612',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable_clean',
      'version' => '7.x-1.x-dev',
    ),
    'vars' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/vars/vars.module',
      'name' => 'vars',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variables API',
        'description' => 'Implement an API to handle persistent variables.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'vars.module',
          1 => 'tests/vars.test',
        ),
        'version' => '7.x-2.0-alpha4',
        'project' => 'vars',
        'datestamp' => '1294698377',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'vars',
      'version' => '7.x-2.0-alpha4',
    ),
    'vars_extended_test' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/vars/tests/vars_extended_test.module',
      'name' => 'vars_extended_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variables API extended test module',
        'description' => 'Module for testing the Variables API module with SimpleTest; do not enable it.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'vars',
        ),
        'files' => 
        array (
          0 => 'vars_extended_test.install',
          1 => 'vars_extended_test.module',
        ),
        'hidden' => true,
        'version' => '7.x-2.0-alpha4',
        'project' => 'vars',
        'datestamp' => '1294698377',
        'php' => '5.2.4',
      ),
      'project' => 'vars',
      'version' => '7.x-2.0-alpha4',
    ),
    'vars_test' => 
    array (
      'filename' => '/data/all/003/o_contrib_seven/vars/tests/vars_test.module',
      'name' => 'vars_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variables API test module',
        'description' => 'Module for testing the Variables API module with SimpleTest; do not enable it.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'vars',
        ),
        'files' => 
        array (
          0 => 'vars_test.install',
          1 => 'vars_test.module',
        ),
        'hidden' => true,
        'version' => '7.x-2.0-alpha4',
        'project' => 'vars',
        'datestamp' => '1294698377',
        'php' => '5.2.4',
      ),
      'project' => 'vars',
      'version' => '7.x-2.0-alpha4',
    ),
    'vertical_tabs' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'vertical_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '300',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'viewfield' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'viewfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'viewsdisplaytabs' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'viewsdisplaytabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_export' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'wordpress_import' => 
    array (
      'filename' => '/data/disk/iaminawe/distro/003/drupal-7.8-prod',
      'name' => 'wordpress_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.8',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'garland' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'seven' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'stark' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.8',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'test_theme' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/tests/test_theme/test_theme.info',
      'name' => 'test_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test theme',
        'description' => 'Theme for testing the theme system',
        'core' => '7.x',
        'hidden' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.base.css',
          ),
        ),
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update_test_basetheme' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/tests/update_test_basetheme/update_test_basetheme.info',
      'name' => 'update_test_basetheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test base theme',
        'description' => 'Test theme which acts as a base theme for other test subthemes.',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
    'update_test_subtheme' => 
    array (
      'filename' => '/data/all/003/drupal-7.8-prod/themes/tests/update_test_subtheme/update_test_subtheme.info',
      'name' => 'update_test_subtheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test subtheme',
        'description' => 'Test theme which uses update_test_basetheme as the base theme.',
        'core' => '7.x',
        'base theme' => 'update_test_basetheme',
        'hidden' => true,
        'version' => '7.8',
        'project' => 'drupal',
        'datestamp' => '1314817616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.8',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '74.207.251.169',
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
