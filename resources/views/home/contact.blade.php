@extends('layouts.home')

@section('title', 'contact'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom" style="background: url(&quot;images/breadcrumbs-bg.jpg&quot;); background-size: cover;">
        <div class="container">
            <p class="breadcrumbs-custom-subtitle">Get in Touch with Us</p>
            <p class="heading-1 breadcrumbs-custom-title">Contact</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/home">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </section>

    <!-- hi, we are brave-->

    <section class="section section-lg bg-default">
        <div class="container container-bigger">
            <div class="col-sm-6 col-lg-3">
                <h3>Contact Information</h3>
                <hr class="divider divider-left divider-secondary">
            </div>
            <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">

                {!! $setting->contact !!}


            </div>
        </div>
    </section>

    <!-- Contact us-->
    <section class="section section-wrap bg-gray-lighter novi-background bg-cover">
        <div class="section-wrap-inner">
            <div class="container container-bigger">
                <div class="row row-fix row-50">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-wrap-content section-lg">
                            <h3>Contact us</h3>
                            <hr class="divider divider-left divider-secondary">
                            <p class="big">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally.</p>
                            <!-- RD Mailform-->
                            @include('home.message')
                            <form class="rd-mailform" method="post" action="{{route('sendmessage')}}">
                                @csrf
                                <div class="row row-fix row-20">
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label-outside" for="form-1-name">Full Name</label>
                                            <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label-outside" for="form-1-last-name">E-mail</label>
                                            <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label-outside" for="form-1-phone">Phone Number</label>
                                            <input class="form-input" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label-outside" for="form-1-phone">Subject</label>
                                            <input class="form-input" id="form-1-subject" type="text" name="subject" data-constraints=" @Required"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label-outside" for="form-1-message">Message</label>
                                            <textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 offset-custom-1">
                                        <div class="form-button">
                                            <button class="button button-secondary button-nina" type="submit">send message</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-wrap-aside">
                <!-- RD Google Map-->
                <div class="google-map-container google-map-with-icon rd-google-map__model" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                     data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},
                     {&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},
                     {&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},
                     {&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;
                     :[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;
                     ,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                    <div class="google-map"></div>
                    <ul class="google-map-markers">
                        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
