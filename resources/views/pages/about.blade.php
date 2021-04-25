@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

<section class="" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
              <h5 class="opening-head">ABOUT OUR AGENCY</h5>
            <h4>
                Who are We
            </h4>
            <hr class="about-line">
            <p>
              Selected houses, apartments available in nigeria lagos, abuja
              and more cities. Newly built and furnished properties, rent
              easily Online. Subscribe To E-Update s.Selected houses,
              apartments available in nigeria lagos, abuja and more cities.
              Newly built and furnished properties, rent easily Online.
            </p>
            <button class="button purple-color-bg text-white" type="submit">
              Learn More
            </button>
          </div>
        </div>
        <div class="col-md-6">
          <div>
            <img src="{{asset('rex/assets/about.png')}}" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
              <h5 class="opening-head">ABOUT OUR AGENCY</h5>
            <h4>
                Our Services
            </h4>
            <hr class="about-line">
            <p>
                If you feel content, you're satisfied and happy. The content of a book, movie,
                 or song is what it's about: the topic. This word has two main meanings.
                The first has to do with being pleased and satisfied (feeling content) or making someone else feel happy and at peace with things (contenting them).
                
            </p>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-list">
              <ul class="row list-unstyled">
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Events and Rentals
                  </li>
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Events and Rentals
                  </li>
              </ul>
              <ul class="row list-unstyled mt-4">
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Delivery
                  </li>
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Delivery
                  </li>
              </ul>
              <ul class="row list-unstyled mt-4">
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Hustling Things
                  </li>
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Hustling Things
                  </li>
              </ul>
              <ul class="row list-unstyled mt-4">
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Nothing Come Out
                  </li>
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Nothing Come Out
                  </li>
              </ul>
              <ul class="row list-unstyled mt-4">
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Like so much
                  </li>
                  <li class="col-md-6">                       
                    <span class="iconify mr-2" data-icon="teenyicons:tick-circle-outline" data-inline="false"></span>Like so much
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
              <h5 class="opening-head">ABOUT OUR AGENCY</h5>
            <h4>
                We Have an Amazing Team 
                Always Ready to Deliver
            </h4>
            <hr class="about-line">
            <p>
              Selected houses, apartments available in nigeria lagos, abuja
              and more cities. Newly built and furnished properties, rent
              easily Online. Subscribe To E-Update s.Selected houses,
              apartments available in nigeria lagos, abuja and more cities.
              Newly built and furnished properties, rent easily Online.
            </p>
            <button class="button purple-color-bg text-white" type="submit">
              Learn More
            </button>
          </div>
        </div>
        <div class="col-md-6">
          <div>
            <img src="{{asset('rex/assets/group.png')}}" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('scripts')
    <script>
        $('textarea#message').characterCounter();

        $(function(){
            $(document).on('submit','#contact-us',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('contact.message') }}";
                var btn = $('#msgsubmitbtn');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('<span>LOADING...</span><i class="material-icons right">rotate_right</i>');
                    },
                    success: function(data) {
                        if (data.message) {
                            M.toast({html: data.message, classes:'green darken-4'})
                        }
                    },
                    error: function(xhr) {
                        M.toast({html: 'ERROR: Failed to send message!', classes: 'red darken-4'})
                    },
                    complete: function() {
                        $('form#contact-us')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('<span>SEND</span><i class="material-icons right">send</i>');
                    },
                    dataType: 'json'
                });

            })
        })

    </script>
@endsection