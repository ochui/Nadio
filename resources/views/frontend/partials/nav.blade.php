<ul class="navbar-nav ml-auto">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
    </li>
{{-- 
    <li class="nav-item {{ Request::is('property*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('property') }}">Properties</a>
    </li>

    <li class="nav-item {{ Request::is('agents*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('agents') }}">Agents</a>
    </li>

    <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
    </li> --}}

    <li class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('about') }}">About Us</a>
    </li>

    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
    </li>

    <li class="nav-item {{ Request::is('faq') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
    </li>
</ul>