@extends('layouts.loggedIn_header')

@section('page_content')

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Account Settings</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <section>
                            {{ Form::model($user, ['route' => ['updateAdminSettingsRoute'], 'method' => 'patch']) }}

                            <button type="button" class="btn btn-primary mb-2"><i class="fa fa-user"></i> Personal Details</button>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Full Name</label>
                                    {{ Form::text('name', Request::old('name'), ['class' => 'form-control', 'placeholder' => 'Enter full name']) }}
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>
                                    {{ Form::text('address', Request::old('address'), ['class' => 'form-control', 'placeholder' => 'Enter address']) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Mobile</label>
                                    {{ Form::text('mobile', Request::old('mobile'), ['class' => 'form-control', 'placeholder' => 'Enter mobile number']) }}
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
                            <hr>

                            <div class="form-group row">
                                <div class="col-md-12 text-center">
                                    {{ Form::submit('Save', ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                                </div>
                            </div>

                            {{ Form::close() }}
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
