@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-gradient-blue-to-dark-blue">
        <x-menu/>
        <img class="wafe" src="{{ asset('images/header/bg-landing-page-crop.png') }}" alt="">
        <div class="container-main padding-top-32">
            <div class="row justify-content-between padding-bottom-112">
                <div class="d-inline"><img src="{{ asset('images/logo.png') }}" alt="felicity" width="80" height="60"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/menu.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header" style="transition: all 0.3s ease;">
            <div class="container-main margin-bottom-178">
                <div class="d-inline-block font-weight-700 font-size-108 text-white">Hello 👋 <br>
                    <span>We are Felicity</span>
                </div>
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

    <div class="bg-dark-blue padding-top-84 padding-bottom-84">
        <div class="container-main">
            <div class="hero-section">
                <div class="d-flex justify-content-between margin-bottom-144">
                    <div class="width-569 height-210 margin-right-66 font-size-50 font-weight-500 text-white">we work closely to help you digitalise your brand</div>
                    <div class="width-475 height-200 font-size-16">
                        <div class="text-grey margin-bottom-40">
                            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC <br>
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        </div>
                        <div class="find-more">
                            Find Out More
                        </div>
                        <div class="border-find"></div>
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
                        <div class="find-more">
                            Find Out More
                        </div>
                        <div class="border-find"></div>
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
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="padding-48">
                                <div class="margin-bottom-32 font-size-40 text-white font-weight-700">Be a part of our awesome <br> team</div>
                                <button class="btn bg-dark-blue width-240 height-62 text-white font-size-20">Join Us</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <img src="{{ asset('images/team.png') }}" class="float-right" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Our Work -->
            <div class="our-work">
                Our Work
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="circle1-work">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
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
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
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
                <div class="col-lg-6 col-md-6">
                    <div class="circle2-work float-right">
                        <img src="{{ asset('images/phone/phone.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- End Our Work -->

            <!-- Start Insights -->
            <div class="insights">
                Insights
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('images/insights/image1.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                    <div class="row mt-3">
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                    <div class="row mt-3">
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et Malorum
                    </div>
                    <div class="row mt-3">
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div>
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div>
                    </div>

                </div>
            </div>
            <!-- End Insights -->
        </div>
    </div>

    <div class="height-500 bg-footer">
        <div class="container-main">
            <div class="margin-bottom-40 padding-top-80 text-white font-size-72 font-kollektif font-weight-700">Let’s Talk</div>
            <div class="font-kollektif font-size-32 text-white margin-bottom-80"><u>hello@felicitymedia.in </u></div>
            <div class="d-flex">
                <div class="text-white font-kollektif margin-right-auto font-size-22">300 Broadway, Suite 23 <br>
                    San Francisco, CA 94133</div>
                <div class="d-flex">
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