@extends('layouts.app')
@section('content')
<div class="header-landing-page">

    @include('components.menu')
    @include('layouts.__wave')
    @include('layouts.__navigation',['dark'=>true])
        
    
</div>
    
    <div class="header padding-header" style="height: 100vh">
        <div class="container-main margin-bottom-178">
            <div class="title-study-page font-size-sm-77">Latest Blogspots</div>
        </div>
    </div>

    <div class="bg-dark-blue padding-top-84">
        <div class="container-main">
            <div class="margin-top-n-165 margin-top-sm-n-160 margin-bottom-48">
                <img class="position-relative" src="{{ asset('images/insights/cover-insights.png') }}" style="width: 100%">
            </div>
            <div class="row justify-content-between mb-2">
                <div class="col-md-6">
                    <div class="font-size-40 font-weight-700 font-kollektif text-white">
                        Enter the world of all fashion trends
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="desc-insights text-white mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.
                    </div>
                </div>
            </div>
            <hr class="bg-white mb-4">
            <div class="ml-1 padding-top-sm-0 height-sm-auto">
                <div class="d-sm-block d-md-flex justify-content-between">
                    <div class="width-full margin-bottom-sm-10 d-sm-block d-md-none date-insights">May 20th 2021</div>
                    <div class="d-flex margin-top-sm-10 justify-content-sm-between">
                        <div class="d-flex margin-right-sm-0 margin-right-51">
                            <img src="{{ asset('images/insights/emoji-hand.png') }}" alt="" class="emoji-hand">
                            <div class="small text-grey margin-left-10"> 2.1K claps </div>
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="" class="emoji-hand">
                            <div class="small text-grey margin-left-10">40 Comments</div>
                        </div>
                    </div>
                    <div class="d-none d-md-block date-insights small">May 20th 2021</div>
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
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>

                </div>
            </div>

            <div class="d-sm-block d-md-flex justify-content-between margin-bottom-83">
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>
    
                </div>
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>
    
                </div>
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>
    
                </div>
            </div>
            
            <div class="d-sm-block d-md-flex justify-content-between padding-bottom-142">
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image1.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image3.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>

                </div>
                <div class="margin-bottom-sm-10">
                    <img src="{{ asset('images/insights/image2.png') }}" class="img-insights" alt="">
                    <div class="title-insights">
                        Finibus Bonorum et <br> Malorum
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                            <div class="d-flex align-item-center"><img src="{{ asset('images/insights/emoji-hand.png') }}" alt="">
                            <div class="emoji-text">
                                2.1K claps
                            </div></div><div class="d-flex align-item-center">
                            <img src="{{ asset('images/insights/comment.png') }}" alt="">
                            <div class="emoji-text">
                                40 Comments
                            </div></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
