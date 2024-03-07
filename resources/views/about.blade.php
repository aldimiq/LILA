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
                <h4 class="text-center mt-0 fclila">
                    <b>Layana Infini Lanskap (LILA)</b> is a naturebased solutions technology start-up under <b>PT Shakaro Indoraya Lestari</b> that was 
                    initiated by a group of environmentalists and data enthusiasts with more than 12 years of experiences in the fields of forest 
                    resources management, biodiversity conservation, ecosystem restoration, socio-economic development, and climate solutions. 
                </h4>  
            </div>
        </section>
        {{-- Our Teams --}}
        <section class="page-section-services-esa bg-primary" id="Teams">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12 py-5 text-center">
                        <h3 class="text-white mt-0">Our Teams</h3>
                        <p class="text-white-75 mb-4">
                            Our core team and associates continue to evolve enabling us to provide technical expertise and consultancy in nature-based 
                            solutions, corporate and program management, organizational change management, and system development and integration to help 
                            nature-based enterprises adapting their new business model.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Include Footer --}}
        @include('layouts.footer')
    </body>
</html>
