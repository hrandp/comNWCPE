var BindUIActions = (function(){
	var privates = {};

	function BindUIActions(){

		this.bindUI = function(){
			console.log('bindUI loading');
			//Remove content Breakpoints
			var isBreakPoint = function (bp) {
				
				var bps = [320, 480, 768, 1024],
					w = jQuery(window).width(),
					min, max
				
				for (var i = 0, l = bps.length; i < l; i++ ){
					if (bps[i] === bp) {
						min = bps[i-1] || 0
						max = bps[i]
						break
					}
				}	
				return w > min && w <= max
			}

			if (isBreakPoint(768)) {
				jQuery('.slider-sub-header, .slider-paragraph, .btn-slider' ).css('display', 'none');
				console.log('Screen size is less than or equal to 1024');
			}

			if (isBreakPoint(1024)) {
				jQuery('.slider-sub-header, .slider-paragraph, .btn-slider' ).css('display', 'none');
				console.log('Screen size is less than or equal to 1024');
			}


			//Upcoming Events Content Slider
			
		};
	}

	return BindUIActions;

})(window);

var bindUI = new BindUIActions();
bindUI.bindUI();
