@extends('layouts.admin')

@section('title', 'Edit Transfer')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Edit Transfer</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Edit Transfer</strong>
            </li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                <h3>Edit Transfer Form</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">

                            <div class="ibox-content">
                                <form action="{{route('admin_transfer_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Parent</label>

                                        <div class="col-sm-10"><select class="form-control m-b" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif >{{ $rs->title }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

                                        <div class="col-sm-10"><input type="text" value="{{$data->title}}" name="title" class="form-control"></div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Keyword</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->keywords}}" name="keywords" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Description</label>

                                        <div class="col-sm-10"><input type="text" class="form-control" value="{{$data->description}}" name="description"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10"><input type="number" value="{{$data->baseprice}}" name="baseprice" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">KM Price</label>
                                        <div class="col-sm-10"><input type="number" value="{{$data->kmprice}}" name="kmprice" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Capacity</label>
                                        <div class="col-sm-10"><input type="number" value="{{$data->capacity}}" name="capacity" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10"><input type="number" value="{{$data->capacity}}" name="capacity" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Detail</label>
                                        <div class="col-sm-10"><textarea  id="detail" name="detail" class="form-control">{{$data->detail}}</textarea>
                                        </div>
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
                                            <a href="/admin/transfer" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
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

<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'detail' );
</script>

@endsection
