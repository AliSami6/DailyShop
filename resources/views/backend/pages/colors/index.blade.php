@extends('backend.layouts.master')
@section("title")
Admin | Colors
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Colors List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Colors List</a></li>
            <li class="breadcrumb-item "> Colors</li>
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
            <div class="card-header">
                <button type="button" class="btn btn-secondary btn btn-sm" data-toggle="modal" data-target="#modal-lg" style="border-radius:5px;padding:7px;">
                    Add Colors
                  </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 m-0">

              <table class="table table-bordered table-striped px-0">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Colors Name</th>
                    <th>Colors Value</th>
                    <th width="10%"> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($colors as $item)
                  <tr>

                    <td>{{$item->id}}</td>
                    <td>
                      {{$item->color}}
                    </td>

                    <td>
                        {{$item->favcolor}}
                    </td>
                    <td>

                      <a class="btn btn-primary btn btn-sm" href="{{url('admin/edit/colors/'.$item->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                      </a>

                      <a class="btn btn-danger btn btn-sm" onclick="return confirm('Do you want to delete this!..')" href="{{ url('admin/delete/colors/'.$item->id) }}">
                        <i class="fas fa-trash">
                        </i>
                      </a>

                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- /.card-body -->
          </div>
          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Create Category</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('store.color')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="icon">Colors Name </label>
                                    <input type="text" id="color" name="color" placeholder="color name..." class="form-control" required />
                                    @error('color') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group" style="height:15px;">
                                    <label  class="form-label" for="favcolor">Select your favorite color:</label>
                                    <input type="color" class="form-control" id="favcolor" name="favcolor" value="#ff0000">
                                    @error('favcolor') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-info-cs text-white btn-sm float-sm-right"> <i class="fa fa-save"></i> Save</button>
                    </div>
                </form>

              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->


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
