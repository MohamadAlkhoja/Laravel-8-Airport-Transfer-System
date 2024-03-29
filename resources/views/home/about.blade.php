@extends('layouts.home')

@section('title', 'About Us'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom" style="background: url(&quot;images/breadcrumbs-bg.jpg&quot;); background-size: cover;">
        <div class="container">
            <p class="breadcrumbs-custom-subtitle">Who We Are</p>
            <p class="heading-1 breadcrumbs-custom-title">About Us</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/home">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </section>

    <!-- hi, we are brave-->
    <section class="section section-lg bg-default">
        <div class="container container-bigger">
            <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </section>


@endsection
