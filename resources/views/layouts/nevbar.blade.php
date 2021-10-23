<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">Creative Tim</a>
</div>
<div class="sidebar-wrapper">
<ul class="nav">
    <li class="nav-item {{ request()->is('*content*') ? 'active' : '' }}
">
        <a class="nav-link" href="{{route('admin.main')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <!-- <li class="nav-item {{ request()->is('*profile*') ? 'active' : '' }}
">
        <a class="nav-link" href="{{route('admin.showprofile')}}">
            <i class="material-icons">person</i>
            <p>Admin Profile</p>
        </a>
    </li> -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="material-icons">content_paste</i>
            <p>User Table List</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.details.index') }}">
            <i class="material-icons">content_paste</i>
            <p>User Persnal Details</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./typography.html">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.notification') }}">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    <!-- <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
        </a>
    </li> -->
</ul>