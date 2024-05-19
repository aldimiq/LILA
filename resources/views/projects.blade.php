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

        {{-- Include Footer --}}
        @include('layouts.footer')
        
    </body>
</html>
