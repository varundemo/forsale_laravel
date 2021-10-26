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
                <h6 class="m-0 font-weight-bold text-primary">View Users</h6>
            </div>
            <div class="card-body">
                <!-- Filter buttons -->
                <button class="btn btn-info my-1" onclick="filter_table('');"><i class="fa fa-users"></i> All Users</button>
                <button class="btn btn-info my-1" onclick="filter_table('worker');"><i class="fa fa-users"></i> Workers</button>
                <button class="btn btn-primary my-1" onclick="filter_table('client');"><i class="fa fa-users"></i> Clients</button>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role == 'admin' ? 'Admin' : ($user->role == 'worker' ? 'Worker' : ($user->role == 'client' ? 'Client' :'' ))}}</td>
                                <td>
                                    <a href="/admin/view-user/{{ $user->id }}">
                                        <button class="btn btn-success my-1" data-toggle="tooltip" data-placement="top" title="View details"><i class="fa fa-eye"></i></button>
                                    </a>
                                    @if($user->role == 'client')
                                        <a href="/admin/view-client-bookings/{{ $user->id }}">
                                            <button class="btn btn-success my-1" data-toggle="tooltip" data-placement="top" title="View Booking Requests"><i class="fa fa-file-alt"></i></button>
                                        </a>
                                        <a href="/admin/assign-agent/{{ $user->id }}">
                                            <button class="btn btn-info my-1" data-toggle="tooltip" data-placement="top" title="Assign Agent"><i class="fa fa-user-cog"></i></button>
                                        </a>
                                    @endif
                                    <a href="/admin/update-user/{{ $user->id }}">
                                        <button class="btn btn-primary my-1" data-toggle="tooltip" data-placement="top" title="Edit User"><i class="fa fa-pencil-alt"></i></button>
                                    </a>
                                    <a href="/admin/delete-user/{{ $user->id }}">
                                        <button class="btn btn-danger my-1" data-toggle="tooltip" data-placement="top" title="Delete User"><i class="fa fa-trash"></i></button>
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
