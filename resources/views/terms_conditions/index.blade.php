@extends('layouts.app')
@section('content')
<div class="header-landing-page ">
    <x-menu/>
   
        @include('layouts.__wave')
    @include('layouts.__navigation')
        
    
</div>
    <div class="header bg-blue padding-header" style="height: 100vh">
        <div class="container-main margin-bottom-24">
            <div class="title-header-terms ">
                Terms and <br>conditions 📃
            </div>
        </div>
    </div>

    <div class="margin-top-n-70">
        <div class="container-main">
            <div class="panel position-relative bg-white shadow ">
                <div class="p-5">
                    <div class="font-size-22 font-weight-600  margin-bottom-16">Updated March 29, 2021</div>
                    <hr class="mb-5">
                    <div class="font-size-28 margin-bottom-20 font-weight-700">The Challange</div>
                    <div class="margin-bottom-10 font-size-16 text-grey-dark text-justify">Unique travel experiences around the world. Whether an apartment for a night, a castle for a week or a villa for a month, Airbnb allows people to Belong Anywhere through unique travel experiences at any price point, in more than 85,000 cities and over 191 countries. We promote a culture of curiosity, humanity, and creativity through our product, brand, and, most importantly, our people.</div>
                    <div class="font-size-28 margin-bottom-20 font-weight-700">The Challange</div>
                    <div class="list font-size-16 text-grey-dark text-justify">
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
                    <div class="list margin-bottom-80 font-size-16 text-grey-dark text-justify">
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
@endsection
