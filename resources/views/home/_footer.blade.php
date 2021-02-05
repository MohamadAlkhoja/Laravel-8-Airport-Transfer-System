@php

    $setting=App\Http\Controllers\HomeeController::getsetting();

@endphp

<!-- Footer Minimal-->
<footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
    <div class="container container-wide">
        <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left"><a href="{{route('homepage')}}"><img class="inverse-logo" src="{{ asset('assets/images/logo-inverse-208x46.png') }}" alt="" width="208" height="46"/></a></div>
            <div class="col-md-10 col-lg-7 col-xl-4">
                <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved. {{$setting->company}}</p>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
                <ul class="group-xs group-middle">
                    @if($setting->facebook !=null)<li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="{{$setting->facebook}}" target="_blank"></a></li>@endif
                    @if($setting->twitter !=null)<li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter" href="{{$setting->twitter}}" target="_blank"></a></li>@endif
                    @if($setting->instagram !=null)<li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="{{$setting->instagram}}" target="_blank"></a></li>@endif
                </ul>
            </div>
        </div>
    </div>
    <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
        <div class="rd-navbar-top-panel-inner">
            <ul class="list-inline">
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                    <ul class="list-comma">
                        <li><a href="tel:#">{{$setting->phone}}</a></li>
                    </ul>
                </li>
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">{{$setting->address}}</a></li>
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a href="mailto:#">{{$setting->email}}</a></li>
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-fax"></span><a href="mailto:#">{{$setting->fax}}</a></li>
            </ul>
        </div>
    </div>
</footer>
