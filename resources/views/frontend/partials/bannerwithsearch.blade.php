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
       

          @include('frontend.partials.nav')

          
        <div class="signup-btn-cont my-2 my-lg-0">
          <button
            class="btn purple-color-bg text-white my-2 my-sm-0 pr-5 pl-5"
            type="submit"
          >
            Signin
          </button> 
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
      @include('frontend.partials.search') 
    </div>
  </div>
</header>