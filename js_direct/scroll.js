$(function(){
	
	var $btn = $('#toPageTop');
	var isHidden = true;
	
	// デフォルトは非表示
	$btn.hide();
	
	$(window).scroll(function () {
		if( $(this).scrollTop() > 100 ) {
			if( isHidden ) {
				$btn.stop(true,true).fadeIn();
				isHidden = false;
			}
		} else {
			if( !isHidden ) {
				$btn.stop(true,true).fadeOut();
				isHidden = true;
			}
		}
	});
	
	$btn.click(function(){
		$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
		return false;	
	});	
});