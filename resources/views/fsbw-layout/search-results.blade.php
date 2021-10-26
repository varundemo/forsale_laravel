@include('fsbw-layout.common.header')

<style type="text/css">
	@media print { .img-fluid{ width: 100%; height: 400px; }
        .imglogo{  width:40px; height: 40px; }
    }

    .tooltip {
      position: relative;
      display: inline-block;
      border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }

</style>
<!-----banner--->
<div class="banner_result">
    <div class="container d-print-none">
        <div class="pera_t">
            <div id="any" class="row">
                <a style="background-color: #523535; color: #fff" id="gray" href="">Listings Found</a>
                <a id="gray" href="{{ URL::to('/save-search') }}">Save Search</a>


                <a id="gray" href="{{ URL::to('/') }}">New Search</a>


                <!-- <a id="gray" class="tooltip" href="modify.html">Modify Search</a> -->





            </div>

        </div>
    </div>
      <div class="tooltip">Hover over me
                  <span class="tooltiptext">Tooltip text</span>
                </div>
    <br>
    <div  class="container d-print-none">
        <div class="mapers">
            <iframe width="100%" height="408" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=745&amp;height=408&amp;hl=en&amp;q=%20usa%20chicago+()&amp;t=k&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/'>google widgets</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=2b52f42b006a42eb0ad9df0e98e02ae67509bd5d'></script>
             <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2711.873993129031!2d-94.614473!3d43.465228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDEwJzQ3LjYiTiA5NcKwNDgnNDYuMSJX!5e0!3m2!1sen!2sin!4v1613043167346!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
             <!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.000546197201!2d-95.81499404859971!3d47.17990362524669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDEwJzQ3LjYiTiA5NcKwNDgnNDYuMSJX!5e1!3m2!1sen!2sin!4v1613043634823!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            <!--  <a href='http://maps-generator.com/'>google widgets</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=2b52f42b006a42eb0ad9df0e98e02ae67509bd5d'></script> -->
        </div>
    </div>
</div>

@foreach($listings as $listing)
 
    <hr style="background-color: orangered; width: 100px">
    <div class="turbo">
        <div class="container">
            <div class="row">
                <div class="col-md">
                 
                    <br>
                

                    @if(isset($listing['description']))
                    <p style="text-align: justify">{{ $listing['description'] }}
                    @endif
                    </p>
                       @if(isset($listing['images']))
                    <img  src="{{  $listing['images'][0]   }}"  class="img-fluid" alt="onepic" style="">
                    @else
                        <div class="text-center">
                           <h2>No Image Available</h2>
                        </div>
                    @endif

                </div>
                <div style="" id="rated" class="col-md">

                    <br>
                    <div class="container">
                        <div class="property_tax">
                            <!-- <h4 style="font-family: 'Open Sans', sans-serif;">LISTING COURTESY OF: {{ $listing['listingOffice']['name'] }}</h4> -->
                            <h4 style="font-family: 'Open Sans', sans-serif;">LISTING COURTESY OF: {{ $listing['listingOffice']['name'] }}</h4>
                      





                            <hr style="width: 60px;background-color: orangered">
                            <div style="border-left:  1px solid gray;border-right:  1px solid gray;border-bottom:  1px solid gray;padding-bottom: 30px;" class="container">
                                <div class="row">
                                    <div  class="col-md">
                                        <!-- <p>Listing ID: {{ $listing['id'] }}</p> -->
                                        <p>Listing ID: {{ $listing['id'] }}</p>
                                        <!-- <p>Price: ${{ $listing['listPrice'] }} </p> -->
                                        <!-- <p>Price: ${{ $listing['listPrice'] }} </p> -->
                                        <div>
                                        <!-- <p>Enter Sales Price:</p> -->
                                        <label>Sales Price</label><input type="text" class="mb-2 realprice form-control"  name="realprice" value="${{ $listing['listPrice'] }}"  style="font-weight:bold;">
                                        <label>Cashback Amount(3%)</label><input type="text" class="mb-2 cashbackamt form-control" name="cashbackamt" readonly value="$<?php     
                                        $newprice =  $listing['listPrice'];
                                        $getprice =  substr($newprice, 0, -2);
                                        echo (3*$getprice);  ?>" style="font-weight:bold;">
                                        <input type="button" class="btn btn-primary cashbtn d-print-none" name="cashbtn" value="Calculate Cashback">
                                        </div>
                                        <!-- <b>Cashback Amount: $ -->
                                        <?php  
                                        // $newprice =  $listing['listPrice'];
                                        // $getprice =  substr($newprice, 0, -2);
                                        // echo (3*$getprice);
                                        // echo number_format($newprice/100, 2, '.', '');
                                         ?> 
                                        <!-- </b> -->
                                        <!-- <p>Built: {{ isset($listing['yearBuilt']) ? $listing['yearBuilt'] : '' }}</p> -->
                                        <!-- <p>Built: {{ isset($listing['yearBuilt']) ? $listing['yearBuilt'] : '' }}</p> -->
                                        <p><?php 
                                        // foreach($listing['features'] as $listnew){
                                        //     echo $listnew;
                                        // }
                                        if(isset($listing['features']['House'])){
                                        print_r($listing['features']['House'][1]);
                                        }
                                         ?></p>
                                        <!-- <p>Status: {{ isset($listing['status']) ? $listing['status'] : '' }}</p> -->
                                        <p>Status: {{ isset($listing['status']) ? $listing['status'] : '' }}</p>
                                        <p>Bedrooms: {{ isset($listing['beds']) ? $listing['beds'] : '' }}</p>
                                        <p>Stories/Levels:</p>
                                      

                                    </div>
                                    <div class="col-md ">

                                        <!-- <p>Acres: {{ isset($listing['lotSize']['acres']) ? $listing['lotSize']['acres'] : '' }}</p> -->
                                        <p>Acres: {{ isset($listing['lotSize']['acres']) ? $listing['lotSize']['acres'] : '' }}</p>
                                        <!-- <p>Full Baths: {{ isset($listing['baths']['full']) ? $listing['baths']['full'] : '' }}</p> -->
                                        <p>Full Baths: {{ isset($listing['baths']['full']) ? $listing['baths']['full'] : '' }}</p>
                                        <!-- <p>Partial Baths: {{ isset($listing['baths']['half']) ? $listing['baths']['half'] : '' }}</p> -->
                                        <p>Partial Baths: {{ isset($listing['baths']['half']) ? $listing['baths']['half'] : '' }}</p>
                                        @if(isset($listing['features']['Garage']))
                                        <p>Garage {{ $listing['features']['Garage'][0] }}</p>
                                        @else
                                        <p>Garage Stalls:</p>
                                        @endif

                                        <p>Construction Status:</p>
                                        <p>Zoning:</p>
                                          <p> {{ isset($listing['features']['Location'][0]) ? $listing['features']['Location'][0] : '' }}</p>
                                        <p> {{ isset($listing['features']['Location'][1]) ? $listing['features']['Location'][1] : '' }}</p>
                                          <p>School: {{ isset($listing['schools']['district']) ? $listing['schools']['district'] : '' }}</p>
                                        <img src="{{ URL::to('img/extra_logo.gif') }}" class="img-fluid imglogo" alt="">

                                    </div>


                                </div>

                                <div id="harim" class="row d-print-none">
                                    @if(isset($listing['images']))
                                    <form method="get" action="{{ URL::to('/photo-gal') }}" >
                                    <input type="hidden" name="photogal" value="{{ $listing['id'] }}">
                                    <input type="submit"  title="Hello World!" style=" background-color: #222; padding: 10px 15px; color: #ffff; margin: auto;" value="Photo Gallary">
                                    </form>
                                    @endif

<?php  
                if(in_array($listing['id'] , $savelists)){
?>    
                    <a href="#" class="prop-two" data-id="{{ $listing['id'] }}">Property Saved</a>
<?php 
                }
                else{
?>   
                <a href="#" class="prop" data-id="{{ $listing['id'] }}"> Save Property</a>
 <?php 
                }
?>
                                    <a id="gray" href="">Virtual Tour</a>
                                    <!-- <a href="{{ URL::to('/sans-serif') }}"> View Details</a> -->
                                    <form method="get" action="{{ URL::to('/view-detail') }}">
                                    <input type="hidden" name="viewdetail" value="{{ $listing['id'] }}">
                                    <input type="submit" style=" background-color: #222; padding: 10px 15px; color: #ffff; margin: auto;" value="View Detail">
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!---description--->
    <br>
  
@endforeach

<div class="container">



    <div style="text-align: center" class="row">
        <div class="col-md d-print-none">
            @if($id == 1)
                <div class="no-data"></div>
                @else
                <form method="post" action="{{ URL::to('/next-page')  }}">
                {{ csrf_field() }}
                <input type="hidden" name="prevp" value="{{ $id }}">
                 <button style="border: 1px solid gray; color: #1f7adc; background-color: #c1212100; width: 40%;"><i style="" class="fas fa-arrow-left"></i></button>
            
            <!-- <a style="border: 1px solid gray" href=""> <i style="width: 40%" class="fas fa-arrow-left"></i></a> -->
                </form>
            @endif
            
            {{ $id }}/{{ $totalpage }}
              @if($id == $totalpage)
               <div class="no-data"></div>
               @else
          
                <form method="post" action="{{ URL::to('/next-page') }}" class="d-print-none">
                {{ csrf_field() }}
                <input type="hidden" name="nextp" value="{{ $id }}">
                <button style="border: 1px solid gray; color: #1f7adc; background-color: #c1212100; width: 40%;">
                    <i class="fas fa-arrow-right"></i>
                </button>
                </form>
            @endif

            <div  class="text-center mt-2 d-print-none">
						<input type="submit" class="text-center btn btn-danger"  id="prin" value="Print" onClick="window.print()" style="text-align: center;">	
			</div>

            
                


        </div>

    </div>
</div>
<br>
<div class=" container descripter d-print-none">
    <img src="img/extra_logo.gif" class="img-fluid" alt="">
    <p>© 2020 Regional Multiple Listing Service of Minnesota, Inc. All rights Reserved. The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of the Regional Multiple Listing Service of Minnesota, Inc. Real estate listings held by brokerage firms other than Forsalebyweb.com are marked with the Broker Reciprocity logo. The property information being provided is for consumers' personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumers may be interested in purchasing. Any use of search facilities of data on this site, other than by a consumer looking to purchase real estate, is prohibited. No part of this search utility may be reproduced, adapted, translated, stored in a retrieval system or transmitted in any form or by any means, electronic, mechanical, photocopying, recording, or otherwise. Forsalebyweb.com is not a Multiple Listing Service (MLS), nor does it offer MLS access. This website is a service of Forsalebyweb.com, a broker Participant of the Regional Multiple Listing Service of Minnesota, Inc. Information, including that related to open houses, deemed reliable, but not guaranteed. Data last updated: Monday, May 25th, 2020 at 01:33:01 PM.</p>
    <br>
    <p class="text-center">Data services provided by IDX Broker Page</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

        $(".cashbtn").click(function(){
            var realprice = $(this).siblings()[1];
            var realprice2 = $(this).siblings()[3];
            // var val = realprice.val();
            // console.log(val);
            // str = str.substring(1);
            var calval = realprice.value.substring(1);
            var newval = (calval/100);
            var cashval = (newval*3);
            // console.log(cashval);
            // console.log(realprice2);
            realprice2.value = "$"+cashval;
            // realprice2.readOnly = true;
        })
    })
</script>


@include('fsbw-layout.common.footer')
