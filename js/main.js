$(document).ready(function(){
	var $signInBtn = $('#sign-in'),
		$introBtn = $('#w-i-d-r'),
		$scrollSection = $('.what-is-dance-roomies'),
		navHeight = $('.navbar').height(),
		scrollTime = 400;

		//initial
		$scrollSection.hide();

		$signInBtn.click(function(e){
			e.preventDefault();
			// sign in page
			// scrollToW();	
		});

		$introBtn.click(function(e){
			e.preventDefault();
			// scroll to .how dose it work
			scrollToIntro();
		});


		function scrollToIntro(){
			$scrollSection.show().velocity("scroll", { duration: scrollTime, easing: "easeInOutQuart" ,offset:-navHeight*2})
		};
		

});