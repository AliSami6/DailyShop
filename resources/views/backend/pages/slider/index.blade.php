@extends('backend.layouts.master')
@section("title")
   Admin | Slider
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Slider List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Slider List</a></li>
            <li class="breadcrumb-item "> Slider </li>
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
                <button type="button" class="btn-info-cs" data-toggle="modal" data-target="#modal-lg" style="border-radius:5px;padding:7px;">
                    Add Slider
                  </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 m-0">

              <table class="table table-bordered table-striped px-0">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Slider title</th>
                    <th>Offer %</th>
                    <th>Slider subtitle</th>
                    <th>Image</th>
                    <th>Text</th>
                    <th>Link</th>
                    <th width="10%"> Action </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($sliders as $item)
                  <tr>
                    <td>{{$item->id}}
                    <td>
                      {{$item->title}}

                    </td>
                    <td>
                        {{$item->offer_msg}}
                    </td>
                    <td>
                        {!!mb_strimwidth(($item->subtitle),0,18,'...')!!}
                    </td>
                    <td>
                        <img src="{{asset('storage/images/gallery').'/'.$item->image}}" alt="item image" style="height:50px; width:80px;">
                    </td>
                    <td>
                        {{$item->button_text}}
                    </td>
                    <td>
                        {{$item->button_link}}
                    </td>
                    <td>

                      <a class="btn btn-primary btn btn-sm" href="{{ url('admin/edit/slider/'.$item->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                      </a>

                      <a class="btn btn-danger btn btn-sm" onclick="return confirm('Do you want to delete this!..')" href="{{ url('admin/delete/slider/'.$item->id) }}">
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
                  <h4 class="modal-title">Create Slider</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="icon">Slider title </label>
                                    <input type="text" id="title" name="title" placeholder="title" class="form-control" required />
                                    @error('title') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Offer </label>
                                    <input type="text" id="offer_msg" name="offer_msg" placeholder="offer" class="form-control" required />
                                    @error('offer_msg') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Subtitle </label>
                                    <input type="text" id="subtitle" name="subtitle" placeholder="subtitle " class="form-control" required />
                                    @error('subtitle') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Text </label>
                                    <input type="text" id="button_text" name="button_text" placeholder="button text " class="form-control" required />
                                    @error('button_text') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="title"> Link </label>
                                    <input type="url" id="button_link" name="button_link" placeholder="button link  " class="form-control" required />
                                    @error('button_link') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="image">Slider image</label>
                                    <div class="row">
                                        <div class="col-md-auto px-1">
                                            @if(isset($item->image))
                                            <img src="{{asset('storage/images/slider').'/'.$item->image}}" class="px-2" id="before_img" alt="" height="70px" width="70px" style="border-radius: 5px;">
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
