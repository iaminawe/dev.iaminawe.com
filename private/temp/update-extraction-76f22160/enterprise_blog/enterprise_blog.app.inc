<?php
/**
 * Implements hook_apps_app_info().
 */
function enterprise_blog_apps_app_info() {
  return array(
    'configure form' => 'enterprise_blog_apps_app_configure_form',
    'demo content module' => 'enterprise_blog_content',
  );
}

function enterprise_blog_apps_app_configure_form() {
  $form = array();

  if (module_exists('blog')) {
    drupal_set_message('You have enabled the Core Blog module in addition to the Blog App. This can cause confusion and unintended consequences. Please disable the blog module. You can do so ' . l('here', 'admin/modules'), 'error');
  }

  $form['create_blog'] = array(
    '#markup' => 'Create new blog posts on the ' . l(t('Create Blog Post Page'), 'node/add/enterprise-blog', array('query' =>drupal_get_destination())) . ".",
  );

  return $form;
}