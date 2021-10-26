@include('frontend.header')

<div class="jumbotron-background-mobile">
    <img src="images/sweet_home_mobile.webp" style="width: 100%;">
  <div class="searchHeadingMobile text-white">
  Turn Your Smartphone into a Real Estate Agent!™
</div>
</div>



<div class="jumbotron jumbotron-fluid bg-dark" style="margin-top: 100px;">

  <div class="jumbotron-background">
    <img src="images/sweet_home.webp">
  </div>
<div class="row">
  <div class="col-12 text-white text-center" id="searchHeading" style="font-size: 48px;font-weight: bold;">
    Turn Your Smartphone into a Real Estate Agent!™
  </div>
  </div>
  <div class="container text-white" style="background-color: #FFF;">

    <div class="card-body searchCard" style="color: black;font-size: 18px;">
				    <h5 class="card-title" style="font-size: 24px;font-weight: 400;">Search Listings</h5>
				    <div class="row">
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Location</label>
							    <input type="text" class="form-control" id="mls-input24">
						  	</div>
				    	</div>
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Type</label>
							    <select class="form-control" id="mls-input25">
								    <option value="">Any</option>
								    <option value="1">Single-Family</option>
								    <option value="2">Multi-Family</option>
								    <option value="3">Lots and Land</option>
								    <option value="4">Commercial</option>
								    <option value="5">Farm</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Sort By</label>
							    <select class="form-control" id="mls-input26">
								    <option value=""></option>
								    <option value="newest">Newest</option>
								    <option value="oldest">Oldest</option>
								    <option value="pra">Least Expensive to Most</option>
								    <option value="prd">Most Expensive to Least</option>
								    <option value="bda">Bedrooms (Low to High)</option>
								    <option value="bdd">Bedrooms (High to Low)</option>
								    <option value="tba">Bathrooms (Low to High)</option>
								    <option value="tbd">Bathrooms (High to Low)</option>
							    </select>
						  	</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Bedrooms</label>
							    <select class="form-control" id="mls-input27">
								    <option value="">Any Number</option>
								    <option value="0">Studio</option>
								    <option value="1">1+</option>
								    <option value="2">2+</option>
								    <option value="3">3+</option>
								    <option value="4">4+</option>
								    <option value="5">5+</option>
								    <option value="6">6+</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Baths</label>
							    <select class="form-control" id="mls-input28">
								    <option value="">Any Number</option>
								    <option value="1">1+</option>
								    <option value="2">2+</option>
								    <option value="3">3+</option>
								    <option value="4">4+</option>
								    <option value="5">5+</option>
								    <option value="6">6+</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlInput1">Min Price</label>
							    <input type="text" class="form-control" id="mls-input29" placeholder="">
						  	</div>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlInput1">Max Price</label>
							    <input type="text" class="form-control" id="mls-input30" placeholder="">
						  	</div>
				    	</div>
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlInput1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							    <button type="button" class="btn btn-danger btn-block" onclick="submitSearchForm();">SEARCH NOW</button>
						  	</div>
				    	</div>
				  	</div>

  </div>
  <!-- /.container -->


</div>
</div>
<!-- /.jumbotron -->




<!--
    <div class="container-fluid d-flex flex-column justify-content-center" id="hero_image" style="height: 78vh;">

    </div>
    <div class="d-flex flex-column align-self-center hero_form" style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
			<h1 class="text-white text-center font-weight-bold">Turn Your Smartphone into a Real Estate Agent!™</h2>
    		<div class="card">
				<div class="card-body">
				    <h5 class="card-title">Search Listings</h5>
				    <div class="row">
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Location</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Type</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Sort By</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
						  	</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Bedrooms</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlSelect1">Baths</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
						  	</div>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlInput1">Min Price</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
						  	</div>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
				    		<div class="form-group">
							    <label for="exampleFormControlInput1">Max Price</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
						  	</div>
				    	</div>
				    	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				    		<div class="form-group">
							    <label for="exampleFormControlInput1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							    <button type="submit" class="btn btn-danger">Confirm identity</button>
						  	</div>
				    	</div>
				  	</div>
			    </div>
			</div>
    	</div>

    -->
    <div class="container-fluid">
    	<div class="row">
    		<section class="red_section">
    			<div class="row">
    				<div class="col-md-6">
	    				<div class="videoWrapper container">
		    				<iframe width="592" height="333" src="https://www.youtube.com/embed/e4pMGxLUZTQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		    			</div>
    				</div>
    				<div class="col-md-6 my-auto">
	    				<h6 class="container" style="font-size: 24px;color: #FFF;text-align: left;">
		    			According to HousingWire, the most influential source of news and information for the U.S. mortgage and housing markets, Forsalebyweb.com offers home buyers and home sellers something that Zillow and others like it can’t:  COLD HARD CASH!
		    			</h6>
    				</div>
    			</div>
    		</section>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row">
    		<section class="dream_section">
	    		<h1 class="text-center container">Faster Real Estate. Faster Offers. Faster Everything.</h1>
	    		<hr>
	    		<div class="container">
	    			<img src="images/manage_properties_mobile_hand.webp" class="img-fluid" />
	    		</div>
    		</section>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row">
    		<section class="contact_section">
	    		<h1 class="text-center container">You'll Never Have to Meet Another Real Estate Agent Again. Unless You Want To...™</h1>
	    		<hr>
	    		<div class="container">
	    			<img src="images/favourite_websites.webp" class="img-fluid" />
	    		</div>
    		</section>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row">
    		<!-- START Slider One -->
		<div class="slider_one row_lightbox d-flex justify-content-around">
		  <div class="column_lightbox">
		    <img src="images/slider_one/image_1.jpg" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(1)" class="hover-shadow cursor">
		  </div>
		  <div class="column_lightbox">
		    <img src="images/slider_one/image_2.webp" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(2)" class="hover-shadow cursor">
		  </div>
		  <div class="column_lightbox">
		    <img src="images/slider_one/image_3.webp" style="width:100%" onclick="openSliderModal();currentSlide_sliderone(3)" class="hover-shadow cursor">
		  </div>
		</div>

		<div id="sliderModal" class="modal">
		  <span class="close cursor" onclick="closeSliderModal()">&times;</span>
		  <div class="modal-content-lightbox">

		    <div class="mySlides_sliderone">
		      <div class="numbertext">1 / 3</div>
		      <img src="images/slider_one/image_1.jpg" style="width:100%">
		    </div>

		    <div class="mySlides_sliderone">
		      <div class="numbertext">2 / 3</div>
		      <img src="images/slider_one/image_2.webp" style="width:100%">
		    </div>

		    <div class="mySlides_sliderone">
		      <div class="numbertext">3 / 3</div>
		      <img src="images/slider_one/image_3.webp" style="width:100%">
		    </div>

		    <a class="prev" onclick="plusSlides_sliderone(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides_sliderone(1)">&#10095;</a>

		    <div class="caption-container">
		      <p id="caption_sliderone"></p>
		    </div>


		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/slider_one/image_1.jpg" style="width:100%" onclick="currentSlide_sliderone(1)" alt="Nature and sunrise">
		    </div>
		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/slider_one/image_2.webp" style="width:100%" onclick="currentSlide_sliderone(2)" alt="Snow">
		    </div>
		    <div class="column_lightbox">
		      <img class="demo_sliderone cursor" src="images/slider_one/image_3.webp" style="width:100%" onclick="currentSlide_sliderone(3)" alt="Mountains and fjords">
		    </div>
		  </div>
		</div>

		<!-- END Slider One -->
    	</div>

		<div class="row">
			<section class="contact_section">
			<h1 class="text-center mt-5 mb-5">Check Status - Book A Showing - Make Offer - Ask Question!</h1>

			<div class="row_lightbox d-flex justify-content-center">
			  <div class="column_lightbox">
			    <img src="images/update_from_agent.webp" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
			  </div>
			  <div class="column_lightbox">
			    <img src="images/signing_contract.webp" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
			  </div>
			  <div class="column_lightbox">
			    <img src="images/make_offer.webp" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
			  </div>
			</div>

			<div id="myModal" class="modal">
			  <span class="close cursor" onclick="closeModal()">&times;</span>
			  <div class="modal-content-lightbox">

			    <div class="mySlides">
			      <div class="numbertext">1 / 3</div>
			      <img src="images/update_from_agent.webp" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">2 / 3</div>
			      <img src="images/signing_contract.webp" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">3 / 3</div>
			      <img src="images/make_offer.webp" style="width:100%">
			    </div>

			    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			    <a class="next" onclick="plusSlides(1)">&#10095;</a>

			    <div class="caption-container">
			      <p id="caption"></p>
			    </div>


			    <div class="column_lightbox">
			      <img class="demo cursor" src="images/update_from_agent.webp" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
			    </div>
			    <div class="column_lightbox">
			      <img class="demo cursor" src="images/signing_contract.webp" style="width:100%" onclick="currentSlide(2)" alt="Snow">
			    </div>
			    <div class="column_lightbox">
			      <img class="demo cursor" src="images/make_offer.webp" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
			    </div>
			  </div>
			</div>
		</section>
		</div>
    </div>

    <!--
    <div class="container-fluid bg-dark" style="height: 100vh;">Krishna</div>
    <div class="container-fluid bg-dark" style="height: 100vh;">Krishna</div>
	-->


    <div class="container-fluid">
    	<div class="row">
    		<section class="white_section">
    		<h1 class="text-center">It's in Your Phone®</h1>
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

@include('frontend.footer')

<script>
  $(function() {
    var locations = [
      "Any",
"Adams",
"Adrian",
"Afton",
"Aitkin",
"Akeley",
"Alango",
"Alaska",
"Albany",
"Albert Lea",
"Albertville",
"Alborn",
"Alden",
"Alexandria",
"Alma",
"Almena",
"Altoona",
"Altura",
"Amery",
"Andover",
"Angora",
"Annandale",
"Anoka",
"Apple Valley",
"Appleton",
"Arago",
"Arcadia",
"Arco",
"Arden Hills",
"Arkansaw",
"Arlington",
"Armstrong",
"Ashby",
"Ashland",
"Askov",
"Atwater",
"Audubon",
"Augusta",
"Aurora",
"Austin",
"Avoca",
"Avon",
"Babbitt",
"Backus",
"Bagley",
"Balaton",
"Baldwin",
"Ball Bluff",
"Balsam Lake",
"Barnes",
"Barnum",
"Barrett",
"Barron",
"Barronett",
"Battle Lake",
"Baudette",
"Baxter",
"Bay City",
"Bayfield",
"Bayport",
"Beach",
"Beardsley",
"Bearville North",
"Beaver Bay",
"Becida",
"Becker",
"Beldenville",
"Belgrade",
"Belle Plaine",
"Bellingham",
"Belview",
"Bemidji",
"Bena",
"Benedict",
"Bennett",
"Benson",
"Beroun",
"Bertha",
"Bethel",
"Big Bend",
"Big Falls",
"Big Lake",
"Big Stone City",
"Bigelow",
"Bigfork",
"Bingham Lake",
"Birchwood",
"Bird Island",
"Biscay",
"Biwabik",
"Black Brook",
"Black River Falls",
"Blackduck",
"Blaine",
"Blair",
"Blomkest",
"Bloomer",
"Blooming Prairie",
"Bloomington",
"Blue Earth",
"Blueberry",
"Bluffton",
"Bock",
"Bovey",
"Bowlus",
"Boy Lake",
"Boy River",
"Boyceville",
"Braham",
"Brainerd",
"Brandon",
"Breezy Point",
"Breitung",
"Bremen",
"Brevator",
"Brewster",
"Britt",
"Brook Park",
"Brooklyn",
"Brooklyn Center",
"Brooklyn Park",
"Brookston",
"Brooten",
"Browerville",
"Browns Valley",
"Brownsdale",
"Brownsville",
"Brownton",
"Bruce",
"Bruno",
"Brunswick",
"Buffalo",
"Buffalo City",
"Buffalo Lake",
"Buhl",
"Burnsville",
"Burtrum",
"Buyck",
"Byron",
"Cable",
"Cadott",
"Caledonia",
"Calumet",
"Cambridge",
"Cameron",
"Canby",
"Canisteo",
"Cannon Falls",
"Canton",
"Carlos",
"Carlton",
"Carver",
"Cass Lake",
"Center City",
"Centerville",
"Centuria",
"Ceylon",
"Champlin",
"Chanhassen",
"Chaska",
"Chatfield",
"Chetek",
"Chippewa Falls",
"Chisago City",
"Chisago Lake",
"Chisholm",
"Chokio",
"Circle Pines",
"Clam Falls",
"Clam Lake",
"Clara City",
"Claremont",
"Clarissa",
"Clark",
"Clarkfield",
"Clarks Grove",
"Clayton",
"Clear Lake",
"Clearwater",
"Clements",
"Cleveland",
"Clifton",
"Clinton",
"Clontarf",
"Cloquet",
"Cobden",
"Cochrane",
"Cohasset",
"Cokato",
"Cold Spring",
"Coleraine",
"Colfax",
"Cologne",
"Columbia Heights",
"Columbus",
"Comfrey",
"Comstock",
"Conger",
"Conover",
"Conrath",
"Cook",
"Coon Rapids",
"Corcoran",
"Cornucopia",
"Corona",
"Cosmos",
"Cottage Grove",
"Cotton",
"Cottonwood",
"Couderay",
"Courtland",
"Crane Lake",
"Credit River Township",
"Cromwell",
"Crooked Lake",
"Crosby",
"Crosslake",
"Crystal",
"Culver",
"Cumberland",
"Currie",
"Cushing",
"Cuyuna",
"Dairyland",
"Dakota",
"Dalbo",
"Dallas",
"Dalton",
"Danbury",
"Danforth",
"Danube",
"Danvers",
"Darfur",
"Darwin",
"Dassel",
"Dawson",
"Dayton",
"De Graff",
"Deephaven",
"Deer Creek",
"Deer Park",
"Deer River",
"Deerwood",
"Delano",
"Delhi",
"Dellwood",
"Delta",
"Dennison",
"Dent",
"Detroit Lakes",
"Dexter",
"Dilworth",
"Dodge",
"Dodge Center",
"Dolliver",
"Dover",
"Dovray",
"Downing",
"Dresbach",
"Dresser",
"Drummond",
"Duluth",
"Dumont",
"Dundas",
"Dunnell",
"Durand",
"Eagan",
"Eagle Bend",
"Eagle Lake",
"Eagle Point",
"East Bethel",
"East Farmington",
"East Gull Lake",
"Easton",
"Eau Claire",
"Eau Galle",
"Echo",
"Eden Prairie",
"Eden Valley",
"Edgerton",
"Edina",
"Effie",
"Eitzen",
"Elba",
"Elbow Lake",
"Eleva",
"Elgin",
"Elizabeth",
"Elk Mound",
"Elk River",
"Elko New Market",
"Ellendale",
"Ellsworth",
"Elmore",
"Elmwood",
"Elrosa",
"Ely",
"Elysian",
"Embarrass",
"Emerald",
"Emily",
"Emmons",
"Esko",
"Ettrick",
"Eureka",
"Eureka Center",
"Evansville",
"Eveleth",
"Excelsior",
"Exeland",
"Eyota",
"Fairchild",
"Fairfax",
"Fairmont",
"Falcon Heights",
"Fall Creek",
"Farden",
"Faribault",
"Farmington",
"Farwell",
"Fayal",
"Federal Dam",
"Fergus Falls",
"Fifty Lakes",
"Finland",
"Finlayson",
"Floodwood",
"Florence",
"Foley",
"Forbes",
"Forest Lake",
"Foreston",
"Fort Ripley",
"Fountain",
"Fountain City",
"Foxboro",
"Franconia",
"Frankford",
"Franklin",
"Frazee",
"Frederic",
"Freeborn",
"Freeport",
"Fridley",
"Frontenac",
"Fulda",
"Galesville",
"Garden City",
"Garfield",
"Garrison",
"Garvin",
"Gary",
"Gaylord",
"Gem Lake",
"Geneva",
"Gheen",
"Ghent",
"Gibbon",
"Gilbert",
"Glen Flora",
"Glencoe",
"Glenville",
"Glenwood",
"Glenwood City",
"Glidden",
"Golden Valley",
"Good Thunder",
"Goodhue",
"Goodland",
"Goodview",
"Gordon",
"Graceville",
"Granada",
"Grand Marais",
"Grand Meadow",
"Grand Rapids",
"Grand View",
"Grandy",
"Granite Falls",
"Grant",
"Grant Valley",
"Granton",
"Grantsburg",
"Grasston",
"Green Isle",
"Greenfield",
"Greenwald",
"Greenwood",
"Grey Cloud Island",
"Grey Eagle",
"Grove City",
"Guthrie",
"Hackensack",
"Hadley",
"Hager City",
"Ham Lake",
"Hamburg",
"Hammond",
"Hampton",
"Hancock",
"Hanover",
"Harmony",
"Harris",
"Hart",
"Hartland",
"Hastings",
"Hatfield",
"Haugen",
"Hawick",
"Hawthorne",
"Hayfield",
"Hayward",
"Hazel Run",
"Hector",
"Henderson",
"Hendricks",
"Henning",
"Hermantown",
"Heron Lake",
"Hertel",
"Hibbing",
"Hill City",
"Hillman",
"Hills",
"Hillsdale",
"Hinckley",
"Hoffman",
"Hokah",
"Holcombe",
"Holdingford",
"Holland",
"Holmen",
"Holyoke",
"Hopkins",
"Houlton",
"Houston",
"Hovland",
"Howard Lake",
"Hoyt Lakes",
"Hudson",
"Hugo",
"Humbird",
"Huntersville",
"Hutchinson",
"Ihlen",
"Independence",
"Industrial",
"International Falls",
"Inver Grove Heights",
"Iron",
"Iron River",
"Ironton",
"Isabella",
"Isanti",
"Isle",
"Ivanhoe",
"Jackson",
"Jacobson",
"Janesville",
"Jasper",
"Jeffers",
"Jenkins",
"Jordan",
"Kabetogama",
"Kandiyohi",
"Kasota",
"Kasson",
"Keewatin",
"Kego",
"Kelliher",
"Kellogg",
"Kelly Lake",
"Kelsey",
"Kensington",
"Kenyon",
"Kerkhoven",
"Kerrick",
"Kettle River",
"Kiester",
"Kilkenny",
"Kimball",
"Kinghurst",
"Kinnickinnic",
"Knapp",
"Knife Lake",
"Knife River",
"La Crescent",
"La Pointe",
"Ladysmith",
"Lafayette",
"Lake Benton",
"Lake City",
"Lake Crystal",
"Lake Elmo",
"Lake Emma",
"Lake George",
"Lake Holcombe",
"Lake Lillian",
"Lake Nebagamon",
"Lake Saint Croix Beach",
"Lake Shore",
"Lake Wilson",
"Lakefield",
"Lakeland",
"Lakeland Shores",
"Lakeville",
"Lakewood",
"Lamberton",
"Lanesboro",
"Lansing",
"Laporte",
"Lastrup",
"Lauderdale",
"Le Center",
"Le Roy",
"Le Sueur",
"Leech Lake",
"Leiding",
"Lent",
"Lester Prairie",
"Lewiston",
"Lexington",
"Libby",
"Lilydale",
"Lindstrom",
"Lino Lakes",
"Litchfield",
"Little Canada",
"Little Falls",
"Little Marais",
"Littlefork",
"Logan",
"Loman",
"Long Lake",
"Long Prairie",
"Longville",
"Lonsdale",
"Loretto",
"Lowry",
"Lublin",
"Lucan",
"Luck",
"Lutsen",
"Luverne",
"Lyle",
"Lynd",
"Mabel",
"Macville",
"Madison",
"Madison Lake",
"Mahtomedi",
"Maiden Rock",
"Makinen",
"Mankato",
"Mantorville",
"Maple Grove",
"Maple Lake",
"Maple Plain",
"Mapleton",
"Maplewood",
"Marble",
"Marcell",
"Margie",
"Marietta",
"Marine",
"Marine on Saint Croix",
"Marshall",
"Martell",
"Mason",
"Max",
"Mayer",
"Maynard",
"Mazeppa",
"Mc Grath",
"McGregor",
"Meadowlands",
"Medford",
"Medicine Lake",
"Medina",
"Meire Grove",
"Melrose",
"Menahga",
"Mendota",
"Mendota Heights",
"Menomonie",
"Mentor",
"Merrifield",
"Merrillan",
"Milaca",
"Milan",
"Milbank",
"Milltown",
"Milroy",
"Miltona",
"Minneapolis",
"Minneiska",
"Minneota",
"Minnesota City",
"Minnesota Lake",
"Minnetonka",
"Minnetonka Beach",
"Minnetrista",
"Minong",
"Mondovi",
"Montevideo",
"Montgomery",
"Monticello",
"Montrose",
"Moorhead",
"Moose Lake",
"Mora",
"Morgan",
"Morris",
"Morristown",
"Morton",
"Motley",
"Mound",
"Mounds View",
"Mountain Iron",
"Mountain Lake",
"Murdock",
"Nashwauk",
"Neillsville",
"Nelson",
"Nerstrand",
"Nevis",
"New Albin",
"New Auburn",
"New Brighton",
"New Germany",
"New Hartford",
"New Hope",
"New London",
"New Munich",
"New Prague",
"New Richland",
"New Richmond",
"New Ulm",
"Newport",
"Nicollet",
"Nimrod",
"Nisswa",
"North Branch",
"North Hudson",
"North Mankato",
"North Oaks",
"North Redwood",
"North Saint Paul",
"Northern",
"Northfield",
"Northome",
"Norton",
"Norwood Young America",
"Nowthen",
"Oak Grove",
"Oak Park",
"Oak Park Heights",
"Oakdale",
"Ocheyedan",
"Ogilvie",
"Ojibwa",
"Olivia",
"Onamia",
"Orono",
"Oronoco",
"Orr",
"Ortonville",
"Osage",
"Osakis",
"Osceola",
"Osseo",
"Ostrander",
"Otisco",
"Otsego",
"Ottertail",
"Outing",
"Owatonna",
"Palisade",
"Park Falls",
"Park Rapids",
"Parkers Prairie",
"Partridge",
"Paynesville",
"Pease",
"Pelican Rapids",
"Pemberton",
"Pengilly",
"Pennington",
"Pennock",
"Pepin",
"Pequot Lakes",
"Perham",
"Peterson",
"Pierz",
"Pillager",
"Pine City",
"Pine Island",
"Pine River",
"Pipestone",
"Plainview",
"Plato",
"Pleasant Valley",
"Plum City",
"Plymouth",
"Ponsford",
"Ponto Lake",
"Poplar",
"Port Hope",
"Port Wing",
"Portage",
"Porter",
"Prairie Farm",
"Prescott",
"Preston",
"Princeton",
"Prinsburg",
"Prior Lake",
"Quamba",
"Racine",
"Radisson",
"Ramsey",
"Randall",
"Randolph",
"Ranier",
"Ray",
"Raymond",
"Reads Landing",
"Red Wing",
"Redwood Falls",
"Remer",
"Renville",
"Rice",
"Rice Lake",
"Rice River",
"Richfield",
"Richmond",
"Richville",
"Ridgeland",
"Ringsted",
"River Falls",
"Robbinsdale",
"Roberts",
"Rochert",
"Rochester",
"Rock Creek",
"Rockford",
"Rockville",
"Rogers",
"Rollingstone",
"Roscoe",
"Rose Creek",
"Rosemount",
"Roseville",
"Rothsay",
"Round Lake",
"Royalton",
"Rush City",
"Rushford",
"Rushford Village",
"Rushmore",
"Russell",
"Ruthton",
"Rutledge",
"Sacred Heart",
"Saginaw",
"Saint Anthony",
"Saint Augusta",
"Saint Bonifacius",
"Saint Charles",
"Saint Clair",
"Saint Cloud",
"Saint Croix Falls",
"Saint Francis",
"Saint James",
"Saint Joseph",
"Saint Louis Park",
"Saint Martin",
"Saint Marys Point",
"Saint Michael",
"Saint Paul",
"Saint Paul Park",
"Saint Peter",
"Saint Rosa",
"Saint Stephen",
"Salo",
"Sanborn",
"Sandstone",
"Sargeant",
"Sarona",
"Sartell",
"Sauk Centre",
"Sauk Rapids",
"Savage",
"Scandia",
"Scanlon",
"Schroeder",
"Sebeka",
"Shafer",
"Shakopee",
"Shamrock",
"Sheldon",
"Shell Lake",
"Shell River",
"Sherburn",
"Shevlin",
"Shoreview",
"Shorewood",
"Shotley",
"Sibley",
"Side Lake",
"Silver Bay",
"Silver Lake",
"Siren",
"Skelton",
"Slater",
"Slayton",
"Sleepy Eye",
"Sobieski",
"Solon Springs",
"Solway",
"Somerset",
"Soudan",
"South Haven",
"South Range",
"South Saint Paul",
"Sparta",
"Spicer",
"Spirit Lake",
"Spooner",
"Spring Grove",
"Spring Hill",
"Spring Lake",
"Spring Lake Park",
"Spring Park",
"Spring Valley",
"Springbrook",
"Springfield",
"Squaw Lake",
"Stacy",
"Stanchfield",
"Stanley",
"Stanton",
"Staples",
"Star Prairie",
"Starbuck",
"Stewart",
"Stewartville",
"Stillwater",
"Stockholm",
"Stockton",
"Stokes",
"Stone Lake",
"Storden",
"Strum",
"Sturgeon Lake",
"Sugar Bush",
"Sunburg",
"Sunfish Lake",
"Sunrise",
"Superior",
"Swan River",
"Swanville",
"Swatara",
"Sylvan",
"Taconite",
"Talmoon",
"Tamarack",
"Taopi",
"Taunton",
"Taylors Falls",
"Ten Lake",
"Tenstrike",
"Theilman",
"Thorp",
"Thunder Lake",
"Todd",
"Tofte",
"Togo",
"Toivola",
"Tonka Bay",
"Tony",
"Tower",
"Tracy",
"Trade Lake",
"Trego",
"Trempealeau",
"Trimbelle",
"Trimont",
"Trosky",
"Troy",
"Truman",
"Turner",
"Turtle Lake",
"Turtle River",
"Two Harbors",
"Tyler",
"Underwood",
"Upsala",
"Utica",
"Vadnais Heights",
"Vasa",
"Vergas",
"Verndale",
"Vernon Center",
"Veseli",
"Vesta",
"Victoria",
"Virginia",
"Waasa",
"Wabasha",
"Wabasso",
"Wabedo",
"Waconia",
"Wadena",
"Wahkon",
"Waite Park",
"Walker",
"Walnut Grove",
"Wanamingo",
"Wanda",
"Warba",
"Warren",
"Wascott",
"Waseca",
"Washburn",
"Waskish",
"Waterford",
"Watertown",
"Waterville",
"Watkins",
"Watson",
"Waubun",
"Waukon",
"Waumandee",
"Waverly",
"Wayzata",
"Webb Lake",
"Webster",
"Welch",
"Welcome",
"Wells",
"Wendell",
"West Concord",
"West Lakeland",
"West Saint Paul",
"Westboro",
"Westbrook",
"Weyerhaeuser",
"Whalan",
"Wheaton",
"Wheeler",
"White",
"White Bear Lake",
"White Bear Township",
"Whitehall",
"Wilder",
"Wilkinson",
"Willard",
"Willernie",
"Williams",
"Willmar",
"Willow River",
"Wilmont",
"Wilmot",
"Wilson",
"Windom",
"Winona",
"Winsted",
"Winter",
"Winthrop",
"Wirt",
"Wood Lake",
"Woodbury",
"Woodland",
"Woodstock",
"Woodville",
"Worthington",
"Wrenshall",
"Wright",
"Wykoff",
"Wyoming",
"Young America",
"Zimmerman",
"Zumbro Falls",
"Zumbrota"
    ];
    $( "#mls-input24" ).autocomplete({
      source: locations
    });
  });

//location id and value mapping
locMap = {
213: "Adams",
293: "Adrian",
317: "Afton",
388: "Aitkin",
394: "Akeley",
440: "Alango",
445: "Alaska",
459: "Albany",
481: "Albert Lea",
489: "Albertville",
511: "Alborn",
537: "Alden",
580: "Alexandria",
760: "Alma",
768: "Almena",
946: "Altoona",
973: "Altura",
1075: "Amery",
1210: "Andover",
1251: "Angora",
1273: "Annandale",
1296: "Anoka",
1383: "Apple Valley",
1395: "Appleton",
1420: "Arago",
1464: "Arcadia",
1487: "Arco",
1504: "Arden Hills",
1576: "Arkansaw",
1598: "Arlington",
1637: "Armstrong",
1770: "Ashby",
1811: "Ashland",
1847: "Askov",
1983: "Atwater",
2039: "Audubon",
2059: "Augusta",
2086: "Aurora",
2110: "Austin",
2174: "Avoca",
2187: "Avon",
2252: "Babbitt",
2266: "Backus",
2297: "Bagley",
2381: "Balaton",
2410: "Baldwin",
2427: "Ball Bluff",
2458: "Balsam Lake",
2605: "Barnes",
2645: "Barnum",
2668: "Barrett",
2684: "Barron",
2685: "Barronett",
2844: "Battle Lake",
2854: "Baudette",
2871: "Baxter",
2886: "Bay City",
2920: "Bayfield",
2937: "Bayport",
3035: "Beach",
3103: "Beardsley",
3111: "Bearville North",
3153: "Beaver Bay",
3195: "Becida",
3197: "Becker",
3315: "Beldenville",
3338: "Belgrade",
3392: "Belle Plaine",
3462: "Bellingham",
3555: "Belview",
3562: "Bemidji",
3579: "Bena",
3596: "Benedict",
3620: "Bennett",
3645: "Benson",
3790: "Beroun",
3806: "Bertha",
3866: "Bethel",
3990: "Big Bend",
4008: "Big Falls",
4021: "Big Lake",
4065: "Big Stone City",
4077: "Bigelow",
4080: "Bigfork",
4139: "Bingham Lake",
4160: "Birchwood",
4163: "Bird Island",
4230: "Biwabik",
4244: "Black Brook",
4272: "Black River Falls",
4283: "Blackduck",
4336: "Blaine",
4349: "Blair",
4448: "Blomkest",
4455: "Bloomer",
4480: "Blooming Prairie",
4500: "Bloomington",
4549: "Blue Earth",
4600: "Blueberry",
4634: "Bluffton",
4793: "Bock",
5114: "Bovey",
5164: "Bowlus",
5194: "Boy Lake",
5195: "Boy River",
5198: "Boyceville",
5320: "Braham",
5327: "Brainerd",
5367: "Brandon",
5461: "Breezy Point",
5466: "Breitung",
5475: "Bremen",
5503: "Brevator",
5515: "Brewster",
5724: "Britt",
5820: "Brook Park",
5875: "Brooklyn",
5876: "Brooklyn Center",
5880: "Brooklyn Park",
5907: "Brookston",
5930: "Brooten",
5938: "Browerville",
5973: "Browns Valley",
5978: "Brownsdale",
5993: "Brownsville",
6002: "Brownton",
6020: "Bruce",
6048: "Bruno",
6058: "Brunswick",
6239: "Buffalo",
6253: "Buffalo City",
6262: "Buffalo Lake",
6282: "Buhl",
6461: "Burnsville",
6519: "Burtrum",
6599: "Buyck",
6632: "Byron",
6656: "Cable",
6691: "Cadott",
6746: "Caledonia",
6824: "Calumet",
6875: "Cambridge",
6922: "Cameron",
7060: "Canby",
7084: "Canisteo",
7101: "Cannon Falls",
7132: "Canton",
7320: "Carlos",
7336: "Carlton",
7520: "Carver",
7589: "Cass Lake",
7924: "Center City",
7990: "Centerville",
8067: "Centuria",
8088: "Ceylon",
8158: "Champlin",
8177: "Chanhassen",
8299: "Chaska",
8306: "Chatfield",
8550: "Chetek",
8667: "Chippewa Falls",
8674: "Chisago City",
8675: "Chisago Lake",
8677: "Chisholm",
8697: "Chokio",
8802: "Circle Pines",
8864: "Clam Falls",
8866: "Clam Lake",
8873: "Clara City",
8882: "Claremont",
8909: "Clarissa",
8912: "Clark",
8929: "Clarkfield",
8939: "Clarks Grove",
9061: "Clayton",
9087: "Clear Lake",
9089: "Clear Lake",
9118: "Clearwater",
9139: "Clements",
9172: "Cleveland",
9236: "Clifton",
9278: "Clinton",
9319: "Clontarf",
9321: "Cloquet",
9463: "Cobden",
9482: "Cochrane",
9533: "Cohasset",
9544: "Cokato",
9574: "Cold Spring",
9616: "Coleraine",
9641: "Colfax",
9754: "Cologne",
9835: "Columbia Heights",
9895: "Comfrey",
9934: "Comstock",
10034: "Conger",
10077: "Conover",
10084: "Conrath",
10126: "Cook",
10164: "Coon Rapids",
10262: "Corcoran",
10349: "Cornucopia",
10368: "Corona",
10432: "Cosmos",
10452: "Cottage Grove",
10470: "Cotton",
10491: "Cottonwood",
10510: "Couderay",
10553: "Courtland",
10717: "Crane Lake",
10908: "Cromwell",
10917: "Crooked Lake",
10927: "Crosby",
10964: "Crosslake",
11050: "Crystal",
11128: "Culver",
11145: "Cumberland",
11189: "Currie",
11215: "Cushing",
11220: "Cushing",
11268: "Cuyuna",
11337: "Dairyland",
11347: "Dakota",
11352: "Dalbo",
11385: "Dallas",
11398: "Dalton",
11444: "Danbury",
11456: "Danforth",
11478: "Danube",
11481: "Danvers",
11521: "Darfur",
11556: "Darwin",
11559: "Dassel",
11630: "Dawson",
11660: "Dayton",
11687: "De Graff",
11788: "Deephaven",
11795: "Deer Creek",
11818: "Deer Park",
11822: "Deer River",
11856: "Deerwood",
11906: "Delano",
11937: "Delhi",
11956: "Dellwood",
11996: "Delta",
12056: "Dennison",
12069: "Dent",
12176: "Detroit Lakes",
12229: "Dexter",
12336: "Dilworth",
12443: "Dodge",
12444: "Dodge Center",
12474: "Dolliver",
12656: "Dover",
12673: "Dovray",
12692: "Downing",
12743: "Dresbach",
12755: "Dresser",
12792: "Drummond",
12919: "Duluth",
12930: "Dumont",
12966: "Dundas",
13027: "Dunnell",
13063: "Durand",
13143: "Eagan",
13156: "Eagle Bend",
13169: "Eagle Lake",
13182: "Eagle Point",
13272: "East Bethel",
13365: "East Farmington",
13400: "East Gull Lake",
13700: "Easton",
13758: "Eau Claire",
13759: "Eau Galle",
13778: "Echo",
13841: "Eden Prairie",
13843: "Eden Valley",
13879: "Edgerton",
13911: "Edina",
13991: "Effie",
14041: "Eitzen",
14114: "Elba",
14132: "Elbow Lake",
14177: "Eleva",
14189: "Elgin",
14219: "Elizabeth",
14264: "Elk Mound",
14274: "Elk River",
14338: "Ellendale",
14415: "Ellsworth",
14420: "Ellsworth",
14479: "Elmore",
14495: "Elmwood",
14512: "Elrosa",
14560: "Ely",
14569: "Elysian",
14572: "Embarrass",
14587: "Emerald",
14610: "Emily",
14639: "Emmons",
14885: "Esko",
15032: "Ettrick",
15077: "Eureka",
15079: "Eureka Center",
15118: "Evansville",
15128: "Eveleth",
15189: "Excelsior",
15196: "Exeland",
15331: "Eyota",
15387: "Fairchild",
15403: "Fairfax",
15471: "Fairmont",
15554: "Falcon Heights",
15569: "Fall Creek",
15635: "Farden",
15641: "Faribault",
15694: "Farmington",
15738: "Farwell",
15761: "Fayal",
15805: "Federal Dam",
15869: "Fergus Falls",
15945: "Fifty Lakes",
15984: "Finland",
15985: "Finlayson",
16189: "Floodwood",
16213: "Florence",
16290: "Foley",
16336: "Forbes",
16407: "Forest Lake",
16431: "Foreston",
16630: "Fort Ripley",
16734: "Fountain",
16740: "Fountain City",
16807: "Foxboro",
16847: "Franconia",
16857: "Frankford",
16886: "Franklin",
16937: "Frazee",
16948: "Frederic",
16990: "Freeborn",
17033: "Freeport",
17104: "Fridley",
17163: "Frontenac",
17216: "Fulda",
17343: "Galesville",
17451: "Garden City",
17508: "Garfield",
17557: "Garrison",
17572: "Garvin",
17583: "Gary",
17650: "Gaylord",
17676: "Gem Lake",
17699: "Geneva",
17815: "Gheen",
17818: "Ghent",
17824: "Gibbon",
17875: "Gilbert",
18071: "Glen Flora",
18126: "Glencoe",
18216: "Glenville",
18233: "Glenwood",
18243: "Glenwood City",
18251: "Glidden",
18351: "Golden Valley",
18413: "Good Thunder",
18424: "Goodhue",
18430: "Goodland",
18450: "Goodview",
18489: "Gordon",
18586: "Graceville",
18636: "Granada",
18686: "Grand Marais",
18688: "Grand Meadow",
18698: "Grand Rapids",
18715: "Grand View",
18737: "Grandy",
18767: "Granite Falls",
18787: "Grant",
18801: "Grant Valley",
18805: "Granton",
18812: "Grantsburg",
18859: "Grasston",
19005: "Green Isle",
19099: "Greenfield",
19192: "Greenwald",
19222: "Greenwood",
19276: "Grey Cloud Island",
19277: "Grey Eagle",
19370: "Grove City",
19537: "Guthrie",
19606: "Hackensack",
19631: "Hadley",
19648: "Hager City",
19774: "Ham Lake",
19784: "Hamburg",
19864: "Hammond",
19895: "Hampton",
19926: "Hancock",
19985: "Hanover",
20138: "Harmony",
20189: "Harris",
20262: "Hart",
20288: "Hartland",
20396: "Hastings",
20422: "Hatfield",
20446: "Haugen",
20495: "Hawick",
20532: "Hawthorne",
20556: "Hayfield",
20583: "Hayward",
20586: "Hayward",
20608: "Hazel Run",
20706: "Hector",
20818: "Henderson",
20834: "Hendricks",
20853: "Henning",
20923: "Hermantown",
20953: "Heron Lake",
20975: "Hertel",
21030: "Hibbing",
21228: "Hill City",
21259: "Hillman",
21265: "Hills",
21310: "Hillsdale",
21351: "Hinckley",
21469: "Hoffman",
21485: "Hokah",
21504: "Holcombe",
21519: "Holdingford",
21539: "Holland",
21634: "Holmen",
21673: "Holyoke",
21844: "Hopkins",
21951: "Houlton",
21964: "Houston",
21980: "Hovland",
21991: "Howard Lake",
22036: "Hoyt Lakes",
22097: "Hudson",
22133: "Hugo",
22157: "Humbird",
22216: "Huntersville",
22327: "Hutchinson",
22427: "Ihlen",
22476: "Independence",
22484: "Independence",
22572: "Industrial",
22656: "International Falls",
22659: "Inver Grove Heights",
22729: "Iron",
22744: "Iron River",
22764: "Ironton",
22809: "Isabella",
22813: "Isanti",
22840: "Isle",
22887: "Ivanhoe",
22931: "Jackson",
22992: "Jacobson",
23061: "Janesville",
23172: "Jasper",
23203: "Jeffers",
23266: "Jenkins",
23524: "Jordan",
23633: "Kabetogama",
23688: "Kandiyohi",
23745: "Kasota",
23747: "Kasson",
23833: "Keewatin",
23836: "Kego",
23863: "Kelliher",
23868: "Kellogg",
23878: "Kelly Lake",
23891: "Kelsey",
24010: "Kensington",
24051: "Kenyon",
24069: "Kerkhoven",
24079: "Kerrick",
24109: "Kettle River",
24174: "Kiester",
24192: "Kilkenny",
24217: "Kimball",
24280: "Kinghurst",
24337: "Kingston",
24380: "Kinnickinnic",
24513: "Knapp",
24523: "Knife Lake",
24524: "Knife River",
24728: "La Crescent",
24807: "La Pointe",
24913: "Ladysmith",
24921: "Lafayette",
24930: "Lafayette",
25003: "Lake Benton",
25034: "Lake City",
25052: "Lake Crystal",
25063: "Lake Elmo",
25068: "Lake Emma",
25082: "Lake George",
25099: "Lake Holcombe",
25125: "Lake Lillian",
25161: "Lake Nebagamon",
25207: "Lake Shore",
25252: "Lake Wilson",
25263: "Lakefield",
25272: "Lakeland",
25345: "Lakeville",
25364: "Lakewood",
25398: "Lamberton",
25507: "Lanesboro",
25564: "Lansing",
25591: "Laporte",
25662: "Lastrup",
25696: "Lauderdale",
25849: "Le Center",
25861: "Le Roy",
25864: "Le Sueur",
25970: "Leech Lake",
26046: "Leiding",
26141: "Lent",
26213: "Lester Prairie",
26286: "Lewiston",
26317: "Lexington",
26337: "Libby",
26444: "Lilydale",
26588: "Lindstrom",
26618: "Lino Lakes",
26680: "Litchfield",
26712: "Little Canada",
26729: "Little Falls",
26746: "Little Marais",
26792: "Littlefork",
26979: "Logan",
27022: "Loman",
27112: "Long Lake",
27115: "Long Lake",
27126: "Long Prairie",
27164: "Longville",
27174: "Lonsdale",
27234: "Loretto",
27451: "Lowry",
27479: "Lublin",
27481: "Lucan",
27506: "Luck",
27617: "Lutsen",
27623: "Luverne",
27650: "Lyle",
27682: "Lynd",
27769: "Mabel",
27846: "Macville",
27880: "Madison",
27898: "Madison Lake",
27978: "Mahtomedi",
27983: "Maiden Rock",
28006: "Makinen",
28190: "Mankato",
28306: "Mantorville",
28341: "Maple Grove",
28352: "Maple Lake",
28356: "Maple Plain",
28378: "Mapleton",
28388: "Maplewood",
28412: "Marble",
28433: "Marcell",
28475: "Margie",
28497: "Marietta",
28514: "Marine",
28517: "Marine on Saint Croix",
28646: "Marshall",
28690: "Martell",
28816: "Mason",
28950: "Max",
28997: "Mayer",
29031: "Maynard",
29084: "Mazeppa",
29180: "Mc Grath",
29348: "McGregor",
29465: "Meadowlands",
29523: "Medford",
29537: "Medicine Lake",
29544: "Medina",
29627: "Melrose",
29666: "Menahga",
29688: "Mendota",
29691: "Mendota Heights",
29713: "Menomonie",
29725: "Mentor",
29799: "Merrifield",
29809: "Merrillan",
30134: "Milaca",
30144: "Milan",
30161: "Milbank",
30365: "Milltown",
30403: "Milroy",
30435: "Miltona",
30517: "Minneapolis",
30521: "Minneiska",
30525: "Minneota",
30526: "Minnesota City",
30527: "Minnesota Lake",
30528: "Minnetonka",
30529: "Minnetonka Beach",
30531: "Minnetrista",
30539: "Minong",
30761: "Mondovi",
30921: "Montevideo",
30944: "Montgomery",
30970: "Monticello",
31015: "Montrose",
31098: "Moorhead",
31106: "Moose Lake",
31117: "Mora",
31161: "Morgan",
31232: "Morris",
31260: "Morristown",
31294: "Morton",
31362: "Motley",
31377: "Mound",
31391: "Mounds View",
31673: "Mountain Iron",
31674: "Mountain Lake",
31827: "Murdock",
32038: "Nashwauk",
32195: "Neillsville",
32213: "Nelson",
32222: "Nelson",
32261: "Nerstrand",
32309: "Nevis",
32317: "New Albin",
32328: "New Auburn",
32329: "New Auburn",
32371: "New Brighton",
32453: "New Germany",
32479: "New Hartford",
32515: "New Hope",
32558: "New London",
32610: "New Munich",
32635: "New Prague",
32642: "New Richland",
32645: "New Richmond",
32707: "New Ulm",
32866: "Newport",
32981: "Nicollet",
33010: "Nimrod",
33042: "Nisswa",
33242: "North Branch",
33379: "North Hudson",
33429: "North Mankato",
33458: "North Oaks",
33513: "North Saint Paul",
33625: "Northern",
33634: "Northfield",
33657: "Northome",
33699: "Norton",
33754: "Norwood Young America",
33872: "Oak Grove",
33879: "Oak Grove",
33903: "Oak Park",
33906: "Oak Park Heights",
33933: "Oakdale",
34106: "Ocheyedan",
34193: "Ogilvie",
34229: "Ojibwa",
34422: "Olivia",
34491: "Onamia",
34747: "Orono",
34748: "Oronoco",
34754: "Orr",
34772: "Ortonville",
34781: "Osage",
34791: "Osakis",
34820: "Osceola",
34848: "Osseo",
34849: "Osseo",
34861: "Ostrander",
34889: "Otisco",
34903: "Otsego",
34925: "Ottertail",
34950: "Outing",
34997: "Owatonna",
35197: "Palisade",
35497: "Park Falls",
35510: "Park Rapids",
35544: "Parkers Prairie",
35666: "Partridge",
35853: "Paynesville",
35921: "Pease",
35996: "Pelican Rapids",
36009: "Pemberton",
36062: "Pengilly",
36092: "Pennington",
36097: "Pennock",
36150: "Pepin",
36159: "Pequot Lakes",
36175: "Perham",
36308: "Peterson",
36503: "Pierz",
36537: "Pillager",
36588: "Pine City",
36616: "Pine Island",
36645: "Pine River",
36787: "Pipestone",
36906: "Plainview",
36948: "Plato",
37048: "Pleasant Valley",
37091: "Plum City",
37125: "Plymouth",
37315: "Ponsford",
37325: "Ponto Lake",
37350: "Poplar",
37352: "Poplar",
37420: "Port Hope",
37476: "Port Wing",
37481: "Portage",
37499: "Porter",
37724: "Prairie Farm",
37792: "Prescott",
37812: "Preston",
37888: "Princeton",
37909: "Prinsburg",
37911: "Prior Lake",
38161: "Quamba",
38280: "Racine",
38301: "Radisson",
38390: "Ramsey",
38427: "Randall",
38445: "Randolph",
38473: "Ranier",
38564: "Ray",
38587: "Raymond",
38635: "Reads Landing",
38736: "Red Wing",
38807: "Redwood Falls",
38917: "Remer",
38962: "Renville",
39162: "Rice",
39166: "Rice Lake",
39167: "Rice River",
39210: "Richfield",
39259: "Richmond",
39291: "Richville",
39340: "Ridgeland",
39435: "Ringsted",
39523: "River Falls",
39668: "Robbinsdale",
39683: "Roberts",
39732: "Rochert",
39740: "Rochester",
39769: "Rock Creek",
39847: "Rockford",
39900: "Rockville",
39987: "Rogers",
40043: "Rollingstone",
40132: "Roscoe",
40149: "Rose Creek",
40223: "Rosemount",
40237: "Roseville",
40311: "Rothsay",
40333: "Round Lake",
40441: "Royalton",
40554: "Rush City",
40559: "Rushford",
40561: "Rushford Village",
40564: "Rushmore",
40585: "Russell",
40635: "Ruthton",
40653: "Rutledge",
40721: "Sacred Heart",
40755: "Saginaw",
40786: "Saint Anthony",
40789: "Saint Augusta",
40803: "Saint Bonifacius",
40814: "Saint Charles",
40820: "Saint Clair",
40830: "Saint Cloud",
40836: "Saint Croix Falls",
40854: "Saint Francis",
40895: "Saint James",
40924: "Saint Joseph",
40943: "Saint Louis Park",
40950: "Saint Martin",
40970: "Saint Marys Point",
40976: "Saint Michael",
40996: "Saint Paul",
41004: "Saint Paul Park",
41008: "Saint Peter",
41022: "Saint Stephen",
41131: "Salo",
41307: "Sanborn",
41379: "Sandstone",
41567: "Sargeant",
41576: "Sarona",
41578: "Sartell",
41611: "Sauk Centre",
41613: "Sauk Rapids",
41632: "Savage",
41703: "Scandia",
41708: "Scanlon",
41775: "Schroeder",
41989: "Sebeka",
42327: "Shafer",
42342: "Credit River Township",
42358: "Shamrock",
42551: "Sheldon",
42562: "Shell Lake",
42564: "Shell River",
42614: "Sherburn",
42684: "Shevlin",
42791: "Shoreview",
42793: "Shorewood",
42811: "Shotley",
42849: "Sibley",
42861: "Side Lake",
42932: "Silver Bay",
42970: "Silver Lake",
43084: "Siren",
43115: "Skelton",
43171: "Slater",
43188: "Slayton",
43190: "Sleepy Eye",
43443: "Solon Springs",
43448: "Solway",
43474: "Somerset",
43525: "Soudan",
43695: "South Haven",
43814: "South Range",
43832: "South Saint Paul",
44016: "Sparta",
44085: "Spicer",
44096: "Spirit Lake",
44116: "Spooner",
44172: "Spring Grove",
44193: "Spring Lake",
44199: "Spring Lake Park",
44205: "Spring Park",
44211: "Spring Valley",
44217: "Spring Valley",
44225: "Springbrook",
44257: "Springfield",
44333: "Squaw Lake",
44348: "Stacy",
44393: "Stanchfield",
44432: "Stanley",
44452: "Stanton",
44464: "Staples",
44480: "Star Prairie",
44483: "Starbuck",
44692: "Stewart",
44709: "Stewartville",
44727: "Stillwater",
44776: "Stockholm",
44790: "Stockton",
44804: "Stokes",
44818: "Stone Lake",
44889: "Storden",
45047: "Strum",
45074: "Sturgeon Lake",
45117: "Sugar Bush",
45314: "Sunburg",
45331: "Sunfish Lake",
45374: "Sunrise",
45414: "Superior",
45502: "Swan River",
45523: "Swanville",
45533: "Swatara",
45631: "Sylvan",
45702: "Taconite",
45780: "Talmoon",
45794: "Tamarack",
45839: "Taopi",
45894: "Taunton",
45927: "Taylors Falls",
46023: "Ten Lake",
46054: "Tenstrike",
46179: "Theilman",
46343: "Thunder Lake",
46542: "Todd",
46550: "Tofte",
46552: "Togo",
46558: "Toivola",
46637: "Tonka Bay",
46644: "Tony",
46731: "Tower",
46777: "Tracy",
46787: "Trade Lake",
46838: "Trego",
46850: "Trempealeau",
46909: "Trimbelle",
46915: "Trimont",
46957: "Trosky",
47010: "Troy",
47027: "Truman",
47152: "Turner",
47175: "Turtle Lake",
47177: "Turtle Lake",
47178: "Turtle River",
47273: "Two Harbors",
47287: "Tyler",
47382: "Underwood",
47629: "Upsala",
48537: "Utica",
48567: "Vadnais Heights",
48818: "Vasa",
48916: "Vergas",
48938: "Verndale",
48961: "Vernon Center",
48995: "Veseli",
48999: "Vesta",
49047: "Victoria",
49407: "Virginia",
49503: "Waasa",
49511: "Wabasha",
49513: "Wabasso",
49515: "Wabedo",
49530: "Waconia",
49541: "Wadena",
49575: "Wahkon",
49594: "Waite Park",
49690: "Walker",
49785: "Walnut Grove",
49859: "Wanamingo",
49864: "Wanda",
49896: "Warba",
49985: "Warren",
50041: "Wascott",
50042: "Waseca",
50050: "Washburn",
50112: "Waskish",
50146: "Waterford",
50184: "Watertown",
50187: "Watertown",
50194: "Waterville",
50211: "Watkins",
50226: "Watson",
50250: "Waubun",
50263: "Waukon",
50265: "Waumandee",
50300: "Waverly",
50374: "Wayzata",
50401: "Webb Lake",
50417: "Webster",
50426: "Webster",
50491: "Welch",
50498: "Welcome",
50547: "Wells",
50592: "Wendell",
50765: "West Concord",
50912: "West Lakeland",
51068: "West Saint Paul",
51168: "Westboro",
51172: "Westbrook",
51389: "Weyerhaeuser",
51394: "Whalan",
51429: "Wheaton",
51441: "Wheeler",
51482: "White",
51487: "White Bear Lake",
51488: "White Bear Township",
51609: "Whitehall",
51795: "Wilder",
51841: "Wilkinson",
51860: "Willard",
51864: "Willernie",
51877: "Williams",
51966: "Willmar",
52000: "Willow River",
52043: "Wilmont",
52050: "Wilmot",
52067: "Wilson",
52074: "Wilson",
52165: "Windom",
52271: "Winona",
52291: "Winsted",
52302: "Winter",
52328: "Winthrop",
52339: "Wirt",
52457: "Wood Lake",
52498: "Woodbury",
52536: "Woodland",
52615: "Woodstock",
52640: "Woodville",
52703: "Worthington",
52720: "Wrenshall",
52726: "Wright",
52780: "Wykoff",
52804: "Wyoming",
52982: "Young America",
53084: "Zimmerman",
53115: "Zumbro Falls",
53116: "Zumbrota",
54943: "Nowthen",
55410: "Columbus",
56041: "Elko New Market",
56229: "Meire Grove",
56463: "Spring Hill",
57193: "Lake Saint Croix Beach",
57342: "Saint Rosa",
59900: "Lakeland Shores",
59938: "Sobieski",
60431: "Biscay",
61701: "North Redwood",
61982: "Shakopee",
"": "Any"
};

	//handle search form
	function submitSearchForm() {
		locationValue = document.getElementById('mls-input24').value;
		type = document.getElementById('mls-input25').value;
		sortBy = document.getElementById('mls-input26').value;
		bedrooms = document.getElementById('mls-input27').value;
		baths = document.getElementById('mls-input28').value;
		minPrice = document.getElementById('mls-input29').value;
		maxPrice = document.getElementById('mls-input30').value;
		//map location value to location id
		locationId = Object.keys(locMap)[Object.values(locMap).indexOf(locationValue)];

		//url = "https://smartphone.forsalebyweb.com/idx/results/listings?";
        url = "";

		firstParam = true;
		//check if location selected
		if(locationValue != "") {
			url += "ccz=city&city[]=" + locationId;
			firstParam = false;
		}
		//type
		if(type != "") {
			if(firstParam) {
				url += "pt=" + type;
				firstParam = false;
			}
			else {
				url += "&pt=" + type;
			}
		}
		//sortBy
		if(sortBy != "") {
			if(firstParam) {
				url += "srt=" + sortBy;
				firstParam = false;
			}
			else {
				url += "&srt=" + sortBy;
			}
		}
		//bedrooms
		if(bedrooms != "") {
			if(firstParam) {
				url += "bd=" + bedrooms;
				firstParam = false;
			}
			else {
				url += "&bd=" + bedrooms;
			}
		}
		//baths
		if(baths != "") {
			if(firstParam) {
				url += "tb=" + baths;
				firstParam = false;
			}
			else {
				url += "&tb=" + baths;
			}
		}
		//minPrice
		if(minPrice != "") {
			if(firstParam) {
				url += "lp=" + minPrice;
				firstParam = false;
			}
			else {
				url += "&lp=" + minPrice;
			}
		}
		//maxPrice
		if(maxPrice != "") {
			if(firstParam) {
				url += "hp=" + maxPrice;
				firstParam = false;
			}
			else {
				url += "&hp=" + maxPrice;
			}
		}
		window.location = '/search?data=' + encodeURIComponent(url);
	}
  </script>
  </body>
</html>
