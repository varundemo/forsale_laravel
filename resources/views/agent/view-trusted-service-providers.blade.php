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
                            <th>Action</th>
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
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($providers as $provider)
                            <tr>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->address }}</td>
                                <td>{{ $provider->phone }}</td>
                                <td>{{ $provider->email }}</td>
                                <td>{{ $provider->website }}</td>
                                <td>{{ $provider->created_at }}</td>
                                <td>
                                    <a href="/agent/update-trusted-service-provider/{{ $provider->id }}">
                                        <button class="btn btn-info my-1" data-toggle="tooltip" data-placement="top" title="Update Service Provider"><i class="fa fa-pen"></i></button>
                                    </a>
                                    <a href="/agent/delete-trusted-service-provider/{{ $provider->id }}">
                                        <button class="btn btn-danger my-1" data-toggle="tooltip" data-placement="top" title="Delete Provider"><i class="fa fa-trash"></i></button>
                                    </a>
                                </td>
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
                responsive: true,
            });

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@endsection
