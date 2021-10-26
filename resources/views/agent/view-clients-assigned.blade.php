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
                <h6 class="m-0 font-weight-bold text-primary">View Clients Assigned</h6>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->user->name }}</td>
                                <td>{{ $client->user->email }}</td>
                                <td>
                                    <a href="/agent/view-client-bookings/{{ $client->user->id }}">
                                        <button class="btn btn-success my-1" data-toggle="tooltip" data-placement="top" title="View Booking Requests"><i class="fa fa-file-alt"></i></button>
                                    </a>
                                    <a href="/agent/make-recommendation/{{ $client->user->id }}">
                                        <button class="btn btn-info my-1" data-toggle="tooltip" data-placement="top" title="Make Recommendation"><i class="fa fa-user-cog"></i></button>
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

        //member filter function
        function filter_table(status) {
            members_table.column(2).search(status).draw();
        }
    </script>

@endsection
