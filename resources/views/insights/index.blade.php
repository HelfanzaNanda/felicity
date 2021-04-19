@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-white">
        <x-menu-text-black/>
        <div class="container-main padding-top-32">
            <div class="row justify-content-between padding-bottom-112">
                <div class="d-inline"><img class="icon-logo" src="{{ asset('images/logo-black.png') }}" alt="felicity"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" 
                src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close-black.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header">
            <div class="container-main padding-top-32 margin-bottom-178">
                <div class="title-study-page font-size-sm-77">Latest Blogspots</div>
            </div>
        </div>
        
    </div>

    <div class="bg-dark-blue padding-top-84">
        <div class="container-main">
            <div class="margin-top-n-280 margin-top-sm-n-160 margin-bottom-48">
                <img class="position-relative imamge-insights" src="{{ asset('images/insights/cover-insights.png') }}" >
            </div>
            <div class="d-sm-block d-md-flex justify-content-between">
                <div class="width-sm-full width-540">
                    <div class="font-size-40 font-weight-700 font-kollektif text-white">
                        Enter the world of all fashion trends
                    </div>
                </div>
                <div class="width-sm-full width-540">
                    <div class="desc-insights text-white mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <div class="ml-1 padding-top-sm-0 height-sm-auto padding-top-32">
                <div class="d-sm-block d-md-flex justify-content-between">
                    <div class="width-full margin-bottom-sm-10 d-sm-block d-md-none date-insights">May 20th 2021</div>
                    <div class="d-flex margin-top-sm-10 justify-content-sm-between">
                        <div class="d-flex margin-right-sm-0 margin-right-51">
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="font-kollektif font-size-18 text-grey margin-left-10"> 2.1K claps </div>
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="font-kollektif font-size-18 text-grey margin-left-10">40 Comments</div>
                        </div>
                    </div>
                    <div class="d-none d-md-block date-insights">May 20th 2021</div>
                </div>
                
            </div>

            <div class="read-more-insights">
                read more
            </div>
            
            <div class="d-sm-block d-md-flex justify-content-between padding-top-80 margin-bottom-83">
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image1.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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

            <div class="d-sm-block d-md-flex justify-content-between margin-bottom-83">
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
            
            <div class="d-sm-block d-md-flex justify-content-between padding-bottom-142">
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image1.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3">
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
        </div>

    </div>

@endsection
