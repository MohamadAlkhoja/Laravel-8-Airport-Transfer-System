@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Transfers</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Contact Messages</strong>
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
                        <h3 style="font-weight: bold">Message List</h3>
                        @include('home.message')
                    </div>
                    <div class="col-sm-6 text-right">
                        @include('home.message')
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Admin Note</th>
                                            <th>Status</th>
                                            <th style="" colspan="3">&nbsp&nbsp&nbsp&nbsp Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr class="gradeX">
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->name }}</td>
                                            <td>{{ $rs->email }}</td>
                                            <td>{{ $rs->phone }}</td>
                                            <td>{{ $rs->subject }}</td>
                                            <td>{{ $rs->message }}</td>
                                            <td>{{ $rs->note }}</td>
                                            <td>{{ $rs->status }}</td>
                                            <td class="center"><a href="{{route('admin_message_edit',['id'=> $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')">
                                                    <img src="{{asset('assets/admindir/img/edit2.png')}}" style="height: 25px; width: 25px"></a>
                                            </td>
                                            <td class="center"><a href="{{route('admin_message_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are You Sure?')">
                                                    <img src="{{asset('assets/admindir/img/delete.png')}}" style="height: 25px; width: 25px"></a></td>
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
