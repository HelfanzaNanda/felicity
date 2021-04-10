@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-white">
        <div class="wafe-1">
            <img src="{{ asset('images/wafe1.png') }}" alt="">
        </div>
        <div class="wafe-2"></div>
        <div class="container-main padding-top-32 margin-bottom-178">
            <div class="d-flex justify-content-between margin-bottom-112">
                <div><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
                <div><img src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44"></div>
            </div>
            <div class="font-size-108 font-weight-700 font-kollektif">Let’s do this 🤝 <br> good second line.</div>
        </div>
    </div>
@endsection