@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <form action="/package/1" method="post">
                        @csrf
                        <button type="submit">1</button>
                    </form>   
                    <form action="/package/2" method="post">
                        @csrf
                        <button type="submit">2</button>
                    </form>    
                    <form action="/package/3" method="post">
                        @csrf
                        <button type="submit">3</button>
                    </form>    
                    <form action="/package/4" method="post">
                        @csrf
                        <button type="submit">4</button>
                    </form>    
                    <form action="/package/5" method="post">
                        @csrf
                        <button type="submit">5</button>
                    </form>    
                    <form action="/package/6" method="post">
                        @csrf
                        <button type="submit">6</button>
                    </form>    
                    <form action="/package/7" method="post">
                        @csrf
                        <button type="submit">7</button>
                    </form>    
                    <form action="/package/8" method="post">
                        @csrf
                        <button type="submit">8</button>
                    </form>    
                    <form action="/package/9" method="post">
                        @csrf
                        <button type="submit">9</button>
                    </form>    
                    <form action="/package/10" method="post">
                        @csrf
                        <button type="submit">10</button>
                    </form>   
                    @if(auth()->check())
                    <a href="/ordered">Ordered Packages</a>
                    @if(auth()->user()->id == 1)
                    <a href="/users">Users</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}

    


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('storage/assets/img/dest1-boracay.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h4 class="text-white text-uppercase mb-md-3">Boracay</h4>
                            <h1 class="display-3 text-white mb-md-4">LIVE Your Adventure: Every Journey is a Story</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 text-white">See More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('storage/assets/img/dest1-tokyo.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tokyo</h4>
                            <h1 class="display-3 text-white mb-md-4">PIVOT Your Perspective: Travel Beyond Bounds</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 text-white">See More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('storage/assets/img/dest1-cebu.png')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h4 class="text-white text-uppercase mb-md-3">Cebu</h4>
                            <h1 class="display-3 text-white mb-md-4">LIBOT Kahit Saan: Discover New Places</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 text-white">See More</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('storage/assets/img/hiking.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Libot with Liv<span class="text-primary">ot</span>:<br> Pivot your journey, <br> Live the adventure!</h1>
                        <p>At Livot, we believe in embracing the spirit of adventure while seamlessly adapting to the pivoting landscapes of travel. With a commitment to providing unparalleled experiences, we craft each itinerary to encompass the essence of libot - the Filipino term for exploration. Whether you're seeking off-the-beaten-path adventures or luxurious escapes, Livot is your ultimate partner in discovering the world's wonders. </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('storage/assets/img/about-1.jpg')}}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('storage/assets/img/about-2.jpg')}}" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1 text-white">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Libot Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest1-aurora.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Baler, Aurora</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Persons</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/aurora">Aurora Advocate out po si Julian</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>5.0 daw po sabi ni <small>(Julian)</small></h6>
                                    <h5 class="m-0">$250</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest1-boracay.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Boracay, Aklan</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Persons</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/boracay">Experience the finest white sand in the Philippines</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(999+)</small></h6>
                                    <h5 class="m-0">$1000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest2-cebu.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Cebu, Cebu</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>2 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/cebu">Visit the heart of Visayas with a 2-day tour</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small>(598)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest1-hongkong.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Hong Kong</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>3 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/hongkong">Feel the nightlife and shop like never before</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.0 <small>(722)</small></h6>
                                    <h5 class="m-0">$2250</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest2-kuala.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Kuala Lumpur</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/kuala">Explore the city and delve into Malaysia's nature</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4 <small>(279)</small></h6>
                                    <h5 class="m-0">$2750</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest1-puerto.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Puerto Princesa</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/puerto">Take a dive in the underground rivers</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$850</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest1-siargao.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sigargao</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/siargao">Surf's out while the sun's out in Surigao del Norte </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(449)</small></h6>
                                    <h5 class="m-0">$550</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest2-singapore.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Singapore</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/singapore">Feel like a crazy rich Asian? Splurge in Singapore</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>3.9 <small>(173)</small></h6>
                                    <h5 class="m-0">$5050</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest1-taipei.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Taipei</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/taipei">Start your Taiwanese food crawl now!</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(203)</small></h6>
                                    <h5 class="m-0">$850</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/assets/img/dest2-tokyo.png')}}" alt="" style="height:250px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Tokyo</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="feature/tokyo">Immerse in the Japanese culture today in Tokyo</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.8 <small>(556)</small></h6>
                                    <h5 class="m-0">$2350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection
