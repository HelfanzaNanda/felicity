@php
$color=isset($dark)?'text-black':'text-white';
@endphp
<div class="menu " id="menu" style="background-color: #3725be;z-index: 15;transform: translateY(-900px);height: 100vh;overflow: auto;padding-top: 160px">
    <div class="container-main" >
        <div class="d-flex justify-content-between">
            <div >
                <div class="mb-5 d-flex align-items-center">
                    <img class="margin-right-20" src="{{ asset('images/icons/rhomb.png') }}" width="17" height="17">
                    <div class="{{$color}} font-size-18 font-weight-700">FOLLOW US</div>
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <img src="{{ asset('images/social-media/instagram.png') }}" width="48" height="48" class="margin-right-24">
                    <div class="font-size-24 font-weight-700 {{$color}}">@felicity1234</div>
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <img src="{{ asset('images/social-media/dribbble.png') }}" width="48" height="48" class="margin-right-24">
                    <div class="font-size-24 font-weight-700 {{$color}}">@felicity1234</div>
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <img src="{{ asset('images/social-media/twitter.png') }}" width="48" height="48" class="margin-right-24">
                    <div class="font-size-24 font-weight-700 {{$color}}">@felicity1234</div>
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <img src="{{ asset('images/social-media/youtube.png') }}" width="48" height="48" class="margin-right-24">
                    <div class="font-size-24 font-weight-700 {{$color}}">@felicity1234</div>
                </div>
            </div>
            <div style="position: relative;z-index: 20">
                <div class="mb-5 margin-bottom-sm-10 d-flex align-items-center">
                    <img class="margin-right-20" src="{{ asset('images/icons/rhomb.png') }}" width="17" height="17">
                    <div class="{{$color}} font-size-18 font-weight-700">NAVIGATE TO</div>
                </div>
                <div class="mb-2"><a href="{{url('our-proccess')}}" class="font-size-45 line-height-1 font-weight-700 font-kollektif {{$color}} capitalize">OUR PROCESS</a></div>
                <div class="mb-2"><a href="{{url('capabilities')}}" class="font-size-45 line-height-1 font-weight-700 font-kollektif {{$color}} capitalize">CAPABILITIES</a></div>
                <div class="mb-2"><a href="{{url('careers')}}" class="font-size-45 line-height-1 font-weight-700 font-kollektif {{$color}} capitalize">OPPURTUNITIES</a></div>
                <div class="mb-2"><a href="{{url('insights')}}" class="font-size-45 line-height-1 font-weight-700 font-kollektif {{$color}} capitalize">INSIGHTS</a></div>
                <div class="mb-2"><a href="{{url('case-study-page')}}" class="font-size-45 line-height-1 font-weight-700 font-kollektif {{$color}} capitalize">CASE STUDIES</a></div>
            </div>
        </div>

    </div>
</div>