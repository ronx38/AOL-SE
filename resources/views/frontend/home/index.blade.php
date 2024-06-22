@extends('layouts.master')

@section('content')
    <div>
        <section class="page-header min-vh-80"
            style="background-image: url(&#39;https://t4.ftcdn.net/jpg/05/14/20/47/360_F_514204772_mT0EpTdZkScyiRPn2PInaKaqd88QGrzE.jpg&#39;);"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-5"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                        <h1 class="text-white mb-4">Welcome to BookMeet</h1>
                        <p class="text-white opacity-8 lead pe-5 me-5">Plan and book your perfect meeting place with detail information and inspiration from us</p>
                        
                        <div class="buttons">
                            {{-- <button type="button" class="btn btn-white mt-4">Book Now</button> --}}
                        </div>
                        <div class="col-lg-3 col-md-3 d-flex">
                        @if (!auth()->guard('user')->check())
                                <a href={{ route('user.register') }} class="btn bg-white text-dark">Create Account</a>
                            @endif
                        </div>
                      
                    </div>
                   
                </div>
            </div>
        </section>
        <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
            <section class="py-4">
                <div class="container">
                    <div class="row  align-items-center">
                        <div class="col-lg-3">
                            <h1>Find Your <br> Perfect Meeting Room</h1>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group input-group-static my-3">
                                <label>From Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group input-group-static my-3">
                                <label>To Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 px-4">
                            <button type="button" class="btn btn-primary btn-lg ">Search Rooms</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-9">
            <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 p-lg-6">
            <div class="row text-center">
                <h2>Our Rooms</h2>
                <p class="lead">Choose the best from the best.</p>
            </div>
            <div class="row g-4">
                @foreach ($rooms as $room)
                    <div class="col-md-4">
                        <div class="card text-center shadow-lg">
                            <div class="overflow-hidden position-relative border-radius-lg bg-cover "
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/window-desk.jpg')">
                                <span class="mask bg-gradient-primary opacity-7"></span>
                                <div class="card-body position-relative z-index-1 d-flex flex-column mt-5">
                                    <h3 class="text-white font-weight-bolder">{{ $room->name }}</h3>
                                    <p class="text-white font-weight-light">{{ $room->description }}</p>
                                    <p class="text-white font-weight-light">Rp. {{ $room->rate }} <small class="text-xs">/1 Hour</small> </p>
                                    <a class="text-white btn text-sm font-weight-bold mb-0 icon-move-right mt-4"
                                        href="{{ route('user.booking.create') }}">
                                        Book now &nbsp;
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
            </section>
            <section class="my-5 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <h4>Download The Mobile Apps To Get More Benefit! </h4>
                            <p class="mb-4">
                                Sign up to receive exclusive updates, special offers, and the latest news from BookMeet. Be
                                among the first to know about new room listings, promotions, and exciting developments!
                            </p>
                            <div class="row">
                                <div class="col-4 ps-0">
                                    <button type="button"
                                        class="btn bg-gradient-primary mb-0 h-100 position-relative z-index-2">Download Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ms-auto">
                            <div class="position-relative">
                                <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/macbook.png"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
