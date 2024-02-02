       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>-->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{Request::is('admin/dashboard') ? 'active':''}}">
                <a class="nav-link" href="{{url('admin/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{Request::is('admin/category') ? 'active':''}} ">
                <a class="nav-link collapsed"
                href="#category" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="{{Request::is('admin/category') ? 'true':'false'}}" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Category</span>
                </a>
                <div id="collapseTwo" class="collapse {{Request::is('admin/category') ? 'show':''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{url('admin/category/create')}}">Add Category</a>
                        <a class="collapse-item" href="{{ url('admin/category')}}">View Category</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Colors</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                          <a class="collapse-item" href="{{url('admin/color/create')}}">Add Colors</a>
                        <a class="collapse-item" href="{{url('admin/color')}}">View Colors</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproducts"
                    aria-expanded="true" aria-controls="collapseproducts">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Products</span>
                </a>
                <div id="collapseproducts" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{url('admin/products/create')}}">Add Product</a>
                        <a class="collapse-item" href="{{url('admin/products')}}">View Product</a>

                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
       <!-- Nav Item - Charts -->
       <li class="nav-item ">
        <a class="nav-link" href="{{url('admin/settings')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Site Settings</span></a>
    </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item {{Request::is('admin/sliders') ? 'active':''}}">
                <a class="nav-link" href="{{url('admin/sliders')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Home Sliders</span></a>
            </li>
            <hr class="sidebar-divider">


<!-- Nav Item - Charts -->
<li class="nav-item {{Request::is('admin/orders') ? 'active':''}}">
    <a class="nav-link" href="{{url('admin/orders')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Orders</span></a>
</li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Users</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{url('admin/users/create')}}">Add User</a>
                        <a class="collapse-item" href="{{url('admin/users')}}">View User</a>

                    </div>
                </div>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->

        </ul>
