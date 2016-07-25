var oNeck = document.getElementById('neck');
		var oDivs = document.getElementById('con');
		var aImgs = oNeck.getElementsByTagName('img');

		// oDivs.appendChild(aImgs[0].cloneNode());
		oDivs.style.width = aImgs.length * aImgs[0].offsetWidth + 'px';
		var timer1 = setInterval(function(){
			if((oDivs.offsetLeft - aImgs[0].offsetWidth) <= -oDivs.offsetWidth){
				oDivs.style.left = 0;
			}else{
				oDivs.style.left = oDivs.offsetLeft - aImgs[0].offsetWidth + 'px';
			}
		},3000);

		$('#right').on('mouseover',function(){
			$('#right img').animate({
				width: 570,
				height: 360
			})
		}).on('mouseout',function(){
			$('#right img').animate({
				width: 831,
				height: 600
			})
		})
		$('#b-left').on('mouseover',function(){
			$('#b-left img').animate({
				width:570,
				height: 360
			})
		}).on('mouseout',function(){
			$('#b-left img').animate({
				width: 831,
				height: 600
			})
		})
		$('#pro-top-left').hover(function(){
			$('#cover-bot1').css({
				display: 'block'
			})
		},function(){
			$('#cover-bot1').css({
				display: 'none'
			})
		})
		$('#pro-top-right').hover(function(){
			$('#cover-bot2').css({
				display: 'block'
			})
		},function(){
			$('#cover-bot2').css({
				display: 'none'
			})
		})
		$('#pro-bot-left').hover(function(){
			$('#cover-bot3').css({
				display: 'block'
			})
		},function(){
			$('#cover-bot3').css({
				display: 'none'
			})
		})
		$('#pro-bot-right').hover(function(){
			$('#cover-bot4').css({
				display: 'block'
			})
		},function(){
			$('#cover-bot4').css({
				display: 'none'
			})
		})
		var index = 0;
		$('#select li').on('click',function(){
			console.log($(this).index());
			index = $(this).index();
			$(this).children().addClass('chos').parent().siblings().children().removeClass('chos');
			$('#list div').eq($(this).index()).fadeIn().siblings().fadeOut();
		})
		var timer2 = setInterval(function(){
			index++;
			if(index == 3){
				index = 0;
			}
			$('#select li').eq(index).trigger("click");
		},2000);