@extends('layouts.loggedIn_header')

@section('page_content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(Session::has('status'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('status') }}
            </div>
    @endif

    <!-- DataTables user listing -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Make Offer Page</h6>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(isset($offer))
                    {{ Form::model($offer, ['route' => ['updateOfferRouteSuperAdmin', $offer->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'addOfferRouteSuperAdmin']) }}
                @endif
                <h6 class="text-primary font-weight-bold">I would like to submit my intent to make offer on the following property</h6>
                <hr>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Property Address</label>
                        {{ Form::text('property_address', Request::old('property_address'), ['class' => 'form-control', 'placeholder' => 'Enter property address']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Listing #</label>
                        {!! Form::select('listing_no', \App\Listing::select(DB::raw('CONCAT(listing_no, " (", address, ")") AS value, listing_no'))->where('is_deleted',null)->pluck('value', 'listing_no'), Request::old('listing_no'), ['class' => 'form-control']) !!}
                        <small>
                            <a href="{{ URL::to('/add-listing') }}">Add Listing</a> | <a href="/" target="{{ URL::to('/') }}">Search Properties</a>
                            | <a href="#"onclick="viewRecentOffers()">View Recent Offers</a>
                        </small>
                    </div>
                    <div class="col-md-4">
                        <label>Purchase Price</label>
                        {{ Form::text('purchase_price', Request::old('purchase_price'), ['class' => 'form-control', 'placeholder' => 'Enter purchase price']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Earnest Money</label>
                        {{ Form::text('earnest_money', Request::old('earnest_money'), ['class' => 'form-control', 'placeholder' => 'Enter earnest money']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Financing</label>
                        {{ Form::text('financing', Request::old('financing'), ['class' => 'form-control', 'placeholder' => 'Enter financing']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Down Payment</label>
                        {{ Form::text('down_payment', Request::old('down_payment'), ['class' => 'form-control', 'placeholder' => 'Enter downpayment']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Seller Concession</label>
                        {{ Form::text('seller_concession', Request::old('seller_concession'), ['class' => 'form-control', 'placeholder' => 'Enter Seller Concession']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Inspection</label>
                        {{ Form::text('inspection', Request::old('inspection'), ['class' => 'form-control', 'placeholder' => 'Enter Inspection']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Property Tax</label>
                        {{ Form::text('property_tax', Request::old('property_tax'), ['class' => 'form-control', 'placeholder' => 'Enter Property Tax']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Contingency</label>
                        {{ Form::text('contingency', Request::old('contingency'), ['class' => 'form-control', 'placeholder' => 'Enter Contingency']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Closing Date</label>
                        {{ Form::text('closing_date', Request::old('closing_date'), ['class' => 'form-control', 'id' => 'timeAndDate', 'placeholder' => 'Enter closing date']) }}
                    </div>
                    <div class="col-md-4">
                        <label>Offer ends</label>
                        {{ Form::text('offer_ends', Request::old('offer_ends'), ['class' => 'form-control', 'id' => 'timeAndDate2', 'placeholder' => 'Enter offer end date']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>
                            {{ Form::checkbox('acceptance', 'yes') }}
                            If this is acceptable, I understand I must draft a formal Purchase Agreement right away.
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        {{ Form::submit('Save', ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>

    </div>




<script type="text/javascript">
      window.addEventListener('DOMContentLoaded', (event) => {
            $('#timeAndDate').datetimepicker();
            $('#timeAndDate2').datetimepicker();

        });
</script>
 


@endsection


