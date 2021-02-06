@extends('layouts.home')

@section('title', $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')

    <section class="section section-variant-1 bg-default novi-background bg-cover">
        <div class="container container-wide">

        </div>
    </section>

@endsection


