(function($){
$(document).ready(function(){
	var menu_element = Drupal.settings.single_page.menu_element;
	var base_path = Drupal.settings.single_page.base_path;
	$(menu_element+" a").each(function(index) {
		var anchor = $(this).text();
		this.href = base_path + "#" + anchor.replace(/ /g, "_");		
	});
});
})(jQuery);