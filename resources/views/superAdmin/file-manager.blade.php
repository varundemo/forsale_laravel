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
                <h6 class="m-0 font-weight-bold text-primary">Send File</h6>
            </div>
            <div class="card-body">
                <div style="height: 600px;">
                    <div id="fm"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $("[title=About]").hide();
        });
    </script>
@endsection
