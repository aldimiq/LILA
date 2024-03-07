<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="mastheadcbta" id="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end">
                        <h1 class="text-white font-weight-bold">Capacity Building and Technical Assistance</h1>
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
                    Building, improving, and maximizing capacities to design, implement, monitor, and evaluate program and 
                    organizational management to achieve sustainability targets.
                </h4>  
            </div>
        </section>
        <!-- Services-->
        {{-- REMOTE SENSING AND GEOGRAPHIC INFORMATION SYSTEM --}}
        <section class="page-section-services-esa bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="">
                                <p class="text-white ">
                                    {{-- <img src="{{ asset('assets/img/esa1.png') }}" class="img-esa"> --}}
                                    <b>Remote Sensing and Geographic Information System Image</b>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 py-5 text-center">
                        <h3 class="text-white mt-0">Remote Sensing and Geographic Information System</h3>
                        <p class="text-white-75 mb-4">
                            Providing on-the-job training and technical assistance to the landscape managers on how to utilize UAV drone, remote sensing, 
                            and GIS technology to support their planning and monitoring activities in the landscape.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- DATA ANALYSIS AND MACHINE LEARNING --}}
        <section class="page-section-services-esa " id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center fclila">
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="mt-0">Data Analysis and Machine Learning</h3>
                        <p class="mb-4">
                            Supporting the landscape managers to enable shortcut in exploring current conditions, revealing new insights, and 
                            predicting the future using machine learning and system automation.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center ">
                        <div class="container-test gx-4 gx-lg-5 ">
                            <div class="">
                                <p class="mb-4">
                                    <b>Data Analysis and Machine Learning image</b>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- FOREST AND BIODIVERSITY MANAGEMENT --}}
        <section class="page-section-services-esa bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="">
                                <p class="text-white mb-4">
                                    <b>Forest and Biodiversity Management image</b>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="text-white mt-0">Forest and Biodiversity Management</h3>
                        <p class="text-white-75 mb-4">
                            Assisting the nature-based enterprises to effectively manage forest ecosystem and biodiversity 
                            using the customized system and technology in accordance with their business model and culture.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- PROJECT AND ORGANIZATIONAL MANAGEMENT --}}
        <section class="page-section-services-esa " id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center fclila">
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="mt-0">Project and Organizational Management</h3>
                        <p class="mb-4">
                            Building the capacity and assisting the nature-based enterprises in mainstreaming new business model into their 
                            organizational management and enabling synergy between project design with the government compliance.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center ">
                        <div class="container-test gx-4 gx-lg-5 ">
                            <div class="">
                                <p class="mb-4">
                                    <b>Project and Organizational Management image</b>
                                   </a> 
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- PROJECT MANAGEMENT SYSTEM AND TOOLS --}}
        <section class="page-section-services-esa bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="container-test gx-4 gx-lg-5 text-white">
                            <div class="">
                                <p class="text-white mb-4">
                                    <b>Project Management System and Tools image</b>
                                   </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-9 py-5 text-center">
                        <h3 class="text-white mt-0">Project Management System and Tools</h3>
                        <p class="text-white-75 mb-4">
                            Developing collaborative system and tools that facilitate the implementation of project management cycle across 
                            divisions/units to increase overall performance within an enterprise.
                        </p>
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
