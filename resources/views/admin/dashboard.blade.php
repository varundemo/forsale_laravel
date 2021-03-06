@extends('layouts.loggedIn_header')

@section('page_content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(Session::has('status'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('status') }}
            </div>
    @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
            </div>
            <div class="card-body">
                
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
