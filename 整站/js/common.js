$(function(){
	var $searchIp = $('#search-ip');
	$('#search-icon').on('click',function(){
		alert($searchIp.val());
	});
	$searchIp.on('keypress',function(e){
		if(e.which == 13){
			alert(this.value);
		}
	});
});