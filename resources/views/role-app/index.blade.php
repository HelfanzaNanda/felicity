@extends('layouts.app')
@section('content')
<div class="header-landing-page bg-pink">
    <x-menu/>
    <div class="container-main padding-top-32">
        <div class="row justify-content-between padding-bottom-112">
            <div class="d-inline"><img src="{{ asset('images/logo.png') }}" alt="felicity" width="80" height="60"></div>
            <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/menu.png') }}" width="44" height="44">
            <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
        </div>
    </div>
    <div class="header">
        <div class="container-main padding-top-32 margin-bottom-178">
            <div class="font-kollektif line-height-86 font-weight-700 font-size-88 text-white margin-bottom-16">Sr Data Scientist, <br> Payments</div>
            <div class="text-grey">Bangalore, India</div>
        </div>
    </div>
    
</div>

<div class="padding-top-84 margin-bottom-84">
    <div class="container-main">
        <div class="margin-top-n-165 position-relative margin-bottom-48 bg-white">
            <div class="margin-x-65 padding-top-116">
                <div class="row nav tabs margin-bottom-80" role="tablist">
                    <a class="margin-right-48 active" href="#role" data-toggle="tab">Role Overview</a>
                    <a class="" href="#app" data-toggle="tab">Application</a>
                </div>
                <div class="tab-content" id="tab-select">
                    <div class="tab-pane fade show active" id="role" role="tabpanel" aria-labelledby="role-tab">
                        <div id="section-role">
                            <div class="font-size-28 margin-bottom-20 font-weight-700">The Challange</div>
                            <div class="margin-bottom-10">Unique travel experiences around the world. Whether an apartment for a night, a castle for a week or a villa for a month, Airbnb allows people to Belong Anywhere through unique travel experiences at any price point, in more than 85,000 cities and over 191 countries. We promote a culture of curiosity, humanity, and creativity through our product, brand, and, most importantly, our people.</div>
                            <div class="font-size-28 margin-bottom-20 font-weight-700">The Challange</div>
                            <div class="list">
                                <ul>
                                    <li>Be a thought leader, partner with your cross-functional partners to foster a data driven payments organization.</li>
                                    <li>With a focus on Payments compliance and keeping our platform safe, anticipate and detect new fraud trends and regulatory requirements.</li>
                                    <li>Define and evaluate key metrics. Build the data foundation you need, in partnership with the data engineering team.</li>
                                    <li>Deliver actionable user-insights to build the best products and models</li>
                                    <li>Design experiments to measure the impact of new payments features</li>
                                    <li>Empower the product and engineering teams to make data-driven decisions</li>
                                </ul>
                            </div>
                            <div class="font-size-28 margin-bottom-20 font-weight-700">What you need to succeed</div>
                            <div class="list margin-bottom-80">
                                <ul>
                                    <li>4+ years industry experience in a quantitative analysis role. Experience in Payments a strong plus</li>
                                    <li>Fluent in SQL and proficiency in analytical tools such as Python, R, etc.</li>
                                    <li>Background in statistics and experience with experimentation</li>
                                    <li>Solid understanding of product analytics</li>
                                    <li>Experience or willingness to learn tools to create data pipelines using Airflow/Minerva</li>
                                    <li>Ability to communicate clearly and effectively to cross functional partners of varying technical levels</li>
                                </ul>
                            </div>
                            <button class="bg-dark-blue border-none font-size-16 font-weight-600 width-full text-white height-72">APPLY NOW</button>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="app" role="tabpanel" aria-labelledby="app-tab">
                        <div id="section-app">
                            <div class="margin-bottom-32">
                                <label for="" class="font-size-22 margin-bottom-16 ">Name *</label>
                                <input type="text" class="form-input height-64 border-1-black border-radius-2 border-1-white "
                                placeholder="Your Name *">
                            </div>
                            <div class="margin-bottom-32">
                                <label for="" class="font-size-22 margin-bottom-16 ">Email *</label>
                                <input type="text" class="form-input height-64 border-1-black border-radius-2 border-1-white "
                                placeholder="Your Email *">
                            </div>
                            <div class="margin-top-32 margin-bottom-8 font-weight-500 font-size-22 line-height-40">I am reaching out on the behalf of</div>
                            <div class="row margin-bottom-40">
                                <div class="col-md-6">
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox1">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox1" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox2">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox2" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox3">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox3" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox4">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox4" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox5">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox5" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox6">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox6" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-bottom-8 font-weight-500 font-size-22 line-height-40">I am reaching out on the behalf of</div>
                            <div class="row margin-bottom-40">
                                <div class="col-md-6">
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox7">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox7" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox8">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox8" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox9">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox9" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox10">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox10" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox11">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox11" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center margin-bottom-24">
                                        <input type="checkbox" class="checkbox" id="checkbox12">
                                        <span class="span-checkbox border-1-black text-black"></span>
                                        <label for="checkbox12" class="font-size-16 margin-left-16">I’m exploring new agency partners</label>
                                    </div>
                                </div>
                            </div>

                            <div class="margin-bottom-8 font-weight-500 font-size-22 line-height-40">Message</div>
                            <div class="margin-bottom-56"> <textarea name="" id="" class="form-textarea border-1-black" placeholder="Please leave us a message"></textarea> </div>
                            <button class="bg-dark-blue border-none font-size-16 font-weight-600 width-full text-white height-72">APPLY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection