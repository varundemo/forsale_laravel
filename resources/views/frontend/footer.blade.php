    <div class="container-fluid">
    	<section class="grey_section">
    		<div class="row d-flex justify-content-center">
	    		<a href="https://www.facebook.com/SmartphoneRealEstate/" target="_blank">
	    			<i class="fa fa-2x fa-facebook-square" style="color: rgb(210, 47, 37);"></i>
	    		</a>
	    		&nbsp;&nbsp;&nbsp;&nbsp;
	    		<a href="https://twitter.com/FORSALEBYWEB" target="_blank">
	    			<i class="fa fa-2x fa-twitter-square" style="color: rgb(210, 47, 37);"></i>
	    		</a>
			</div>
    	</section>
    </div>

    <div class="container-fluid">
    	<div class="row">
    		<section class="powered_by_section">
    		<h1 class="text-center mb-5">Powered By</h1>
    		<div class="row d-flex justify-content-center">
	    		<!-- <img src="{{ URL::to('/images/powered_by_a_1x.webp') }}" srcset="/images/powered_by_a_1x.webp, /images/powered_by_a_1.5x.webp 1.5x, /images/powered_by_a_2x.webp 2x, /images/powered_by_a_3x.webp 3x" class="mx-4"> -->
	    		<!-- <img src="/images/powered_by_b_1x.webp" srcset="/images/powered_by_b_1x.webp, /images/powered_by_b_1.5x.webp 1.5x, /images/powered_by_b_2x.webp 2x, /images/powered_by_b_3x.webp 3x" class="mx-4">
	    		<img src="/images/powered_by_c_1x.webp" srcset="/images/powered_by_c_1x.webp, /images/powered_by_c_1.5x.webp 1.5x, /images/powered_by_c_2x.webp 2x, /images/powered_by_c_3x.webp 3x" class="mx-4"> -->
          <img src="{{ URL::to('/images/powered_by_a_1x.webp') }}" class="mx-4">
          <img src="{{ URL::to('/images/powered_by_b_1x.webp') }}"  class="mx-4">
          <img src="{{ URL::to('/images/powered_by_c_1x.webp') }}"  class="mx-4">
			</div>
    	</section>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row d-flex justify-content-center">
    		<section class="grey_section footer_section">
    			<div class="wrapper">
	    			<ul class="footer_menu mt-5">
					  <li><a href="/">Search</a></li>
					  <li><a href="/buy">Buy</a></li>
					  <li><a href="/sell">Sell</a></li>
					  <li><a href="/find-agent">Find Agent</a></li>
					  <li><a href="/why-12-days">Why 12 Days?</a></li>
					  <li><a href="/faqs">FAQs</a></li>
					  <li><a href="#">Articles/Knowledge</a></li>
					  <li><a href="our-secret">Our Secret</a></li>
					  <li><a href="/about-us">About Us</a></li>
					  <li><a href="agent-partners">Agent Partners</a></li>
					  <li><a href="/login">Client Portal</a></li>
					</ul>
    			</div>
    			<div class="row d-flex flex-column text-center mt-4">
    				<div>
    					<h5>Forsalebyweb.com:</h5>
    				</div>
    				<div class="mt-3">
    					<h3>International Plaza, 7900 International Drive Suite 300, Bloomington, MN 55425</h3>
    				</div>
    			</div>
    			<div class="row d-flex justify-content-around mt-4" style="color: rgb(89, 89, 89);">
    				<div style="width: 598px;text-align: justify;">
    					Forsalebyweb.com is a Minnesota state licensed real estate company #20600068 in partnership with <b>Licensed Real Estate Professionals</b> nationwide.  It's in your phone®, The Smartphone Real Estate Company™, and Name Your House Values™ are trademarks of Forsalebyweb™.   Cashback is not  available where prohibited by law, including in Alaska, Iowa, Kansas,  Louisiana, Mississippi, Missouri, Oklahoma, Oregon, and Tennessee.    All other Marks are properties of their respective owners.  Copyright © 2019.   All Rights Reserved.
    				</div>
    				<div class="align-self-center">
    					The Smartphone Real Estate Company™
    				</div>
    			</div>
    		</section>
    	</div>
    </div>

  <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery-3.4.1.min.js"></script>
  <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
  integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ URL::to('/') }}/js/bootstrap.js"></script>

  <script type="text/javascript">
  	function hide_mobile_menu() {
  		$(".navbar-collapse").collapse('hide');
  	}

  	$(window).scroll(function (event) {
    	var scroll = $(window).scrollTop();
	    if(scroll > 100) {
			$( ".navbar" ).first().css( "opacity", "0.8" );
			$( ".logo" ).first().css( "height", "45px" );
	    }
	    else {
	    	$( ".navbar" ).first().css( "opacity", "1" );
	    	$( ".logo" ).first().css( "height", "100px" );
	    }
	});
  </script>


  <script>
  	//START SLIDER ONE
	function openSliderModal() {
	  document.getElementById("sliderModal").style.display = "block";
	}

	function closeSliderModal() {
	  document.getElementById("sliderModal").style.display = "none";
	}

	var slideIndex_sliderone = 1;
	showSlides_sliderone(slideIndex_sliderone);

	function plusSlides_sliderone(n) {
	  showSlides_sliderone(slideIndex_sliderone += n);
	}

	function currentSlide_sliderone(n) {
	  showSlides_sliderone(slideIndex_sliderone = n);
	}

	function showSlides_sliderone(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides_sliderone");
	  var dots = document.getElementsByClassName("demo_sliderone");
	  var captionText = document.getElementById("caption_sliderone");
	  if (n > slides.length) {slideIndex_sliderone = 1}
	  if (n < 1) {slideIndex_sliderone = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex_sliderone-1].style.display = "block";
	  dots[slideIndex_sliderone-1].className += " active";
	  captionText.innerHTML = dots[slideIndex_sliderone-1].alt;
	}
  	//END SLIDER ONE

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
