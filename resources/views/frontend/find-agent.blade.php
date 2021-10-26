@include('frontend.header')

    <div class="container-fluid" style="margin-top: 180px;">
    	<div class="row">
    		<section class="white_bg_section">
	    		<h1 class="text-center container">Meet Your Future Real Estate Agent: It's in Your Phone®</h1>
	    		<hr>
	    		<div class="videoWrapper container">
	    			<iframe width="560" height="315" src="https://www.youtube.com/embed/wFFATr6Ocdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    		</div>
    		</section>
    	</div>
    </div>

     <div class="container-fluid">
    	<div class="row">
    		<section class="contact_section">
    		<h1 class="text-center">Sign Up Today & Get Cashback!</h1>
    		<hr>
    		<div class="row d-flex justify-content-center">
	    		<div class="col-md-6 text-center">
    				<h4 class="text-center mt-3 mb-3">Send text message toll free to: 1-877-INFOTODAY ( 1-877-463-6863 ) or Fill out form below:</h4>
	    			<form class="mb-4">
					  <div class="form-group">
					    <input type="text" name="name" class="form-control" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <input type="text" name="address" class="form-control" placeholder="City, State, Zipcode">
					  </div>
					  <div class="form-group">
					    <input type="text" name="phone" class="form-control" placeholder="Phone">
					  </div>
					  <div class="form-group">
					    <input type="email" name="email" class="form-control" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <textarea name="detail" class="form-control" placeholder="Detail" rows="5"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
					</form>
					<small class="text-center mb-3" style="font-size: 14px;">This site is protected by reCAPTCHA and the Google
						<a href="https://policies.google.com/privacy">Privacy Policy</a> and
						<a href="https://policies.google.com/terms">Terms of Service</a> apply.
					</small>
					<h4 class="text-center mt-5" style="font-size: 18px;color: rgb(87, 87, 87);">
						The Smartphone Real Estate Company™ Never Charges For Text Messaging.  Your carrier data plan applies.
					</h4>
	    		</div>
			</div>
    	</section>
    	</div>
    </div>

     <div class="container-fluid">
     	<div class="row" style="position: relative;">
     		<div id='map' style='width: 100%; height: 456px;'></div>
			<script>
			mapboxgl.accessToken = 'pk.eyJ1IjoicHVzaHBhcmFqYmhhdHRhIiwiYSI6ImNrNDExenVuMTA3eGQzbW8zdTJtOHRhYXIifQ.IvvR3fy7H1d68IskBf7xPA';

			var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
			mapboxClient.geocoding
			.forwardGeocode({
			query: 'International Plaza, 7900 International Drive Suite 300, Bloomington, MN 55425',
			autocomplete: false,
			limit: 1
			})
			.send()
			.then(function(response) {
			if (
			response &&
			response.body &&
			response.body.features &&
			response.body.features.length
			) {
			var feature = response.body.features[0];

			var map = new mapboxgl.Map({
				container: 'map',
				style: 'mapbox://styles/mapbox/streets-v11',
				center: feature.center,
				zoom: 14
			});
			// Add zoom and rotation controls to the map.
			map.addControl(new mapboxgl.NavigationControl());
			// disable map zoom when using scroll
			map.scrollZoom.disable();
			//add marker
			new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
			}
			});

			// var map = new mapboxgl.Map({
			// container: 'map',
			// style: 'mapbox://styles/mapbox/streets-v11',
			// center: [-93.226467, 44.859252], // starting position [lng, lat]
			// zoom: 14 // starting zoom
			// });
			</script>

			<a href="http://maps.google.com/maps?daddr=International%20Plaza,%207900%20International%20Drive%20Suite%20300,%20Bloomington,%20MN%2055425" target="_blank">
				<button class="btn btn-danger" style="position: absolute;top: 15px;left: 15px;"><i class="fa fa-location-arrow"></i> GET DIRECTIONS</button>
			</a>
     	</div>
     </div>

     <div class="container-fluid">
    	<div class="row">
    		<!-- START Slider One -->
		<div class="slider_one row_lightbox d-flex justify-content-around">
		  <div class="column_lightbox">
		    <img src="images/find_agent_slider/image_1.webp" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(1)" class="hover-shadow cursor">
		  </div>
		  <div class="column_lightbox">
		    <img src="images/find_agent_slider/image_2.webp" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(2)" class="hover-shadow cursor">
		  </div>
		  <div class="column_lightbox">
		    <img src="images/find_agent_slider/image_3.webp" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(3)" class="hover-shadow cursor">
		  </div>
		  <div class="column_lightbox">
		    <img src="images/find_agent_slider/image_4.webp" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(4)" class="hover-shadow cursor">
		  </div>
		</div>

		<div id="sliderModal" class="modal">
		  <span class="close cursor" onclick="closeSliderModal()">&times;</span>
		  <div class="modal-content-lightbox">

		    <div class="mySlides_sliderone">
		      <div class="numbertext">1 / 4</div>
		      <img src="images/find_agent_slider/image_1.webp" style="width:100%">
		    </div>

		    <div class="mySlides_sliderone">
		      <div class="numbertext">2 / 4</div>
		      <img src="images/find_agent_slider/image_2.webp" style="width:100%">
		    </div>

		    <div class="mySlides_sliderone">
		      <div class="numbertext">3 / 4</div>
		      <img src="images/find_agent_slider/image_3.webp" style="width:100%">
		    </div>

		    <div class="mySlides_sliderone">
		      <div class="numbertext">4 / 4</div>
		      <img src="images/find_agent_slider/image_4.webp" style="width:100%">
		    </div>

		    <a class="prev" onclick="plusSlides_sliderone(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides_sliderone(1)">&#10095;</a>

		    <div class="caption-container">
		      <p id="caption_sliderone"></p>
		    </div>


		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/find_agent_slider/image_1.webp" style="width:100%" onclick="currentSlide_sliderone(1)" alt="Nature and sunrise">
		    </div>
		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/find_agent_slider/image_2.webp" style="width:100%" onclick="currentSlide_sliderone(2)" alt="Snow">
		    </div>
		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/find_agent_slider/image_3.webp" style="width:100%" onclick="currentSlide_sliderone(3)" alt="Mountains and fjords">
		    </div>
		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/find_agent_slider/image_4.webp" style="width:100%" onclick="currentSlide_sliderone(4)" alt="Mountains and fjords">
		    </div>
		  </div>
		</div>

		<!-- END Slider One -->
    	</div>


    <!--
    <div class="container-fluid bg-dark" style="height: 100vh;">Krishna</div>
    <div class="container-fluid bg-dark" style="height: 100vh;">Krishna</div>
	-->

@include('frontend.footer')
