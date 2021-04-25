<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Nadio</a>
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
        <!-- <button
          class="btn purple-color-bg text-white my-2 my-sm-0 pr-5 pl-5"
          type="submit"
        >
          Signin
        </button> -->
      </div>
    </div>
  </nav>

  <div class="land">
    <div class="container d-flex justify-content-between">
      <div class=" text-left col-md-6 col-sm-12">
        <h1>{{$page}}</h1>
        <p>
          Selected houses, apartments available in nigeria lagos, abuja and
          more cities. Newly built and furnished properties, rent easily
          Online. Subscribe To E-Updates.
        </p>
        <!-- <button class="btn cta-btn">GET STARTED</button> -->
      </div>
      
    </div>
  </div>
</header>