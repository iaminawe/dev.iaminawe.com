(function($) {

  Drupal.videoEmbedFieldOverlay = Drupal.videoEmbedFieldOverlay || {};

  /**
 * Core behavior the intro video.
 */
  Drupal.behaviors.videoEmbedFieldOverlay = {
    attach: function (context, settings) {
      $(document).ready(function() {
        // Find video overlay links
        $('.video-overlay:not(.processed)', context).each(function (i) {
          var source = $(this).find('.video-overlay-source');
          $(source).hide();

          $(this).children('.video-overlay-thumbnail').children('a.overlay').click(function(){
            // Setup the DOM Window
            $.openDOMWindow({
              loader:1,
              loaderImagePath:'animationProcessing.gif',
              loaderHeight:16,
              loaderWidth:17,
              width:640,
              height:360,
              windowSourceID:source
            });
            return false;
          });

          $(this).addClass('processed');
        });
      });
    }
  }

})(jQuery);
