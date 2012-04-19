<?php
/**
 * @file
 * enterprise_blog.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function enterprise_blog_user_default_roles() {
  $roles = array();

  // Exported role: blog admin
  $roles['blog admin'] = array(
    'name' => 'blog admin',
    'weight' => '4',
  );

  // Exported role: blogger
  $roles['blogger'] = array(
    'name' => 'blogger',
    'weight' => '3',
  );

  return $roles;
}
