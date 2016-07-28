$(function(){
	var $Picture = $('#picture');
	var $imgs = $('img', $Picture);
	var width = $imgs.eq(0).width();
	var length = $imgs.length;
	var nowIdx = 0;

	$('.next-arrow').on('click', function(){
		nowIdx++;
		if(nowIdx == length){
			nowIdx = 0;
		}
		$Picture.stop().animate({
			left: -width * nowIdx
		},500);
	});
	$('.prev-arrow').on('click', function(){
		nowIdx--;
		if(nowIdx == -1){
			nowIdx = length-1;
		}
		$Picture.stop().animate({
			left: -width * nowIdx
		},500);
	});

});