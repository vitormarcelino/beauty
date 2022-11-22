<li class="nav-item">
    <a href="{!! route('home') !!}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{!! route('patients.index') !!}" class="nav-link {{ Request::is('patients*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Pacientes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{!! route('services.index') !!}" class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-glass-cheers"></i>
        <p>Serviços</p>
    </a>
</li>
