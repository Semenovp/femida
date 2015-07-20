	$(document).ready(function(){
			
	 $('.myWrapper').easyTicker({
		direction: 'up',
		easing: 'swing',
		speed: 'fast',
		interval: 10000,
		height: '1250',
		visible: 1,
		mousePause: 1,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			playText: 'Play',
			stopText: '.stop'
		}
	});
		
	});

    function PopUpHide(){
		$("#exampleModal").arcticmodal('close');	
    }
	