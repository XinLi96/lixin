$(function(){
	$('#menu-ic').on('click', function(){
		$('#cover').css({
			display: 'block'
		});
		$('#menu-cl li').css({
			display: 'block'
		});
		$('#menu-cl').css({
			width: '240px'
		});	
	});
	$('#cover').on('click', function(){
		$('#cover').css({
			display: 'none'
		});
		$('#menu-cl li').css({
			display: 'none'
		});
		$('#menu-cl').css({
			width: '0'
		});	
	});
});