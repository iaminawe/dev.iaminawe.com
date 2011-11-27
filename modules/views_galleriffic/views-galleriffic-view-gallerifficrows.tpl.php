<?php
// $Id: views-galleriffic-view-gallerifficrows.tpl.php,v 1.1.2.12.2.1 2011/01/21 02:43:21 acouch Exp $
/**
 * @file
 * template for views galleriffic row
 */
?>
<?php if ($fields['slide_field']->content): ?>
  <li>
    <a class="thumb" href="<?php print $fields['slide_field']->content; ?>" title="<?php print $fields['title_field']->stripped; ?>" name="<?php print str_replace(' ', '', $fields['title_field']->stripped);?>"><img src="<?php print $fields['thumbnail_field']->content; ?>" alt="<?php print $fields['title_field']->stripped; ?>" /></a>
    <div class="caption">
      <div class="image-title"><?php print $fields['title_field']->content; ?></div>
      <div class="image-desc"><?php print $fields['description_field']->content; ?></div>
    </div>
  </li>
<?php endif; ?>

