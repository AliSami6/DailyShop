@extends('backend.layouts.master')
@section("title")
Edit slider
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
                        <li class="breadcrumb-item"><a href="#">slider</a></li>
                        <li class="breadcrumb-item active">Edit slider</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{url('admin/update/testimonial/'.$EditTestimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card border border-primary">
                            <div class="card-header py-2">
                                <h4 class="card-title mt-1"> Edit tsetimonial </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="details"> Details </label>
                                            <input type="text" id="details" name="details" placeholder=" details " class="form-control"value="{{$EditTestimonial->details}}"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name"> Employee Name </label>
                                            <input type="text" id="name" name="name" placeholder="write your name " class="form-control"  value="{{$EditTestimonial->name}}" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="designation"> Designation </label>
                                            <input type="text" id="designation" name="designation" placeholder=" designation " class="form-control"  value="{{$EditTestimonial->designation}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="located"> Located </label>
                                            <input type="text" id="located" name="located" placeholder=" write your location" class="form-control"  value="{{$EditTestimonial->located}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <img src="{{asset('storage/images/test').'/'.$EditTestimonial->image}}" id="before_img" alt="" height="70px" width="70px" style="border-radius: 5px;padding:4px;">
                                            <span class="form-label" for="image">before image</span>
                                            <input type="file" name="image" id="image" value="{{$EditTestimonial->image}}" class=" form-control border-0 pr-3 border-0" style="float:right " />
                                            @error('image') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0 shadow-none">
                                <a href="{{url('admin/testimonial')}}" class="btn btn-info-cs btn-sm float-left"> <i class="fa fa-arrow-left"></i>&nbsp Back </a>
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
