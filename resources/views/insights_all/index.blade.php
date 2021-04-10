@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-gradient-blue-to-dark-blue">
        <div class="wafe-1">
            <img src="{{ asset('images/wafe1.png') }}" alt="">
        </div>
        <div class="wafe-2"></div>
        <div class="container-main padding-top-32 margin-bottom-178">
            <div class="d-flex justify-content-between margin-bottom-112">
                <div><img src="{{ asset('images/logo.png') }}" alt="felicity" width="80" height="60"></div>
                <div><img src="{{ asset('images/icons/menu.png') }}" width="44" height="44"></div>
            </div>
            <div class="font-weight-700 font-size-108 text-white">Hello 👋 <br>
                <span>We are Felicity</span>
            </div>
        </div>
        <div class="row justify-content-between">
            <div><img src="{{ asset('images/sponsors/s.png') }}" width="297" height="60" alt=""></div>
            <div><img src="{{ asset('images/sponsors/forbes.png') }}" width="297" height="60" alt=""></div>
            <div><img src="{{ asset('images/sponsors/paloalto.png') }}" width="297" height="60" alt=""></div>
            <div><img src="{{ asset('images/sponsors/jennar.png') }}" width="297" height="60" alt=""></div>
            <div><img src="{{ asset('images/sponsors/facel.png') }}" width="297" height="60" alt=""></div>
        </div>
    </div>
@endsection