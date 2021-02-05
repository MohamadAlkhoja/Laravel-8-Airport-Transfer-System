@extends('layouts.admin')

@section('title', 'Edit Setting')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Edit Setting</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Edit Setting</strong>
            </li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                <h3>Edit Setting Form</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">

                            <div class="ibox-content">
                                <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$data->id}}" name="id" id="id" class="form-control">
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
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Company</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->company}}" name="company" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->address}}" name="address" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10"><input type="number" value="{{$data->phone}}" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">fax</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->fax}}" name="fax" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->email}}" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Smtpserver</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->smtpserver}}" name="smtpserver" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Smtpemail</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->smtpemail}}" name="smtpemail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Smtppassword</label>
                                        <div class="col-sm-10"><input type="password" value="{{$data->smtppassword}}" name="smtppassword" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Smtpport</label>
                                        <div class="col-sm-10"><input type="number" value="{{$data->smtpport}}" name="smtpport" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->facebook}}" name="facebook" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Twitter</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->twitter}}" name="twitter" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10"><input type="text" value="{{$data->instagram}}" name="instagram" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">About us</label>
                                        <div class="col-sm-10"><textarea  id="aboutus" name="aboutus" class="form-control">{{$data->aboutus}}</textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Contact</label>
                                        <div class="col-sm-10"><textarea  id="contact" name="contact" class="form-control">{{$data->contact}}</textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">References</label>
                                        <div class="col-sm-10"><textarea  id="references" name="references" class="form-control">{{$data->references}}</textarea>
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
                                            <a href="/admin/setting" class="btn btn-white btn-sm" type="submit">Cancel</a>
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
    CKEDITOR.replace( 'aboutus' );
    CKEDITOR.replace( 'contact' );
    CKEDITOR.replace( 'references' );
</script>

@endsection
