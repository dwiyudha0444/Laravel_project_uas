

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php?hal=home" class="logo">
                            <img src="{{asset('assets/images/logo1.png')}}" alt="Yudha">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ url('/home1')}}" >Home</a></li>
                            <li><a href="{{ url('/daftar_film')}}" >Daftar Film</a></li>
                            @if(Auth::user()->role == 'admin')
                            <li><a href="{{ url('/administrator')}}">Dashboard</a></li>
                            @endif
                            <li class="has-sub">
                                <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                <ul class="sub-menu">
                                    <li><a href="">Profile</a></li>
                                    <li>
                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                       <i class="bi bi-box-arrow-right"></i> {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->