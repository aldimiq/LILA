<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="mastheadesa" id="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end">
                        <h1 class="text-white font-weight-bold">Environmental and Social Assesment</h1>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <a class="btn btn-primary btn-xl" href="#thematics">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Thematics-->
        <section class="page-section-thematics " id="thematics">
            <div class="container px-4 px-lg-5">
                <h4 class="text-center mt-0 fclila">
                    Identify opportunities to increase the sustainability of forest management through nature-based solutions for the
                    benefits of the forest, climate, and biodiversity, while benefiting local communities.
                </h4>  
            </div>
        </section>
        <!-- Services-->
        {{-- BIODIVERSITY SURVEY AND ASSESSMENT --}}
        <section class="page-section-services-esa bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="">
                                <p class="text-white ">
                                    <img src="{{ asset('assets/img/esa1.png') }}" class="img-esa">
                                    {{-- <b>Biodiversity Survey and Assessment image</b> --}}
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 py-5 text-center">
                        <h3 class="text-white mt-0">Biodiversity Survey and Assessment</h3>
                        <p class="text-white-75 mb-4">
                            Conducting field measurement to assess biodiversity conditions and analyzing its data and information that are 
                            used for further environmental assessment to develop biodiversity and environmental management strategy.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- COMMUNITY LIVELIHOOD ASSESSMENT --}}
        <section class="page-section-services-esa " id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center fclila">
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="mt-0">Community Livelihood Assessment</h3>
                        <p class="mb-4">
                            Conducting socio-economic surveys to assess livelihood capital conditions of community that are used to develop 
                            environmental and social action plan and community livelihood development strategy.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center ">
                        <div class="container-test gx-4 gx-lg-5 ">
                            <div class="">
                                <p class="mb-4">
                                    <b>Community Livelihood Assessment image</b>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- LAND USE LAND COVER ANALYSIS AND MODELING --}}
        <section class="page-section-services-esa bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="">
                                <p class="text-white mb-4">
                                    <b>Land Use Land Cover Analysis and Modeling image</b>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="text-white mt-0">Land Use Land Cover Analysis and Modeling</h3>
                        <p class="text-white-75 mb-4">
                            Analyzing land use land cover, through modeling spatial and spectral characteristics of satellite imageries and 
                            vegetation data, that becomes key dataset required by various environmental and social assessment.

                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- INTEGRATED HCV-HCS ASSESSMENT --}}
        <section class="page-section-services-esa " id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center fclila">
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="mt-0">Integrated HCV-HCS Assessment</h3>
                        <p class="mb-4">
                            Assessing High Conservation Values and High Carbon Stock at potential conservation area 
                            that are important for landbased enterprise to achieve their sustainability targets.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center ">
                        <div class="container-test gx-4 gx-lg-5 ">
                            <div class="">
                                <p class="mb-4">
                                    <b>Integrated HCV-HCS Assessment image</b>
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
        {{-- Include Footer --}}
        @include('layouts.footer')
    </body>
</html>
