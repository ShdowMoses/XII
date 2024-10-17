<!-- =========================
    Header
=========================== -->
<header class="header header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ url('solatec/assets/images/logo/LOGO.png') }}" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav">
                    <li class="nav__item">
                        <a href="{{ url('/') }}" class="nav__item-link">Beranda</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{ url('article') }}" class="nav__item-link">Blog</a>
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->

            @auth
            <div class="user-profile ml-2 mr-0 dropdown">
                <a class="profile-nav d-flex align-items-center" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="b-r-10"
                         src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=5a983f&color=fff"
                         width="40px" alt="User Avatar">
                    <div class="media-body ml-2">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                        <p class="mb-0 font-roboto">
                            User <i class="middle fa fa-angle-down"></i>
                        </p>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i> Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endauth

            @guest
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li>
                    <a href="{{ url('http://127.0.0.1:8000/register') }}" class="btn btn__primary">
                        <span>Daftar</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="{{ url('http://127.0.0.1:8000/login') }}" class="btn btn__primary">
                        <span>Masuk</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </li>
            </ul>
            @endguest<!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</header><!-- /.Header -->
