<html>
<head>
    <title>Image Gallery</title>
    <link href="{{ asset('assets') }}/admindir/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admindir/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('assets') }}/admindir/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('assets') }}/admindir/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="{{ asset('assets') }}/admindir/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admindir/css/style.css" rel="stylesheet">

</head>
<body>


<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                <h3>Transfer : {{$data->title}}</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">

                            <div class="ibox-content">
                                <form action="{{route('admin_image_store', ['transfer_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

                                        <div class="col-sm-10"><input type="text" name="title" class="form-control"></div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10"><input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <a href="/admin/Image" class="btn btn-white btn-sm" type="submit">Cancel</a>
                                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                        </div>
                                    </div>

                                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th style="" >&nbsp&nbsp&nbsp&nbsp Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($images as $rs)
                                            <tr class="gradeX">
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td class="center">
                                                    @if($rs->image)
                                                        <img src ="{{ Storage::url($rs->image) }}" height="60" width="80">
                                                    @endif
                                                </td>
                                                <td class="center"><a href="{{route('admin_image_delete', ['id'=> $rs->id,'transfer_id'=>$data->id])}}" onclick="return confirm('The Record Will Delete ! Are You Sure?')">
                                                        <img src="{{asset('assets/admindir/img/delete.png')}}" style="height: 25px; width: 25px"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>
