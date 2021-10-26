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
                <h6 class="m-0 font-weight-bold text-primary">View Shared Files</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>File(s)</th>
                            <th>Message</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Date Transferred</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>File</th>
                            <th>Message</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Date Transferred</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($shared_files as $shared_file)
                            <tr>
                                <td>
                                    <a href="/view-shared-files/{{ $shared_file->id }}">
                                        {{ count(App\FileTransfer::find($shared_file->id)->shared_files) }} file(s) shared
                                    </a>
                                </td>
                                <td>{{ $shared_file->message }}</td>
                                <td>{{ \App\User::find($shared_file->sender_id)->name }}</td>
                                <td>{{ \App\User::find($shared_file->recipient_id)->name }}</td>
                                <td>{{ $shared_file->created_at }}</td>
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

        //member filter function
        function filter_table(status) {
            members_table.column(4).search(status).draw();
        }
    </script>

@endsection
