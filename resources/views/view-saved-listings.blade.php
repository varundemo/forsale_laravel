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
                <h6 class="m-0 font-weight-bold text-primary">Saved Listings</h6>
            </div>
            <div class="card-body">
                <a href="{{ URL::to('/add-listing') }}">
                    <button class="btn btn-primary float-right my-3">Add New Listing</button>
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Listing #</th>
                            <th>Address</th>
                            <th>Date Saved</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Listing #</th>
                            <th>Address</th>
                            <th>Date Saved</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($listings as $listing)
                            <tr>
                                <td>
                                    <a href="/search?data=https$3099$3098$3098smartphone.forsalebyweb.com$3098idx$3098details$3098listing$3098a020$3098{{ $listing->listing_no }}" target="_blank">
                                        {{ $listing->listing_no }}
                                    </a>
                                </td>
                                <td>{{ $listing->address }}</td>
                                <td>{{ $listing->created_at }}</td>
                                <td>
                                    <a href="{{ URL::to('/edit-listing')}}/{{ $listing->id }}">
                                        <button class="btn btn-primary my-1" data-toggle="tooltip" data-placement="top" title="Edit Listing"><i class="fa fa-pencil-alt"></i></button>
                                    </a>
                                    <a href="{{ URL::to('/delete-listing') }}/{{ $listing->id }}">
                                        <button class="btn btn-danger my-1" data-toggle="tooltip" data-placement="top" title="Delete Listing"><i class="fa fa-trash"></i></button>
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
