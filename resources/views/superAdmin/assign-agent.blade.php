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
                <h6 class="m-0 font-weight-bold text-primary">Assign Agent</h6>
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

                {{ Form::open(['route' => 'assignAgentRouteSuperAdmin']) }}

                {{ Form::hidden('clientId', $client->id) }}

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Assign Agent to</label> <br>
                        <b>Client Id:</b> {{ $client->id }} <br>
                        <b>Client Name:</b> {{ $client->name }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Choose Agent for Assignment</label>
                        {{ Form::select('admin_id', $agents->pluck('name', 'id'), null, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        {{ Form::submit('Assign Agent', ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
