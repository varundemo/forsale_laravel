@include('fsbw-layout.common.header')


<div class="container bg-white">
	<div class="row" style="margin-top: 120px; margin-bottom: 120px;">
		@if(isset($photo))
@foreach ($photo as $key => $value) 
<div class="col-sm-4">
	<div class="card-group">
  <div class="card mb-5">
    <img class="card-img-top" src="{{ $value }}" alt="Card image cap">
    <!-- <div class="card-body"> -->
      <!-- <h5 class="card-title">Card title</h5> -->
      <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    <!-- </div> -->
  </div>
  </div>
</div>
@endforeach
@endif
	</div>

</div>
		 

@include('fsbw-layout.common.footer')