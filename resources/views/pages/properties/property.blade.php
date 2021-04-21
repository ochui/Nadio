@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')


    <main class="mt-4 main">
        <div class="container">
            <p>Home > Properties > Houses</p>
            <div class="row">
                @foreach($properties as $property)
                <div class="col-md-6">
                    <div class="house-card">
                        <div>
                            <img src="{{ Storage::url('property/' . $property->image) }}" class="img-fluid" alt="" />
                        </div>
                        <div class="d-flex justify-content-between pt-3 grey-area">
                            <div>
                                <div class="tag">For {{ ucfirst($property->purpose) }}</div>
                                <p>{{ $property->title }}</p>
                                <p class="font-weight-bold">₦{{ $property->price }}/year</p>
                                <p>{{ ucfirst($property->address) }}, {{ ucfirst($property->city) }}</p>
                            </div>
                            <div>
                                <a href="{{ route('property.show', $property->slug) }}">
                                    <p class="purple-color font-weight-bold">See Details</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
           

            <div class="mx-auto text-center the-paginate" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </main>

    {{-- <section class="section">
        <div class="container">

            <div class="row">
                <h4 class="section-heading">Properties</h4>
            </div>

            <div class="row">
                <div class="city-categories">
                    @foreach ($cities as $city)
                        <div class="col s12 m3">
                            <a href="{{ route('property.city', $city->city_slug) }}">
                                <div class="city-category">
                                    <span>{{ $city->city }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">

                @foreach ($properties as $property)
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                @if (Storage::disk('public')->exists('property/' . $property->image) && $property->image)
                                    <span class="card-image-bg"
                                        style="background-image:url({{ Storage::url('property/' . $property->image) }});"></span>
                                @else
                                    <span class="card-image-bg"><span>
                                @endif
                                @if ($property->featured == 1)
                                    <a class="btn-floating halfway-fab waves-effect waves-light indigo"><i
                                            class="small material-icons">star</i></a>
                                @endif
                            </div>
                            <div class="card-content property-content">
                                <a href="{{ route('property.show', $property->slug) }}">
                                    <span class="card-title tooltipped" data-position="bottom"
                                        data-tooltip="{{ $property->title }}">{{ str_limit($property->title, 18) }}</span>
                                </a>

                                <div class="address">
                                    <i class="small material-icons left">place</i>
                                    <span>{{ ucfirst($property->city) }}</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">language</i>
                                    <span>{{ ucfirst($property->address) }}</span>
                                </div>

                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>{{ ucfirst($property->type) }}</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>For {{ ucfirst($property->purpose) }}</span>
                                </div>

                                <h5>
                                    &dollar;
                                    <div class="right" id="propertyrating-{{ $property->id }}"></div>
                                </h5>
                            </div>
                            <div class="card-action property-action">
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bedroom: <strong>{{ $property->bedroom }}</strong>
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bathroom: <strong>{{ $property->bathroom }}</strong>
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Area: <strong>{{ $property->area }}</strong> Square Feet
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">comment</i>
                                    <strong>{{ $property->comments_count }}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="m-t-30 m-b-60 center">
                {{ $properties->links() }}
            </div>

        </div>
    </section> --}}

@endsection

@section('scripts')

    <script>
        $(function() {
            var js_properties = <?php echo json_encode($properties); ?>;        js_properties.data.forEach(element => {
                if (element.rating) {
                    var elmt = element.rating;
                    var sum = 0;
                    for (var i = 0; i < elmt.length; i++) {
                        sum += parseFloat(elmt[i].rating);
                    }
                    var avg = sum / elmt.length;
                    if (isNaN(avg) == false) {
                        $("#propertyrating-" + element.id).rateYo({
                            rating: avg,
                            starWidth: "20px",
                            readOnly: true
                        });
                    } else {
                        $("#propertyrating-" + element.id).rateYo({
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
