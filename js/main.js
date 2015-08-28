$(document).ready(function(){
	var $signInBtn = $('#sign-in'),
		$introBtn = $('#w-i-d-r'),
		$scrollSection = $('.what-is-dance-roomies'),
		navHeight = $('.navbar').height(),
		$mobileMenu = $('.bottom-menu'),
		mobileMenuHeight = $('.bottom-menu').height(),
		screenHeight = window.innerHeight,
		$filterBar = $('.mobile'),
		$filterTablet = $('.tablet'),
		$sideBar = $('.sidebar'),
		$filterBarHeight = $filterBar.height();
		$filterBarControl = $('.sidebar-control'),
		$windowWidth = $(window).innerWidth(),
		filterShow = false,
		filterTabletShow = false,
		mobileMenuShow = false,
		scrollTime = 400,
		filterdelayTime = 1200;

		//initial
		$scrollSection.hide();
		$mobileMenu.css({"top":screenHeight}).transition({y:-mobileMenuHeight, delay:filterdelayTime+scrollTime, easing: "easeInOutQuart"});

		//filterSlide
		if ($windowWidth <= 768 ){

			$sideBar.transition({ y: -$filterBarHeight-30 , delay:filterdelayTime, easing: "easeInOutQuart"});

		}else{

			$filterTablet.hide();
			$sideBar.show;
		}
		


		//functions

		$introBtn.click(function(e){
			e.preventDefault();
			// scroll to .what is dance roomies
			scrollToIntro();
		});

		$filterBarControl.click(function(e){
			e.preventDefault();

			if ($windowWidth < 768) {
				filterBarShow();
			}else{
				filterSlide();
			}
			
		});

		//window srcollDown hide bottom menu, srcollUp show 
		$(window).scroll(function(){
			scrollhideMobileMenu();
		});
		

		function scrollToIntro(){
			$scrollSection.show().velocity("scroll", { duration: scrollTime, easing: "easeInOutQuart" ,offset:-navHeight*2})
		};

		//mobile
		function filterBarShow(){

			if (filterShow === false ){
				$sideBar.transition({ y: $filterBarHeight/4-30,  easing: "easeInOutQuart"});

				filterShow = true;
				
			} else {
		
				$sideBar.transition({ y: -$filterBarHeight-30 ,  easing: "easeInOutQuart"});
			 	filterShow = false;
			}		
		}

		//tablet

		function filterSlide(){
			if (filterShow === false ){
				$filterTablet.velocity("slideDown",{duration: scrollTime, easing:"easeInOutQuart"});

				filterShow = true;
				
			} else {
		
				$filterTablet.velocity("slideUp",{duration: scrollTime, easing:"easeInOutQuart"});
			 	filterShow = false;
			}		
		}
		

		function scrollhideMobileMenu(){
			if(mobileMenuShow === false){

				if($(window).scrollTop() >= 200){
					$mobileMenu.transition({y:mobileMenuHeight});
				}
				mobileMenuShow = true;
			}
			else{

				if($(window).scrollTop() < 200){
					$mobileMenu.transition({y:-mobileMenuHeight});
				}
				mobileMenuShow = false;
			}
		}
		

});