@extends('admin.master')

@section('title')
    add new-unit
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title mx-auto">Add Unit Form</div>
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
                    <form class="form-horizontal" action="{{route('unit.new')}}" method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" type="text" placeholder="Unit Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="" class="form-control" placeholder="Unit description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" checked value="1">Published</label>
                                <label class="ml-4"><input type="radio" name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info " type="submit">Create new Unit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
