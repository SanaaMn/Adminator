@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">

@if (Auth()->user()->role==10)
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>

@endif
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.projects') ? 'active' : '' }}" href="{{ route(ADMIN . '.projects.index') }}">
        <span class="icon-holder">
            <i class="c-green-500 ti-package"></i>
        </span>
        <span class="title">Projects</span>
    </a>

    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.tasks') ? 'active' : '' }}" href="{{ route(ADMIN . '.tasks.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-notepad"></i>
        </span>
        <span class="title">Tasks</span>
    </a>
</li>
