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
                <h6 class="m-0 font-weight-bold text-primary">View Recommendations</h6>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Recommended To</th>
                            <th>Recommended By</th>
                            <th>Listing #</th>
                            <th>Time and Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Recommended To</th>
                            <th>Recommended By</th>
                            <th>Listing #</th>
                            <th>Time and Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($recommendations as $recommendation)
                            <tr>
                                <td>{{ \App\User::find($recommendation->recommended_to)->name }}</td>
                                <td>{{ \App\User::find($recommendation->recommended_by)->name }}</td>
                                <td>
                                    <a href="/search?data=https$3099$3098$3098smartphone.forsalebyweb.com$3098idx$3098details$3098listing$3098a020$3098{{ $recommendation->listing_no }}" target="_blank">
                                        {{ $recommendation->listing_no }}
                                    </a>
                                </td>
                                <td>{{ $recommendation->time_and_date }}</td>
                                <td>{{ $recommendation->status == 0 ? 'Pending' : ($recommendation->status == 1 ? 'Approved' : ($recommendation->status == 2 ? 'Denied' : '' ))}}</td>
                                <td>
                                    <a href="{{ URL::to('/superAdmin/update-recommendation') }}/{{ $recommendation->id }}">
                                        <button class="btn btn-info my-1" data-toggle="tooltip" data-placement="top" title="Update Recommendation"><i class="fa fa-pen"></i></button>
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
                "aaSorting": [],
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
