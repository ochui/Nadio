@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

<section>
          
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="contact-us" action="" method="POST" method="POST" class="form-group contact-form">
                    <input type="hidden" name="mailto" value="{{ $contactsettings[0]['email'] ?? '' }}">
                    @csrf
                    @auth
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    @endauth
                    <label for="name">Name</label>
                    <input name="name" class="form-control" type="name" placeholder="Your Name" name="" id="">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Your Email" name="" id="">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" placeholder="type your message here" id="" cols="50" rows="10"></textarea>
                    <button class="button purple-color-bg text-white mt-3" type="submit">
                      Submit
                    </button>
                </form>
            </div>
            <div class="col-md-6">
              <div class="row">
                  <div class="col-md-6">
                      <h5 class="font-weight-bold">Our  Address</h5>
                      <p>
                          Plot 47, K line Ewet housing
                          Estate, Uyo, Nigeria
                      </p>
                  </div>
                  <div class="col-md-6">
                      <h5 class="font-weight-bold">Phone Lines</h5>
                      <p>+234 908 378 1815</p>
                      <p>+234 908 378 1815</p>
                  </div>
              </div>
              <h5 class="font-weight-bold">Follow Us On Social
                  Media</h5>
                      <ul class="list-unstyled d-flex">
                          <li class="p-2"><span class="iconify" data-icon="carbon:phone-filled" data-inline="false"></span></span></li>
                          <li class="p-2"><span class="iconify" data-icon="bx:bxl-telegram" data-inline="false"></span></li>
                          <li class="p-2"><span class="iconify" data-icon="ri:whatsapp-fill" data-inline="false"></span></li>
                          <li class="p-2"><span class="iconify" data-icon="codicon:twitter" data-inline="false"></span></li>
                      </ul>
            </div>
        </div>
    </div>
</section>


    {{-- <section class="section">
        <div class="container">
            <div class="row">

                <div class="col s12 m8">
                    <div class="contact-content">
                        <h4 class="contact-title">Contact Us</h4>

                        <form >
                            @csrf
                            <input type="hidden" name="mailto" value="{{ $contactsettings[0]['email'] }}">

                            @auth
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            @endauth

                            @auth
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input id="name" name="name" type="text" class="validate" value="{{ auth()->user()->name }}" readonly>
                                    <label for="name">Name</label>
                                </div>
                            @endauth
                            @guest
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input id="name" name="name" type="text" class="validate">
                                    <label for="name">Name</label>
                                </div>
                            @endguest

                            @auth
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail</i>
                                    <input id="email" name="email" type="email" class="validate" value="{{ auth()->user()->email }}" readonly>
                                    <label for="email">Email</label>
                                </div>
                            @endauth
                            @guest
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail</i>
                                    <input id="email" name="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            @endguest

                            <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                                <input id="phone" name="phone" type="number" class="validate">
                                <label for="phone">Phone</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            
                            <button id="msgsubmitbtn" class="btn waves-effect waves-light indigo darken-4 btn-large" type="submit">
                                <span>SEND</span>
                                <i class="material-icons right">send</i>
                            </button>

                        </form>

                    </div>
                </div> <!-- /.col -->

                <div class="col s12 m4">
                    <div class="contact-sidebar">
                        <div class="m-t-30">
                            <i class="material-icons left">call</i>
                            <h6 class="uppercase">Call us Now</h6>
                            @if(isset($contactsettings[0]) && $contactsettings[0]['phone'])
                                <h6 class="bold m-l-40">{{ $contactsettings[0]['phone'] }}</h6>
                            @endif
                        </div>
                        <div class="m-t-30">
                            <i class="material-icons left">mail</i>
                            <h6 class="uppercase">Email Address</h6>
                            @if(isset($contactsettings[0]) && $contactsettings[0]['email'])
                                <h6 class="bold m-l-40">{{ $contactsettings[0]['email'] }}</h6>
                            @endif
                        </div>
                        <div class="m-t-30">
                            <i class="material-icons left">map</i>
                            <h6 class="uppercase">Address</h6>
                            @if(isset($contactsettings[0]) && $contactsettings[0]['address'])
                                <h6 class="bold m-l-40">{!! $contactsettings[0]['address'] !!}</h6>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

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