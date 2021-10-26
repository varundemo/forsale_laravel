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
                <h6 class="m-0 font-weight-bold text-primary">User Management</h6>
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

                @if(isset($user))
                    {{ Form::model($user, ['route' => ['updateUserRoute', $user->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'addUserRoute']) }}
                @endif

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Full Name</label>
                        {{ Form::text('name', Request::old('name'), ['class' => 'form-control', 'placeholder' => 'Enter full name']) }}
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        {{ Form::email('email', Request::old('email'), ['class' => 'form-control', 'placeholder' => 'Enter email address']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Password</label>
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password']) }}
                    </div>
                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Enter password again']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Choose user role</label>
                        {{ Form::select('role', ['admin' => 'Admin', 'worker' => 'Worker', 'client' => 'Client'], Request::old('role'), ['class' => 'form-control']) }}
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
