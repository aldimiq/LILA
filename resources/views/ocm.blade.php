<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_ocm" id="masthead">
            <div class="container px-4 px-lg-5 h-100" >
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" data-aos="fade-in" data-aos-delay="200">
                    <div class="col-lg-12 align-self-end">
                        <h1 class="text-white font-weight-bold">Organizational Change Management</h1>
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
                            Developing change management framework and strategizing the organizational transition to manage the effect of new 
                            business processes and changes in organizational structure and culture within an enterprise.
                        </h4> 
                    </p>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section id="services">
            <div class="container-fluid">
                <div class="row g-0  mb-3 text-center">
                    <div class="col-lg-12 " data-aos="zoom-down">
                        <a class="portfolio-box">
                            <img class="img-fluid" src="assets/img/portfolio/Organizational Change Management/1.png">
                        </a>
                    </div>
                </div>
                <div class="row g-0 text-white text-center">
                    <div class="col-lg-4 gx-4 bg-primary " >
                        <div data-aos="flip-down">
                        <p>
                            <br>
                            <h3>Organizational Management Review</h3>
                            <hr>
                            Assessing the seven elements of organizational management regarding how they affect each other and how coherent the 
                            enterprise is when implementing the change.
                        </p>
                        </div>
                    </div>
                    <div class="col-lg-4 gx-4 bg-primary ">
                        <div data-aos="flip-left">
                            <p>
                                <br>
                                <h3>Organizational Change Strategy</h3>
                                <hr>
                                Developing effective change management strategy and its action plan as a road map in executing and evaluating 
                                change management within an enterprise.
                            </p>    
                        </div>
                    </div>
                    <div class="col-lg-4 gx-4 pb-2 bg-primary ">
                        <div data-aos="flip-left">
                        <p>
                            <br>
                            <h3>Organizational Transition Actions Technical Assistance</h3>
                            <hr>
                            Formulating step-by-step organizational transition actions and facilitating agile transition process to achieve 
                            the goals of organizational change management.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Include Projects --}}
        @include('layouts.projects')
        {{-- Include Footer --}}
        @include('layouts.footer')
    </body>
</html>
