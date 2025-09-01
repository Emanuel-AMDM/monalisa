<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <h1>MonalisaScolari<span>.</span></h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <li>
          <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Início</a>
        </li>
        <li>
          <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Sobre</a>
        </li>
        <li><a href="{{url('/shop')}}" class="{{ request()->is('shop') ? 'active' : '' }}">Desapego</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="dropdown"><a href="#" class="{{ request()->is('services/cupons') ? 'active' : '' }}"><span>Services</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{ url('/services/cupons') }}">Cupons</a></li>
            {{-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li> --}}
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->