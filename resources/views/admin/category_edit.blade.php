@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Edit Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Edit Category</strong>
            </li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                <h3>Edit Category Form</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">

                            <div class="ibox-content">
                                <form action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Parent</label>

                                        <div class="col-sm-10"><select class="form-control m-b" name="parent_id">
                                                <option value="0">Main Category</option>
                                                @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif >{{ $rs->title }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

                                        <div class="col-sm-10"><input type="text" name="title" value="{{$data->title}}" class="form-control"></div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Keyword</label>
                                        <div class="col-sm-10"><input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Description</label>

                                        <div class="col-sm-10"><input type="text" class="form-control" name="description" value="{{$data->description}}"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Slug</label>

                                        <div class="col-sm-10"><input type="text" class="form-control" name="slug" value="{{$data->slug}}"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>

                                        <div class="col-sm-10"><select class="form-control m-b" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>False</option>
                                                <option>True</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <a href="/admin/category" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                            <button class="btn btn-primary btn-sm" type="submit">Save new</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
