@extends('backend.layouts.master')
@section("title")
ZIT | Admin
@endsection

@section('content')

<style>
  .small-box,
  .icon {
    background: linear-gradient(355deg, #2a3f54 -4%, #162031, #162031, #162031 66%) !important;
    color: #eee !important
  }

  .small-box:hover,
  .icon:hover {
    background: linear-gradient(355deg, #003162 -4%, #031a40, #021435, #03193f 66%) !important;
    color: white !important
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box">
            <div class="inner">
              <h3></h3>

              <p>User Contact</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3></h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row mt-3">
        <div class="col-12 col-lg-6">


          <div class="card border-primary" style="overflow: hidden;">
            <div class="card-header py-1">
              <h3 class="card-title mt-1">User Contact </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool my-auto" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool d-none" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table  table-sm  table-bordered table-striped px-0">
                <thead>
                  <tr>

                    <th>IP Address</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Time</th>

                  </tr>
                </thead>

                <tbody>


                  <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                  </tr>

                </tbody>
              </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="" class="float-right btn btn-info-cs btn-sm">
                View All</a>
            </div>
          </div>
          <!-- /.card -->
          <!-- /.card -->

        </div>






        <div class="col-12 col-lg-6">


          <div class="card border-primary" style="overflow: hidden;">
            <div class="card-header border-0 shadow-none  py-1" style="overflow: hidden;">
              <h3 class="card-title">Pages Menu</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool my-auto" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool d-none" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">

              <table class="table  table-sm  table-bordered table-striped px-0">
                <thead>
                  <tr class="text-center">
                    <!-- <th style="width: 1%">  # </th> -->


                    <th>SL</th>
                    <th>Menu Name</th>
                    <th>Url</th>
                    <th>Sequense</th>

                  </tr>
                </thead>
                <tbody>

                  <tr class="text-center">
                    <td> </td>
                    <td> </td>
                    <td>  </td>
                    <td> </td>

                  </tr>



                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="" class="float-right btn btn-info-cs btn-sm"> View all</a>
            </div>
          </div>
        </div>



        <div class="col-12 col-lg-6">


          <div class="card border-primary mt-3" style="overflow: hidden;">
            <div class="card-header py-1">
              <h3 class="card-title mt-1 my-auto"> Information </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool my-auto" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool d-none" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table  table-sm  table-bordered table-striped px-0">
                <thead>

                </thead>
                <tbody>


                  <tr>
                    <th>Company Logo</th>
                    <td> <img src="" alt="company_logo" height="50px" width="50px"></td>
                  </tr>
                  <tr>
                    <th>Phone</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Address</th>
                    <td></td>
                  </tr>

                  <tr>
                    <th>Open Time</th>
                    <td> <i class="far fa-clock"></i><span></span></td>
                  </tr>

                </tbody>
              </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="" class="float-right btn btn-info-cs btn-sm">
                View All</a>
            </div>
          </div>
          <!-- /.card -->
          <!-- /.card -->

        </div>

        <div class="col-12 col-lg-6">

          <div class="card border-primary my-3 w-100" style="overflow: hidden;">
            <div class="card-header border-0 shadow-none py-1">
              <h1 class="card-title my-auto">
                Service Item
              </h1>

              <div class="card-tools">
                <button type="button" class="btn btn-tool my-auto" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool d-none" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">

              <table class="table  table-sm  table-bordered table-striped table-responsive p-0 scroll w-100" style="overflow: hidden;">
                <thead>
                  <tr class="text-center">
                    <!-- <th style="width: 1%">  # </th> -->


                    <th>Images</th>
                    <th>Category Name</th>
                    <th>Url</th>
                    <th>URL Name</th>

                  </tr>
                </thead>
                <tbody>



                  <tr class="text-center" style="font-size: 13px">
                    <td>
                      <img src="" class="px-2 mx-auto" id="before_img" alt="" height="50px" width="50px" style="border-radius: 5px;">
                    </td>
                    <td> </td>
                    <td> </td>
                    <td></td>

                  </tr>



                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="" class="float-right btn btn-info-cs btn-sm"> View all</a>
            </div>
          </div>
        </div>


        <!-- /.card -->

        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- /.control-sidebar -->
@endsection
