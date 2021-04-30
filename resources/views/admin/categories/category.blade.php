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
                <form>
                  <div class="card-body row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Category Title</label>
                            <input type="text" class="form-control" id="category-title" name="category-title" placeholder="Category Title">
                          </div>
                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" class="form-control" id="category-slug" name="category-slug" placeholder="Category Slug">
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
