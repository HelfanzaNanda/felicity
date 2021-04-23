@extends('layouts.app')
@push('styles')
<style type="text/css">
    
.panel{
    padding-top: 100px;
    padding-bottom: 100px;
}
</style>
@endpush
@section('content')
<div class="header-landing-page">

    @include('components.menu')
    @include('layouts.__wave')
    @include('layouts.__navigation',['dark'=>true])
        
    
</div>
<div class="header padding-header" style="height: 100vh">
    <div class="font-size-108 font-weight-700 font-kollektif text-center">Here’s what we can <br> do 👇</div>
</div>
<div class="service-section bg-dark-blue">
    <div class="container-main">
        <div class="panel row justify-content-between">
            <div class="col-md-6">
                <div class="margin-bottom-70 margin-top-sm-0 margin-top-70">
                    <div class="text-white margin-bottom-25 font-size-45 font-kollektif font-weight-700">✏️  Design </div>
                    <div class="text-grey margin-bottom-40">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                    <div class="find-more">
                        Find Out More
                    </div>
                    <div class="border-find"></div>
                </div>
            </div>
            <div class="col-md-6 text-right" >
                <img class="img-capabilities" src="{{ asset('images/think-outsite.png') }}" >
            </div>
        </div>
        <div class="panel row justify-content-between">
            <div class="col-md-6 text-left" >
                <img class="img-capabilities" src="{{ asset('images/think-outsite.png') }}">
            </div>
            <div class="col-md-6">
                <div class="margin-bottom-70 margin-top-70">
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

@endsection

@push('scripts')
<script type="text/javascript">
    gsap.utils.toArray(".panel").forEach(function(elem,i) {
        gsap.timeline({
            scrollTrigger:{
                trigger:elem,
                pin:true,
                start:"top top"
            }
        })
    });
</script>
@endpush