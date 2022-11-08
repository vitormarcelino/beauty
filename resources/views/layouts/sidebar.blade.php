<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{!! route('home') !!}" class="brand-link logo-switch">
        <img src="{{ asset('img/logo-white.svg') }}"  class="brand-image-xs logo-xl" style="left: 25%" />
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="{{ route('admin.users.show',  [auth()->user()->id])}}" class="d-block"> {{ auth()->user()->name !=null ? auth()->user()->name : "Administrator"}}
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
