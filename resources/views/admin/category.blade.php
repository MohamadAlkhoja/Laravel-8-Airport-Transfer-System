@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Categories</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Category</strong>
            </li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">

                <div class="row">
                    <div class="col-sm-6">
                        <h3 style="font-weight: bold">Category List</h3>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('admin_category_add')}}" class="btn btn-primary" style="width: 250px"><i class="fa fa-plus"></i> &nbsp Add Category</a>
                    </div>
                </div>
                <div>
                    <p></p>
                </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">


                                <div class="ibox-content">
                                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr class="gradeX">
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->parent_id }}</td>
                                            <td>{{ $rs->title }}</td>
                                            <td class="center">{{ $rs->status }}</td>
                                            <td class="center"></td>
                                            <td class="center"><a href="{{route('admin_category_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are You Sure?')">Delete</a></td>
                                        </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- /table-responsive -->





            </div>
        </div>
    </div>


@endsection

@section('footer')
<script src="{{ asset('assets') }}/admindir/js/jquery-3.1.1.min.js"></script>
<script src="{{ asset('assets') }}/admindir/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/admindir/js/bootstrap.js"></script>
<script src="{{ asset('assets') }}/admindir/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{ asset('assets') }}/admindir/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- FooTable -->
<script src="{{ asset('assets') }}/admindir/js/plugins/footable/footable.all.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('assets') }}/admindir/js/inspinia.js"></script>
<script src="{{ asset('assets') }}/admindir/js/plugins/pace/pace.min.js"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();

    });

</script>
@endsection
