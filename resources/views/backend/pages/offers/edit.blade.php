@extends('backend.layouts.master')
@section("title")
Edit offer
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Category info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">offer</a></li>
                        <li class="breadcrumb-item active">Edit offer</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{url('admin/update/offer/'.$EditOffer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card border border-primary">
                            <div class="card-header py-2">
                                <h4 class="card-title mt-1"> Edit offer </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="title">  Title </label>
                                            <input type="text" id="title" name="title" placeholder="title" class="form-control"value="{{$EditOffer->title}}"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="offer">Offer </label>
                                            <input type="text" id="offer" name="offer" placeholder="offer" class="form-control"  value="{{$EditOffer->offer}}" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <img src="{{asset('storage/images/offer').'/'.$EditOffer->image}}" id="before_img" alt="" height="70px" width="70px" style="border-radius: 5px;padding:4px;">
                                            <span class="form-label" for="image">before image</span>
                                            <input type="file" name="image" id="image" value="{{$EditOffer->image}}" class=" form-control border-0 pr-3 border-0" style="float:right " />
                                            @error('image') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0 shadow-none">
                                <a href="{{ url()->previous() }}" class="btn btn-info-cs btn-sm float-left"> <i class="fa fa-arrow-left"></i>&nbsp Back </a>
                                <button type="submit" class="btn btn-info-cs text-white btn-sm float-sm-right"> <i class="fa fa-save"></i>&nbsp Update </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->



    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
