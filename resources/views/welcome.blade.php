<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead" id="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-left text-left">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Layanan Infini Lanskap</h1>
                        <h3 class="text-white font-weight-bold">A Nature-Based Solution Technology</h3>
                        <hr/>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">
                            LILA provides end-to-end integrated services to plan, manage, and evaluate the performance of nature-based enterprise in
                            managing their lands and resources by using the most recent technology, system, and approach.
                        </p>
                        <a class="btn btn-primary btn-xl" href="#thematics">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Thematics-->
        <section class="page-section-thematics " id="thematics">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 ">Thematic Areas</h2>           
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><img src="{{ asset('assets/img/icon/sfm.png') }}" class="icon-services"></div>
                            <h3 class="h4 mb-2 fclila"><b>SUSTAINABLE FOREST MANAGEMENT</b></h3>
                            <p class="text mb-0 ">
                                Identify opportunities to increase the sustainability of forest management through nature-based solutions 
                                for the benefits of the forest, climate, and biodiversity, while benefiting local communities
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><img src="{{ asset('assets/img/icon/er.png') }}" class="icon-services"></div>
                            <h3 class="h4 mb-2 fclila"><b>ECOSYSTEM RESTORATION</b></h3>
                            <p class="text mb-0 ">
                                Design, implement, and monitor collaborative actions to prevent and reverse the degradation of ecosystems 
                                through adapting landscape approach and forest and landscape restoration strategies.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><img src="{{ asset('assets/img/icon/bc.png') }}" class="icon-services"></div>
                            <h3 class="h4 mb-2 fclila"><b>BIODIVERSITY CONSERVATION</b></h3>
                            <p class="text mb-0 ">
                                Design and promote collaborative conservation initiatives to protect and manage the biodiversity for 
                                obtaining sustainable of r esources for future generations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section-services bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-white mt-0">Services</h2>
                        <p class="text-white-75 mb-4">
                            LILA provides end-to-end integrated services to plan, manage, and evaluate the performance of nature-based enterprise in
                            managing their lands and resources by using the most recent technology, system, and approach.
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="rectangle_img_esa">
                                <p class="text-white mb-4">
                                    <b>ENVIRONMENTAL AND SOCIAL ASSESSMENT</b>
                                   <a href="{{ url('/environmental-and-social-assesement') }}">
                                    <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="rectangle_img_dasd">
                                <p class="text-white mb-4">
                                    <b>DATA ANALYTICS AND SYSTEM DEVELOPMENT</b>
                                    <a href="{{ url('/data-analytics-and-system-development') }}">
                                        <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                    </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="rectangle_img_ocm">
                                <p class="text-white mb-4">
                                    <b>ORGANIZATIONAL CHANGE MANAGEMENT</b>
                                    <a href="{{ url('/organizational-change-management') }}">
                                        <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                    </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="rectangle_img_cbta">
                                <p class="text-white mb-4">
                                    <b>CAPACITY BUILDING AND TECHNICAL ASSISTANCE</b>
                                    <a href="{{ url('/capacity-building-and-technical-assistance') }}">
                                        <button class="button_service" style="vertical-align:middle" ><span>More Info </span></button>
                                    </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Include Portofolio --}}
        @include('layouts.portofolio')
        <!-- Contact-->
        <section class="page-section-thematics " id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Our Client</h2>
                        <p></p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-4  mb-5 mb-lg-0">
                        <div>PT Parna Agromas (LG Group)</div><p>
                        <div>PT Grand Utama Mandiri (LG Group)</div><p>
                        <div>PT Indah Kiat Pulp & Paper (Sinarmas Group)</div><p>
                        <div>PT Jaya Mandiri Sukses (Eagle High Group)</div><p>
                        <div>PT. Sadhana Arifnusa (HM. Sampoerna Group)</div><p>
                    </div>
                    <div class="col-lg-4  mb-5 mb-lg-0">
                        <div>PT Kalpika Wanatama I (HM. Sampoerna Group)</div><p>
                        <div>PT Kalpika Wanatama II (HM. Sampoerna Group)</div><p>
                        <div>PT. Restorasi Ekosistem Indonesia</div><p>
                        <div>Kalimantan Agro Nusantara</div><p>
                    </div>
                    <div class="col-lg-4  mb-5 mb-lg-0">
                        <div>Sampoerna Kayoe</div><p>
                        <div>WRI Indonesia</div><p>
                        <div>KORINDO Group</div><p>
                        <div>LG Group</div><p>
                        <div>FAP Agri Group</div><p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Include Footer --}}
        @include('layouts.footer')
        
    </body>
</html>
