$(function () {
	var $jsBlogMenuChild = $('.side-menu__li'),
		$body = $('body');
	//blog side menu
	$jsBlogMenuChild.on('click', function () {
		$(this).toggleClass('active');
	});
	//menu btn
	$('#js__sideMenuBtn').on('click', function () {
		$body.toggleClass('side-open');
		$('#js__overlay').on('click', function () {
			$body.removeClass('side-open');
		});
	});
});