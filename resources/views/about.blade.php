<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead bg_mast" id="masthead">
            <div class="container px-lg-5 h-100 text-white">
                <div class="row gx-lg-5 h-100 text-left " data-aos="fade-in" data-aos-delay="200">
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
        <section class="my-4" id="thematics">
            <div class="container px-4 ">
                <h4 class="text-justify fclila">
                    <b>Layana Infini Lanskap (LILA)</b> is a naturebased solutions technology start-up under <b>PT Shakaro Indoraya Lestari</b> that was 
                    initiated by a group of environmentalists and data enthusiasts with more than 12 years of experiences in the fields of forest 
                    resources management, biodiversity conservation, ecosystem restoration, socio-economic development, and climate solutions. 
                </h4>  
            </div>
        </section>
        {{-- Our Teams --}}
        <section id="Teams">
            <div class="container-fluid ">
                <div class="row g-0  ">
                    <div class="row g-0 px-lg-5 text-center rounded-2 text-white  bg-primary" data-aos="fade-in" >
                        <p>
                            <h3>Our Teams</h3><hr>
                            Our core team and associates continue to evolve enabling us to provide technical expertise and consultancy in nature-based 
                            solutions, corporate and program management, organizational change management, and system development and integration to help 
                            nature-based enterprises adapting their new business model.
                        </p>
                    </div>
                    <div class="row g-0 py-4 text-center " data-aos="fade-in">
                        <div class="col-lg-3 col-sm-6 my-2">
                            <div class="rectangle-avatar bg-primary">
                                <p class="text-white mx-3">
                                    <img src="{{ asset('assets/img/icon/user.png') }}" class="avatar"><br><br>
                                    NAME<br>
                                    <b>POSITION</b>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-2">
                            <div class="rectangle-avatar bg-primary">
                                <p class="text-white mx-3">
                                    <img src="{{ asset('assets/img/icon/user.png') }}" class="avatar"><br><br>
                                    NAME<br>
                                    <b>POSITION</b>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-2">
                            <div class="rectangle-avatar bg-primary">
                                <p class="text-white mx-3">
                                    <img src="{{ asset('assets/img/icon/user.png') }}" class="avatar"><br><br>
                                    NAME<br>
                                    <b>POSITION</b>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-2">
                            <div class="rectangle-avatar bg-primary">
                                <p class="text-white mx-3">
                                    <img src="{{ asset('assets/img/icon/user.png') }}" class="avatar"><br><br>
                                    NAME<br>
                                    <b>POSITION</b>
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
