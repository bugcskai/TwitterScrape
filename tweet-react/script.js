//Hello there, General Kenobi.
(function($){

	$(function(){
		$('form').submit(function(e){
			e.preventDefault();
			var t = $(this);
			var d = t.serialize();
			$.post(t.attr('action'),d, function(res){
				$('#output').append(res);
			})
		});
	});
})(jQuery);
