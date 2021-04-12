@extends('layouts.app')
@section('content')
    <div class="header-landing-page bg-blue">
        <x-menu/>
        <div class="container-main padding-top-32 ">
            <div class="row justify-content-between">
                <div class="d-inline"><img src="{{ asset('images/logo.png') }}" alt="felicity" width="80" height="60"></div>
                <img class="toogle-menu" style="cursor: pointer; z-index: 2;" src="{{ asset('images/icons/menu.png') }}" width="44" height="44">
            </div>
        </div>
        <div class="header">
            <div class="container-main padding-top-32 margin-bottom-24">
                <div class="title-header-terms">
                    Terms and <br>conditions 📃
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white padding-top-84">
        <div class="container-main">
            <div class="margin-top-n-280 margin-bottom-48">
                <div class="card" style="border-color: white">
                    <div class="card-body">
                        <div class="updated-at-privacy">
                            Updated March 29, 2021
                        </div>
                        <hr class="line-detail">
                        <div class="row">
                            <div class="title-desc-privacy padding-top-80">
                                The Challenge
                            </div>
                            <div class="desc-privacy">
                                Unique travel experiences around the world. Whether an apartment for a night,
                                a castle for a week or a villa for a month, Airbnb allows people to Belong
                                Anywhere through unique travel experiences at any price point, in more than
                                85,000 cities and over 191 countries. We promote a culture of curiosity,
                                humanity, and creativity through our product, brand, and, most importantly,
                                our people.
                            </div>
                            <div class="title-desc-privacy padding-top-80">
                                The Challenge
                            </div>
                            <div class="desc-privacy">
                               . Be a thought leader, partner with your cross-functional partners to foster a data driven payments organization.<br>
                               . With a focus on Payments compliance and keeping our platform safe, anticipate and detect new fraud trends
                                and regulatory requirements.<br>

                               . Define and evaluate key metrics. Build the data foundation you need, in partnership with the
                                data engineering team.<br>

                               . Deliver actionable user-insights to build the best products and models<br>

                                . Design experiments to measure the impact of new payments features<br>

                                . Empower the product and engineering teams to make data-driven decisions
                            </div>
                            <div class="title-desc-privacy padding-top-80">
                                What you need to secceed
                            </div>
                            <div class="desc-privacy padding-bottom-866">
                                . 4+ years industry experience in a quantitative analysis role. Experience in Payments a strong plus<br>

                                . Fluent in SQL and proficiency in analytical tools such as Python, R, etc.<br>

                               . Background in statistics and experience with experimentation<br>

                                . Solid understanding of product analytics<br>

                                . Experience or willingness to learn tools to create data pipelines using Airflow/Minerva<br>

                                . Ability to communicate clearly and effectively to cross functional partners of
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

    <!-- Start Footer -->
    <footer>
        <div class="title-footer">Let's Talk</div>
        <div class="email-footer">hello@felicitymedia.in</div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="address-footer">300 Broadway, Suite 23 San Francisco, CA 94133</div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="menu-footer">
                        <a href="#" class="text-white">Case Studies</a>
                        <a href="#" class="text-white">Process</a>
                        <a href="#" class="text-white">Philosophy</a>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="menu-footer">
                        <a href="#" class="text-white">Capabilities</a>
                        <a href="#" class="text-white">Insights</a>
                        <a href="#" class="text-white">Opportunity</a>
                    </div>
                </div>
            </div>
    </footer>
    <!-- End Footer -->
@endsection
