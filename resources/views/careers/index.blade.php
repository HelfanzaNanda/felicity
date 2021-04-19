@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-white">
        <x-menu-text-black/>
        <div class="container-main padding-top-32">
            <div class="row justify-content-between padding-bottom-112">
                <div class="d-inline"><img class="icon-logo" src="{{ asset('images/logo-black.png') }}" alt="felicity"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close-black.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header">
            <div class="container-main padding-top-32 margin-bottom-178">
                <div class="title-header-careers">What’s your next destination?</div>
            </div>    
        </div>
        
    </div>

    <div class="bg-dark-blue padding-top-84">
        <div class="container-main">
            <div class="margin-top-n-227 margin-top-sm-n-152 margin-bottom-sm-20 margin-bottom-120">
                <img class="position-relative img-carrers" src="{{ asset('images/careers/cover-careers.png') }}" 
                width="100%" height="450">
            </div>

            <div class="font-size-18 font-weight-500 text-grey margin-bottom-12">OUR MISSION</div>
            <div class="d-sm-block d-md-flex justify-content-between">
                <div class="width-500 width-sm-full margin-bottom-sm-20">
                    <div class="font-size-18 font-weight-500 text-white margin-bottom-sm-20 margin-bottom-213">
                        It’s an audacious, incredibly rewarding mission that our increasingly diverse team is dedicated to achieving.
                        Airbnb is built around the idea that everyone should be able to take the perfect trip, including where they stay, what they do, and who they meet. To that end, we empower millions of people around the world to use their spaces, passions, and talents to become entrepreneurs.
                    </div>
                    <div>
                        <img class="img-carrer-user" src="{{ asset('images/users/user5.png') }}" alt="">
                    </div>
                </div>
                <div class="width-500 width-sm-full">
                    <div class="margin-bottom-120 margin-bottom-sm-20">
                        <img class="img-carrer-user" src="{{ asset('images/careers/analysis.png') }}" >
                    </div>
                    <div class="font-size-18 font-weight-500 text-white">
                        Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipi.
                    </div>
                    
                </div>
            </div>

            <div class="d-flex padding-top-120 margin-bottom-56">
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ asset('images/careers/calendar.png') }}" alt="">
                    <div class="text-date mt-3">Paid volunteer time
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ asset('images/careers/calendar.png') }}" alt="">
                    <div class="text-date mt-3">Paid volunteer time
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ asset('images/careers/calendar.png') }}" alt="">
                    <div class="text-date mt-3">Paid volunteer time
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ asset('images/careers/calendar.png') }}" alt="">
                    <div class="text-date mt-3">Paid volunteer time
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ asset('images/careers/calendar.png') }}" alt="">
                    <div class="text-date mt-3">Paid volunteer time
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ asset('images/careers/calendar.png') }}" alt="">
                    <div class="text-date mt-3">Paid volunteer time
                    </div>
                </div>
            </div>
            <div class="title-careers padding-top-120">
                small teams, global <br>mission
            </div>
            <div class="d-flex padding-top-80">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label class="font-size-20 text-white">Select Location</label>
                        <select name="" id="" class="form-control bg-dark-blue text-white">
                            <option class="text-black" value="" selected disabled>Choose Location</option>
                            <option class="text-black" value="Delhi">Delhi</option>
                            <option class="text-black" value="Banda">Banda</option>
                            <option class="text-black" value="Ballabhgarh">Ballabhgarh</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="d-sm-block d-md-flex justify-content-between padding-top-120 padding-bottom-142">
                <div class="width-323 width-sm-full">
                    <div class="text-label-careers">
                        DEPARTEMENTS
                    </div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                    <div class="text-departements padding-top-32">Business Development (3)</div>
                </div>
                <div>
                    <div class="d-none d-md-block line-vertical" style="align:center;"></div>
                </div>
                <div class="width-323 width-sm-full">
                    <div class="text-label-careers">
                        FEATURED ROLES
                    </div>
                    <div class="text-company padding-top-32">
                        Manager,Payments <br>Compliance
                    </div>
                    <div class="text-label-careers padding-top-16">Bangalore, India</div>
                    <div class="text-company padding-top-32">
                        Manager,Payments <br>Compliance
                    </div>
                    <div class="text-label-careers padding-top-16">Bangalore, India</div>
                    <div class="text-company padding-top-32">
                        Manager,Payments <br>Compliance
                    </div>
                    <div class="text-label-careers padding-top-16">Bangalore, India</div>
                    <div class="text-company padding-top-32">
                        Manager,Payments <br>Compliance
                    </div>
                    <div class="text-label-careers padding-top-16">Bangalore, India</div>
                    <div class="text-company padding-top-32">
                        Manager,Payments <br>Compliance
                    </div>
                    <div class="text-label-careers padding-top-16">Bangalore, India</div>
                </div>
            </div>
        </div>

    </div>

@endsection
