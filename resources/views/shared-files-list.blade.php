@extends('layouts.loggedIn_header')

@section('page_content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(Session::has('status'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('status') }}
            </div>
    @endif

        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Shared Files List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>File</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>File</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($shared_files as $shared_file)
                                    <tr>
                                        <td>
                                            <a target="_blank"
                                               href="https://{{env('AWS_BUCKET')}}.s3.{{env('AWS_DEFAULT_REGION')}}.amazonaws.com/images/{{ $shared_file->filename }}">
                                                {{ $shared_file->filename }}
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
            <div class="col-md-4 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        File Transfer Details
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Shared by: </li>
                        <li class="list-group-item">Message: </li>
                        <li class="list-group-item">Date: </li>
                    </ul>
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
