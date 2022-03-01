<div id="app">
<div id="sidebar" class="active">
<div class="sidebar-wrapper active">
<div class="sidebar-header">
<div class="d-flex justify-content-between">
<div class="logo">
    <a href="/store"><img src="{{asset('assets/seller/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
</div>
<div class="toggler">
    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
</div>
</div>
</div>
<div class="sidebar-menu">
<ul class="menu">
<li class="sidebar-title">Menu</li>

<li
    class="sidebar-item {{ (\Request::route()->getName() == 'store.index') ? 'active' : '' }} ">
    <a href="{{route('store.index')}}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item  has-sub {{ (\Request::route()->getName() == 'products.create') || (\Request::route()->getName() == 'products.index') ? 'active' : '' }}">
    <a href="{{route('store.index')}}" class='sidebar-link'>
        <i class="bi bi-basket2-fill"></i>
        <span>Products</span>
    </a>
    <ul class="submenu ">
        <li class="submenu-item ">
            <a href="{{route('products.index')}}">Manage Products</a>
        </li>
        <li class="submenu-item ">
            <a href="{{route('products.create')}}">Add Products</a>
        </li>
    </ul>
</li>

<li
    class="sidebar-item  has-sub {{ (\Request::route()->getName() == 'store.orders') ? 'active' : '' }}">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-card-checklist"></i>
        <span>Orders</span>
    </a>
    <ul class="submenu ">
        <li class="submenu-item ">
            <a href="#">New Orders</a>
        </li>
        <li class="submenu-item ">
            <a href="#">Processsing</a>
        </li>
        <li class="submenu-item ">
            <a href="#">Item for Pick-up</a>
        </li>
        <li class="submenu-item ">
            <a href="#">Shipping</a>
        </li>
        
        
    </ul>
</li>

<li
    class="sidebar-item {{ (\Request::route()->getName() == 'store.sales') ? 'active' : '' }}">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-collection-fill"></i>
        <span>Sales Report</span>
    </a>
</li>


<li class="sidebar-title">Settings</li>

<li
    class="sidebar-item {{ (\Request::route()->getName() == 'store.settings') ? 'active' : '' }} ">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-person-fill"></i>
        <span>Profile</span>
    </a>
</li>

<li
    class="sidebar-item {{ (\Request::route()->getName() == 'store.user_management') ? 'active' : '' }} ">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-people-fill"></i>
        <span>User Management</span>
    </a>
</li>

<li
    class="sidebar-item {{ (\Request::route()->getName() == 'store.account_settings') ? 'active' : '' }} ">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-gear-fill"></i>
        <span>Account Settings</span>
    </a>
</li>

<li
    class="sidebar-item  ">
    <a href="{{route('logout')}}" class='sidebar-link' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-door-closed-fill"></i>
        <span>Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>

</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>
<div id="main">
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>