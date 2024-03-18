@extends('layouts.app')

@section('content')
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-white text-uppercase" style="letter-spacing: 5px;">ULTRA MEGA Offer</h6>
                    <h1 class="text-white"><span class="text-primary">90% OFF</span> For Honeymoon</h1>
                </div>
                <p class="text-white">All honeymoon packages are now 90-percent off! They will be featuring 90% less amenities and activities in your itinerary for the same price! What a great way to spent your post-wedding money, if there's still some.</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Airfare included</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Trip to anywhere for two</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Filled with romantic activities</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h1 class="text-white m-0">Log In</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p4" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button class="btn btn-primary btn-block py-3" type="submit">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
