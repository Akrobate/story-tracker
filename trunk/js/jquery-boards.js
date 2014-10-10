(function($) {
    $.fn.board = function(options) {

        options = $.extend({
            compatibles: '.categories-sortable'
        }, options);

        $.fn.board.settings = options;

		// Methode modele pour creer d'autres methodes
        $.fn.board.method = function(text) {
            return '<strong>' + text + '</strong>';
        };
        

		
        return this.each(function() {
        
            var $element = $(this);
            
            

            
            
            $element.prepend('<div style="clear:both"></div>');
            
			var oldList, newList, item;
			$element.sortable({
				items: '> li',
				connectWith:  $.fn.board.settings.compatibles,
				start: function (event, ui) {
				    item = ui.item;
				    newList = oldList = ui.item.parent();
				},
				stop: function (event, ui) {
				    //console.log("Moved " + item.text() + " from " + oldList.attr('id') + " to " + newList.attr('id'));
				},
				change: function (event, ui) {
				    if (ui.sender) {
				        //newList = ui.placeholder.parent();
				    }
				},
			}).disableSelection();

		});
            
         
    };
})(jQuery);
