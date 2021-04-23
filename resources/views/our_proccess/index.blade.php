@extends('layouts.app')
@push('styles')
<style type="text/css">
    .panel{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100vh;
    }
    .circle-wraper{
        position: absolute;
        top: 100px;
        left: 0;
        width: 100%;
        z-index: 20;
        /*transform: translateY(-50%);*/
    }
    .circle-bg{

    }
</style>
@endpush
@section('content')
    <div class="header-landing-page" style="overflow: hidden;">
        <x-menu/>
        <div style="position: fixed;top: 0;left:0;right: 0;bottom: 0;z-index: 16;pointer-events: none;">
            @include('layouts.__wave',['class'=>'fixed'])
        </div>
        @include('layouts.__navigation')
            
    </div>
    <div style="height: 100vh;position: relative;z-index: 1" id="container">
        <div  >
            <div class="circle-wraper">
                <div class="container-main">
                    <div style="width: 50%;float: right;">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 498 498" style="enable-background:new 0 0 498 498;" xml:space="preserve" class="circle-bg">

                        <g>
                            <path class="theLine" fill="none" d="M249,10.4c131.8,0,238.6,106.8,238.6,238.6S380.8,487.6,249,487.6S10.4,380.8,10.4,249S117.2,10.4,249,10.4"/>
                            
                            <circle fill="none" stroke="#FFFFFF" stroke-width=3 stroke-miterlimit=10 stroke-dasharray="3.9981,15.9923" 
                            class="st0" cx="249" cy="249" r="238.6" opacity=".4"/>
                            <!-- <circle class="ball ball01" r="20" cx="25" cy="25"></circle> -->

                            <g class="ball ball01" cx="1" cy="3">
                                <g>
                                    <circle fill="white"  r="4"/>
                                    <circle fill="none" stroke="white" stroke-width="1"  r="10"/>
                                </g>
                                
                            </g>
                        </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-main navbar-our-process padding-top-32">
            <div class="row justify-content-between">
                <div class="d-inline"><img class="icon-logo" src="{{ asset('images/logo.png') }}" alt="felicity"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/menu.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
            </div>
        </div> -->
        <div class="panel panel1 header-landing-page bg-yellow" style="z-index:5;background-color: #ffc300">
            <!-- <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt=""> -->
            <div class="header padding-top-288" style="transition: all 0.3s ease;">
                <div class="container-main margin-bottom-178">
                    <div class="font-weight-700 font-size-50 font-kollektif">Research</div>
                    <div class="font-weight-700 font-size-72 margin-bottom-42 font-kollektif">01</div>
                    <div class="font-kollektif font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
                </div>
            </div>
            
        </div>

        <div class="panel panel2 header-landing-page bg-pink" style="z-index:4;background-color: #e94443">
            <!-- <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt=""> -->
           
            
            <div class="header padding-top-288" style="transition: all 0.3s ease;">
                <div class="container-main margin-bottom-178">
                    <div class="font-weight-700 text-white font-size-50 font-kollektif">Research</div>
                    <div class="font-weight-700 text-white font-size-72 margin-bottom-42 font-kollektif">02</div>
                    <div class="font-kollektif text-white font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
                </div>
            </div>
            
        </div>

        <div class="panel panel3 header-landing-page bg-green" style="z-index:3;background-color: #6bb247">
            <!-- <img class="wafe our-proccess" src="{{ asset('images/our-proccess/bg-header-green-full.png') }}" alt=""> -->
            <!-- <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt=""> -->
           
            
            <div class="header padding-top-288" style="transition: all 0.3s ease;">
                <div class="container-main margin-bottom-178">
                    <div class="font-weight-700 text-white font-size-50 font-kollektif">Research</div>
                    <div class="font-weight-700 text-white font-size-72 margin-bottom-42 font-kollektif">03</div>
                    <div class="font-kollektif text-white font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
                </div>
            </div>
            
        </div>
        <div class="panel panel4 header-landing-page bg-green" style="z-index:2;background-color: #6bb247">
            <!-- <img class="wafe our-proccess" src="{{ asset('images/our-proccess/bg-header-green-full.png') }}" alt=""> -->
            <!-- <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt=""> -->
           
            
            <div class="header padding-top-288" style="transition: all 0.3s ease;">
                <div class="container-main margin-bottom-178">
                    <div class="font-weight-700 text-white font-size-50 font-kollektif">Research</div>
                    <div class="font-weight-700 text-white font-size-72 margin-bottom-42 font-kollektif">04</div>
                    <div class="font-kollektif text-white font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
                </div>
            </div>
            
        </div>
        <div class="panel panel5 header-landing-page bg-green" style="z-index:1;background-color: #6bb247">
            <!-- <img class="wafe our-proccess" src="{{ asset('images/our-proccess/bg-header-green-full.png') }}" alt=""> -->
            <!-- <img class="circle-our-proccess" src="{{ asset('images/our-proccess/circle.png') }}" alt=""> -->
           
            
            <div class="header padding-top-288" style="transition: all 0.3s ease;">
                <div class="container-main margin-bottom-178">
                    <div class="font-weight-700 text-white font-size-50 font-kollektif">Research</div>
                    <div class="font-weight-700 text-white font-size-72 margin-bottom-42 font-kollektif">05</div>
                    <div class="font-kollektif text-white font-size-18 width-sm-full width-447">Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</div>
                </div>
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        tl = gsap.timeline({
            defaults: {duration: 1},
            scrollTrigger:{
                trigger:'#container',
                start:'top',
                scrub:true,
                pin:'#container',
                // snap: 1 / 5,
                end :()=> "+="+document.getElementById('container').offsetHeight*5,
            }
        })
        gsap.utils.toArray(".panel").forEach((panel, i)=>{
            tl.fromTo(panel,{
                opacity:1
              },{
                opacity:(i==4)?1:0
              })
        });
        
        gsap.to(".ball01", {
            scrollTrigger:{
                // start:"top top",
                scrub:true,
                // snap: 1 / 5,
            },
            motionPath: {path: ".theLine", alignOrigin: [0, 0]}},0)


        // ScrollTrigger.create({
        //   snap: 1 / 4 // snap whole page to the closest section!
        // });


    </script>
        
@endsection