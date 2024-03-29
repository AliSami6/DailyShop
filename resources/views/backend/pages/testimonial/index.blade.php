@extends('backend.layouts.master')
@section("title")
Admin | Testimonial
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Testimonial  List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Testimonial  List</a></li>
            <li class="breadcrumb-item "> Testimonial </li>
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
                    Add Testimonial
                  </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 m-0">

              <table class="table table-bordered table-striped px-0">
                <thead>
                  <tr>
                    <th> SL </th>
                    <th> Name</th>
                    <th> Details </th>
                    <th> Designation </th>
                    <th> Image </th>
                    <th> Post </th>
                    <th width="10%"> Action </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($testimonial as $item)
                  <tr>
                    <td>{{$item->id}}
                    <td>
                      {{$item->name}}

                    </td>

                    <td>
                        {!!mb_strimwidth(($item->details),0,18,'...')!!}
                    </td>
                    <td>
                        {{$item->designation}}
                    </td>
                    <td>
                        <img src="{{asset('storage/images/test').'/'.$item->image}}" alt="item image" style="height:50px; width:80px;">
                    </td>
                    <td>
                        {{$item->located}}
                    </td>

                    <td>

                      <a class="btn btn-primary btn btn-sm" href="{{ url('admin/edit/testimonial/'.$item->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                      </a>

                      <a class="btn btn-danger btn btn-sm" onclick="return confirm('Do you want to delete this!..')" href="{{ url('admin/delete/testimonial/'.$item->id) }}">
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
                  <h4 class="modal-title">Add Testimonial</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('store.testimonial')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="details"> Details </label>
                                    <input type="text" id="details" name="details" placeholder=" details " class="form-control" required />
                                    @error('details') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Name </label>
                                    <input type="text" id="name" name="name" placeholder=" name " class="form-control" required />
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Designation </label>
                                    <input type="text" id="designation" name="designation" placeholder=" designation " class="form-control" required />
                                    @error('designation') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Located </label>
                                    <input type="text" id="located" name="located" placeholder="button text " class="form-control" required />
                                    @error('located') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="image"> Testimonial image</label>
                                    <div class="row">
                                        <div class="col-md-auto px-1">
                                            @if(isset($item->image))
                                            <img src="{{asset('storage/images/test').'/'.$item->image}}" class="px-2" id="before_img" alt="" height="70px" width="70px" style="border-radius: 5px;">
                                            <span class="form-label px-2" for="before_img">Before image</span>
                                            @endif
                                        </div>
                                        <div class="col-md-auto mt-auto px-1">
                                            <input type="file" name="image" id="image" class="form-control border-0 p-3 border-none" @if(!isset($item->image)) required @endif />
                                            @error('image') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

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
