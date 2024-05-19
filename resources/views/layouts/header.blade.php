<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('/') }}"><h2><b>LILA</b></h2></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                @if ($currentRouteName === "environmental" || $currentRouteName === "data" || $currentRouteName === "organizational" || $currentRouteName === "capacity" )
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#services" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dd-font pe-3" href="{{ url('/environmental-and-social-assesement') }}">Environmental And Social Assessment</a></li>
                            <li><a class="dropdown-item dd-font pe-3" href="{{ url('/data-analytics-and-system-development') }}">Data Analytics and System Development</a></li>
                            <li><a class="dropdown-item dd-font pe-3" href="{{ url('/organizational-change-management') }}">Organizational Change Management</a></li>
                            <li><a class="dropdown-item dd-font pe-3" href="{{ url('/capacity-building-and-technical-assistance') }}">Capacity Building and Technical Assistance</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#services') }}">Services</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
