<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_mast" id="masthead">
            <div class="container px-lg-5 h-100 text-white" data-aos="fade-in" data-aos-delay="200">
                <div class="row gx-lg-5 h-100 text-left " >
                    <div class="col-lg-8 align-self-end">
                        <h1>Layana Infini Lanskap</h1>
                        <h3>A Nature-Based Solution Technology</h3>
                        <hr/>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-justify text-white-75 mb-5 ">
                            LILA provides end-to-end integrated services to plan, manage, and evaluate the performance of nature-based enterprise in
                            managing their lands and resources by using the most recent technology, system, and approach.
                        </p>
                        <a class="btn btn-primary btn-xl" href="#thematics">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Thematics-->
        <section id="thematics">
            <div class="container-fluid ">
                <div class="row g-0 px-lg-4 text-center" >
                    <p>
                        <h2>Thematic Areas</h2><hr>
                    </p>
                    <div class="row gx-4 py-4 px-lg-4 text-center " >
                        <div class="col-lg-4 col-sm-6" data-aos="zoom-in">
                            <div>
                                <img src="{{ asset('assets/img/icon/sfm.png') }}" class="icon-services mb-2"><br>
                            </div>
                            <div>
                                <h3 class="fclila"><b>SUSTAINABLE FOREST MANAGEMENT</b></h3>
                            </div>
                            <div>
                                <p>
                                    Identify opportunities to increase the sustainability of forest management through nature-based solutions 
                                    for the benefits of the forest, climate, and biodiversity, while benefiting local communities.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6" data-aos="zoom-in">
                            <div>
                                <img src="{{ asset('assets/img/icon/er.png') }}" class="icon-services mb-2"><br>
                            </div>
                            <div>
                                <h3 class="fclila"><b>ECOSYSTEM RESTORATION</b></h3>
                            </div>
                            <div>
                                <p>
                                    Design, implement, and monitor collaborative actions to prevent and reverse the degradation of ecosystems 
                                    through adapting landscape approach and forest and landscape restoration strategies.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6" data-aos="zoom-in">
                            <div>
                                <img src="{{ asset('assets/img/icon/bc.png') }}" class="icon-services mb-2"><br>
                            </div>
                            <div>
                                <h3 class="fclila"><b>BIODIVERSITY CONSERVATION</b></h3>
                            </div>
                            <div>
                                <p>
                                    Design and promote collaborative conservation initiatives to protect and manage the biodiversity for 
                                    obtaining sustainable of resources for future generations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section id="services">
            <div class="container-fluid ">
                <div class="row g-0 bg-primary rounded-2">
                    <div class="row g-0 px-lg-5 text-center text-white  ">
                        <p>
                            <h2>Services</h2><hr>
                            LILA provides end-to-end integrated services to plan, manage, and evaluate the performance of nature-based enterprise in
                            managing their lands and resources by using the most recent technology, system, and approach.
                        </p>
                    </div>
                    <div class="row g-0 py-4 text-center ">
                        <div class="col-lg-3 col-sm-6 my-2" data-aos="zoom-in-up">
                            <div class="rectangle br_esa">
                                <p class="text-white mx-3">
                                    <b>ENVIRONMENTAL AND SOCIAL ASSESSMENT</b>
                                   <a href="{{ route('environmental') }}">
                                    <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                   </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-2" data-aos="zoom-in-up">
                            <div class="rectangle br_dasd">
                                <p class="text-white mx-3">
                                    <b>DATA ANALYTICS AND SYSTEM DEVELOPMENT</b>
                                    <a href="{{ route('data_analytics') }}">
                                        <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-2" data-aos="zoom-in-up">
                            <div class="rectangle br_ocm">
                                <p class="text-white mx-3">
                                    <b>ORGANIZATIONAL CHANGE MANAGEMENT</b>
                                    <a href="{{ route('organizational') }}">
                                        <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-2" data-aos="zoom-in-up">
                            <div class="rectangle br_cbta">
                                <p class="text-white mx-2">
                                    <b>CAPACITY BUILDING AND TECHNICAL ASSISTANCE</b>
                                    <a href="{{ route('capacity_building') }}">
                                        <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Include Projects --}}
        @include('layouts.projects')
        <br>
        <!-- Client-->
        {{-- <section id="client">
            <div class="container-fluid" >
                <div class="row g-0 px-4 px-lg-5  text-white bg-primary rounded-2" >
                    <h2 class="my-3 text-center">Our Client</h2><hr>
                    <div class="col-lg-4 col-sm-6 mb-3 lh-lg" data-aos="zoom-in-down">
                        <p>
                        PT Parna Agromas (LG Group)<br>
                        PT Grand Utama Mandiri (LG Group)<br>
                        PT Indah Kiat Pulp & Paper (Sinarmas Group)<br>
                        PT Jaya Mandiri Sukses (Eagle High Group)<br>
                        PT Sadhana Arifnusa (HM. Sampoerna Group)<br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-3 lh-lg" data-aos="zoom-in-down">
                        <p>
                        PT Parna Agromas (LG Group)<br>
                        PT Grand Utama Mandiri (LG Group)<br>
                        PT Indah Kiat Pulp & Paper (Sinarmas Group)<br>
                        PT Jaya Mandiri Sukses (Eagle High Group)<br>
                        PT Sadhana Arifnusa (HM. Sampoerna Group)<br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-3 lh-lg" data-aos="zoom-in-down">
                    <p>
                    WRI Indonesia<br>
                    KORINDO Group<br>
                    LG Group<br>
                    FAP Agri Group<br>
                    </p>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- Include Footer --}}
        @include('layouts.footer')
        
    </body>
</html>
