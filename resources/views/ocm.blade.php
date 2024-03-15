<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_ocm" id="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end">
                        <h1 class="text-white font-weight-bold">Organizational Change Management</h1>
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
                    Developing change management framework and strategizing the organizational transition to manage the effect of new 
                    business processes and changes in organizational structure and culture within an enterprise. 
                </h4>  
            </div>
        </section>
        <!-- Services-->
        {{-- OCM Image --}}
        <section class="page-section-services-esa " id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center fclila">
                    <div class="col-lg-12 py-5 text-center">
                        {{-- <img src="{{ asset('assets/img/ocm.png') }}" class=""> --}}
                        <h3 class="mt-0">Organizational Change Management Image</h3>
                    </div>
                </div>
            </div>
        </section>
        {{-- OCM --}}
        <section class="page-section-services-esa bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 py-5 text-center">
                        <h3 class="text-white mt-0">Organizational Management Review</h3>
                        <p class="text-white-75 mb-4">
                            Assessing the seven elements of organizational management regarding how they affect each other and how coherent the 
                            enterprise is when implementing the change.
                        </p>
                    </div>
                    <div class="col-lg-4 py-5 text-center">
                        <h3 class="text-white mt-0">Organizational Change Strategy</h3>
                        <p class="text-white-75 mb-4">
                            Developing effective change management strategy and its action plan as a road map in executing and evaluating 
                            change management within an enterprise.
                        </p>
                    </div>
                    <div class="col-lg-4 py-5 text-center">
                        <h3 class="text-white mt-0">Organizational Transition Actions Technical Assistance</h3>
                        <p class="text-white-75 mb-4">
                            Formulating step-by-step organizational transition actions and facilitating agile transition process to achieve 
                            the goals of organizational change management.
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
