<?php
// $Id: views-galleriffic-view.tpl.php,v 1.1.2.8.2.3 2011/01/23 17:41:09 acouch Exp $
/**
 * @file
 *  Views Galleriffic theme wrapper.
 *
 * @ingroup views_templates
 */

$path = drupal_get_path('module', 'views_galleriffic');
drupal_add_js($path . '/js/jquery.galleriffic.js');
drupal_add_js($path . '/js/views_galleriffic.js');
drupal_add_js($path . '/js/jquery.opacityrollover.js');
if ($view->style_plugin->options['history'] == 'true' && module_exists('libraries')) { 
  $library = libraries_load('history');
  if (!$library['loaded']) {
    drupal_set_message(t('History plugin not properly installed.'));
  }
}
if ($view->style_plugin->options['css'] == 'true') {
  drupal_add_css($path . '/css/views_galleriffic_default.css', $options = array('type' => 'file'));
}
?>
<div id="galleriffic" class="clear-block">
  <div id="controls" class="controls"></div>
  <div id="gallery" class="content">
    <div id="loading" class="loader"></div>
    <div id="slideshow" class="slideshow"></div>
    <div id="caption" class="caption-container"></div>
  </div>
  <div id="thumbs" class="navigation">
    <ul class="thumbs noscript">
      <?php foreach ($rows as $row): ?>
        <?php print $row?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
