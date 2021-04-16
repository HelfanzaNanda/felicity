@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-gradient-blue-to-dark-blue">
        <x-menu/>
        <img class="wafe" src="{{ asset('images/header/bg-landing-page-crop.png') }}" alt="">
        <div class="container-main padding-top-32">
            <div class="row justify-content-between padding-bottom-112">
                <div class="d-inline"><img src="{{ asset('images/logo.png') }}" alt="felicity" width="80" height="60"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/menu.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header">
            <div class="container-main padding-top-32 margin-bottom-178">
                <div class="font-kollektif text-white font-weight-700 font-size-108">Project <br>
                    Headline 1
                </div>
            </div>
        </div>
       
    </div>

    <div class="bg-dark-blue padding-top-240 padding-bottom-84" >
        <div class="container-main">
            <div class="d-flex justify-content-end">
                <img src="{{ asset('images/phone/phone.png') }}" class="img-case-study-solo">
            </div>
            <div class="margin-bottom-40">
                <div class="font-size-18 font-kollektif text-grey padding-top-240 margin-bottom-12">Client</div>
                <div class="font-size-18 font-kollektif text-white">Felicity</div>
            </div>
            <div class="d-flex justify-content-between height-540">
                <div>
                    <div class="font-size-18 font-kollektif text-grey margin-bottom-12">Location</div>
                    <div class="font-size-18 font-kollektif text-white">Big Project Headline 1</div>
                    <div class="font-size-18 font-kollektif text-grey margin-bottom-12 padding-top-40">Work</div>
                    <div class="font-size-18 font-kollektif text-white width-475">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipi.</div>
                </div>
                <div>
                    <img src="{{ asset('images/maps.png') }}" height="540" width="540">
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div><img src="{{ asset('images/phone/phone3.png') }}" alt=""></div>
                <div>
                    <div class="text-white margin-top-95 font-size-50 font-weight-600">✏️  Design</div>
                    <div class="font-size-18 font-kollektif margin-bottom-12 text-grey padding-top-40">Research</div>
                    <div class="font-size-18 font-kollektif text-white width-475">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipi.</div>
                </div>
            </div>

            <div class="d-flex justify-content-between margin-top-73">
                <div>
                    <div class="text-white margin-top-95 font-size-50 font-weight-600">📢  Marketing</div>
                    <div class="font-size-18 font-kollektif margin-bottom-12 text-grey padding-top-40">Research</div>
                    <div class="font-size-18 font-kollektif text-white width-475">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sedSed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipi.</div>
                </div>
                <div>
                    <img src="{{ asset('images/phone/phone3.png') }}" alt="">
                </div>
            </div>


            <div class="d-flex justify-content-between margin-top-308">
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
