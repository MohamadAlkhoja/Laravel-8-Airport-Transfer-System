<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('assets') }}/admindir/img/profile_small.jpg"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"><a href="#" >{{Auth::user()->name}}</a></span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li>
                <a href="{{route('admin_category')}}"><i class="fa fa-list"></i> <span class="nav-label">Category</span></a>
            </li>
            <li>
                <a href="{{route('admin_transfers')}}"><i class="fa fa-globe"></i> <span class="nav-label">Transfers</span></a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}"><i class="fa fa-cog"></i> <span class="nav-label">Settings </span></a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Contact Message </span></a>
            </li>
            <li>
                <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
            </li>
            <li>
                <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
            </li>

        </ul>

    </div>
</nav>
