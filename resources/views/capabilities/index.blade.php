@extends('layouts.app')
@section('content')
<div class="header-landing-page bg-white">
    <x-menu/>
    <div class="container-main padding-top-32">
        <div class="row justify-content-between padding-bottom-112">
            <div class="d-inline"><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
            <img class="toogle-menu" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44">
        </div>
    </div>
    <div class="header">
        <div class="font-size-108 font-weight-700 font-kollektif text-center">Here’s what we can <br> do 👇</div>
    </div>
</div>

<div class="bg-dark-blue margin-bottom-84">
    <div class="container-main padding-top-80">
        <div class="service-section">
            <div class="d-flex justify-content-between">
                <div class="width-450">
                    <div class="margin-bottom-70 margin-top-70">
                        <div class="text-white margin-bottom-25 font-size-45 font-kollektif font-weight-700">✏️  Design </div>
                        <div class="text-grey margin-bottom-40">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        <div class="find-more">
                            Find Out More
                        </div>
                        <div class="border-find"></div>
                    </div>
                    <div class="margin-bottom-70">
                        <img src="{{ asset('images/think-outsite.png') }}" width="403" height="538">
                    </div>
                </div>
                <div class="width-450">
                    <div class="margin-bottom-70">
                        <img src="{{ asset('images/think-outsite.png') }}" width="403" height="538">
                    </div>
                    <div class="margin-bottom-70">
                        <div class="text-white margin-bottom-25 font-size-45 font-kollektif font-weight-700">🎯  Felicity Growth</div>
                        <div class="text-grey margin-bottom-40">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        <div class="find-more">
                            Find Out More
                        </div>
                        <div class="border-find"></div>
                    </div>
                    
                </div>
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
            <div class="row">
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