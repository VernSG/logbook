<ul class="menu-inner py-1">
  <!-- Dashboard -->
  <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}" class="menu-link">
      <i class="menu-icon tf-icons ri-home-line"></i>
      <div>Dashboard</div>
    </a>
  </li>

  <!-- Logbook -->
  <li class="menu-item {{ request()->is('logbook/*') ? 'active open' : '' }}">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons ri-book-2-line"></i>
      <div>Logbook</div>
    </a>
    <ul class="menu-sub">
      @foreach ($units as $unit)
        <li class="menu-item {{ request()->is("logbook/$unit->id*") ? 'active' : '' }}">
          <a href="{{ url("logbook/$unit->id/dashboard") }}" class="menu-link">
            <div>{{ strtoupper($unit->nama) }}</div>
          </a>
        </li>
      @endforeach
    </ul>
  </li>

  <!-- Damage Data -->
  <li class="menu-item {{ request()->is('logbook/9*') ? 'active' : '' }}">
    <a href="{{ url('/logbook/9/dashboard') }}" class="menu-link">
      <i class="menu-icon tf-icons ri-database-2-line"></i>
      <div>Damage Data</div>
    </a>
  </li>

  <!-- Manage Section -->
  <li class="menu-header mt-5">
    <span class="menu-header-text">MANAGE</span>
  </li>
  <li class="menu-item {{ request()->is('manage/tools') ? 'active' : '' }}">
    <a href="{{ url('/manage/tools') }}" class="menu-link">
      <i class="menu-icon tf-icons ri-tools-line"></i>
      <div>Manage Tools</div>
    </a>
  </li>
  <li class="menu-item {{ request()->is('manage/position') ? 'active' : '' }}">
    <a href="{{ url('/manage/position') }}" class="menu-link">
      <i class="menu-icon tf-icons ri-briefcase-4-line"></i>
      <div>Manage Position</div>
    </a>
  </li>

  <!-- User Section -->
  <li class="menu-header mt-5">
    <span class="menu-header-text">USER</span>
  </li>
  <li class="menu-item {{ request()->is('manage/users') ? 'active' : '' }}">
    <a href="{{ url('/manage/users') }}" class="menu-link">
      <i class="menu-icon tf-icons ri-user-settings-line"></i>
      <div>Manage Users</div>
    </a>
  </li>

  <!-- Logout -->
  <li class="menu-header mt-5">
    <span class="menu-header-text">LOGOUT</span>
  </li>
  <li class="menu-item">
    <a href="{{ route('logout') }}" class="menu-link"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="menu-icon tf-icons ri-logout-box-line"></i>
        <div>Logout</div>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </li>
</ul>
