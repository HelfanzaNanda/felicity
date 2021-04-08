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

    <div class="bg-dark-blue padding-top-84">
        <div class="container-main">
            <div class="hero-section">
                <div class="d-flex justify-content-between margin-bottom-144">
                    <div class="width-569 height-210 margin-right-66 font-size-50 font-weight-500 text-white">we work closely to help you digitalise your brand</div>
                    <div class="width-475 height-200 font-size-16">
                        <div class="text-grey margin-bottom-40">
                            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC <br>
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
                        </div>
                        <div class="text-white ">Find out more</div>
                    </div>
                </div>
                <div><img class="img-hero" src="{{ asset('images/video-placeholder.png') }}"></div>
            </div>
            

            <div class="service-section">
                <div class="d-flex justify-content-between">
                    <div class="width-450">
                        <div class="margin-bottom-70">
                            <div class="text-white margin-bottom-25 font-weight-700">✏️  Design &nbsp; <span><img src="{{ asset('images/icons/arrow-up.png') }}" width="13.34" height="7.67"></span></div>
                            <div class="text-grey">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        <div class="margin-bottom-70">
                            <div class="text-white margin-bottom-25 font-weight-700">🎥  Motion & Audio &nbsp; <span><img src="{{ asset('images/icons/arrow-up.png') }}" width="13.34" height="7.67"></span></div>
                            <div class="text-grey">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        <div class="margin-bottom-70">
                            <div class="text-white margin-bottom-25 font-weight-700">🎥  Motion & Audio &nbsp; <span><img src="{{ asset('images/icons/arrow-up.png') }}" width="13.34" height="7.67"></span></div>
                            <div class="text-grey">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        <div class="margin-bottom-70">
                            <div class="text-white margin-bottom-25 font-weight-700">🎥  Motion & Audio &nbsp; <span><img src="{{ asset('images/icons/arrow-up.png') }}" width="13.34" height="7.67"></span></div>
                            <div class="text-grey">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut    </div>
                        </div>
                        
                    </div>
                    <div class="width-450">
                        <div class="font-size-50 text-white margin-bottom-40">we provide various services</div>
                        <div class="text-grey margin-bottom-40">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC <br>
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  
                        </div>
                        <div class="text-white line-height-19"><u>FIND OUT MORE</u></div>
                    </div>
                </div>
            </div>

            <div class="team-section">
                <div class="d-flex justify-content-between">
                    <div class="width-450">
                        <div class="text-white font-size-50 margin-bottom-192">the team that makes it possible</div>
                        <div class="margin-bottom-136">
                            <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                            <div class="d-flex justify-content-between text-white">
                                <div class="font-size-22 font-weight-700">Viacheslav Oliede</div>
                                <div class="font-size-20">CEO</div>
                            </div>
                            <div class="d-flex">
                                <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                            </div>
                        </div>
                        <div>
                            <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                            <div class="d-flex justify-content-between text-white">
                                <div class="font-size-22 font-weight-700">Viacheslav Oliede</div>
                                <div class="font-size-20">CEO</div>
                            </div>
                            <div class="d-flex">
                                <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="width-450">
                        <div class="margin-bottom-136">
                            <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                            <div class="d-flex justify-content-between text-white">
                                <div class="font-size-22 font-weight-700">Viacheslav Oliede</div>
                                <div class="font-size-20">CEO</div>
                            </div>
                            <div class="d-flex">
                                <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/dribbble.png') }}" width="36" height="36"></a>
                                <a href="" class="margin-right-24"><img src="{{ asset('images/social-media/instagram.png') }}" width="36" height="36"></a>
                                <a href=""><img src="{{ asset('images/social-media/twitter.png') }}" width="36" height="36"></a>
                            </div>
                        </div>
                        <div>
                            <div class="margin-bottom-24"><img class="img-team" src="{{ asset('images/peoples/people1.png') }}" alt=""></div>
                            <div class="d-flex justify-content-between text-white">
                                <div class="font-size-22 font-weight-700">Viacheslav Oliede</div>
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

            <div class="banner-section">
                <div class="banner bg-purple">
                    <div class="padding-48">
                        <div class="margin-bottom-32 font-size-40 text-white font-weight-700">Be a part of our awesome <br> team</div>
                        <button class="btn bg-dark-blue width-240 height-62 text-white font-size-20">Join Us</button>
                    </div>
                    
                </div>    
            </div>
            
        </div>
    </div>
@endsection