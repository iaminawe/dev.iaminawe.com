<?php

/**
 * Expose themes as context reactions.
 */
class bg_image_context_reaction_bg_image extends context_reaction {

  /**
   * Allow admins to provide a section title, section subtitle and section class.
   */
  function options_form($context) {
    $values = $this->fetch_from_context($context);
    $form = array(
      '#tree' => TRUE,
      '#title' => t('Background Image'),
    );
    if (variable_get('bg_image_node_type', '') && variable_get('bg_image_node_field', '')) {
      $node_type = variable_get('bg_image_node_type', '');
      $node_options = array();
      $sql = "SELECT nid, title FROM {node} WHERE type = :node_type";
      $result = db_query($sql, array(':node_type' => $node_type));
      foreach ($result as $record) {
        $node_options[$record->nid] = $record->title . ' [nid:' . $record->nid. ']';
      }
      if (!$node_options) {
        $form['no_nodes_msg'] = array(
          '#markup' => t('There are no nodes yet for the configured node type. You must create at least one @type node before you can apply a background image reaction.', array('@type' => variable_get('bg_image_node_type', ''))),
        );
        return $form;
      }
      $form['bg_image_node_ref_nid'] = array(
        '#type' => 'select',
        '#title' => t('Select A Node'),
        '#description' => t('Choose a node, whose image field specified on the <a href="/admin/config/content/background_image">settings page</a> will be used for the background image'),
        '#options' => $node_options,
        '#default_value' => isset($values['bg_image_node_ref_nid']) ? $values['bg_image_node_ref_nid'] : 0,
      );
      $form['bg_image_weight'] = array(
        '#type' => 'textfield',
        '#title' => t('weight'),
        '#description' => t('If you want you can set a weight for this background image. This helps if you have overlapping conditions in different contexts trying to add multiple background images. Higher values take precedence.'),
        '#default_value' => isset($values['bg_image_weight']) ? $values['bg_image_weight'] : 0,
      );
      
      // Default CSS Settings can be overridden here
      // Fieldset for css settings
      $form['css_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Override Default CSS Settings'),
        '#description' => t('Override the default css settings from the <a href="admin/config/admin/config/content/background-image">Background Image Settings Page</a>'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
      );
      // The selector for the background property
      $form['css_settings']['bg_image_selector'] = array(
        '#type' => 'textfield',
        '#title' => t('Selector'),
        '#description' => t('A valid CSS selector that will be used to apply the background image.'),
        '#default_value' => isset($values['css_settings']['bg_image_selector']) ? $values['css_settings']['bg_image_selector'] : variable_get('bg_image_selector', ''),
      );
      // The selector for the background property
      $form['css_settings']['bg_image_color'] = array(
        '#type' => 'textfield',
        '#title' => t('Color'),
        '#description' => t('The background color formatted as any valid css color format (e.g. hex, rgb, text, hsl) [<a href="http://www.w3schools.com/css/pr_background-color.asp">css property: background-color</a>]'),
        '#default_value' => isset($values['css_settings']['bg_image_color']) ? $values['css_settings']['bg_image_color'] : variable_get('bg_image_color', '#FFFFFF'),
      );
      // The selector for the background property
      $form['css_settings']['bg_image_x'] = array(
        '#type' => 'textfield',
        '#title' => t('Horizontal Alignment'),
        '#description' => t('The horizontal alignment of the background image formatted as any valid css alignment. [<a href="http://www.w3schools.com/css/pr_background-position.asp">css property: background-position</a>]'),
        '#default_value' => isset($values['css_settings']['bg_image_x']) ? $values['css_settings']['bg_image_x'] : variable_get('bg_image_x', 'left'),
      );
      // The selector for the background property
      $form['css_settings']['bg_image_y'] = array(
        '#type' => 'textfield',
        '#title' => t('Vertical Alignment'),
        '#description' => t('The vertical alignment of the background image formatted as any valid css alignment. [<a href="http://www.w3schools.com/css/pr_background-position.asp">css property: background-position</a>]'),
        '#default_value' => isset($values['css_settings']['bg_image_y']) ? $values['css_settings']['bg_image_y'] : variable_get('bg_image_y', 'top'),
      );
      // The selector for the background property
      $form['css_settings']['bg_image_attachment'] = array(
        '#type' => 'radios',
        '#title' => t('Background Attachment'),
        '#description' => t('The attachment setting for the background image. [<a href="http://www.w3schools.com/css/pr_background-attachment.asp">css property: background-attachment</a>]'),
        '#options' => array('scroll' => 'Scroll', 'fixed' => 'Fixed'),
        '#default_value' => isset($values['css_settings']['bg_image_attachment']) ? $values['css_settings']['bg_image_attachment'] : variable_get('bg_image_attachment', 'scroll'),
      );
      // The background-repeat property
      $form['css_settings']['bg_image_repeat'] = array(
        '#type' => 'radios',
        '#title' => t('Background Repeat'),
        '#description' => t('Define the repeat settings for the background image. [<a href="http://www.w3schools.com/css/pr_background-repeat.asp">css property: background-repeat</a>]'),
        '#options' => bg_image_css_repeat_options(),
        '#default_value' => isset($values['css_settings']['bg_image_repeat']) ? $values['css_settings']['bg_image_repeat'] : variable_get('bg_image_repeat', 0),
      );
    }
    else {
      $form['settings_first_msg'] = array(
        '#markup' => t('You must specify a content type and field on the <a href="/admin/config/content/background_image">settings page</a> before you can set a background image. Once configured you will be able to reference a specific node here, whose image field will be used to set the background image.'),
      );
    }
    return $form;
  }

  /**
   * Organizes the background image data into an array
   * keyed by the selector, then applies the background
   * image with the highest weight for each selector
   */
  function execute() {
    //dpm(context_enabled_contexts());
    $bg_image_nodes = array();
    $contexts = $this->get_contexts();
    foreach ($contexts as $context) {
      if (!empty($context->reactions[$this->plugin]) && 
          bg_image_field_has_image($context->reactions[$this->plugin]['bg_image_node_ref_nid'])) {
        $weight = $context->reactions[$this->plugin]['bg_image_weight'];
        $selector = $context->reactions[$this->plugin]['css_settings']['bg_image_selector'];
        $bg_image_nodes[$weight][$selector] = array(
          'nid' => $context->reactions[$this->plugin]['bg_image_node_ref_nid'],
          'css_settings' => $context->reactions[$this->plugin]['css_settings'],
        );
      }
    }
    if ($bg_image_nodes) {
      foreach($bg_image_nodes as $selector => $values) {
        ksort($values);
        $bg_image_node = end($values);
        bg_image_change_background_image($bg_image_node['nid'], $bg_image_node['css_settings']);
      }
    }
  }
}