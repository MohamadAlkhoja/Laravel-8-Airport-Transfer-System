@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

    <section class="section section-variant-1 bg-default novi-background bg-cover">
        <div class="container container-wide">
            <div class="row row-50">
                    <div class="col-md-3 col-xl-2">
                        <article class="event-default-wrap">

                            <div class="event-default">
                                <h1 style="text-decoration: underline ; font-weight: bold">User Panel</h1><br/>
                                <ul>

                                    <li>
                                        <h5><a class="event-default-title" style="font-weight: bold" href="{{route('myprofile')}}"> My Profile</a></h5><br/>
                                    </li>
                                    <li>
                                        <h5><a class="event-default-title" style="font-weight: bold" href="#"> My Reservations</a></h5><br/>
                                    </li>
                                    <li>
                                        <h5><a class="event-default-title" style="font-weight: bold" href="#"> My Reviews</a></h5><br/>
                                    </li>
                                    <li>
                                        <h5><a class="event-default-title" style="font-weight: bold" href="#"> My Messages</a></h5><br/>
                                    </li>
                                    <li>
                                        <h5><a class="event-default-title" style="font-weight: bold" href="{{route('admin_logout')}}"> Logout</a></h5><br/>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-9 col-xl-9">

                                @include('profile.show')
                    </div>


                </div>
        </div>
    </section>

@endsection
