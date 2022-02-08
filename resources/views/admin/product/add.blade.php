@extends('admin.master')

@section('title')
    add new-product
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title mx-auto">Add Product Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    @if($message = Session::get('message'))
                        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                            <strong>{{$message}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <select name="category_id" required class="form-control" id="categoryId">
                                    <option value="" disabled selected>---Select Category Name---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub_category Name</label>
                            <div class="col-sm-10">
                                <select  name="sub_category_id" required class="form-control" id="subCategoryId">
                                    <option value="" disabled selected>---Select Sub_Category Name---</option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand Name</label>
                            <div class="col-sm-10">
                                <select name="brand_id" required class="form-control">
                                    <option value="" disabled selected>---Select Brand Name---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Name</label>
                            <div class="col-sm-10">
                                <select name="unit_id" required class="form-control">
                                    <option value="" disabled selected>---Select Sub_Category Name---</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" type="text" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Code</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="code" type="text" placeholder="Product Code">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Regular Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="regular_price" type="number" placeholder="Regular_price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Selling Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="selling_price" type="number" placeholder="Selling price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Short description</label>
                            <div class="col-sm-10">
                                <textarea name="short_description" class="form-control" placeholder="Short description " ></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Long description</label>
                            <div class="col-sm-10">
                                <textarea name="long_description" id="summernote" class="form-control" placeholder="Long description " ></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="sub_image[]" multiple accept="image/*">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" value="1">Published</label>
                                <label class="ml-4"><input type="radio" name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info " type="submit">Create new Product </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
