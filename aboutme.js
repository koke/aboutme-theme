jQuery(document).ready(function($) {
	if ($.cookie('editor-left') && $.cookie('editor-top')) {
		$("#editor").offset({left: $.cookie('editor-left'), top: $.cookie('editor-top')});
	}
	
	$( "#editor" ).draggable({
		stop: function(event, ui) {
			var pos = $("#editor").offset();
			$.cookie('editor-left', pos.left, {expires: 365 });
			$.cookie('editor-top', pos.top, {expires: 365 });
		}
	});
	
	$("#editor").tabs();
});