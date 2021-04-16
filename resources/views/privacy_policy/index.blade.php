@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-yellow">
        <x-menu-text-black/>
        <div class="container-main padding-top-32 ">
            <div class="row justify-content-between">
                <div class="d-inline"><img src="{{ asset('images/logo-black.png') }}" alt="felicity" width="80" height="60"></div>
                <img class="toogle-menu open" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/toggle-black.png') }}" width="44" height="44">
                <img class="toogle-menu close d-none" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/close.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header">
            <div class="container-main margin-bottom-24">
                <div class="font-kollektif font-weight-700 margin-top-112 font-size-108 text-center line-height-118" style="color: #1A1A1A">
                    Our Privacy <br>Policy 🔒
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container-main">
            <div class="panel position-relative bg-white  margin-top-n-70">
                <div class="margin-x-65 ">
                    <div class="font-size-22 font-weight-600 padding-top-116 margin-bottom-16">Updated March 29, 2021</div>
                    <hr class="margin-bottom-80">
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
                </div>
                
            </div>
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
