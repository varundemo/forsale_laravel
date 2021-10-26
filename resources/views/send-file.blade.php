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
                <h6 class="m-0 font-weight-bold text-primary">Send File</h6>
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

                {{ Form::open(['route' => 'sendFileRoute', 'files' => true, 'method' => 'post']) }}

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Upload File(doc, docx, pdf, jpg, jpeg or png). Less than 10 MB.</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="files[]" multiple>
                            <label class="custom-file-label" for="customFile">Choose files</label>
                        </div>
                        <small id="filesSelected"></small>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Message</label>
                        {{ Form::textarea('message', Request::old('message'), ['class'=>'form-control', 'rows' => 3, 'cols' => 40, 'placeholder' => 'Enter a custom message', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Choose Recipient</label>
                        {{ Form::select('recipient_id', ['4' => 'Client'], Request::old('recipient_id'), ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        {{ Form::submit('Send File', ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <script>
        document.getElementById('customFile').addEventListener('change', (event) => {
            document.getElementById('filesSelected').innerHTML = document.getElementById('customFile').files.length + " file(s) selected.";
        });
    </script>
@endsection
