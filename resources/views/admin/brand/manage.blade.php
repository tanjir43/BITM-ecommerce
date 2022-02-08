@extends('admin.master')

@section('title')
    manage-brands
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All Brands Info</div>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($brands as $brand)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->description}}</td>
                                <td><img src="{{asset($brand->image)}}" alt="" height="100"></td>
                                <td>{{$brand->status == 1 ? 'Published' : 'UnPublished'}}</td>
                                <td>
                                    <a href="{{route('brand.edit',['id' => $brand->id])}}" class="btn btn-info  btn-xs"><i class="fa fa-edit "></i></a>
                                    <a href="" class="btn btn-danger  btn-xs"><i class="fa fa-trash" onclick="event.preventDefault(); document.getElementById('brandDeleteForm{{$brand->id}}').submit()"></i></a>
                                    <form action="{{route('brand.delete',['id' => $brand->id])}}" method="POST" id="brandDeleteForm{{$brand->id}}">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
