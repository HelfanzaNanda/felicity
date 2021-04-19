@extends('layouts.app')
@section('content')
    <div class="parent-menu">
        <x-menu/>
    </div>
    <div class="container-main navbar-our-process padding-top-32">
        
        <div class="row justify-content-between">
            <div class="d-inline"><img class="icon-logo" src="{{ asset('images/logo.png') }}" alt="felicity"></div>
            <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/menu.png') }}" width="44" height="44">
            <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
        </div>
    </div>
    <div class="header-landing-page bg-yellow">
        <img class="wafe our-proccess" src="{{ asset('images/our-proccess/bg-header-yellow-full.png') }}" alt="">
        <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt="">
        <div class="header padding-top-288" style="transition: all 0.3s ease;">
            <div class="container-main margin-bottom-178">
                <div class="font-weight-700 font-size-50 font-kollektif">Research</div>
                <div class="font-weight-700 font-size-72 margin-bottom-42 font-kollektif">01</div>
                <div class="font-kollektif font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
            </div>
        </div>
        
    </div>

    <div class="header-landing-page bg-pink">
        <img class="wafe our-proccess" src="{{ asset('images/our-proccess/bg-header-red-full.png') }}" alt="">
        <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt="">
       
        
        <div class="header padding-top-288" style="transition: all 0.3s ease;">
            <div class="container-main margin-bottom-178">
                <div class="font-weight-700 text-white font-size-50 font-kollektif">Research</div>
                <div class="font-weight-700 text-white font-size-72 margin-bottom-42 font-kollektif">01</div>
                <div class="font-kollektif text-white font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
            </div>
        </div>
        
    </div>

    <div class="header-landing-page bg-green">
        <img class="wafe our-proccess" src="{{ asset('images/our-proccess/bg-header-green-full.png') }}" alt="">
        <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt="">
       
        
        <div class="header padding-top-288" style="transition: all 0.3s ease;">
            <div class="container-main margin-bottom-178">
                <div class="font-weight-700 text-white font-size-50 font-kollektif">Research</div>
                <div class="font-weight-700 text-white font-size-72 margin-bottom-42 font-kollektif">01</div>
                <div class="font-kollektif text-white font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
            </div>
        </div>
        
    </div>

        
@endsection