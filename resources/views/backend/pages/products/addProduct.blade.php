@extends('backend.layouts.master')
@section("title")
Admin | Products
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Product  List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Product  List</a></li>
            <li class="breadcrumb-item "> Product </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card border-primary">

            <!-- /.card-header -->
            <div class="card-body p-0 m-0">

                <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Text</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Text Disabled</label>
                          <input type="text" class="form-control" placeholder="Enter ..." disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Textarea</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Textarea Disabled</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                        </div>
                      </div>
                    </div>


                  </form>
            </div>

            <!-- /.card-body -->
          </div>



          <!-- /.card -->
        </div>

      </div>
      <!-- Add Modal -->

    </div>
    <!-- /.container-fluid -->
  </section>
</div>
<!-- /.content-wrapper -->

@endsection
