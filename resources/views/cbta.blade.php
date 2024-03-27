<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_cbta" id="masthead">
            <div class="container px-4 px-lg-5 h-100" >
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" data-aos="fade-in" data-aos-delay="200">
                    <div class="col-lg-12 align-self-end">
                        <h1 class="text-white font-weight-bold">Capacity Building and Technical Assistance</h1>
                    </div>
                    <div class="col-lg-8 align-self-baseline"><br>
                        <a class="btn btn-primary btn-xl" href="#thematics">Find Out More</a>
                    </div>                    
                </div>
            </div>
        </header>
        <!-- Thematics-->
        <section id="thematics">
            <div class="container-fluid ">
                <div class="row g-0 px-lg-5 py-lg-3 text-center fclila ">
                    <p>
                        <h4>
                            Building, improving, and maximizing capacities to design, implement, monitor, and 
                            evaluate program and organizational management to achieve sustainability targets.
                        </h4> 
                    </p>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section id="services">
            <div class="container-fluid">
                <div class="row g-0 text-white text-center py-lg-2" data-aos="fade-right">
                    <div class="col-lg-4 bg-primary">
                        <a class="portfolio-box">
                            <img class="img-fluid" src="assets/img/portfolio/Capacity Building and Technical Assistance/1.png">
                        </a>
                    </div>
                    <div class="col-lg-8 gx-4 bg-primary ">
                        <p>
                            <br>
                            <h3>Remote Sensing and Geographic Information System</h3>
                            <hr>
                            Providing on-the-job training and technical assistance to the landscape managers on how to utilize UAV drone, remote sensing, 
                            and GIS technology to support their planning and monitoring activities in the landscape.
                        </p>
                    </div>
                </div>
                <div class="row g-0 fclila text-center py-lg-2" data-aos="fade-left">
                    <div class="col-lg-8 gx-4">
                        <p>
                            <br>
                            <h3>Data Analysis and Machine Learning</h3>
                            <hr>
                            Supporting the landscape managers to enable shortcut in exploring current conditions, revealing new insights, and 
                            predicting the future using machine learning and system automation.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <a class="portfolio-box">
                            <img class="img-fluid" src="assets/img/portfolio/Capacity Building and Technical Assistance/2.png">
                        </a>
                    </div>
                </div>
                <div class="row g-0 text-white text-center py-lg-2" data-aos="fade-right">
                    <div class="col-lg-4 bg-primary">
                        <a class="portfolio-box">
                            <img class="img-fluid" src="assets/img/portfolio/Capacity Building and Technical Assistance/3.png">
                        </a>
                    </div>
                    <div class="col-lg-8 gx-4 bg-primary ">
                        <p>
                            <br>
                            <h3>Forest and Biodiversity Management</h3>
                            <hr>
                            Assisting the nature-based enterprises to effectively manage forest ecosystem and biodiversity 
                            using the customized system and technology in accordance with their business model and culture.
                        </p>
                    </div>
                </div>
                <div class="row g-0 fclila text-center py-lg-2" data-aos="fade-left">
                    <div class="col-lg-8 gx-4">
                        <p>
                            <br>
                            <h3>Project and Organizational Management</h3>
                            <hr>
                            Building the capacity and assisting the nature-based enterprises in mainstreaming new business model into their 
                            organizational management and enabling synergy between project design with the government compliance.
                        </p>
                    </div>
                    <div class="col-lg-4 ">
                        <a class="portfolio-box">
                            <img class="img-fluid" src="assets/img/portfolio/Capacity Building and Technical Assistance/4.png">
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
