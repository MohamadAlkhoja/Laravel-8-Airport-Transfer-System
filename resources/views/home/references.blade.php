@extends('layouts.home')

@section('title', 'References'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom" style="background: url(&quot;images/breadcrumbs-bg.jpg&quot;); background-size: cover;">
        <div class="container">
            <p class="breadcrumbs-custom-subtitle"></p>
            <p class="heading-1 breadcrumbs-custom-title">References</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/home">Home</a></li>
                <li class="active">References</li>
            </ul>
        </div>
    </section>

    <!-- hi, we are brave-->
    <section class="section section-lg bg-default">
        <div class="container container-bigger">
            <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                {!! $setting->references !!}
            </div>
        </div>
    </section>


@endsection
