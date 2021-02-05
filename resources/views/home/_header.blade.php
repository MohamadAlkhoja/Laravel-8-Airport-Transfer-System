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
                    <div class="rd-navbar-brand"><a class="brand-name" href="{{route('homepage')}}"><img class="logo-default" src="{{ asset('assets/images/logo-default-208x46.png') }}" alt="" width="208" height="46"/>
                            <img class="logo-inverse" src="{{ asset('assets/images/logo-inverse-208x46.png') }}" alt="" width="208" height="46"/></a></div>
                </div>
                <div class="rd-navbar-aside-center">
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="{{route('homepage')}}">Home</a>
                            </li>
                            <li><a href="{{route('aboutus')}}">About Us</a>
                            </li>
                            <li><a href="{{route('contact')}}">Contacts</a>
                            </li>
                            <li><a href="{{route('references')}}">Typography</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @auth
                    <div class="rd-navbar-aside-right"><li class="has-sub"><a class="button button-sm button-secondary button-nina" href="#" title="Blog ">{{Auth::user()->name}}</a><a class="button button-sm button-nina" href="{{route('admin_logout')}}">Logout</a>

                    </li></div>
                @else
                    <div class="rd-navbar-aside-right"><li class="has-sub"><a class="button button-sm button-secondary button-nina" href="{{route('admin_login')}}" title="Blog ">LOGIN</a> <a class="button button-sm button-secondary button-nina" href="/register" >Register</a>


                    </li></div>

                @endauth
            </div>
        </nav>
    </div>
</header>
