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
		$filterTabletHeight = $filterTablet.height();
		$filterBarControl = $('.filterbar-control'),
		$windowWidth = $(window).innerWidth(),
		$eventDetail = $('.detail-info'),
		$detailBtn = $('.details, .add-team, .create-new-team'),
		filterShow = false,
		scrollTime = 400,
		filterdelayTime = 1200;

		//initial
		$scrollSection.hide();
		$mobileMenu.css({"top":screenHeight}).velocity({top:screenHeight-mobileMenuHeight},
			{duration: scrollTime,
				delay:filterdelayTime+scrollTime,
				easing: "easeInOutQuart",
				complete: function(){
					//add mobile menu scroll animation
					scrollhideMobileMenu();
				}
			}
		);

		//filterSlide
		if ($windowWidth < 768 ){
			//mobile
			$sideBar.transition({ y: -$filterBarHeight-5 , delay:filterdelayTime, easing: "easeInOutQuart"});

		}else{
			//tablet & desktop
			$filterTablet.hide();
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
				$filterTablet.slideToggle();
			}
			
		});

		//window srcollDown hide bottom menu, srcollUp show 
			scrollhideMobileMenu();




		//calender page
		//event dateil slideDown
		
		$detailBtn.click(function(e){
			e.preventDefault();
			$(this).next().slideToggle();
		});

		
			

			

		function scrollToIntro(){
			$scrollSection.show().velocity("scroll", { duration: scrollTime, easing: "easeInOutQuart" ,offset:-navHeight})
		};

		//mobile
		function filterBarShow(){

			if (filterShow === false ){
				$sideBar.transition({ y: 0,  easing: "easeInOutQuart"});

				filterShow = true;
				
			} else {
		
				$sideBar.transition({ y: -$filterBarHeight-5 ,  easing: "easeInOutQuart"});
			 	filterShow = false;
			}		
		}



		function scrollhideMobileMenu(){

			var lastScrollTop = $(window).scrollTop(),
				isShowing = true;
			$(window).scroll(function(event){
			   	var st = $(this).scrollTop();
			   	if (st > lastScrollTop){
			       // downscroll code
			       	if(isShowing){
				       $mobileMenu.velocity({top:screenHeight}, {duration: scrollTime, easing: "easeInOutQuart"});
				       isShowing = false;
			   	   	}
			    } else if(st < lastScrollTop){
			        // upscroll code
			        if(!isShowing){
			        	$mobileMenu.velocity({top:screenHeight-mobileMenuHeight}, {duration: scrollTime, easing: "easeInOutQuart"});
			        	isShowing = true;
			    	}
			    }
			    lastScrollTop = st;
			});
		}

		

		
});