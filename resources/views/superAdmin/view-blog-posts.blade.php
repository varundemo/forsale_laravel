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
                <h6 class="m-0 font-weight-bold text-primary">View Blog Posts</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Featured Image</th>
                            <th>Blog Title</th>
                            <th>Content</th>
                            <th>Date Added</th>
                            <th>Date Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Featured Image</th>
                            <th>Blog Title</th>
                            <th>Content</th>
                            <th>Date Added</th>
                            <th>Date Updated</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($blogPosts as $blogPost)
                            <tr>
                                <td>
                                    <img src="/uploads_78asd6as7d6asb/{{ $blogPost->image }}" alt="" height="100px">
                                </td>
                                <td>{{ $blogPost->title }}</td>
                                <td>{!! Str::words(strip_tags($blogPost->post_content),$words = 24, $end='...') !!}</td>
                                <td>{{ $blogPost->created_at }}</td>
                                <td>{{ $blogPost->updated_at }}</td>
                                <td>
                                    <a href="/superAdmin/update-blog-post/{{ $blogPost->id }}">
                                        <button class="btn btn-primary my-1" data-toggle="tooltip" data-placement="top" title="Edit Blog Post"><i class="fa fa-pencil-alt"></i></button>
                                    </a>
                                    <a href="/superAdmin/delete-blog-post/{{ $blogPost->id }}">
                                        <button class="btn btn-danger my-1" data-toggle="tooltip" data-placement="top" title="Delete Blog Post"><i class="fa fa-times"></i></button>
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
    </script>

@endsection
