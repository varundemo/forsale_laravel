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
                <h6 class="m-0 font-weight-bold text-primary">Invite Agent</h6>
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

                {{ Form::open(['route' => 'inviteAgentRoute']) }}

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Agent's Email Address</label>
                        {{ Form::email('email', Request::old('email'), ['class' => 'form-control', 'placeholder' => 'Enter email address', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Message (Optional)</label>
                        {{ Form::textarea('message', Request::old('message'), ['class'=>'form-control', 'rows' => 3, 'cols' => 40, 'placeholder' => 'Enter a custom message', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        {{ Form::submit('Send Invitation', ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
