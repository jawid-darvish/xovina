
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h2><i class="bi bi-pie-chart-fill" ></i></h2>
         <h1 class="sitename"> Forex Trading </h1>
      </a>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Forex Signals</a></li>
              <li><a href="#">Forex Books</a></li>
              <li><a href="#">Forex Videos</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
    
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="{{ route('sign-in') }}">  <i class="bi bi-door-open color-pink flex-shrink-0" ></i> Sign-In</a>

      <a class="btn-getstarted flex-md-shrink-0" href="{{ route('sign-up') }}">Sign-Up</a>


    </div>
  </header>

  @if(!request()->is(['sign-up','sign-in','contact']))
  @include('layouts.header-slide')
  @endif

  