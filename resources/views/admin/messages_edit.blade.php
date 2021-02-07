<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/{{ asset('assets/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900') }}">
<link href="{{ asset('assets') }}/admindir/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link href="{{ asset('assets') }}/admindir/css/style.css" rel="stylesheet">


<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                <h2 style="font-weight: bold">Message Detail</h2>
                @include('home.message')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">

                            <div class="ibox-content">
                                <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>

                                        <tr>
                                            <th>Id</th><td>{{ $data->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th><td>{{ $data->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th><td>{{ $data->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th><td>{{ $data->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Subject</th><td>{{ $data->subject }}</td>
                                        </tr>
                                        <tr>
                                            <th>Message</th><td>{{ $data->message }}</td>
                                        </tr>
                                        <tr>
                                            <th>Admin Note</th>
                                            <td><textarea  id="note" name="note" class="form-control">{{ $data->note }}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td><div class="form-group row">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                                </div>
                                            </div></td>
                                        </tr>

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
