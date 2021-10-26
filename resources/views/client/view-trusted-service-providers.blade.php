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
                <h6 class="m-0 font-weight-bold text-primary">View Trusted Service Providers</h6>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone #</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone #</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Date Added</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($providers as $provider)
                            <tr>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->address }}</td>
                                <td>{{ $provider->phone }}</td>
                                <td>{{ $provider->email }}</td>
                                <td>
                                    <a href="@if(strpos($provider->website, 'http') === false)//{{ $provider->website }}  @else {{ $provider->website }} @endif" target="_blank">
                                        {{ $provider->website }}
                                    </a>
                                </td>
                                <td>{{ $provider->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script>
        // Call the dataTables jQuery plugin
        window.addEventListener('DOMContentLoaded', (event) => {
            members_table = $('#dataTable').DataTable({
                "aaSorting": [],
                responsive: true,
            });

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@endsection
