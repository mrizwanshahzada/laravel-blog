@extends('admin.layouts.app')

@section('head')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/codemirror/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/codemirror/theme/monokai.css') }}">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/simplemde/simplemde.min.css') }}">
@endsection
@section('js-assets')
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('admin/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('admin/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('admin/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
        // Summernote
        $('#summernote').summernote()
    })
    </script>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Titles</h3>
                </div>
                <form method="POST" action="{{ route('post.store') }}">
                    @csrf
                    @if(count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                  <div class="card-body row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
                          </div>
                          <div class="form-group">
                              <label>Sub Title</label>
                              <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title">
                            </div>
                            <div class="form-group">
                              <label>Slug</label>
                              <input type="text" class="form-control" id="slug" name="slug" placeholder="Post Slug">
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>File input</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label">Choose file</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="status" name="status">
                            <label class="form-check-label">Publish</label>
                          </div>
                    </div>
                  </div>
                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Write post here
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="body">
                      </textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->
</div>
@endsection
