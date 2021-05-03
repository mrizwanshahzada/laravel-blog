@extends('admin.layouts.app')
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
                <form method="POST" action="{{ route('tag.store') }}">
                    @csrf
                    @include('user.layouts.partials.errors')
                  <div class="card-body row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tag Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Tag Title">
                          </div>
                        <div class="form-group">
                            <label>Tag Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Tag Slug">
                        </div>
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
