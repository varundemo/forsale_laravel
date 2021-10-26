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
                <h6 class="m-0 font-weight-bold text-primary">Make Recommendation</h6>
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

                @if(isset($recommendation))
                    {{ Form::model($recommendation, ['route' => ['updateRecommendationRouteAgent', $recommendation->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'makeRecommendationRouteAgent']) }}
                    {{ Form::hidden('clientId', $client_id) }}
                @endif

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Listing #</label>
                        {!! Form::select('listing_no', \App\Listing::select(DB::raw('CONCAT(listing_no, " (", address, ")") AS value, listing_no'))->where('is_deleted',null)->pluck('value', 'listing_no'), Request::old('listing_no'), ['class' => 'form-control']) !!}
                        <small>
                            <a href="/add-listing">Add Listing</a> | <a href="/" target="_blank">Search Properties</a>
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label>Time and Date</label>
                        {{ Form::text('time_and_date', Request::old('time_and_date'), ['class' => 'form-control', 'id' => 'timeAndDate', 'placeholder' => 'Enter time and date']) }}
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

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $('#timeAndDate').datetimepicker();
        });
    </script>
@endsection
