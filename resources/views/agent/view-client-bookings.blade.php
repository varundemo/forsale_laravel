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
                <h6 class="m-0 font-weight-bold text-primary">View Bookings and Showings</h6>
            </div>
            <div class="card-body">
                <!-- Filter buttons -->
                <button class="btn btn-info my-1" onclick="filter_table('');"><i class="fa fa-book"></i> All Bookings</button>
                <button class="btn btn-info my-1" onclick="filter_table('Approved');"><i class="fa fa-file"></i> Approved</button>
                <button class="btn btn-danger my-1" onclick="filter_table('Denied');"><i class="fa fa-ban"></i> Denied</button>

                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Street Address</th>
                            <th>Listing #</th>
                            <th>Time and Date</th>
                            <th>Status</th>
                            <th>Transaction Status</th>
                            <th>Date Requested</th>
                            <th>Date Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Street Address</th>
                            <th>Listing #</th>
                            <th>Time and Date</th>
                            <th>Status</th>
                            <th>Transaction Status</th>
                            <th>Date Requested</th>
                            <th>Date Updated</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->full_name }}</td>
                                <td>{{ $booking->street_address }}</td>
                                <td>
                                    <a href="/search?data=https$3099$3098$3098smartphone.forsalebyweb.com$3098idx$3098details$3098listing$3098a020$3098{{ $booking->listing_no }}" target="_blank">
                                        {{ $booking->listing_no }}
                                    </a>
                                </td>
                                <td>{{ $booking->time_and_date }}</td>
                                <td>{{ $booking->status == 0 ? 'Pending' : ($booking->status == 1 ? 'Approved' : ($booking->status == 2 ? 'Denied' : '' ))}}</td>
                                <td>{{ $booking->transaction_status == 0 ? 'Pending' : ($booking->transaction_status == 1 ? 'Active' : ($booking->transaction_status == 2 ? 'Pre-Offer' : ($booking->transaction_status == 3 ? 'Under Contract' : ($booking->transaction_status == 4 ? 'Completed' : ($booking->transaction_status == 5 ? 'Ovedue' : ($booking->transaction_status == 6 ? 'Withdrawn' : ($booking->transaction_status == 7 ? 'Sold' : ($booking->transaction_status == 8 ? 'Terminated' : ($booking->transaction_status == 9 ? 'Closed' : '' ) ) ) ) ) ) ) ))}}</td>
                                <td>{{ $booking->created_at }}</td>
                                <td>{{ $booking->updated_at }}</td>
                                <td>
                                    <a href="/agent/approve-booking/{{ $booking->id }}">
                                        <button class="btn btn-success my-1" data-toggle="tooltip" data-placement="top" title="Approve Booking"><i class="fa fa-check"></i></button>
                                    </a>
                                    <a href="/agent/deny-booking/{{ $booking->id }}">
                                        <button class="btn btn-danger my-1" data-toggle="tooltip" data-placement="top" title="Deny Booking"><i class="fa fa-times"></i></button>
                                    </a>
                                    <a href="/agent/update-booking/{{ $booking->id }}">
                                        <button class="btn btn-primary my-1" data-toggle="tooltip" data-placement="top" title="Edit Booking Request"><i class="fa fa-pencil-alt"></i></button>
                                    </a>
                                    <a href="/agent/make-recommendation/{{ $booking->user_id }}">
                                        <button class="btn btn-info my-1" data-toggle="tooltip" data-placement="top" title="Make Recommendation"><i class="fa fa-user-cog"></i></button>
                                    </a>
                                    <hr>
                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Transaction Status
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/1">Set <b>Active</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/2">Set <b>Pre-Offer</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/3">Set <b>Under Contract</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/4">Set <b>Completed</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/5">Set <b>Ovedue</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/6">Set <b>Withdrawn</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/7">Set <b>Sold</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/8">Set <b>Terminated</b></a>
                                            <a class="dropdown-item" href="/agent/update-transaction-status/{{ $booking->id }}/9">Set <b>Closed</b></a>
                                        </div>
                                    </div>
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
            members_table.column(4).search(status).draw();
        }
    </script>

@endsection
