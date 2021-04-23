@extends('layouts.app')
@section('content')
    <div class="header-landing-page ">
    
        @include('components.menu',['dark'=>true])
        @include('layouts.__wave')
        @include('layouts.__navigation',['dark'=>true])
            
    
    </div>
        <div class="header bg-yellow padding-header" style="height: 100vh">
            <div class="container-main padding-top-32 margin-bottom-178">
                <div class="title-study-page font-size-sm-77">Raising the <br>
                    <span>standards 🔥</span>
                </div>
            </div>
        </div>

    <div class="bg-dark-blue padding-top-84 padding-bottom-84">
        <div class="container-main">
            <div class="row justify-content-between mb-4 align-items-center">
                <div class="col-md-6">
                    <div class="title-desc-our-work">
                        Big Project Headline 1
                    </div>
                    <div class="title2-desc-our-work">
                        UI & UX / Front End
                    </div>
                    <div class="desc-our-work">
                        Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                        magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostru.porro quisquam est,
                        qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                        minima veniam, quis nostru.
                    </div>
                    <div class="find-more">
                        Find Out More
                    </div>
                    <div class="border-find"></div>
                </div>
                <div class="col-md-6">
                    <div class="circle1-work">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mb-4 align-items-center">
                <div class="col-md-6">
                    <div class="circle3-work">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="" style="width: 100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title-desc-our-work">
                        Big Project Headline 1
                    </div>
                    <div class="title2-desc-our-work">
                        UI & UX / Front End
                    </div>
                    <div class="desc-our-work">
                        Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                        magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostru.porro quisquam est,
                        qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                        minima veniam, quis nostru.
                    </div>
                    <div class="find-more">
                        Find Out More
                    </div>
                    <div class="border-find"></div>
                </div>

            </div>
            <!-- End Our Work -->

            <div class="row justify-content-between padding-top-84">
                <div class="col-md-4 justify-content-center">
                    <div class="rectangle bg-yellow text-center">
                        <img src="{{ asset('images/phone/phone.png') }}" style="width: 100%">
                    </div>
                    <div class="font-size-28 font-weight-600 text-white margin-top-32 margin-bottom-8">Big Project Headline 1</div>
                    <div class="font-size-18 font-weight-500 text-grey">UI & UX / Front-end</div>
                </div>
                <div class="col-md-4 justify-content-center">
                    <div class="rectangle bg-purple-2 text-center">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="" style="width: 100%">
                    </div>
                    <div class="font-size-28 font-weight-600 text-white margin-top-32 margin-bottom-8">Big Project Headline 1</div>
                    <div class="font-size-18 font-weight-500 text-grey">UI & UX / Front-end</div>
                </div>
                <div class="col-md-4 justify-content-center">
                    <div class="rectangle bg-pink text-center">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="" style="width: 100%">
                    </div>
                    <div class="font-size-28 font-weight-600 text-white margin-top-32 margin-bottom-8">Big Project Headline 1</div>
                    <div class="font-size-18 font-weight-500 text-grey">UI & UX / Front-end</div>
                </div>
            </div>
        </div>
    </div>


@endsection
