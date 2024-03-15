<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_dasd" id="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end">
                        <h1 class="text-white font-weight-bold">Data Analytics and System Development</h1>
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
                    Advanced data analytics and system development to reveal actionable insights leading to accuracy of decision-making to 
                    increase corporate and business performance.
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
                            <h3>Data Analysis and Management</h3>
                            <hr>
                            Providing technical expertise to collect, manage, analyze, and learn various thematic datasets by utilizing the most recent 
                            technological systems, including cloud-based platform, machine learning, artificial intelligence, and system automation.
                        </p>
                    </div>
                </div>
                <div class="row g-0 fclila text-center mt-lg-2 ">
                    <div class="col-lg-8 gx-4">
                        <p>
                            <br>
                            <h3>Forest and Biodiversity Monitoring System</h3>
                            <hr>
                            Promoting a cloud-based platform that stores, analyzes and visualizes forest and biodiversity data to improve 
                            collaboration and alignment across divisions/units to monitor forest and biodiversity conditions.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="row g-0 text-white text-center mt-lg-2">
                    <div class="col-lg-4 bg-primary">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-8 gx-4 bg-primary ">
                        <p>
                            <br>
                            <h3>Deforestation Verification Tool and Reporting</h3>
                            <hr>
                            A system utilizes satellite imagery to conduct deforestation validation in targeted areas to provide near real-time insights. The system 
                            generates comprehensive reports detailing the extent and context of deforestation, captures before-and-after imagery as evidence. This 
                            evidence serves as a valuable tool for on-the-ground initiatives to intervene deforestation effectively.
                        </p>
                    </div>
                </div>
                <div class="row g-0 fclila text-center mt-lg-2 ">
                    <div class="col-lg-8 gx-4">
                        <p>
                            <br>
                            <h3>Corporate Management System</h3>
                            <hr>
                            Customizing enterprise resources planning (ERP) system to facilitate small and mediumsized businesses (SMEs) to track 
                            and monitor their performance in operational management, finance, human resources, and marketing.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="row g-0 text-white text-center mt-lg-2">
                    <div class="col-lg-4 bg-primary">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-8 gx-4 bg-primary ">
                        <p>
                            <br>
                            <h3>Project Management System and Tools</h3>
                            <hr>
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
