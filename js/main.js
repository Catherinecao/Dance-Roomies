$(document).ready(function(){
	var $scrollBtn1 = $('#w-d-i-d'),
		$scrollBtn2 = $('#h-d-i-w'),
		// $scrollSection = $('.section'),
		$scrollSection1 = $('#w-d-i-d'),
		$scrollSection2 = $('#h-d-i-w'),
		scrollTime = 400;

		$scrollBtn1.click(function(e){
			e.preventDefault();
			// scroll to .what dose it do
			scrollToW();	
		});

		$scrollBtn2.click(function(e){
			e.preventDefault();
			// scroll to .how dose it work
			scrollToH();
		});

		function scrollToW(){
			$scrollSection1.velocity("scroll", { duration: scrollTime, easing: "easeInOutQuart" ,offset:-120})
		}

		function scrollToH(){
			$scrollSection2.velocity("scroll", { duration: scrollTime, easing: "easeInOutQuart" ,offset:-120})
		}

});