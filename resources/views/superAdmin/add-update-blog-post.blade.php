@extends('layouts.loggedIn_header')

@section('page_content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(Session::has('status'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('status') }}
            </div>
    @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add/Update Blog Post</h6>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(isset($blogPost))
                    {{ Form::model($blogPost, ['route' => ['updateBlogPostRoute', $blogPost->id], 'files' => true, 'method' => 'patch', 'onsubmit' => 'return processSubmission()']) }}
                @else
                    {{ Form::open(['route' => 'saveBlogRoute', 'files' => true, 'onsubmit' => 'return processSubmission()']) }}
                @endif

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Blog Title</label>
                        {{ Form::text('title', Request::old('title'), ['class' => 'form-control', 'placeholder' => 'Enter title for the blog', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Blog Content</label>
                        {{ Form::textarea('post_content', Request::old('post_content'), ['class'=>'form-control', 'rows' => 3, 'cols' => 40, 'id' => 'post_content', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Featured Image (Less than 10 MB)</label>
                        <br>
                        @if(isset($blogPost))
                            <img src="/uploads_78asd6as7d6asb/{{ $blogPost->image }}" alt="" height="100px">
                            <div class="custom-file my-3">
                                <input type="file" class="custom-file-input" id="customFile" name="file">
                                <label class="custom-file-label" for="customFile">Replace featured image file</label>
                            </div>
                        @else
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="file">
                                <label class="custom-file-label" for="customFile">Choose featured image file Page</label>
                            </div>
                        @endif
                        <span id="chosenFileName"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        @php
                            $buttonText = 'Publish Blog';
                            if(isset($blogPost)) {
                                $buttonText = 'Update Blog';
                            }
                        @endphp
                        {{ Form::submit($buttonText, ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="{{ URL::to('/') }}/js/ckeditor/ckeditor.js"></script>
    <script>
        {{--CKEDITOR.plugins.addExternal('youtube', '{{ URL::to('/') }}/js/ckeditor/plugins/youtube/');--}}

        {{--config.extraPlugins = 'youtube';--}}

        CKEDITOR.replace( 'post_content', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

        function processSubmission(){
            var content = $("#cke_post_content iframe").contents().find("body").text();
            if(content != "") {
                return true;
            }
            alert('Please fill all the fields.');
            return false;
        }

        //show chosen file name
        document.getElementById('customFile').onchange = function () {
            document.getElementById('chosenFileName').innerHTML = this.value.replace(/.*[\/\\]/, '');
        };
    </script>
@endsection
