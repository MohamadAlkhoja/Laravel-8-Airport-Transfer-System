<style>


    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        visibility: visible;
        z-index: 100;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>

<!-- Page-->
    <!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap rd-navbar-corporate">
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
             data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
             data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand-name" href="{{route('homepage')}}">
                            <img class="logo-default" src="{{ asset('assets/images/logo-default-208x46.png') }}" alt="" width="208" height="46"/>
                            <img class="logo-inverse" src="{{ asset('assets/images/logo-inverse-208x46.png') }}" alt="" width="208" height="46"/></a></div>
                </div>
                <div class="rd-navbar-aside-center">
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="{{route('homepage')}}">Home</a>
                            </li>
                            @php
                                $parentCategories=\App\Http\Controllers\HomeeController::categoryList();
                            @endphp

                            <li class="dropdown"><a href="#">Our Transfers</a>
                                <ul class="dropdown-content">
                                    @foreach($parentCategories as $rs)
                                        <li><a href="{{route('categorytransfers',['id'=>$rs->id,'slug'=>$rs->title])}}" title="Service List">{{$rs->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('aboutus')}}">About Us</a>
                            </li>
                            <li><a href="{{route('contact')}}">Contacts</a>
                            </li>
                            <li><a href="{{route('references')}}">References</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @auth
                    <div class="rd-navbar-aside-right"><li class="has-sub"><a class="button button-sm button-secondary button-nina" href="{{route('myprofile')}}" >{{Auth::user()->name}}</a>
                            <a class="button button-sm button-nina" href="{{route('logout')}}">Logout</a>

                    </li></div>
                @else
                    <div class="rd-navbar-aside-right"><li class="has-sub"><a class="button button-sm button-secondary button-nina" href="{{route('login')}}" title="Blog ">LOGIN</a> <a class="button button-sm button-secondary button-nina" href="/register" >Register</a>


                    </li></div>

                @endauth
            </div>
        </nav>
    </div>
</header>
