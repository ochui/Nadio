{{-- <div class="navbar-fixed">
    <nav class="indigo darken-4">
        <div class="container">
            <div class="nav-wrapper">

                <a href="{{ route('home') }}" class="brand-logo">
                    @if(isset($navbarsettings[0]) && $navbarsettings[0]['name'])
                        {{ $navbarsettings[0]['name'] }}
                    @else
                        Real State
                    @endif
                    <i class="material-icons left">location_city</i>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                
                <ul class="right hide-on-med-and-down">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="{{ Request::is('property*') ? 'active' : '' }}">
                        <a href="{{ route('property') }}">Properties</a>
                    </li>

                    <li class="{{ Request::is('agents*') ? 'active' : '' }}">
                        <a href="{{ route('agents') }}">Agents</a>
                    </li>

                    <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery') }}">Gallery</a>
                    </li>

                    <li class="{{ Request::is('blog*') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>

                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>

                    @guest
                        <li><a href="{{ route('login') }}"><i class="material-icons">input</i></a></li>
                        <li><a href="{{ route('register') }}"><i class="material-icons">person_add</i></a></li>
                    @else
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-auth-frontend">
                                {{ ucfirst(Auth::user()->username) }}
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <ul id="dropdown-auth-frontend" class="dropdown-content">
                            <li>
                                @if(Auth::user()->role->id == 1)
                                    <a href="{{ route('admin.dashboard') }}" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                @elseif(Auth::user()->role->id == 2)
                                    <a href="{{ route('agent.dashboard') }}" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                @elseif(Auth::user()->role->id == 3)
                                    <a href="{{ route('user.dashboard') }}" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                @endif
                            </li>
                            <li>
                                <a class="dropdownitem indigo-text" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">power_settings_new</i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('home') }}">Home</a>
        </li>

        <li class="{{ Request::is('property*') ? 'active' : '' }}">
            <a href="{{ route('property') }}">Properties</a>
        </li>

        <li class="{{ Request::is('agents*') ? 'active' : '' }}">
            <a href="{{ route('agents') }}">Agents</a>
        </li>

        <li class="{{ Request::is('gallery') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}">Gallery</a>
        </li>

        <li class="{{ Request::is('blog*') ? 'active' : '' }}">
            <a href="{{ route('blog') }}">Blog</a>
        </li>

        <li class="{{ Request::is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>

</div> --}}

<header>
       

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faqs.html">FAQs</a>
          </li>
        </ul>
        <div class="signup-btn-cont my-2 my-lg-0">
          <!-- <button
            class="btn purple-color-bg text-white my-2 my-sm-0 pr-5 pl-5"
            type="submit"
          >
            Signin
          </button> -->
        </div>
      </div>
    </nav>
  

  <div class="land" style="height:auto;">
    <div class="container  land-wrap ">
      <div class="land-text  text-left">
        <h1>Find Houses and Book Hotel Rooms With No Difficulties.</h1>
        <p>
          Selected houses, apartments available in nigeria lagos, abuja and
          more cities. Newly built and furnished properties, rent easily
          Online. Subscribe To E-Updates.
        </p>
        <div class="mx-auto text-center btn-inline">
          <a href="find-house.html">
            <button class="button purple-color-bg m-2  land-btn text-white" type="submit">
              Find Houses
            </button>
          </a>
          <a href="find-hotel.html">
            <button class="button purple-color-bg land-btn m-2 text-white" type="submit">
              Find Hotels
            </button>
          </a>

        </div>
        <!-- <button class="btn cta-btn">GET STARTED</button> -->
      </div>
      <div class="mx-auto land-form">
        <form action="find-house.html"  class="form-group form-search">
          <div class="d-flex">
            <img src="assets/search.svg" class="icon-img" alt="">
            <input
              type="text"
              class="form-control pl-4"
              placeholder="UYO"
              name=""
              id=""
            />
          </div>
          <div class="d-flex">
            <img src="assets/house-icon.svg" width="25px" class="icon-img" alt="">
            <select class="form-control pl-5" id="exampleFormControlSelect1">
              <option>Property Type</option>
              <option>RENT</option>
              <option>SALE</option>
            </select>
          </div>
          
          <div class="d-flex">
            <img src="assets/tag.svg" class="icon-img"  alt="">
            <select class="form-control pl-5" id="exampleFormControlSelect1">
              <option>Property  Category</option>
              <option>Villas</option>
              <option>Luxury Flats</option>
              <option>Office</option>
              <option>Complex</option>
              <option>Lands</option>
            </select>
          </div>
          <a href="find-house.html">
            <button class=" button purple-color-bg text-white">
              Search
            </button>
          </a>
          <figcaption>

            <a class="text-center purple-color" href="find-hotel.html"> Advanced</a>
          </figcaption>
        </form>
      </div>
    </div>
  </div>
</header>