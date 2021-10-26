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
                <h6 class="m-0 font-weight-bold text-primary">Add/Update Listing</h6>
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

                @if(isset($listing))
                    {{ Form::model($listing, ['route' => ['updateListingRoute', $listing->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'addListingRoute']) }}
                @endif

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Listing #</label>
                        @if(isset($listing_no))
                            {{ Form::text('listing_no', $listing_no, ['class' => 'form-control', 'placeholder' => 'Enter listing #', 'required' => 'required']) }}
                        @else
                            {{ Form::text('listing_no', Request::old('listing_no'), ['class' => 'form-control', 'placeholder' => 'Enter listing #', 'required' => 'required']) }}
                        @endif
                        <small>
                            <a href="{{ URL::to('/') }}" target="_blank">Search Properties</a>
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label>Address</label>
                        @if(isset($address))
                            {{ Form::text('address', $address, ['class' => 'form-control', 'placeholder' => 'Enter address']) }}
                        @else
                            {{ Form::text('address', Request::old('address'), ['class' => 'form-control', 'placeholder' => 'Enter address']) }}
                        @endif
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
    <!-- /.container-fluid -->

@endsection
