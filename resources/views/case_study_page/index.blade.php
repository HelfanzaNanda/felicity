@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-yellow">
        <div class="wafe-1">
            <img src="{{ asset('images/wafe1.png') }}" alt="">
        </div>
        <div class="wafe-2"></div>
        <div class="container-main padding-top-32 margin-bottom-178">
            <div class="d-flex justify-content-between margin-bottom-112">
                <div><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
                <div><img src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44"></div>
            </div>
            <div class="title-study-page">Raising the <br>
                <span>standards 🔥</span>
            </div>
        </div>
    </div>

    <div class="bg-dark-blue padding-top-84">
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
                    <div class="circle1-work float-right">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="">
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

            <!-- Start Insights -->
            <div class="row padding-top-84">
                <div class="col-lg-4 col-md-4">
                    <div class="row justify-content-center rectangle1">
                        <img src="{{ asset('images/phone/phone.png') }}" class="justify-content-center" alt="">
                    </div>
                    <div class="title-project">Big Project Headline 1</div>
                    <div class="font-size-22 text-grey">UI & UX / Front-end</div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row justify-content-center rectangle2">
                        <img src="{{ asset('images/phone/phone.png') }}" class="justify-content-center" alt="">
                    </div>
                    <div class="title-project">Big Project Headline 1</div>
                    <div class="font-size-22 text-grey">UI & UX / Front-end</div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row justify-content-center rectangle3">
                        <img src="{{ asset('images/phone/phone.png') }}" class="justify-content-center" alt="">
                    </div>
                    <div class="title-project">Big Project Headline 1</div>
                    <div class="font-size-22 text-grey">UI & UX / Front-end</div>
                </div>
            </div>
            <!-- End Insights -->
        </div>
        <!-- Start Footer -->
        <footer>
            <div class="title-footer">Let's Talk</div>
            <div class="email-footer">hello@felicitymedia.in</div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="address-footer">300 Broadway, Suite 23 San Francisco, CA 94133</div>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <div class="menu-footer">
                            <a href="#" class="text-white">Case Studies</a>
                            <a href="#" class="text-white">Process</a>
                            <a href="#" class="text-white">Philosophy</a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <div class="menu-footer">
                            <a href="#" class="text-white">Capabilities</a>
                            <a href="#" class="text-white">Insights</a>
                            <a href="#" class="text-white">Opportunity</a>
                        </div>
                    </div>
                </div>
        </footer>
        <!-- End Footer -->
    </div>

@endsection
