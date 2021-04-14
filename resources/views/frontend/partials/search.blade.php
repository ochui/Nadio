
<!-- SEARCH SECTION -->

<div class="mx-auto land-form">
    <form action="{{ route('search')}} " method="GET"  class="form-group form-search">
      <div class="d-flex">
        <img src="{{asset('rex/assets/search.svg')}}" class="icon-img" alt="">
        <input
          type="text"
          class="form-control pl-4"
          placeholder="UYO"
          name="city"
          id=""
        />
      </div>
      <div class="d-flex">
        <img src="{{asset('rex/assets/house-icon.svg')}}" width="25px" class="icon-img" alt="">
        <select class="form-control pl-5" name="purpose" id="exampleFormControlSelect1">
          <option>Property Type</option>
          <option>RENT</option>
          <option>SALE</option>
        </select>
      </div>
      
      <div class="d-flex">
        <img src="{{asset('rex/assets/tag.svg')}}" class="icon-img"  alt="">
        <select class="form-control pl-5" name="type" id="exampleFormControlSelect1">
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

{{-- <section class="indigo darken-2 white-text center">
    <div class="container">
        <div class="row m-b-0">
            <div class="col s12">

                <form action="{{ route('search')}} " method="GET">

                    <div class="searchbar">
                        <div class="input-field col s12 m3">
                            <input type="text" name="city" id="autocomplete-input" class="autocomplete custominputbox" autocomplete="off">
                            <label for="autocomplete-input">Enter City or State</label>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="type" class="browser-default">
                                <option value="" disabled selected>Choose Type</option>
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="purpose" class="browser-default">
                                <option value="" disabled selected>Purpose</option>
                                <option value="rent">Rent</option>
                                <option value="sale">Sale</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="bedroom" class="browser-default">
                                <option value="" disabled selected>Bedroom</option>
                                @if(isset($bedroomdistinct))
                                    @foreach($bedroomdistinct as $bedroom)
                                        <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <input type="text" name="maxprice" id="maxprice" class="custominputbox">
                            <label for="maxprice">Max Price</label>
                        </div>
                        
                        <div class="input-field col s12 m1">
                            <button class="btn btnsearch waves-effect waves-light w100" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section> --}}