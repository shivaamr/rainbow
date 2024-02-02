<div class="main-navbar shadow-sm sticky-top" style="margin-top: 20px;border-radius: 20px;">
    <div class="top-navbar" style="margin-top: 20px;border-radius: 20px 0px 0px 0px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-7 my-auto">
                        <form action="{{ url('search') }}" method="GET" role="search">
                            <div class="input-group">
                                <input type="search" value=""{{ Request::get('search') }}" name="search" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-white" type="submit" style="margin-left: 0px;                               /* border: 1px solid; */
                                border: 1px solid #ced4da;
                                border-left: none;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                </div>
                <div class="col-md-5 my-auto">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                                <a class="nav-link" href="{{url('/cart')}}">
                                    <i class="fa fa-shopping-cart"></i> Cart (<livewire:mainhome.cart.cart-count/>)
                                </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{url('/wishlist')}}">
                                    <i class="fa fa-heart"></i> Wishlist (<livewire:mainhome.wishlist-count/>)
                                </a>
                        </li>
                    <li>
                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <a class="navbar-brand" href="{{ url('/') }}"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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

                        <ul class="navbar-nav ml-auto">

   <li class="nav-item dropdown no-arrow">
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href=" {{ url( '/profile'  )}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                              Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </li>

                        </ul>



                        @endguest
                    </ul>


                    </div>
                </div>
            </div>
        </div>











        <nav class="navbar navbar-expand-lg" style="padding: 0px;background-color: #ddd;">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Store
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/collections')}}">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/new-arrivals')}}">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/featuredProducts')}}">Featured Products</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
