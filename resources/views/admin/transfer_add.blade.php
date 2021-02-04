@extends('layouts.admin')

@section('title', 'Add Transfer')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Add Transfer</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Add Transfer</strong>
            </li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                <h3>Add Transfer Form</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">

                            <div class="ibox-content">
                                <form action="{{route('admin_transfer_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Parent</label>

                                        <div class="col-sm-10"><select class="form-control m-b" name="category_id">
                                                @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}">{{ $rs->title }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

                                        <div class="col-sm-10"><input type="text" name="title" class="form-control"></div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Keyword</label>
                                        <div class="col-sm-10"><input type="text" name="keywords" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Description</label>

                                        <div class="col-sm-10"><input type="text" class="form-control" name="description"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10"><input type="text" value="0.00" name="baseprice" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">KM Price</label>
                                        <div class="col-sm-10"><input type="text" value="0.00" name="kmprice" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Capacity</label>
                                        <div class="col-sm-10"><input type="text" value="0" name="capacity" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10"><input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Detail</label>
                                        <div class="col-sm-10"><textarea  id="details" name="detail" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>

                                        <div class="col-sm-10"><select class="form-control m-b" name="status">
                                                <option selected="selected">False</option>
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
