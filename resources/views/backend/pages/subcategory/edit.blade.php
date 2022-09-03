@extends('backend.layouts.master')
@section("title")
Edit category
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Size info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Size</a></li>
                        <li class="breadcrumb-item active">Edit Size</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{url('admin/update/subcategory/'.$Editsub->id) }}" method="POST">
                        @csrf

                        <div class="card border border-primary">
                            <div class="card-header py-2">
                                <h4 class="card-title mt-1"> Edit Sub Category </h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="icon">Category Name </label>
                                            <select name="category_id" id="" class="form-control" required>
                                                <option value="">-- Select Category --</option>
                                                @foreach ($editcat as $p)
                                                <option value="{{$p->id}}">{{$p->category_name}}</option>
                                                @endforeach
                                                @error('category_id') <span class="error">{{ $message }}</span> @enderror
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="title">SubCategory Name</label>
                                            <input type="text" id="subcategory_name" name="subcategory_name" placeholder="subcategory name..." class="form-control"  value="{{$Editsub->subcategory_name}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="title">Slug</label>
                                            <input type="text" id="slug" name="slug" placeholder="slug ..." class="form-control"  value="{{$Editsub->slug}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0 shadow-none">
                                <a href="{{ url('admin/subcategory')}}" class="btn btn-info-cs btn-sm float-left"> <i class="fa fa-arrow-left"></i>&nbsp Back </a>
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
