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
                <div class="font-size-108 font-weight-700 font-kollektif">Let’s do this 🤝 <br> good second line.</div>
            </div>
        </div>
        
    </div>

    <div class="bg-dark-blue padding-top-120 padding-bottom-84">
        <div class="container-main">
            <div class="font-size-50 font-kollektif text-white margin-bottom-81">Please fill in our short form.</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="margin-bottom-32">
                        <label for="" class="font-size-22 margin-bottom-16 text-white">Name *</label>
                        <input type="text" class="form-input height-64 bg-dark-blue border-1-white text-white"
                        placeholder="Your Name *">
                    </div>
                    <div class="margin-bottom-32">
                        <label for="" class="font-size-22 margin-bottom-16 text-white">Email *</label>
                        <input type="text" class="form-input height-64 bg-dark-blue border-1-white text-white"
                        placeholder="Your Email *">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="margin-bottom-32">
                        <label for="" class="font-size-22 margin-bottom-16 text-white">Company *</label>
                        <input type="text" class="form-input height-64 bg-dark-blue border-1-white text-white"
                        placeholder="Your Company *">
                    </div>
                    <div class="margin-bottom-32">
                        <label for="" class="font-size-22 margin-bottom-16 text-white">Phone Number </label>
                        <input type="text" class="form-input height-64 bg-dark-blue border-1-white text-white">
                    </div>
                </div>
            </div>

            <div class="margin-top-32 margin-bottom-8 font-kollektif text-white font-size-22 line-height-40">I am reaching out on the behalf of</div>
            <div class="row margin-bottom-40">
                <div class="col-md-6">
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox1">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox1" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox2">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox2" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox3">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox3" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox4">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox4" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox5">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox5" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox6">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox6" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                </div>
            </div>

            <div class="margin-bottom-8 font-kollektif text-white font-size-22 line-height-40">I am reaching out on the behalf of</div>
            <div class="row margin-bottom-40">
                <div class="col-md-6">
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox7">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox7" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox8">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox8" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox9">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox9" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox10">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox10" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox11">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox11" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                        <input type="checkbox" class="checkbox" id="checkbox12">
                        <span class="span-checkbox border-1-white text-white"></span>
                        <label for="checkbox12" class="text-white font-size-16 margin-left-16">I’m exploring new agency partners</label>
                    </div>
                </div>
            </div>

            <div class="margin-bottom-8 font-kollektif text-white font-size-22 line-height-40">Message</div>
            <div class="margin-bottom-56"> <textarea name="" id="" class="form-textarea bg-dark-blue border-1-white text-white" placeholder="Please leave us a message"></textarea> </div>
            <button class="height-72 bg-yellow w-100 font-kollektif text-black font-weight-700 font-size-16">SEND</button>
            
        </div>
    </div>
@endsection