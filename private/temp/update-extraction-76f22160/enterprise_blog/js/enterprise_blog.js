(function ($) {

  /**
   * Move fields to right column on blog edit screen.
   */
  Drupal.behaviors.enterprise_blog = {
    attach: function (context, settings) {
      // Move taxonomy fields to right sidebar in rubik.
      $(".column-main .form-item-publish-on, " +
        ".column-main .field-name-field-enterprise-blog-category, " +
        ".column-main .field-name-field-enterprise-blog-tags, " +
        ".column-main .field-name-field-enterprise-blog-image"
       ).each(function() {
        $(this).remove();
        $('.column-side .column-wrapper').append($(this));
      });
      // Hide the buttons on the bottom as they are duplicated
      $('.column-main #edit-actions').remove();
    }
  };

}(jQuery));
