<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.header')
        <!-- Masthead-->
        <header class="masthead_project" id="masthead">
            <div class="container px-lg-5 h-100 text-white" data-aos="fade-in" data-aos-delay="200">
                <div class="row gx-lg-5 h-100 text-left " >
                    <div class="col-lg-8 align-self-end">
                        <h3>Layana Infini Lanskap</h3>
                        <h5>A Nature-Based Solution Technology</h5>
                        
                    </div>
                </div>
            </div>
        </header>
         <!-- Recent Projects-->
         <section >
            <div class="container-fluid ">
                <div class="row g-0 px-lg-4 ">
                    <p>
                        <h3 class="text-left">Recent Projects</h3><hr>
                    </p>
                    <div class="row g-0" data-aos="zoom-in-up">
                        <p>
                        <h2>{{ $project->title }}</h2>
                        </p>
                        <div class="col-lg-12 col-md-12 mb-4 mb-lg-0 text-center">
                            <img src="{{ asset('storage/' . $project->featured_image) }}" class="img-fluid" alt="{{ $project->title }}">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <p>{!! $project->content !!}</p>
                            <div class="project-meta">
                                <span class="text-muted">Category: {{ $project->category }}</span><br>
                                <span class="text-muted float-right">Created: {{ $project->created_at->format('d M Y') }}</span>
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
