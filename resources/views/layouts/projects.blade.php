<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-2 " >
        <p></p>
        <h2 class="text-center mt-0 ">Recent Projects</h2><hr>
        <p></p> 
        <div class="row g-0 " data-aos="zoom-in-up">
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
