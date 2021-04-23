@extends('layouts.app')
@push('styles')
<style type="text/css">
.expand-text{
    margin-top: 25px;
}
.team-name{
    margin-bottom: 10px;
}
.section-title{
    font-size: 50px;
    color: white;
    font-weight: normal;
}
.panel{
    padding-top: 100px;
}

.insight-card{
    width: 300px;
    margin-right: 40px;
}
.indicator {
    text-align: center;
    position: fixed;
    bottom: 5rem;
    right: 1.5rem;
    transform: translate3d(-50%, 0, 0);
    font-size: 1rem;
    color: white;
    opacity: 0;
}
.indicator >span {
        display: block;
}
.indicator > span:nth-child(2) {
            animation: arrowMove 600ms infinite alternate;
        
    
}
.expand-service{
    margin-top: 10px;
    margin-left: 5px;
    font-size:14px;
}

@keyframes arrowMove {
    to {
        transform: translate3d(0, 0.5rem, 0);
    }
}
</style>
@endpush
@section('content')
    <div class="header-landing-page" style="overflow: hidden;">
        <x-menu/>
        @include('layouts.__wave')
        @include('layouts.__navigation')
        
    </div>
    <div class="header">
        <div class="padding-header"  style="background: linear-gradient(180deg, #3B28CC 0%, #2D1E99 71.67%, #0F0A33 100%);height: 100vh">
            <p class="indicator">
                <span>Keep Scrolling</span>
                <span>↓</span>
            </p>
            <div class="container-main margin-bottom-178 hello">
                <h1 class="d-inline-block font-weight-700 font-size-108 text-white follow-pointer">Hello 👋 <br>
                    <span>We are Felicity</span>
                </h1>
            </div>
            <div class="owl-carousel">
                <div><img class="img-sponsors" src="{{ asset('images/sponsors/forbes.png') }}" width="297" height="60" alt=""></div>
                <div><img class="img-sponsors" src="{{ asset('images/sponsors/paloalto.png') }}" width="297" height="60" alt=""></div>
                <div><img class="img-sponsors" src="{{ asset('images/sponsors/jennar.png') }}" width="297" height="60" alt=""></div>
                <div><img class="img-sponsors" src="{{ asset('images/sponsors/paloalto.png') }}" width="297" height="60" alt=""></div>
                <div><img class="img-sponsors" src="{{ asset('images/sponsors/jennar.png') }}" width="297" height="60" alt=""></div>
            </div>
        </div>
    </div>
    <div class="bg-dark-blue">
        <div class="panel hero-section section section-1 bg-dark-blue" >
            <div class="container-main fadeout" >
                <div class="mb-5">
                    <div class="row">
                        <div class="col-md-6 "><h2 class="font-size-50 font-weight-500 text-white section-1-title">we work closely to help you digitalise your brand</h2></div>
                        <div class="col-md-6 font-size-16 " style="overflow: hidden;">
                            <div class="section-1-desc" style="margin-bottom: 10px">
                                <div class="text-grey margin-bottom-40">
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                </div>
                                <a href="{{url('our-process')}}" class="find-more">
                                    Find out more
                                </a>
                                <div class="border-find"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="img-hero section-1-img" src="{{ asset('images/video-placeholder.png') }}" >
                    
                </div>
            </div>
        </div>

        <div class="panel service-section section section-2 bg-dark-blue padding-header" style="min-height: 100vh">
            <div class="container-main fadeout">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <a href="#design"   class="btn-collapse design text-white font-size-26 font-weight-700">✏️  Design &nbsp; 
                             
                            </a>
                            <div class="expand-service text-grey" id="design" >Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        <div class="mb-4">
                            <a  href="#motion" class="btn-collapse text-white font-size-26 font-weight-700">🎥  Motion & Audio &nbsp; 
                            </a>
                            <div class="expand-service text-grey" id="motion">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        <div class="mb-4">
                            <a  href="#marketing" class="btn-collapse text-white font-size-26 font-weight-700">📢  Marketing &nbsp; 
                            </a>
                            <div class="expand-service text-grey" id="marketing">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        <div class="mb-4">
                            <a href="#growth" class="btn-collapse text-white font-size-26 font-weight-700">🎯  Felicity Growth &nbsp; 
                            </a>
                            <div class="expand-service text-grey" id="growth">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="font-size-50 text-white margin-bottom-40">we provide various services</div>
                        <div class="text-grey margin-bottom-40">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC <br>
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        </div>
                        <a href="{{url('capabilities')}}" class="find-more">
                            Find Out more
                        </a>
                        <div class="border-find"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel team-section section bg-dark-blue" >
            <div class="team-section-inner">
                <div class="container-main">

                    <div class="d-sm-block d-md-flex justify-content-between" style="margin-bottom: 80px">
                        <div class="width-sm-full">
                            <div class="text-white font-size-50 margin-bottom-sm-10 mb-5 ">the team that makes it possible</div>
                            <div class="team-card pos-2 mb-5 margin-bottom-sm-30">
                                <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                                <div class="d-flex justify-content-between text-white">
                                    <div class="font-size-22 font-weight-700 team-name">Viacheslav Oliede</div>
                                    <div class="font-size-20">CEO</div>
                                </div>
                                <div class="d-flex">
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                    <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                                </div>
                            </div>

                            <div class="team-card pos-4 margin-bottom-sm-30">
                                <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                                <div class="d-flex justify-content-between text-white">
                                    <div class="font-size-22 font-weight-700 team-name">Viacheslav Oliede</div>
                                    <div class="font-size-20">CEO</div>
                                </div>
                                <div class="d-flex">
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                    <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                                </div>
                            </div>


                        </div>
                        <div class="width-sm-full">
                            <div class="team-card pos-1 mb-5 margin-bottom-sm-30">
                                <div class="margin-bottom-24">
                                    <img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt="">
                                </div>
                                <div class="d-flex justify-content-between text-white">
                                    <div class="font-size-22 font-weight-700 team-name">Viacheslav Oliede</div>
                                    <div class="font-size-20">CEO</div>
                                </div>
                                <div class="d-flex">
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                    <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                                </div>
                            </div>
                            <div class="team-card pos-3 margin-bottom-sm-30"> 
                                <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                                <div class="d-flex justify-content-between text-white">
                                    <div class="font-size-22 font-weight-700 team-name">Viacheslav Oliede</div>
                                    <div class="font-size-20">CEO</div>
                                </div>
                                <div class="d-flex">
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                    <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                    <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div style="overflow: hidden;">
                    <div class="banner-section">
                        <div class="container-main">
                            <div class="banner bg-purple">
                                <div class="d-sm-flex d-md-flex justify-content-between">
                                    <div>
                                        <div class="padding-banner">
                                            <div class=" font-size-40 margin-bottom-32 text-white font-weight-700">Be a part of our awesome <br> team</div>
                                            <button class="btn bg-dark-blue width-240 height-62 text-white font-size-20">Join Us</button>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/team.png') }}" class="d-none d-md-block float-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- Start Our Work -->
        <div class="panel section bg-dark-blue section-our-work" style="height: 100vh">
            <div class="our-work">
                <div class="container-main">
                    <h5 class="section-title">our work </h5>
                </div>
            </div>
            <div class="our-work-wraper">
                <div class="our-work-item" style="overflow: hidden;">
                    <div class="item">
                        <div class="container-main">
                            <div class="row justify-content-between margin-bottom-sm-10">
                                <div class="col-md-6">
                                    <div class="circle1-work">
                                        <img src="{{ asset('images/phone/phone.png') }}" alt="" class="img-phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-desc-our-work">
                                        Big Project Headline 1
                                    </div>
                                    <div class="title2-desc-our-work">
                                        UI & UX / Front End
                                    </div>
                                    <div class="desc-our-work">
                                        Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostru.porro quisquam est,
                                        qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                                        minima veniam, quis nostru.
                                    </div>
                                    <a href="{{url('case-study-page/detail')}}" class="find-more">
                                        Find Out More
                                    </a>
                                    <div class="border-find"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container-main">
                            <div class="row justify-content-between margin-bottom-sm-10">
                                <div class="col-md-6">
                                    <div class="title-desc-our-work">
                                        Big Project Headline 1
                                    </div>
                                    <div class="title2-desc-our-work">
                                        UI & UX / Front End
                                    </div>
                                    <div class="desc-our-work">
                                        Sed ut pporro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostru.porro quisquam est,
                                        qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                                        minima veniam, quis nostru.
                                    </div>
                                    <div class="find-more">
                                        Find Out More
                                    </div>
                                    <div class="border-find"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="circle2-work">
                                        <img src="{{ asset('images/phone/phone.png') }}" alt="" class="img-phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Work -->
    </div>
    <!-- Start Insights -->
    <div class="panel section section-insight bg-dark-blue" style="height: 100vh">
        <div class="container-main">
            <div class="insights"> <h5 class="section-title">insights</h5> </div>
            <div class="d-flex " style="overflow: auto;">
                <div class="margin-bottom-sm-10 insight-card" >
                    <img src="{{ asset('images/insights/image1.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                        <div>
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                2.1K claps
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                40 Comments
                            </span>
                        </div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10 insight-card" >
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                        <div>
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                2.1K claps
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                40 Comments
                            </span>
                        </div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10 insight-card" >
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                   <div class="d-flex mt-3 justify-content-between">
                        <div>
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                2.1K claps
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                40 Comments
                            </span>
                        </div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10 insight-card" >
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                   <div class="d-flex mt-3 justify-content-between">
                        <div>
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                2.1K claps
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="" class="insight-icon">
                            <span class="emoji-text">
                                40 Comments
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>  
            <!-- End Insights -->

    

@endsection

@push('scripts')
<script>
    document.addEventListener('mousemove',function(e){
      var xC = e.clientX-(window.innerWidth/2);
      var yC = e.clientY-(window.innerHeight/2);
      // var yC = e.clientY-(window.innerHeight/2);
      gsap.to('.follow-pointer',1,{
        x:`${(xC/20*-1)}px`, 
        y:`${(yC/20*-1)}px`, 
        // y:`+=${(yC/10)}px`,
      })

    })
    // gsap.timeline({
    //     scrollTrigger:{
    //         trigger:'.section-2',
    //         pin:'.section-2',
    //     }
    // })

    // tl1=gsap.timeline({
    //     scrollTrigger:{
    //         trigger:'.header',
    //         pin:'.header',
    //         scrub:true,
    //         // pinSpacing:false,
    //     }
    // })
    gsap.set('.indicator',{opacity:1})
    gsap.to('.indicator',{
        opacity:0,
        scrollTrigger:{
            trigger:".header",
            start:"bottom top",
            scrub:1,
            // markers:true,
        }
    })

    tl = gsap.timeline({
        scrollTrigger:{
            trigger:'.section-1',
            pin:'.section-1',
            scrub:0.5,
            end:"+=200%"
            // pinSpacing:false,
        }
    });
    tl.from('.section-1-title',{
        opacity:0,
        scale:.5,
        ease:'bounce',
        duration:2,
    })
    tl.from('.section-1-desc',{
        delay:1,
        y:"200%",
        ease:'power4',
        duration:2,
    })
    tl.from('.section-1-img',{
        opacity:0,
        x:"110%",
        ease:'power1',
        duration:5
    })

    tl.to('.section-1 .container-main',{
        y:"-100px",
        duration:10
    })

    tl = gsap.timeline({
        scrollTrigger:{
            trigger:'.section-2',
            pin:'.section-2',
            scrub:0.5,
            // pinSpacing:false,
        }
    });
    gsap.utils.toArray(".expand-service").forEach(function(elem,i) {
        tl.from(elem,{
            height:0,
            opacity:0
        }).to(elem,{
            delay:1,
            height:0,
            opacity:0
        })
    });
    gsap.utils.toArray(".team-card").forEach(function(elem,i) {
        // gsap.set(elem, {autoAlpha: 0});
        // ScrollTrigger.create({
            // trigger: elem,
            // onEnter: function() { 
                console.log(elem,i);
                gsap.fromTo(elem, {x: (i>1)?"100%":"-100%", autoAlpha: 0}, {
                    duration: 1.25, 
                    x: 0,
                    y: 0, 
                    autoAlpha: 1, 
                    ease: "expo", 
                    overwrite: "auto",
                    scrollTrigger:{
                        trigger:elem,
                        start:"top bottom",
                        end:"top 20%",
                        scrub:true,
                        // markers:true,
                    }
                });
            // }, 
            // onEnterBack: function() { animateFrom(elem, -1) },
            // onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
        // });
    })

    gsap.from('.banner-section',{
        y:"100%",
        opacity:0,
        ease:"slow",
        scrollTrigger:{
            trigger:".banner-section",
            // markers:true,
            start:"top bottom",
            end:"top 90%",
            scrub:true,
        
        }
    })
    const panels = gsap.utils.toArray(".our-work-item .item");
    const panelsContainer = document.querySelector(".our-work-item");
    // alert(panelsContainer.offsetWidth);
    console.log(panels);
    panels.forEach((e,i)=>{
        gsap.set(e, {y:(-100*i)+"%",x:(100*i)+"%",width: document.querySelector(".our-work-wraper").offsetWidth});
        gsap.to(e,{
            xPercent:-100,
            ease:"sine",
            scrollTrigger:{
                trigger:'.section-our-work',
                start:'top top',
                scrub:true,
                // markers:true,
                pin:'.section-our-work, .our-work-item',
                snap: {
                  snapTo: 1 / ( panels.length - 1 ),
                  // duration: {min: 0.1, max: 0.1}
                },
                end: () => "+="+(panelsContainer.offsetWidth )
            }
        })
    })
    
    gsap.timeline({
        scrollTrigger:{
            trigger:'.section-insight',
            pin:'.section-insight',
        }
    })
    gsap.to('body',{
        scrollTo:200
    })


    let showDesign = false
    let showMotion = false
    let showMarketing = false
    let showGrowth = false
    function collapseDesign() { 
        if (!showDesign) {
            $('.up-design').hide()
            $('.down-design').show()    
            showDesign = true
        }else{
            $('.up-design').show()
            $('.down-design').hide()    
            showDesign = false
        }
     }
     function collapseMarketing() { 
        if (!showMarketing) {
            $('.up-marketing').hide()
            $('.down-marketing').show()    
            showMarketing = true
        }else{
            $('.up-marketing').show()
            $('.down-marketing').hide()    
            showMarketing = false
        }
     }
     function collapseGrowth() { 
        if (!showGrowth) {
            $('.up-growth').hide()
            $('.down-growth').show()    
            showGrowth = true
        }else{
            $('.up-growth').show()
            $('.down-growth').hide()    
            showGrowth = false
        }
     }
     function collapseMotion() { 
        if (!showMotion) {
            $('.up-motion').hide()
            $('.down-motion').show()    
            showMotion = true
        }else{
            $('.up-motion').show()
            $('.down-motion').hide()    
            showMotion = false
        }
     }
</script>
@endpush