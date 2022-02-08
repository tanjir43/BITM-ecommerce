@extends('admin.master')

@section('title')
    manage-sub-categories
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All Sub Category Info</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Category_Name</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($subCategories as $subCategory)

                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$subCategory->category->name}}</td>
                                <td>{{$subCategory->name}}</td>
                                <td>{{$subCategory->description}}</td>
                                <td><img src="{{$subCategory->image}}" alt="" height="80"></td>
                                <td>{{$subCategory->status == 1 ? 'Published' : 'UnPublished'}}</td>
                                <td>
                                    <a href="{{route('subcategory.edit',['id'=>$subCategory->id])}}" class="btn btn-info btn-xs"><i class="fa fa-edit "></i></a>
                                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash" onclick="event.preventDefault(); document.getElementById('subcategoryDeleteForm{{$subCategory->id}}')"></i></a>
                                    <form action="" method="POST" enctype="multipart/form-data" id="subcategoryDeleteForm{{$subCategory->id}}">
                                        @csrf
                                    </form>

                                </td>
                            </tr>
                        @endforeach
{{--                        @foreach($categories as $category)--}}
{{--                            <tr class="text-center">--}}
{{--                                <td>{{$loop->iteration}}</td>--}}
{{--                                <td>{{$category->name}}</td>--}}
{{--                                <td>{{$category->description}}</td>--}}
{{--                                <td><img src="{{asset($category->image)}}" alt="" height="100"></td>--}}
{{--                                <td>{{$category->status == 1 ? 'Published' : 'UnPublished'}}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-info  btn-xs"><i class="fa fa-edit "></i></a>--}}
{{--                                    <a href="" class="btn btn-danger  btn-xs"><i class="fa fa-trash" onclick="event.preventDefault(); document.getElementById('categoryDeleteForm{{$category->id}}').submit()"></i></a>--}}
{{--                                    <form action="{{route('category.delete',['id' => $category->id])}}" method="POST" id="categoryDeleteForm{{$category->id}}">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
