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
                <div class="row g-0 px-lg-4 text-left" >
                    <p>
                        <h3>Recent Projects</h3><hr>
                    </p>
                    <div class="row g-0" data-aos="zoom-in-up">
                        @foreach ($Projects as $project)
                        <div class="col-lg-3 col-sm-6">
                            <div>
                                <img src="{{  asset('storage/' . $project->featured_image) }}" class="image-container"><br>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-6">
                            <div class="portfolio-box-caption" style="padding-bottom: 20px;">
                                <div>
                                    <h5><a href="{{ route('projects.show', $project->title) }}">{{ $project->title }}</a></h5>
                                </div>
                                <p>{!! Str::limit($project->content, 200) !!}</p> 
                                <small class="project-category text-black-50">{{ $project->category }}</small><br>
                                <small>{{ $project->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Include Footer --}}
        @include('layouts.footer')
        
    </body>
</html>
