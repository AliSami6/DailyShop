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
                    <h1> Slider info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"> Slider</a></li>
                        <li class="breadcrumb-item active">Edit Slider</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{url('admin/update/slider/'.$EditSlider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card border border-primary">
                            <div class="card-header py-2">
                                <h4 class="card-title mt-1"> Edit slider </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="title"> Slider title </label>
                                            <input type="text" id="title" name="title" placeholder="title" class="form-control"value="{{$EditSlider->title}}"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="subtitle">Slider subtitle</label>
                                            <input type="text" id="subtitle" name="subtitle" placeholder="subtitle" class="form-control"  value="{{$EditSlider->subtitle}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="offer_msg"> Offer</label>
                                            <input type="text" id="offer_msg" name="offer_msg" placeholder="offer msg" class="form-control"  value="{{$EditSlider->offer_msg}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Text"> Text </label>
                                            <input type="text" id="button_text" name="button_text" placeholder="button text" class="form-control"  value="{{$EditSlider->button_text}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Link"> Link </label>
                                            <input type="text" id="button_link" name="button_link" placeholder="button link" class="form-control"  value="{{$EditSlider->button_link}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <img src="{{asset('storage/images/gallery').'/'.$EditSlider->image}}" id="before_img" alt="" height="70px" width="70px" style="border-radius: 5px;padding:4px;">
                                            <span class="form-label" for="image">before image</span>
                                            <input type="file" name="image" id="image" value="{{$EditSlider->image}}" class=" form-control border-0 pr-3 border-0" style="float:right " />
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
