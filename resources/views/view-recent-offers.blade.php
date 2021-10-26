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
                <h6 class="m-0 font-weight-bold text-primary">View Recent Offers</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Property Address</th>
                            <th>Listing #</th>
                            <th>Purchase Price</th>
                            <th>Earnest Money</th>
                            <th>Financing</th>
                            <th>Down Payment</th>
                            <th>Seller Concession</th>
                            <th>Inspection</th>
                            <th>Property Tax</th>
                            <th>Contingency</th>
                            <th>Offer Ends</th>
                            <th>Date Requested</th>
                            <th>Date Updated</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Property Address</th>
                            <th>Listing #</th>
                            <th>Purchase Price</th>
                            <th>Earnest Money</th>
                            <th>Financing</th>
                            <th>Down Payment</th>
                            <th>Seller Concession</th>
                            <th>Inspection</th>
                            <th>Property Tax</th>
                            <th>Contingency</th>
                            <th>Offer Ends</th>
                            <th>Date Requested</th>
                            <th>Date Updated</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($offers as $offer)
                            <tr>
                                <td>{{ $offer->property_address }}</td>
                                <td>
                                    <a href="/search?data=https$3099$3098$3098smartphone.forsalebyweb.com$3098idx$3098details$3098listing$3098a020$3098{{ $offer->listing_no }}" target="_blank">
                                        {{ $offer->listing_no }}
                                    </a>
                                </td>
                                <td>{{ $offer->purchase_price }}</td>
                                <td>{{ $offer->earnest_money }}</td>
                                <td>{{ $offer->financing }}</td>
                                <td>{{ $offer->down_payment }}</td>
                                <td>{{ $offer->seller_concession }}</td>
                                <td>{{ $offer->inspection }}</td>
                                <td>{{ $offer->property_tax }}</td>
                                <td>{{ $offer->contingency }}</td>
                                <td>{{ $offer->offer_ends }}</td>
                                <td>{{ $offer->created_at }}</td>
                                <td>{{ $offer->updated_at }}</td>
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
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
            });

            $('[data-toggle="tooltip"]').tooltip();
        });

        //member filter function
        function filter_table(status) {
            members_table.column(4).search(status).draw();
        }
    </script>

@endsection
