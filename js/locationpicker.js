jQuery(document).ready(function($) {
	if ($('.locationpicker').length > 0) {
		$('.locationpicker img').on('click', handle_locationpicker_click_event);
		function handle_locationpicker_click_event(e) {
			var imageHeight = $(this).height();
			var imageWidth = $(this).width();
			var pointHeight = $('.locationpicker-point').height();
			var pointWidth = $('.locationpicker-point').width();
			var cssTop = (e.offsetY - pointHeight) / imageHeight * 100;
			var cssLeft = (e.offsetX - (pointWidth / 2)) / imageWidth * 100;
			$('.locationpicker-point').css({
				top: cssTop + '%',
				left: cssLeft + '%'
			});
			var top = e.offsetY / $(this).height() * 100;
			var left = e.offsetX / $(this).width() * 100;
			$('#' + field_top).val(top);
			$('#' + field_left).val(left);
		}
	}
	$(window).load(function() {
		if ($('#' + field_top).val() != '' && $('#' + field_left).val() != '') {
			var imageHeight = $('.locationpicker img').height();
			var imageWidth = $('.locationpicker img').width();
			var pointHeight = $('.locationpicker-point').height();
			var pointWidth = $('.locationpicker-point').width();
			var pixelsTop = $('#' + field_top).val() / 100 * imageHeight;
			var pixelsLeft = $('#' + field_left).val() / 100 * imageWidth;
			var cssTop = (pixelsTop - pointHeight) / imageHeight * 100;
			var cssLeft = (pixelsLeft - (pointWidth / 2)) / imageWidth * 100;
			$('.locationpicker-point').css({
				top: cssTop + '%',
				left: cssLeft + '%'
			});
		}
	});
});