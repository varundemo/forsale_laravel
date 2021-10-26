
@include('fsbw-layout.common.header')

<!-----banner--->
<div class="banner_result">
    <div class="container">
        <div class="pera_t">
            <div id="any" class="row">
                
                <!-- <form action="{{ URL::to('/list-page') }}" method="post"> -->
                <a  id="graylist" href="{{ URL::to('/list-page') }}">Listings Found</a>
                <!-- </form> -->

                <a style="background-color: #523535; color: #fff" id="gray" href="{{ URL::to('/save-search') }}">Save Search</a>


                <a id="gray" href="listing.html">New Search</a>


                <a id="gray" href="modify.html">Modify Search</a>




            </div>
        </div>
    </div>
    <br>
    <div  class="container">
        <div class="mapers">
            <iframe width="100%" height="408" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=745&amp;height=408&amp;hl=en&amp;q=%20usa%20chicago+()&amp;t=k&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/'>google widgets</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=2b52f42b006a42eb0ad9df0e98e02ae67509bd5d'></script>
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
                    <img  src="{{  $listing['images'][0]   }}"  class="img-fluid" alt="onepic">
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
                                        <p>Price: ${{ $listing['listPrice'] }} </p>
                                        <!-- <p>Built: {{ isset($listing['yearBuilt']) ? $listing['yearBuilt'] : '' }}</p> -->
                                        <p>Built: {{ isset($listing['yearBuilt']) ? $listing['yearBuilt'] : '' }}</p>
                                        <!-- <p>Status: {{ isset($listing['status']) ? $listing['status'] : '' }}</p> -->
                                        <p>Status: {{ isset($listing['status']) ? $listing['status'] : '' }}</p>
                                        <p>Bedrooms: 14</p>
                                        <p>Stories/Levels:</p>
                                        <p>Subdivision:</p>

                                    </div>
                                    <div class="col-md ">

                                        <!-- <p>Acres: {{ isset($listing['lotSize']['acres']) ? $listing['lotSize']['acres'] : '' }}</p> -->
                                        <p>Acres: {{ isset($listing['lotSize']['acres']) ? $listing['lotSize']['acres'] : '' }}</p>
                                        <!-- <p>Full Baths: {{ isset($listing['baths']['full']) ? $listing['baths']['full'] : '' }}</p> -->
                                        <p>Full Baths: {{ isset($listing['baths']['full']) ? $listing['baths']['full'] : '' }}</p>
                                        <!-- <p>Partial Baths: {{ isset($listing['baths']['half']) ? $listing['baths']['half'] : '' }}</p> -->
                                        <p>Partial Baths: {{ isset($listing['baths']['half']) ? $listing['baths']['half'] : '' }}</p>
                                        <p>Garage Stalls:</p>
                                        <p>Construction Status:</p>
                                        <p>Zoning:</p>
                                        <img src="img/extra_logo.gif" class="img-fluid" alt="">

                                    </div>


                                </div>

                            <div id="harim" class="row">
                                    <form method="get" action="{{ URL::to('/photo-gal') }}">
                                    <input type="hidden" name="photogal" value="{{ $listing['id'] }}">
                                    <input type="submit" style=" background-color: #222; padding: 10px 15px; color: #ffff; margin: auto;" value="Photo Gallary">
                                    </form>
                               
                                    <a href="#" class="prop-del" data-id="{{ $listing['id'] }}">Remove</a>

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


<br>
<div class=" container descripter">
    <img src="img/extra_logo.gif" class="img-fluid" alt="">
    <p>© 2020 Regional Multiple Listing Service of Minnesota, Inc. All rights Reserved. The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of the Regional Multiple Listing Service of Minnesota, Inc. Real estate listings held by brokerage firms other than Forsalebyweb.com are marked with the Broker Reciprocity logo. The property information being provided is for consumers' personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumers may be interested in purchasing. Any use of search facilities of data on this site, other than by a consumer looking to purchase real estate, is prohibited. No part of this search utility may be reproduced, adapted, translated, stored in a retrieval system or transmitted in any form or by any means, electronic, mechanical, photocopying, recording, or otherwise. Forsalebyweb.com is not a Multiple Listing Service (MLS), nor does it offer MLS access. This website is a service of Forsalebyweb.com, a broker Participant of the Regional Multiple Listing Service of Minnesota, Inc. Information, including that related to open houses, deemed reliable, but not guaranteed. Data last updated: Monday, May 25th, 2020 at 01:33:01 PM.</p>
    <br>
    <p class="text-center">Data services provided by IDX Broker Page</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
       $(document).ready(function(){
        $(".prop-del").click(function(e){
            e.preventDefault();
            console.log("del button");
            var tex = $(this);
            var dataval = $(this).attr("data-id");
            console.log(dataval);
            data = {
                dataval: dataval,
                 _token: '{{csrf_token()}}'
            }
            $.post("{{ URL::to('/remove-prop') }}",data, function(res){
                if(res == "value deleted"){
                    tex.text("Removed");
                    location.reload();
                    // var par = tex.parent().parent().parent().parent().fadeOut();
                    // console.log(par);
                }else{
                    window.location.replace("{{ URL::to('/login') }}");
                }
            })
        })

        // $("#graylist").click(function(e){
        //     e.preventDefault();
        //     console.log("grey list");
        //     data = {
        //         _token:dataval,
        //     }
        //     $.post("{{ URL::to('/list-page') }}")
        // })
    })
</script>


@include('fsbw-layout.common.footer')
