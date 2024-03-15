<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_esa" id="masthead">
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
        <section id="services">
            <div class="container-fluid">
                <div class="row g-0 text-white text-center">
                    <div class="col-lg-4 bg-primary">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-8 gx-4 bg-primary ">
                        <p>
                            <br>
                            <h3>Biodiversity Survey and Assessment</h3>
                            <hr>
                            Conducting field measurement to assess biodiversity conditions and analyzing its data and information that are 
                            used for further environmental assessment to develop biodiversity and environmental management strategy.
                        </p>
                    </div>
                </div>
                <div class="row g-0 fclila text-center mt-lg-2 ">
                    <div class="col-lg-8 gx-4">
                        <p>
                            <br>
                            <h3>Community Livelihood Assessment</h3>
                            <hr>
                            Conducting socio-economic surveys to assess livelihood capital conditions of community that are used to develop 
                            environmental and social action plan and community livelihood development strategy.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="row g-0 text-white text-center ">
                    <div class="col-lg-4 bg-primary">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-8 gx-4 bg-primary ">
                        <p>
                            <br>
                            <h3>Land Use Land Cover Analysis and Modeling</h3>
                            <hr>
                            Analyzing land use land cover, through modeling spatial and spectral characteristics of satellite imageries and 
                            vegetation data, that becomes key dataset required by various environmental and social assessment.
                        </p>
                    </div>
                </div>
                <div class="row g-0 fclila text-center mt-lg-2 ">
                    <div class="col-lg-8 gx-4">
                        <p>
                            <br>
                            <h3>Integrated HCV-HCS Assessment</h3>
                            <hr>
                            Assessing High Conservation Values and High Carbon Stock at potential conservation area 
                            that are important for landbased enterprise to achieve their sustainability targets.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
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
