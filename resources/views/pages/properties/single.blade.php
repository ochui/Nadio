@extends('frontend.layouts.app')

{{-- @section('styles')
<style>
    #map {
        height: 320px;
    }

    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .jssora106 {display:block;position:absolute;cursor:pointer;}
    .jssora106 .c {fill:#fff;opacity:.3;}
    .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
    .jssora106:hover .c {opacity:.5;}
    .jssora106:hover .a {opacity:.8;}
    .jssora106.jssora106dn .c {opacity:.2;}
    .jssora106.jssora106dn .a {opacity:1;}
    .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

    .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
    .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;box-sizing:border-box;z-index:1;}
    .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
    .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
    .jssort101 .p:hover{padding:2px;}
    .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
    .jssort101 .p:hover.pdn{padding:0;}
    .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
    .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
    .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
    .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
    .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
</style>
@endsection --}}

@section('content')

    <!-- SINGLE PROPERTY SECTION -->

    <main class="mt-5 main">
        <div class="container">
            <p>Home > Search > {{ $property->title }}</p>
            <div class="d-flex justify-content-between">
                <h3>{{ $property->title }}</h3>
            </div>
            <div class="d-flex justify-content-between">
                <h5>{{ $property->address }}, {{ $property->city }}</h5>
                <h5>₦{{ $property->price }}/ yr</h5>
            </div>

            @if(!$property->gallery->isEmpty())
                @include('pages.properties.slider')
            @else
                <div class="single-image">
                    @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                        <img src="{{Storage::url('property/'.$property->image)}}" alt="{{$property->title}}" class="imgresponsive">
                    @endif
                </div>
            @endif
            

                <div class="mt-4">
                  <nav style="width: 30%;"> 
                    <div class="nav nav-tabs" id="nav-tab" role="tablist" >
                      <a class="nav-item nav-link active" style="font-size: 14px;" id="nav-home-tab" data-toggle="tab" href="#nav-home"  role="tab" aria-controls="nav-home" aria-selected="true">Property Description</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" style="font-size: 14px;" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Contact Details</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="pt-3">
                        <div>

                          <h5>Property Description</h5>
                          {!! $property->description !!}
                        </div>
                        <h5>Property Details</h5>
                         <ul class="list-unstyled">
                             <li>Bedroom: {{ $property->bedroom}}</li>
                             <li>Bathroom: {{ $property->bathroom}}</li>
                             <li>Area: {{ $property->area}} Sq Ft</li>
                         </ul>
                        <div>
                          <h5>Property Furnitures</h5>
                          <ul class="list-unstyled">
                            @foreach($property->features as $feature)
                            <li>{{$feature->name}}</li>
                            @endforeach
                             {{-- <li>Wifi</li>
                             <li>Huge Parking Space</li>
                             <li>swimming pool</li>
                             <li>Bar</li> --}}
                          </ul>
                          {{-- <h5>Utilities</h5>
                          <ul class="list-unstyled">
                            <li>Water</li>
                            <li>Electricity</li>
                         </ul> --}}
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div>
                        <h5>Contact Details</h5>
                        <ul class="list-unstyled">
                          <li class="p-2"><span class="iconify" data-icon="ri:whatsapp-fill" data-inline="false"></span> 234818919919, 2348858858</li>
                          <li class="p-2"><span class="iconify" data-icon="carbon:phone-filled" data-inline="false"></span></span>234818919919, 2348858858</li>

                        </li>
                        </ul>
                      </div>
                      <div class="pt-3">
                        <h5>Reach Us Through Mail or Arrange a Tour</h5>
                        <form action="" method="POST" class="form-group contact-form">
                            @csrf
                            <input type="hidden" name="agent_id" value="{{ $property->user->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <input type="hidden" name="property_id" value="{{ $property->id }}">
                          <div class="row">
                            <div class="col-md-6">
                              <label for="name">Name</label>
                              <input name="name" class="form-control" type="name" placeholder="Your Name" name="" id="">
                              <label for="name">Number</label>
                              <input name="tel" class="form-control" type="phone" placeholder="Your Number" name="" id="">
                              <label for="email">Email</label>
                              <input name="email" class="form-control" type="email" placeholder="Your Email" name="" id="">

                            </div>
                            <div class="col-md-6">
                              <label for="message">Message</label>
                              <textarea name="message" class="form-control" placeholder="type your message here" id="" cols="50" rows="5"></textarea>
                              <button class="button purple-color-bg text-white mt-3" type="submit">
                                Submit
                              </button>
                            </div>
                          </div>
                      </form>
                      </div>
                    </div>
                  </div>
                  
                </div>

                {{-- <div class="mt-4">
                  <h4>Similar Available Hotels</h4>
                  <div class="owl-carousel carousel-two">

                    @foreach($relatedproperty as $property_related)
                    <li class="collection-item p-0">
                        <a href="{{ route('property.show',$property_related->id) }}">
                            <div class="card horizontal card-no-shadow m-0">
                                @if($property_related->image)
                                <div class="card-image">
                                    <img src="{{Storage::url('property/'.$property_related->image)}}"  class="imgresponsive">
                                </div>
                                @endif
                                <div class="card-stacked">
                                    <div class="p-l-10 p-r-10 indigo-text">
                                        <h6 title="{{$property_related->title}}">{{ str_limit( $property_related->title, 18 ) }}</h6>
                                        <strong>&dollar;</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <div class="div-card">
                        <div class="house-card">
                          <div>
                              <img src="{{Storage::url('property/'.$property_related->image)}}" class="img-fluid" alt="{{$property_related->title}}">
                          </div>
                            <div class="d-flex justify-content-between pt-3 grey-area">
                                <div>
                                  <div class="tag">For Rent</div>
                                    <p>{{$property_related->title}}</p>
                                    <p class="font-weight-bold">₦{{$property_related->price}}/year</p>
                                    <p>{{ $property_related->address }}, {{ $property_related->city }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('property.show',$property_related->id) }}" class="purple-color font-weight-bold">See Details</a>
                                </div>
                            </div>
                         </div> 
                      </div>
                    @endforeach
                    
                  </div>
                </div> --}}
        </div>
      </main>

    {{-- <section class="section">
        <div class="container">
            <div class="row"> --}}
                {{-- <div class="col s12 m8">
                    <div class="single-title">
                        <h4 class="single-title">{{ $property->title }}</h4>
                    </div>

                    <div class="address m-b-30">
                        <i class="small material-icons left">place</i>
                        <span class="font-18">{{ $property->address }}</span>
                    </div>

                    <div>
                        @if($property->featured == 1)
                            <a class="btn-floating btn-small disabled"><i class="material-icons">star</i></a>
                        @endif

                        <span class="btn btn-small disabled b-r-20">Bedroom: {{ $property->bedroom}} </span>
                        <span class="btn btn-small disabled b-r-20">Bathroom: {{ $property->bathroom}} </span>
                        <span class="btn btn-small disabled b-r-20">Area: {{ $property->area}} Sq Ft</span>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div>
                        <h4 class="left">${{ $property->price }}</h4>
                        <button type="button" class="btn btn-small m-t-25 right disabled b-r-20"> For {{ $property->purpose }}</button>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col s12 m8">

                    @if(!$property->gallery->isEmpty())
                        <div class="single-slider">
                            @include('pages.properties.slider')
                        </div>
                    @else
                        <div class="single-image">
                            @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                <img src="{{Storage::url('property/'.$property->image)}}" alt="{{$property->title}}" class="imgresponsive">
                            @endif
                        </div>
                    @endif

                    <div class="single-description p-15 m-b-15 border2 border-top-0">
                        {!! $property->description !!}
                    </div>

                    <div>
                        @if($property->features)
                            <ul class="collection with-header">
                                <li class="collection-header grey lighten-4"><h5 class="m-0">Features</h5></li>
                                @foreach($property->features as $feature)
                                    <li class="collection-item">{{$feature->name}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="card-no-box-shadow card">
                        <div class="p-15 grey lighten-4">
                            <h5 class="m-0">Floor Plan</h5>
                        </div>
                        <div class="card-image">
                            @if(Storage::disk('public')->exists('property/'.$property->floor_plan) && $property->floor_plan)
                                <img src="{{Storage::url('property/'.$property->floor_plan)}}" alt="{{$property->title}}" class="imgresponsive">
                            @endif
                        </div>
                    </div>

                    <div class="card-no-box-shadow card">
                        <div class="p-15 grey lighten-4">
                            <h5 class="m-0">Location</h5>
                        </div>
                        <div class="card-image">
                            <div id="map"></div>
                        </div>
                    </div>

                    @if($videoembed)
                        <div class="card-no-box-shadow card">
                            <div class="p-15 grey lighten-4">
                                <h5 class="m-0">Video</h5>
                            </div>
                            <div class="card-image center m-t-10">
                                {!! $videoembed !!}
                            </div>
                        </div>
                    @endif

                    <div class="card-no-box-shadow card">
                        <div class="p-15 grey lighten-4">
                            <h5 class="m-0">Near By</h5>
                        </div>
                        <div class="single-narebay p-15">
                            {!! $property->nearby !!}
                        </div>
                    </div>


                            
                        </div>
                    </div>

                </div> --}}
                {{-- End ./COL M8 --}}

                {{-- <div class="col s12 m4">
                    <div class="clearfix">

                        <div>
                            <ul class="collection with-header m-t-0">
                                <li class="collection-header grey lighten-4">
                                    <h5 class="m-0">Contact with Agent</h5>
                                </li>
                                <li class="collection-item p-0">
                                    @if($property->user)
                                        <div class="card horizontal card-no-shadow">
                                            <div class="card-image p-l-10 agent-image">
                                                <img src="{{Storage::url('users/'.$property->user->image)}}" alt="{{ $property->user->username }}" class="imgresponsive">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="p-l-10 p-r-10">
                                                    <h5 class="m-t-b-0">{{ $property->user->name }}</h5>
                                                    <strong>{{ $property->user->email }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-l-10 p-r-10">
                                            <p>{{ $property->user->about }}</p>
                                            <a href="{{ route('agents.show',$property->agent_id) }}" class="profile-link">Profile</a>
                                        </div>
                                    @endif
                                </li>

                                <li class="collection agent-message">
                                    <form class="agent-message-box" action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="agent_id" value="{{ $property->user->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                        <input type="hidden" name="property_id" value="{{ $property->id }}">
                                            
                                        <div class="box">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                        <div class="box">
                                            <input type="email" name="email" placeholder="Your Email">
                                        </div>
                                        <div class="box">
                                            <input type="number" name="phone" placeholder="Your Phone">
                                        </div>
                                        <div class="box">
                                            <textarea name="message" placeholder="Your Msssage"></textarea>
                                        </div>
                                        <div class="box">
                                            <button id="msgsubmitbtn" class="btn waves-effect waves-light w100 indigo" type="submit">
                                                SEND
                                                <i class="material-icons left">send</i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="collection with-header">
                                <li class="collection-header grey lighten-4">
                                    <h5 class="m-0">City List</h5>
                                </li>
                                @foreach($cities as $city)
                                    <li class="collection-item p-0">
                                        <a class="city-list" href="{{ route('property.city',$city->city_slug) }}">
                                            <span>{{ $city->city }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <ul class="collection with-header">
                                <li class="collection-header grey lighten-4">
                                    <h5 class="m-0">Related Properties</h5>
                                </li>
                                @foreach($relatedproperty as $property_related)
                                    <li class="collection-item p-0">
                                        <a href="{{ route('property.show',$property_related->id) }}">
                                            <div class="card horizontal card-no-shadow m-0">
                                                @if($property_related->image)
                                                <div class="card-image">
                                                    <img src="{{Storage::url('property/'.$property_related->image)}}" alt="{{$property_related->title}}" class="imgresponsive">
                                                </div>
                                                @endif
                                                <div class="card-stacked">
                                                    <div class="p-l-10 p-r-10 indigo-text">
                                                        <h6 title="{{$property_related->title}}">{{ str_limit( $property_related->title, 18 ) }}</h6>
                                                        <strong>&dollar;{{$property_related->price}}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div> --}}
            {{-- </div>

        </div>
    </section> --}}

    {{-- RATING --}}
    @php
        $rating = ($rating == null) ? 0 : $rating;
    @endphp

@endsection

@section('scripts')

    <script>
        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // RATING
            $("#rateYo").rateYo({
                rating: <?php echo json_encode($rating); ?>,
                halfStar: true,
                starWidth: "26px"
            })
            .on("rateyo.set", function (e, data) {

                var rating = data.rating;
                var property_id = <?php echo json_encode($property->id); ?>;
                var user_id = <?php echo json_encode( auth()->id() ); ?>;
                
                $.post( "{{ route('property.rating') }}", { rating: rating, property_id: property_id, user_id: user_id }, function( data ) {
                    if(data.rating.rating){
                        M.toast({html: 'Rating: '+ data.rating.rating + ' added successfully.', classes:'green darken-4'})
                    }
                });
            });
            

            // COMMENT
            $(document).on('click','#commentreplay',function(e){
                e.preventDefault();
                
                var commentid = $(this).data('commentid');

                $('#procomment-'+commentid).empty().append(
                    `<div class="comment-box">
                        <form action="{{ route('property.comment',$property->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="parent" value="1">
                            <input type="hidden" name="parent_id" value="`+commentid+`">
                            
                            <textarea name="body" class="box" placeholder="Leave a comment"></textarea>
                            <input type="submit" class="btn indigo" value="Comment">
                        </form>
                    </div>`
                );
            });

            // MESSAGE
            $(document).on('submit','.agent-message-box',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('property.message') }}";
                var btn = $('#msgsubmitbtn');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('LOADING...<i class="material-icons left">rotate_right</i>');
                    },
                    success: function(data) {
                        if (data.message) {
                            M.toast({html: data.message, classes:'green darken-4'})
                        }
                    },
                    error: function(xhr) {
                        M.toast({html: xhr.statusText, classes: 'red darken-4'})
                    },
                    complete: function() {
                        $('form.agent-message-box')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('SEND<i class="material-icons left">send</i>');
                    },
                    dataType: 'json'
                });

            })
        })
    </script>


    <script>
        function initMap() {
            var propLatLng = {
                lat: <?php echo $property->location_latitude; ?>,
                lng: <?php echo $property->location_longitude; ?>
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: propLatLng
            });

            var marker = new google.maps.Marker({
                position: propLatLng,
                map: map,
                title: '<?php echo $property->title; ?>'
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRLaJEjRudGCuEi1_pqC4n3hpVHIyJJZA&callback=initMap">
    </script>
@endsection