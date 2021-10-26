@extends('layouts.loggedIn_header')

@section('page_content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View User Details</h6>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item active">Fullname: {{ $user->name }}</li>
                    <li class="list-group-item">Email: {{ $user->email }}</li>
                    <li class="list-group-item">Role: {{ $user->role }}</li>
                    <li class="list-group-item">Date Joined: {{ $user->created_at }}</li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
