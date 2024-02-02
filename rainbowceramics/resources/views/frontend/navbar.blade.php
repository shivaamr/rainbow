<div class="main-navbar shadow-sm sticky-top">

    <div class="top-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <div class="row">
                        <div class="col-md-4"><img src="{{ asset('assets/img/logo.jpg') }}" style=""  alt="   {{  $appsetting->website_name ?? ''}}" >
                        </div>
                        <div class="col-md-8" style="padding: 0px;"> <h1 style="font-size: 20px;color:#fff;margin-top:60px;">{{  $appsetting->website_name ?? ''}}</h1></div>
                    </div>
                    <a class="navbar-brand" href="{{ url('/') }}">


                    </a>
                </div>
                <div class="col-md-3 my-auto">
                    <form action="{{ url('/search') }}" method="GET" role="search">
                        <div class="input-group">
                            <input type="search" value="{{ Request::get('search') }}" name="search" placeholder="Search your product" class="form-control" />
                            <button class="btn bg-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 my-auto">
                    <ul class="nav justify-content-end">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/cart')}}">
                                <i class="fa fa-shopping-cart"></i><livewire:frontend.cart.cart-count/>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/wishlists')}}">
                                <i class="fa fa-heart"></i> <livewire:frontend.wishlist-count/>
                            </a>
                        </li>

                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-bs-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i>  {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('/orders')}}"><i class="fa fa-list"></i> My Orders</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                   <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link scrollto active" href="{{ url('/')}}">Home</a>
                    </li>

                    <li class="nav-item"><a class="nav-link scrollto" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#services">Services</a></li>




                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/allcategories')}}">All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/new-arrivals')}}">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/featuredProducts')}}">Featured Products</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


