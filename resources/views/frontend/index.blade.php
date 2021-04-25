@extends('frontend.layouts.app')

@section('content')


<section class="" id="about">
    <div class="container" style="padding: 30px;">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div>
            <h4>
              We Connect You To Hotels and Houses With The Best Rates Around
              You
            </h4>
            <p>
              Selected houses, apartments available in nigeria lagos, abuja
              and more cities. Newly built and furnished properties, rent
              easily Online. Subscribe To E-Update s.Selected houses,
              apartments available in nigeria lagos, abuja and more cities.
              Newly built and furnished properties, rent easily Online.
            </p>
            <a class="button purple-color-bg text-white" href="{{route('about')}}">
              Learn More
            </a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="pt-2">
            <img src="{{asset('rex/assets/Rectangle.png')}}" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- 
    <!-- SERVICE SECTION -->

    <section class="section grey lighten-4 center">
        <div class="container">
            <div class="row">
                <h4 class="section-heading">Services</h4>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large indigo-text">{{ $service->icon }}</i>
                            <h5>{{ $service->title }}</h5>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}


    <!-- FEATURED SECTION -->

    {{-- <section class="section">
        <div class="container">
            <div class="row">
                <h4 class="section-heading">Featured Properties</h4>
            </div>
            <div class="row">

                @foreach($properties as $property)
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                    <span class="card-image-bg" style="background-image:url({{Storage::url('property/'.$property->image)}});"></span>
                                @else
                                    <span class="card-image-bg"><span>
                                @endif
                                @if($property->featured == 1)
                                    <a class="btn-floating halfway-fab waves-effect waves-light indigo" title="Featured"><i class="small material-icons">star</i></a>
                                @endif
                            </div>
                            <div class="card-content property-content">
                                <a href="{{ route('property.show',$property->slug) }}">
                                    <span class="card-title tooltipped" data-position="bottom" data-tooltip="{{ $property->title }}">{{ str_limit( $property->title, 18 ) }}</span>
                                </a>

                                <div class="address">
                                    <i class="small material-icons left">location_city</i>
                                    <span>{{ ucfirst($property->city) }}</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">place</i>
                                    <span>{{ ucfirst($property->address) }}</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>{{ ucfirst($property->type) }} for {{ $property->purpose }}</span>
                                </div>

                                <h5>
                                    &dollar;{{ $property->price }}
                                    <div class="right" id="propertyrating-{{$property->id}}"></div>
                                </h5>
                            </div>
                            <div class="card-action property-action">
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bedroom: <strong>{{ $property->bedroom}}</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bathroom: <strong>{{ $property->bathroom}}</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Area: <strong>{{ $property->area}}</strong> Square Feet
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">comment</i> 
                                    <strong>{{ $property->comments_count}}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section> --}}

    <section>
        <div class="container">
          <div class="d-flex split-text m-4 justify-content-between">
            <h4>200+ Properties Near You</h4>
            <a href="find-house.html" class="text-dark">
              <h4>See All</h4>
            </a>
          </div>

          <div class="row justify-content-around">
            @foreach($properties as $property)
            <div class="property-card col-md-3 col-sm-12">
              <div class="mx-auto">

                <img
                  src="{{Storage::url('property/'.$property->image)}}"
                  class="img-fluid property-img"
                  alt=""
                />
              </div>
              <div class="property-info-two">
                <div class="tag">{{ $property->purpose }}</div>
                <p></p>
                <p class="font-weight-bold">₦{{ $property->price }}/year</p>
                <p>{{ ucfirst($property->address) }}, {{ ucfirst($property->city) }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </section>


    <section>
      <div class="container">
        <div class="d-flex m-4 split-text justify-content-between">
          <h4>Popular Hotels In Your Location</h4>
          <a href="find-hotel.html" class="text-dark">
            <h4>See All</h4>
          </a>
        </div>

        <div class="row justify-content-around">
          <div class="property-card col-md-3 col-sm-12">
            <img
              src="assets/property-card.png"
              class="img-fluid property-img"
              alt=""
            />
            <div class="property-info-two">
              <p class="font-weight-bold">Monty Hotels and Suites</p>
              <p>Edet Akpan Avenue, Uyo</p>
              <p class="">
                #4,000 <span style="font-size: 9px">Avg/night</span>
              </p>
            </div>
          </div>
          <div class="property-card col-md-3 col-sm-12 ">
            <img
              src="{{asset('rex/assets/assets/property-card.png')}}"
              class="img-fluid property-img"
              alt=""
            />
            <div class="property-info-two">
              <p class="font-weight-bold">Monty Hotels and Suites</p>
              <p>Edet Akpan Avenue, Uyo</p>
              <p class="">
                #4,000 <span style="font-size: 9px">Avg/night</span>
              </p>
            </div>
          </div>
          <div class="property-card col-md-3 col-sm-12">
            <img
              src="assets/property-card.png"
              class="img-fluid property-img"
              alt=""
            />
            <div class="property-info-two">
              <p class="font-weight-bold">Monty Hotels and Suites</p>
              <p>Edet Akpan Avenue, Uyo</p>
              <p class="">
                #4,000 <span style="font-size: 9px">Avg/night</span>
              </p>
            </div>
          </div>
          <!-- <div class="property-card col-md-3 col-sm-12">
            <img
              src="assets/property-card.png"
              class="img-fluid property-img"
              alt=""
            />
            <div class="property-info-two">
              <p class="font-weight-bold">Monty Hotels and Suites</p>
              <p>Edet Akpan Avenue, Uyo</p>
              <p class="">
                #4,000 <span style="font-size: 9px">Avg/night</span>
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section style="height:auto;"> 
      <div class="container">
        <div class="results">
          <div class="ht1">
            <h3>
              We Connect You To Hotels and Houses With The Best Rates Around
              You
            </h3>
          </div>

          <div class="ht2">
            <img src="{{asset('rex/assets/grid-pic.png')}}" class="img-fluid" />
          </div>

          <div class="ht3">
            <img src="{{asset('rex/assets/beaut.png')}}" class="img-fluid" />
          </div>

          <div class="ht4">
            <p>
              houses, apartments available in nigeria lagos, abuja and more
              cities. Newly built and furnished properties, rent easily
              Online. Subscribe To E-Updates.Selected houses, apartments
              available in nigeria lagos, abuja and more cities. Newly built
              and furnished properties, rent easily Onl ine. nigeria lagos,
              abuja and more cities. Newly built and furnished properties,
              rent easily Online. Subscribe
            </p>
            <a class="button purple-color-bg text-white" href="{{route('about')}}">
              Learn More
            </a>
          </div>
        </div>
      </div>
    </section>


    <section class="container">
      <div class=" mt-4" >
        <h4 class="split-text">Popular Eateries Around You</h4>
        <div id="around" class="slide" data-ride="carousel" data-interval="10000">

          <!-- Indicators -->
          <!-- <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul> -->

          <!-- <ol class="carousel-indicators">
            <li data-target="#around" data-slide-to="0" class="active-slide"></li>
            <li data-target="#around" data-slide-to="1"></li>
            <li data-target="#around" data-slide-to="2"></li>
          </ol> -->
          
          <!-- The slideshow -->
          
          
        </div>
            <div class="owl-carousel carousel-one">
              
              <div class="div-card">
                <div class="house-card">
                  <div>
                      <img src="{{asset('rex/assets/bedroom.png')}}" class="img-fluid" alt="">
                  </div>
                    <div class="d-flex justify-content-between pt-3 grey-area">
                        <div>
                          <div class="tag">Eatery</div>
                            <p></p>
                            <p class="font-weight-bold">Crunches and fried chicken</p>
                            <p>Edet Akpan Avenue, Uyo</p>
                        </div>
                        
                    </div>
                  </div> 
              </div> 
              <div class="div-card">
                <div class="house-card">
                  <div>
                      <img src="{{asset('rex/assets/bedroom.png')}}" class="img-fluid" alt="">
                  </div>
                    <div class="d-flex justify-content-between pt-3 grey-area">
                        <div>
                          <div class="tag">Eatery</div>
                            <p></p>
                            <p class="font-weight-bold">Crunches and fried chicken</p>
                            <p>Edet Akpan Avenue, Uyo</p>
                        </div>
                        
                    </div>
                  </div> 
              </div> 
              <div class="div-card">
                <div class="house-card">
                  <div>
                      <img src="{{asset('rex/assets/bedroom.png')}}" class="img-fluid" alt="">
                  </div>
                    <div class="d-flex justify-content-between pt-3 grey-area">
                        <div>
                          <div class="tag">Eatery</div>
                            <p></p>
                            <p class="font-weight-bold">Crunches and fried chicken</p>
                            <p>Edet Akpan Avenue, Uyo</p>
                        </div>
                        
                    </div>
                  </div> 
              </div> 
              <div class="div-card">
                <div class="house-card">
                  <div>
                      <img src="{{asset('rex/assets/bedroom.png')}}" class="img-fluid" alt="">
                  </div>
                    <div class="d-flex justify-content-between pt-3 grey-area">
                        <div>
                          <div class="tag">Eatery</div>
                            <p></p>
                            <p class="font-weight-bold">Crunches and fried chicken</p>
                            <p>Edet Akpan Avenue, Uyo</p>
                        </div>
                        
                    </div>
                  </div> 
              </div> 
              <div class="div-card">
                <div class="house-card">
                  <div>
                      <img src="{{asset('rex/assets/bedroom.png')}}" class="img-fluid" alt="">
                  </div>
                    <div class="d-flex justify-content-between pt-3 grey-area">
                        <div>
                          <div class="tag">Eatery</div>
                            <p></p>
                            <p class="font-weight-bold">Crunches and fried chicken</p>
                            <p>Edet Akpan Avenue, Uyo</p>
                        </div>
                        
                    </div>
                  </div> 
              </div> 
              

              
            </div>
      </div>
    </section>


    <!-- TESTIMONIALS SECTION -->
    <section class="container">
        <div class="mt-4">
          <h4 class="text-center fon-weight-bold">What Our Users are saying</h4>
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <!-- <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul> -->

            <ol class="carousel-indicators">
            @foreach($testimonials as $testimonial)
              <li data-target="#demo" data-slide-to="{{$testimonial->id}}" class="active-slide"></li>
            @endforeach
            </ol>
            
            <!-- The slideshow -->
            <div class="container carousel-inner no-padding">
            
            @foreach($testimonials as $testimonial)
              @if ($testimonial->id == 1)
              <div class="carousel-item active">
              @else
              <div class="carousel-item"> 
              @endif
                <div class="col-md-12">
                  <div class="mt-5">
                    <div class="text-center p-3" >
                      <img src="{{Storage::url('testimonial/'.$testimonial->image)}}" alt="{{$testimonial->name}}">
                    </div>
                    <div class="text-center p-3" >
                      <h5 class="p-3">{{$testimonial->name}}</h5>
                      <i class="p-3">User</i>
                      <p class="p-3">“{{$testimonial->testimonial}}”</p>
                    </div>
                  </div>
                </div>      
              </div>

              @endforeach

             
              
            </div>
            
            
          </div>
        </div>
      </section>



    <!-- BLOG SECTION -->

    

@endsection

@section('scripts')
<script>
    $(function(){
        var js_properties = <?php echo json_encode($properties);?>;
        js_properties.forEach(element => {
            if(element.rating){
                var elmt = element.rating;
                var sum = 0;
                for( var i = 0; i < elmt.length; i++ ){
                    sum += parseFloat( elmt[i].rating ); 
                }
                var avg = sum/elmt.length;
                if(isNaN(avg) == false){
                    $("#propertyrating-"+element.id).rateYo({
                        rating: avg,
                        starWidth: "20px",
                        readOnly: true
                    });
                }else{
                    $("#propertyrating-"+element.id).rateYo({
                        rating: 0,
                        starWidth: "20px",
                        readOnly: true
                    });
                }
            }
        });
    })
</script>
@endsection