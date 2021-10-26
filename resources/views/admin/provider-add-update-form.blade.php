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
                <h6 class="m-0 font-weight-bold text-primary">Add Trusted Service Provider</h6>
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

                @if(isset($provider))
                    {{ Form::model($provider, ['route' => ['updateTrustedServiceProviderRouteAdmin', $provider->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'addTrustedServiceProviderRouteAdmin']) }}
                @endif

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Name</label>
                        {{ Form::text('name', Request::old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Name of the service provider']) }}
                    </div>
                    <div class="col-md-6">
                        <label>Address</label>
                        {{ Form::text('address', Request::old('address'), ['class' => 'form-control', 'placeholder' => 'Enter address']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Phone</label>
                        {{ Form::text('phone', Request::old('phone'), ['class' => 'form-control', 'placeholder' => 'Enter Phone #']) }}
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        {{ Form::text('email', Request::old('email'), ['class' => 'form-control', 'placeholder' => 'Enter email address']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Website</label>
                        {{ Form::text('website', Request::old('website'), ['class' => 'form-control', 'placeholder' => 'www.example.com']) }}
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
