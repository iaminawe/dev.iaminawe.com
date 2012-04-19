<?php
/**
 * @file
 * custom-pager.tpl.php
 *
 * Theme implementation to display a custom pager.
 *
 * Default variables:
 * - $previous: A formatted <A> link to the previous item.
 * - $next: A formatted <A> link to the next item.
 * - $key: Formatted text describing the item's position in the list.
 * - $position: A textual flag indicating how the pager is being displayed.
 *   Possible values include: 'top', 'bottom', and 'block'.
 *
 * Other variables:
 * - $nav_array: An array containing the raw node IDs and position data of the
 *   current item in the list.
 * - $node: The current node object.
 * - $pager: The pager object itself.
 *
 * @see custom_pagers_preprocess_custom_pager()
 */
?>

<div class="custom-pager">
    <div class="title"><h2><?php print check_plain($pager->title); ?></h2></div>
    <?php if (!empty($previous)): ?>
    <div class="custom-pager-previous">
        <div class="pager-relation"><h3><?php print $relation; ?></h3></div>
        <?php print $previous; ?>
    </div>
    <?php endif; ?>
    <?php if (!empty($next)): ?>
    <div class="custom-pager-next">
        <div class="pager-relation"><h3><?php print $relation; ?></h3></div>
        <?php print $next; ?>
    </div>
    <?php endif; ?>
</div>