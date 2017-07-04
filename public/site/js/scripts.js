$(function(){
	//DEMO SPIN
	//setup center
	var sCenter = new createjs.Stage("plate-center");
	var sLeft = new createjs.Stage("plate-left");
    var sLeft1 = new createjs.Stage("plate-left");
	var sRight = new createjs.Stage("plate-right");
	var plateCenter = new createjs.Bitmap("public/site/images/Vong_To.png");
	plateCenter.name = 'plate-center';
	plateCenter.regX = 226;
	plateCenter.regY = 226;
	plateCenter.x = 226;
	plateCenter.y = 226;
	sCenter.addChild(plateCenter);

	var plateLeft = new createjs.Bitmap("public/site/images/Vong_Nho.png");
	plateLeft.name = 'plate-left';
	plateLeft.regX = 135;
	plateLeft.regY = 135;
	plateLeft.x = 135;
	plateLeft.y = 135;
	sLeft.addChild(plateLeft);

    var plateLeft1 = new createjs.Bitmap("public/site/images/Light_Bi_Xoay.png");
    plateLeft1.name = 'plate-left';
    plateLeft1.regX = 135;
    plateLeft1.regY = 135;
    plateLeft1.x = 135;
    plateLeft1.y = 135;
    sLeft1.addChild(plateLeft1);


	createjs.Ticker.setFPS(256);
	createjs.Ticker.addEventListener("tick", function(){
		sCenter.update();
		sLeft.update();
		sRight.update();
	});

		function handleChange(event){
		if(Math.floor(plateCenter.rotation)%30==0){
			$('#sa-center').addClass('rotate');
			setTimeout(function(){
				$('#sa-center').removeClass('rotate');
			},100);
		}

		//vòng to
		
		
		/*if(Math.floor(plateRight.rotation)%30==0){
			$('#sa-right').addClass('rotate');
			setTimeout(function(){
				$('#sa-right').removeClass('rotate');
			},100);
		}*/
		
		
		if(Math.floor(plateLeft.rotation)%30==0){
			$('#sa-left').addClass('rotate');

			setTimeout(function(){
				$('#sa-left').removeClass('rotate');
			},100);
		}
            if(Math.floor(plateLeft1.rotation)%30==0){
                $(".vp-xoay").addClass("transform");

                setTimeout(function(){
                    $(".vp-xoay").removeClass("transform");
                },100);
            }
	}
	var spin = 0;
	$('.vq-spin-button').click(function(){
		if(!spin){
			$('.image-rotate').css("display","block");
			spin = 1;
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
				createjs.Tween.get(plateCenter, {override: true}).to({rotation: 695+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
			}).addEventListener("change", handleChange);

			createjs.Tween.get(plateLeft, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
				createjs.Tween.get(plateLeft, {override: true}).to({rotation: 767+360*12}, 18*1000, createjs.Ease.quintOut ).call(function(){
					spin = 0;
					$('.image-rotate').css("display","none");
					$('.vq-menu-popup').show();
					$('.textbonus').text('Chúc mừng bạn nhận được 6.000.000 và nhân 4');
				
				}).addEventListener("change", handleChange);
			}).addEventListener("change", handleChange);
		}
	});
    $('#img-close').click(function(){
        $('.vq-menu-popup').css("display","none");
		
    });
});

function VongQuayVip(spin,RotationIn,Rotationout,CurrentMoney)
{
	if(RotationIn==1){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 743+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==2){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 202+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==3){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 833+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==4){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 293+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==5){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 247+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==6){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 787+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==7){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 155+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);

	}
	if(RotationIn==8){
		createjs.Tween.get(plateCenter, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateCenter, {override: true}).to({rotation: 695+360*10}, 10*1000, createjs.Ease.quintOut ).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);
	}
	if(Rotationout==9){
		createjs.Tween.get(plateLeft, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateLeft, {override: true}).to({rotation: 1040+360*12}, 12*1000, createjs.Ease.quintOut ).call(function(){
				spin = 0;
				$('.image-rotate').css("display","none");
				$('.vq-menu-popup').fadeIn();
				$('.textbonus').text('Chúc mừng bạn nhận được 6.000.000 X2');

			}).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);
	}
	if(Rotationout==10){
		createjs.Tween.get(plateLeft, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateLeft, {override: true}).to({rotation: 950+360*12}, 12*1000, createjs.Ease.quintOut ).call(function(){
				spin = 0;
				$('.image-rotate').css("display","none");
				$('.vq-menu-popup').fadeIn();
				$('.textbonus').text('Chúc mừng bạn nhận được 6.000.000 X3');

			}).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);
	}
	if(Rotationout==11){
		createjs.Tween.get(plateLeft, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateLeft, {override: true}).to({rotation: 860+360*12}, 12*1000, createjs.Ease.quintOut ).call(function(){
				spin = 0;
				$('.image-rotate').css("display","none");
				$('.vq-menu-popup').fadeIn();
				$('.textbonus').text('Chúc mừng bạn nhận được 6.000.000 X4');

			}).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);
	}
	if(Rotationout==12){
		createjs.Tween.get(plateLeft, {override: true}).to({rotation: 360}, 1000, createjs.Ease.circIn ).call(function(){
			createjs.Tween.get(plateLeft, {override: true}).to({rotation: 767+360*12}, 15*1000, createjs.Ease.quintOut ).call(function(){
				spin = 0;
				$('.image-rotate').css("display","none");
				$('.vq-menu-popup').fadeIn(500);
				$('.textbonus').text('Chúc mừng bạn nhận được 6.000.000 X5');

			}).addEventListener("change", handleChange);
		}).addEventListener("change", handleChange);
	}
}