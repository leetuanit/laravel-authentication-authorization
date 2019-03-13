<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ $setting['sitename'] }}</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item -->
  @foreach($menus as $menu)
    @can('view-'.$menu->name)
      <li class="nav-item">
        <a class="nav-link" href="{{route($menu->route)}}">
          <i class="{{$menu->icon_class}}"></i>
          <span>{{$menu->title}}</span></a>
      </li>
    @endcan
  @endforeach
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>