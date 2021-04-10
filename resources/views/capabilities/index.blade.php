@extends('layouts.app')
@section('content')
<div class="header-landing-page bg-white">
    <div class="wafe-1">
        <img src="{{ asset('images/wafe1.png') }}" alt="">
    </div>
    <div class="wafe-2"></div>
    <div class="margin-x-196 padding-top-32 margin-bottom-178">
        <div class="d-flex justify-content-between margin-bottom-112">
            <div><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
            <div><img src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44"></div>
        </div>
        <div class="font-size-108 font-weight-700 font-kollektif text-center">Here’s what we can <br> do 👇</div>
    </div>
</div>

<div class="heigth-1866 bg-dark-blue">
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
@endsection