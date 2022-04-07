<header>
  <h1>Blog en Laravel</h1>
  <ul>
    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ route('galleries.index') }}" class="{{ request()->routeIs('galleries.*') ? 'active' : '' }}">Galerías</a>
    </li>
    <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>{{-- @dump(request()->routeIs('nosotros')) --}}</li>
  </ul>
</header>