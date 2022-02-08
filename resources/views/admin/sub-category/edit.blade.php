@extends('admin.master')

@section('title')
    edit sub-category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title mx-auto">Edit Sub-category Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('subcategory.update',['id'=>$subCategory->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option disabled>---Select Category---</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $subCategory->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub Category Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" type="text" placeholder="Category Name" value="{{$subCategory->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="" class="form-control" placeholder="Category description">{{$subCategory->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*">
                                <img src="{{asset($subCategory->image)}}" alt="" height="200">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$subCategory->status== 1 ? 'checked' : ''}} name="status" value="1">Published</label>
                                <label class="ml-4"><input type="radio" {{$subCategory->status == 0 ? 'checked' : ''}} name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info " type="submit">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
