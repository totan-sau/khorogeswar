
<aside class="sigma_aside sigma_aside-left">

    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="assets/img/logo.png" alt="logo" style="height: 60px; max-width: 270px;"> 
    </a>

    <!-- Menu -->
    <ul>
      <li class="menu-item"><a class="@if(request()->segment(1) == '')active @endif" href="{{ route('home') }}">Home</a></li>
      <li class="menu-item"><a class="@if(request()->segment(1) == 'about-us')active @endif" href="{{ route('about-us') }}">About Us</a></li>
      <li class="menu-item"><a class="@if(request()->segment(1) == 'donation')active @endif" href="{{ route('donation') }}">Donation</a></li>
      <li class="menu-item">
        <a class="@if(request()->segment(1) == 'pujas')active @endif" href="{{ route('pujas') }}">Pujas</a>
      </li>
      <li class="menu-item">
        <a class="@if(request()->segment(1) == 'puja-videos')active @endif" href="{{ route('puja-videos') }}">Puja Videos</a>
      </li>
      <li class="menu-item"><a class="@if(request()->segment(1) == 'contact-us')active @endif" href="{{ route('contact-us') }}">Contact Us</a></li>
    </ul>

  </aside>
  <div class="sigma_aside-overlay aside-trigger-left"></div>
  <!-- partial -->

  <header class="sigma_header header-4 can-sticky header-absolute">

    <!-- Top Header Start -->
    <div class="sigma_header-top">
      <div class="container-fluid">
        <div class="sigma_header-top-inner">
          <ul class="sigma_header-top-links">
            <li class="menu-item"> <a href="tel:(+91) 7047975458"> <i class="fal fa-phone"></i> (+91) 7047975458</a> </li>
            <li class="menu-item"> <a href="mailto:sreesreekhargeswarjewmandir@gmail.com"> <i class="fal fa-envelope"></i>sreesreekhargeswarjewmandir@gmail.com</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <!-- Middle Header Start -->
    <div class="sigma_header-middle">
      <div class="container-fluid">
        <nav class="navbar">

          <!-- Logo Start -->
          <div class="sigma_logo-wrapper">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img src="assets/img/logo.png" alt="logo" style="height: 60px;">
            </a>
          </div>
          <!-- Logo End -->

          <!-- Menu -->
          <ul class="navbar-nav">
            <li class="menu-item"><a class="@if(request()->segment(1) == '')active @endif" href="{{ route('home') }}">Home</a></li>
            <li class="menu-item"><a class="@if(request()->segment(1) == 'about-us')active @endif" href="{{ route('about-us') }}">About Us</a></li>
            <li class="menu-item"><a class="@if(request()->segment(1) == 'donation')active @endif" href="{{ route('donation') }}">Donation</a></li>
            <li class="menu-item"><a class="@if(request()->segment(1) == 'pujas')active @endif" href="{{ route('pujas') }}">Pujas</a></li>            
            <li class="menu-item">
              <a class="@if(request()->segment(1) == 'puja-videos')active @endif" href="{{ route('puja-videos') }}">Puja Videos</a>
            </li>
            <li class="menu-item"><a class="@if(request()->segment(1) == 'contact-us')active @endif" href="{{ route('contact-us') }}">Contact Us</a></li>
          </ul>

          <!-- Controls -->
          <div class="sigma_header-controls style-2">

            <ul class="sigma_header-controls-inner">
              <!-- Mobile Toggler -->
              <li class="aside-toggler style-2 aside-trigger-left">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </li>
            </ul>

          </div>

        </nav>
      </div>
    </div>
    <!-- Middle Header End -->

  </header>
  <!-- partial -->
  <!-- Banner Start -->