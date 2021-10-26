@include('fsbw-layout.common.header')

		<div class="container">

			 <div class="pera_t d-print-none">
            <div id="any" class="row">
                <a style="background-color: #523535; color: #fff" id="gray" href="{{ URL::to('/list-page') }}">Listings Found</a>
                <a id="gray" href="{{ URL::to('/save-search') }}">Save Search</a>


                <a id="gray" href="{{ URL::to('/') }}">New Search</a>


                <a id="gray" href="modify.html">Modify Search</a>
	            </div>
	        </div>

			<div class="mb-5" style="margin-top: 100px;">
				<div class="pb-5 pt-2 px-3" style="background-color: #a094713d; border: 2px solid #bfb9b9; border-radius: 5px;   box-shadow: 10px 10px 5px grey;">
				<h1 class="ml-2" style="display: inline;">{{ isset($detail['address']['deliveryLine'])? $detail['address']['deliveryLine']: '' }}</h1>
				<span class="ml-2 mb-2 btn btn-primary" style="background-color: #9a624d; border-color: #9a624d;">{{ $detail['address']['city'] }}</span>
				<button id="areamap" name="map" class="btn btn-warning mb-2" data-name="{{ $detail['coordinates']['longitude'] }}" data-lat="{{ $detail['coordinates']['latitude'] }}">Map</button>

				<script type="text/javascript">
					

				</script>

				<div class="row" id="detid">
					<div class="col-sm-6">
					
						@if(isset($detail['images']))
							<div class="carousel"
								  data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
							@foreach($detail['images'] as $images)
								<img src="{{ $images }}" />
							@endforeach
						@endif
							  
						</div>

					</div>
					<div class="col-sm-3">
						<div class="mb-2 text-center">
						<p  class="btn btn-primary text-center">{{ $detail['status']}}</p>
						</div>
						<p class="mb-2" >Listed:<?php 
							$year = date('Y', $detail['listingDate']);
							$month = date('m', $detail['listingDate']);
							$dayd = date('d', $detail['listingDate']);
							// echo $dayd;
							// echo "list month".$month."<br>";
							$cyear = date('Y');
							$cmonth = date('m');
							$cday = date('d');
							// echo $cday;
							// echo "current month".$cmonth."<br>";
							$rmonth = (12-$month);
							$nmonth = ($rmonth + $cmonth);
							$nyear = ($cyear-$year);
							if($nyear > 0){
								echo $nyear." years ago.";
							}
							else if(($nyear == 0) || ($nmonth == 0)){
								echo ($cday - $dayd)." days ago";
							}
							else{
								echo $nmonth." months ago.";
							}
							
						 ?> </p>
						<h3>$ {{ $detail['listPrice'] }}</h3>
						 <h2>Cashback:<br> $ <?php  
                                        $newprice =  $detail['listPrice'];
                                        $getprice =  substr($newprice, 0, -2);
                                        echo (3*$getprice);
                                        // echo number_format($newprice/100, 2, '.', '');
                                         ?> </h2>
						<p>{{ $detail['id'] }}</p>
						<p>{{ isset($detail['address']['deliveryLine'])? $detail['address']['deliveryLine']: '' }}</p>
						<p>{{ $detail['address']['city'] }}, {{ $detail['address']['state'] }}, {{ $detail['address']['zip'] }}</p>
						<p>{{ $detail['listingType'] }}</p>
						<p>{{ isset($detail['yearBuilt'])? $detail['yearBuilt'] : '' }}</p>
						<p>
							<?php 
							if(!isset($detail['address']['deliveryLine'])){
								$detail['address']['deliveryLine'] = "";
							}
							$alldetail = ($detail['address']['deliveryLine'].",".$detail['address']['city'].",".$detail['address']['state']);
							?>	
						</p>

					</div>

					<div class="col-sm-3" style="padding-top: 40px;">
						<?php  
							if(in_array($detail['id'] , $savelists)){
							?>    
							    <a href="#" class="prop-two btn btn-dark" data-id="{{ $detail['id'] }}">Property Saved </a>
							<?php 
							}
							else{
							 ?>   
							                     <a href="#" class="prop btn btn-success" data-id="{{ $detail['id'] }}"> Save Property </a>
							<?php 
							}
						?>

						@if(isset($detail['features']['House']))
							@foreach($detail['features']['House'] as $house)
								<p>{{ $house }}</p>
							@endforeach
						@endif

						@if(isset($detail['listingAgent']['phone']))
						<div>
							<span>Agent</span>
							<a href="{{ $detail['listingAgent']['phone'] }}"><i class="fa fa-phone fa-pad-right fa-lg"></i>{{ $detail['listingAgent']['phone'] }}</a>
						</div>
						@endif
					</div>
					</div>

					<!-- Map start	 -->
					
					        <div class="mapers mapshow" id="mapid">
		
							<div id="map" style="width:100%; height: 500px;">

							</div>
					         <!--    <iframe width="100%" height="408" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=745&amp;height=408&amp;hl=en&amp;q=%20usa%20 {{ $alldetail }} +()&amp;t=k&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>  -->

					         <!--      <iframe width="100%" height="408" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=745&amp;height=408&amp;hl=en&amp;q=%20usa%20 {{ $detail['coordinates']['longitude'] }},{{ $detail['coordinates']['latitude'] }} +()&amp;t=k&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>  -->

					          <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.000546197201!2d {{ $detail['coordinates']['longitude'] }} !3d {{ $detail['coordinates']['latitude'] }} !2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDEwJzQ3LjYiTiA5NcKwNDgnNDYuMSJX!5e1!3m2!1sen!2sin!4v1613043634823!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
					          
					          <!--   <a href='http://maps-generator.com/'>google widgets</a>
					            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=2b52f42b006a42eb0ad9df0e98e02ae67509bd5d'></script> -->
					     <!--        https://www.google.com/maps/place/2005+Martini+Dr,+Sauk+Rapids,+MN+56379/@
					            45.613031,-94.170725 
					             ,25342m/data=!3m1!1e3!4m5!3m4!1s0x52b45df658e03179:0xfe5d6b837a6adb17!8m2!3d45.613031!4d-94.170725?hl=en -->
					        </div>
					  
			

					<!-- Map End -->
				</div>

					<div class="row mt-5" style="border: 2px solid #bfb9b9; border-radius: 5px;">
						<div class="col-sm-12"  style="border-bottom: 1px solid #bfb9b9;">
							<div class="mt-2">
								<h3>Description:</h3>
								<p>{{ isset($detail['description'])? $detail['description']:'' }}</p>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<p>List Price: ${{ $detail['listPrice'] }}</p>
									<p>Property Type: {{ isset($detail['propertyType'])? $detail['propertyType']: '' }}</p>
									<p>County: {{ $detail['county'] }}</p>
								</div>
								<div class="col-sm-4">
									<p>Listing Status: {{ $detail['status'] }}</p>
									<p>Year Built: {{ isset($detail['yearBuilt'])? $detail['yearBuilt']: '' }}</p>
									<p>State: {{ $detail['address']['state'] }}</p>
								</div>
								<div class="col-sm-4">
									<p>City: {{ $detail['address']['city'] }}</p>
									<p>Zip Code: {{ $detail['address']['zip'] }}</p>
								</div>
							</div>
						
						</div>

						<div class="col-sm-12 mt-3" style="border-bottom: 1px solid #bfb9b9;">
							<div>
								<h3>Interior:</h3>
								<div class="row">
									<div class="col-sm-4">
										<p>Bedrooms: {{ isset($detail['beds']) ? $detail['beds'] : ''  }}</p>
									</div>
									<div class="col-sm-4">
										<p>Bathrooms: {{ isset($detail['baths']['total']) ? $detail['baths']['total'] : '' }}</p>
									</div>
									<div class="col-sm-4">
										<p>Floors: {{ isset($detail['floors']) ? $detail['floors']: '' }}</p>
									</div>
									<div class="col-sm-4">
										<p>{{ isset($detail['features']['Basement'][0])?(str_replace("Description", "Basement Details", $detail['features']['Basement'][0])):''  }}</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 mt-3" style="border-bottom: 1px solid #bfb9b9;">
							<div>
								<h3>Schools:</h3>
								<div class="row">
								@foreach($detail['features']['Schools'] as $School)
									<div class="col-sm-4">
										<p>{{ $School }}</p>
									</div>
								@endforeach
								</div>
							</div>
						</div>

						<div class="col-sm-12 mt-3" style="border-bottom: 1px solid #bfb9b9;">
							<div>
								<h3>Appliances and Equipment: </h3>
								<div class="row">
						@if(isset($detail['features']['Appliances and Equipment']))
								@foreach($detail['features']['Appliances and Equipment'] as $Appliances)
									<div class="col-sm-4">
										<p>{{ $Appliances }}</p>
									</div>
								@endforeach
						@endif
									<div class="col-sm-4">
										<p>{{ isset($detail['features']['Roof'][0])?(str_replace("Description", "Roof", $detail['features']['Roof'][0])):''  }}</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 mt-3" style="border-bottom: 1px solid #bfb9b9;">
							<div>
								<h3>Exterior: </h3>
								<div class="row">

									<div class="col-sm-4">
										<p>Garage {{ isset($detail['features']['Garage'][0])? $detail['features']['Garage'][0]: '' }}</p>
									</div>
									<div class="col-sm-4">
										<p> {{ isset($detail['features']['House'][0])? $detail['features']['House'][0]: '' }}</p>
									</div>
									<div class="col-sm-4">
										<p> {{ isset($detail['features']['Heating'][0])? $detail['features']['Heating'][0]: '' }}</p>
									</div>

								
									<div class="col-sm-4">
										<p> {{ isset($detail['features']['Parking'][0])?  $detail['features']['Parking'][0]: ''}}</p>
									</div>

									<div class="col-sm-4">
										<p> {{ isset($detail['features']['Cooling'])? $detail['features']['Cooling'][0]: ''}}</p>
									</div>
								</div>
							</div>
						</div>

								<div class="col-sm-12 mt-3" style="border-bottom: 1px solid #bfb9b9;">
							<div>
								<h3>Rooms:</h3>
								<div class="row">
									<div class="col-sm-4">
										<p>{{ isset($detail['features']['Bedrooms']) ? $detail['features']['Bedrooms'][0] : ''  }}</p>
									</div>

									@if(isset($detail['features']['Dining Room'])) 
									<div class="col-sm-4">
										<p>Dining Room:</p>
										@foreach($detail['features']['Dining Room'] as $dinning)
										<p>{{ $dinning }}</p>
										@endforeach
									</div>
									@endif

									@if(isset($detail['features']['Bedrooms'])) 
									<div class="col-sm-4">
										<p>Bedrooms Dimensions:</p>

										@if(isset($detail['features']['First Bedroom'])) 
										@foreach($detail['features']['First Bedroom'] as $firstdes)
										<p>{{ (str_replace("Dimensions", "First Bedroom Dimensions", $firstdes)) }}</p>
										@endforeach
										@endif

										@if(isset($detail['features']['Second Bedroom'])) 
										@foreach($detail['features']['Second Bedroom'] as $seconddes)
										<p>{{ (str_replace("Dimensions", "Second Bedroom Dimensions", $seconddes)) }}</p>
										@endforeach
										@endif

										@if(isset($detail['features']['Third Bedroom'])) 
										@foreach($detail['features']['Third Bedroom'] as $thirddes)
										<p>{{ (str_replace("Dimensions", "Third Bedroom Dimensions", $thirddes)) }}</p>
										@endforeach
										@endif

										@if(isset($detail['features']['Fourth Bedroom'])) 
										@foreach($detail['features']['Fourth Bedroom'] as $fourdes)
										<p>{{ (str_replace("Dimensions", "Fourth Bedroom Dimensions", $fourdes)) }}</p>
										@endforeach
										@endif
									</div>
									@endif

									<div class="col-sm-4">
										<p>Floors: {{ isset($detail['floors']) ? $detail['floors']: '' }}</p>
									</div>
									<div class="col-sm-4">
										<p>{{ isset($detail['features']['Basement'][0])?(str_replace("Description", "Basement Details", $detail['features']['Basement'][0])):''  }}</p>
									</div>
								</div>
							</div>
						</div>


						<div class="col-sm-12 mt-3">
							<div>
								<h3>Miscellaneous:</h3>
								<div class="row">
								@foreach($detail['features']['Utilities'] as $Utilities)
									<div class="col-sm-4">
										<p>{{ $Utilities }}</p>
									</div>
								@endforeach

								@if(isset($detail['features']['Sewer']))
									@foreach($detail['features']['Sewer'] as $Sewer)
										<div class="col-sm-4">
											<p>{{ $Sewer }}</p>
										</div>
									@endforeach
								@endif	
								</div>
							</div>
						</div>

						<!-- <form class="d-print-none"> -->
							
						<!-- </form> -->

					</div>

					<div  class="text-center mt-2 d-print-none">
						<input type="submit" class="text-center btn btn-danger"  id="prin" value="Print" onClick="window.print()" style="text-align: center;">	
					</div>
					
			</div>
		</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCeF7dk_b659RAzzLGv6OGwkmIdZMq2IT4&sensor=false"></script>

<script>
    $(document).ready(function(){
        $(".prop").click(function(e){
            e.preventDefault();
            var tex = $(this);
            var dataval = $(this).attr("data-id");
            console.log(dataval);
            data = {
                dataval: dataval,
                 _token: '{{csrf_token()}}'
            }
            $.post("{{ URL::to('/save-prop') }}",data, function(res){
                console.log(res);
                if(res == "data saved"){
                    tex.text("Property Saved");
                }else{
                    window.location.replace("{{ URL::to('/login') }}");
                }
            })
        })

        $("#areamap").click(function(){
        	
        	console.log(lat);
        	var mapclass = $("#mapid").toggleClass("mapshow");
        	var detclass = $("#detid").toggleClass("detshow");
        		var butval = $("#areamap").text();
        	if(butval == "Map"){
        		var butval = $("#areamap").text("Detail");
        	}
        	else{
        		var butval = $("#areamap").text("Map");
        	}
        	// var mapclass = "mapper hidemap";
        	// console.log(mapclass);
        	// console.log(detclass);
        })
    })


    var myMap;
      var logn = document.getElementById("areamap");
      var long = logn.dataset.name;
  		var lat = logn.dataset.lat;
    
    var myLatlng = new google.maps.LatLng(lat,long);
    function initialize() {
        var mapOptions = {
            zoom: 18,
            center: myLatlng,
            // mapTypeId: google.maps.MapTypeId.ROADMAP  ,
            mapTypeId: 'satellite'  ,
            scrollwheel: false
        }
        	// var logn = $("#areamap").attr("data-name");
        	
        	
        // var lat = $("#areamap").attr("data-lat");
        myMap = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: myMap,
            title: 'Name Of Business',
            icon: 'http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);


</script>


@include('fsbw-layout.common.footer')