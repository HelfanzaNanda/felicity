@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-yellow">
        <x-menu-text-black/>
        <img class="wafe" src="{{ asset('images/header/bg-header-yellow-crop.png') }}" alt="">
        <div class="container-main padding-top-32">
            <div class="row justify-content-between padding-bottom-112">
                <div class="d-inline"><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header">
            <div class="container-main padding-top-32 margin-bottom-178">
                {{-- <div class="d-flex justify-content-between margin-bottom-112">
                    <div><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
                    <div><img src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44"></div>
                </div> --}}
                <div class="title-study-page title-study-sm-page">Raising the <br>
                    <span>standards 🔥</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark-blue padding-top-84 padding-bottom-84">
        <div class="container-main">
            <div class="row">
                <div class="col-lg-6 col-md-6">
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
                <div class="col-lg-6 col-md-6">
                    <div class="circle1-work circle1-sm-work float-right">
                        <img src="{{ asset('images/phone/phone.png') }}" class="img-phone" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="circle3-work">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
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

            <div class="d-flex justify-content-between padding-top-84">
                <div>
                    <div class="rectangle bg-yellow text-center d-flex justify-content-center">
                        <img src="{{ asset('images/phone/phone.png') }}">
                    </div>
                    <div class="font-size-28 font-weight-600 text-white margin-top-32 margin-bottom-8">Big Project Headline 1</div>
                    <div class="font-size-18 font-weight-500 text-grey">UI & UX / Front-end</div>
                </div>
                <div>
                    <div class="rectangle bg-purple-2 text-center d-flex justify-content-center">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="">
                    </div>
                    <div class="font-size-28 font-weight-600 text-white margin-top-32 margin-bottom-8">Big Project Headline 1</div>
                    <div class="font-size-18 font-weight-500 text-grey">UI & UX / Front-end</div>
                </div>
                <div>
                    <div class="rectangle bg-pink text-center d-flex justify-content-center">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="">
                    </div>
                    <div class="font-size-28 font-weight-600 text-white margin-top-32 margin-bottom-8">Big Project Headline 1</div>
                    <div class="font-size-18 font-weight-500 text-grey">UI & UX / Front-end</div>
                </div>
            </div>
        </div>
    </div>

    <div class="height-500 bg-footer">
        <div class="container-main">
            <div class="margin-bottom-40 padding-top-80 text-white font-size-72 font-kollektif font-weight-700">Let’s Talk</div>
            <div class="font-kollektif font-size-32 text-white margin-bottom-80"><u>hello@felicitymedia.in </u></div>
            <div class="d-flex">
                <div class="text-white font-kollektif margin-right-auto font-size-22">300 Broadway, Suite 23 <br>
                    San Francisco, CA 94133</div>
                <div class="d-flex">
                    <div class="margin-right-52">
                        <a href="" class="d-block text-white font-kollektif font-size-16">Case studies</a>
                        <a href="" class="d-block text-white font-kollektif font-size-16">Process</a>
                        <a href="" class="d-block text-white font-kollektif font-size-16">Philosophy</a>
                    </div>
                    <div>
                        <a href="" class="d-block text-white font-kollektif font-size-16">Capabilities</a>
                        <a href="" class="d-block text-white font-kollektif font-size-16">Insights</a>
                        <a href="" class="d-block text-white font-kollektif font-size-16">Opportunity</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
