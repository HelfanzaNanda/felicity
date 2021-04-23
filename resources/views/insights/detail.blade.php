@extends('layouts.app')
@section('content')
<div class="header-landing-page">

    @include('components.menu')
    @include('layouts.__wave')
    @include('layouts.__navigation',['dark'=>true])
        
    
</div>
    <div class="header-landing-page height-sm-auto bg-white">

        <div class="header" style="height: 100vh">
            <img src="{{ asset('images/insights/hero-insights.png') }}" class="w-100" alt="">
        </div>
    </div>

    <div class="bg-white padding-top-84">
        <div class="container-main">
            <div class="margin-top-n-280 margin-bottom-48">
                <div class="bg-white p-5 shadow position-relative">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="title1-detail-insights"> Finibus Bonorum et Malorum </div>
                            <hr class="line-detail" align="left">
                            <div class="d-sm-block d-md-flex">
                                <div class="width-sm-full width-760 margin-right-sm-0 margin-right-40">
                                    <div class="d-flex justify-content-between">
                                        <div class="creator-name">
                                            Written by John doe
                                        </div>
                                        <div class="created-at-detail small">
                                            1 week ago 8 min
                                        </div>
                                    </div>
                                    <div class="desc-detail-insights padding-top-40">
                                        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                                        <br>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
                                        nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid
                                        ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea
                                        voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur?"
                                    </div>
                                    <div class="desc-detail-insights mt-3">
                                        1914 translation by H. Rackham<br>
                                        "But I must explain to you how all this mistaken idea of denouncing pleasure
                                        and praising pain was born and I will give you a complete account of the system,
                                        and expound the actual teachings of the great explorer of the truth,
                                        the master-builder of human happiness. No one rejects, dislikes,
                                        or avoids pleasure itself, because it is pleasure, but because those
                                        who do not know how to pursue pleasure rationally encounter consequences that
                                        are extremely painful. Nor again is there anyone who loves or pursues or desires
                                            to obtain pain of itself, because it is pain, but because occasionally
                                            circumstances occur in which toil and pain can procure him some great pleasure.
                                            To take a trivial example, which of us ever undertakes laborious
                                            physical exercise, except to obtain some advantage from it? But who has
                                            any right to find fault with a man who chooses to enjoy a pleasure that
                                            has no annoying consequences, or one who avoids a pain that produces no
                                            resultant pleasure?"
                                    </div>

                                    <div class="title5-detail-insights mt-3">
                                        Section 1.10.33 of "de Finibus Bonorum et Malorum"
                                    </div>
                                    <div class="desc-detail-insights mt-3">
                                        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                        qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                        maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                        repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                        non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
                                        ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                                        doloribus asperiores repellat."
                                    </div>
                                    <div class="title3-detail-insights mt-3">
                                        Section
                                    </div>
                                    <div class="desc-detail-insights mt-3">
                                        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                        qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                        maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                        repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                        non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
                                        ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                                        doloribus asperiores repellat."
                                    </div>
                                    <div class="title3-detail-insights mt-3">
                                        Section 1.10.33
                                    </div>
                                    <div class="desc-detail-insights mt-3">
                                        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                        qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                        maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                        repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                        non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut
                                        reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                                        asperiores repellat."<br>
                                        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC<br>
                                        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                                        \est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                        possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                                        quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                                        voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic
                                        tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                                        consequatur aut perferendis doloribus asperiores repellat."
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="line-detail mb-3" align="left">
                            <div class="d-sm-block d-md-flex justify-content-between mb-5">
                                <div class="d-flex margin-bottom-sm-10">
                                    <img src="{{ asset('images/insights/emoji-hand-black.png') }}"  class="emoji-hand">
                                    <div class="emoji-text text-black"> 2.1K claps </div>
                                </div>
                                <div class="d-flex margin-bottom-sm-10">
                                    <img src="{{ asset('images/insights/comment-black.png') }}" class="emoji-hand">
                                    <div class="emoji-text text-black"> 40 Comments </div>
                                </div>
                                <div class="d-flex margin-bottom-sm-10">
                                    <img src="{{ asset('images/insights/share-black.png') }}" class="margin-left-sm-0 ml-5 emoji-hand">
                                    <div class="emoji-text text-black"> Share </div>
                                </div>
                                <div class="d-flex">
                                    <img src="{{ asset('images/icons/fb.png') }}" class="margin-left-sm-0 ml-5 emoji-hand">
                                    <img src="{{ asset('images/icons/twitter.png') }}" class="ml-4 emoji-hand">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-5">
                            
                            <div class="margin-top-sm-10">
                                <div class="margin-bottom-40">
                                    <img src="{{ asset('images/insights/laptop.png') }}" alt="" width="100%">
                                    <div class="title4-detail-insights">
                                        Finibus Bonorum et Malorumed
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="small text-secondary"> May 20th 2021 </div>
                                        <div>
                                            <div><a href="#" class="ont-size-14 font-kollektif">Read now</a></div>
                                            <hr class="bg-blue margin-top-4 mb-0">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

@endsection
