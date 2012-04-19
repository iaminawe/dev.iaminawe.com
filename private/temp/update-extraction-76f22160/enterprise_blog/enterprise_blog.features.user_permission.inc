<?php
/**
 * @file
 * enterprise_blog.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function enterprise_blog_user_default_permissions() {
  $permissions = array();

  // Exported permission: access content overview
  $permissions['access content overview'] = array(
    'name' => 'access content overview',
    'module' => 'node',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  // Exported permission: access overlay
  $permissions['access overlay'] = array(
    'name' => 'access overlay',
    'module' => 'overlay',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  // Exported permission: access toolbar
  $permissions['access toolbar'] = array(
    'name' => 'access toolbar',
    'module' => 'toolbar',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  // Exported permission: administer blogs
  $permissions['administer blogs'] = array(
    'name' => 'administer blogs',
    'module' => 'enterprise_blog',
    'roles' => array(
      'blog admin' => 'blog admin',
    ),
  );

  // Exported permission: create enterprise_blog content
  $permissions['create enterprise_blog content'] = array(
    'name' => 'create enterprise_blog content',
    'module' => 'node',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  // Exported permission: delete any enterprise_blog content
  $permissions['delete any enterprise_blog content'] = array(
    'name' => 'delete any enterprise_blog content',
    'module' => 'node',
    'roles' => array(
      'blog admin' => 'blog admin',
    ),
  );

  // Exported permission: delete own enterprise_blog content
  $permissions['delete own enterprise_blog content'] = array(
    'name' => 'delete own enterprise_blog content',
    'module' => 'node',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  // Exported permission: edit any enterprise_blog content
  $permissions['edit any enterprise_blog content'] = array(
    'name' => 'edit any enterprise_blog content',
    'module' => 'node',
    'roles' => array(
      'blog admin' => 'blog admin',
    ),
  );

  // Exported permission: edit own enterprise_blog content
  $permissions['edit own enterprise_blog content'] = array(
    'name' => 'edit own enterprise_blog content',
    'module' => 'node',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  // Exported permission: view the administration theme
  $permissions['view the administration theme'] = array(
    'name' => 'view the administration theme',
    'module' => 'system',
    'roles' => array(
      'blogger' => 'blogger',
    ),
  );

  return $permissions;
}
