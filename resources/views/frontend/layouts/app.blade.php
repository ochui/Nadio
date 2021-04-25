<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Real Estate') }}</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- google fonts -->

    <link ref="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" ntegrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('rex/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('rex/css/view.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('rex/css/bootstrap.min.css') }}" /> --}}
    <!-- carousel -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    @yield('styles')
    
</head>

    <body>
        
        {{-- SLIDER SECTION --}}
        @if(Request::is('/') || Request::is('property*'))
            @include('frontend.partials.bannerwithsearch')
        @else
            {{-- MAIN NAVIGATION BAR --}}
            @include('frontend.partials.bannernosearch')
        @endif

        {{-- SEARCH BAR --}}
        {{-- @include('frontend.partials.search') --}}
        
        {{-- MAIN CONTENT --}}
        <div class="">
            @yield('content')
        

        {{-- FOOTER --}}
        @include('frontend.partials.footer')

        </div>
        <!--JavaScript at end of body for optimized loading-->
        {{-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> --}}

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
        <script src="{{ asset('rex/js/main.js')}}"></script>
{{-- 
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/materialize.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script> --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}','Error',{
                        closeButtor: true,
                        progressBar: true 
                    });
                @endforeach
            @endif
        </script>

        @yield('scripts')


    </body>
  </html>