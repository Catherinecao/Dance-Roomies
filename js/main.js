$(document).ready(function(){
	var $signInBtn = $('#sign-in'),
		$introBtn = $('#w-i-d-r'),
		$scrollSection = $('.what-is-dance-roomies'),
		navHeight = $('.navbar').height(),
		$mobileMenu = $('.bottom-menu'),
		mobileMenuHeight = $('.bottom-menu').height(),
		screenHeight = window.innerHeight,
		$filterBar = $('.filterBar'),
		$sideBar = $('.sidebar'),
		$filterBarHeight = $filterBar.height();
		$filterBarControl = $('.sidebar-control'),
		filterShow = false,
		scrollTime = 400,
		filterdelayTime = 800;

		//initial
		$scrollSection.hide();
		$mobileMenu.css({"top":screenHeight-mobileMenuHeight});

		$sideBar.transition({ y: -$filterBarHeight-30 , delay:filterdelayTime, easing: "easeInOutQuart"});


		//functions

		$introBtn.click(function(e){
			e.preventDefault();
			// scroll to .how dose it work
			scrollToIntro();
		});

		$filterBarControl.click(function(e){
			e.preventDefault();
			filterBarShow();
		});

		function scrollToIntro(){
			$scrollSection.show().velocity("scroll", { duration: scrollTime, easing: "easeInOutQuart" ,offset:-navHeight*2})
		};

		function filterBarShow(){

			if (filterShow === false ){
				$sideBar.transition({ y: $filterBarHeight/4-30,  easing: "easeInOutQuart"});

				filterShow = true;
				$filterBarControl.addClass(".sidebar-control-active")
			} else {
		
				$sideBar.transition({ y: -$filterBarHeight-30 ,  easing: "easeInOutQuart"});
			 	filterShow = false;
			}
			
		}
		

});