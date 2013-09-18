$(function() {
	$('form').one('submit', function() {
		event.preventDefault();
		var me = $(this);
		if (me.find('input').length > 900) { // Only bother to encode if we have a LOT of stuff
			var base64 = Base64.encode(me.serialize());
			me.find('input[type=hidden]').remove();
			$('<input type="hidden" name="post64"/>')
				.appendTo(me)
				.val(base64);
		}
		me.trigger('submit');
	});
});
