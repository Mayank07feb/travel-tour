<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Trevia</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                <a href="{{ route('packages')}}" class="nav-item nav-link">Packages</a>
                <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('destination')}}" class="dropdown-item">Destination</a>
                        <a href="{{route('tour')}}" class="dropdown-item">Explore Tour</a>
                        <a href="{{route('booking')}}" class="dropdown-item">Travel Booking</a>
                        <a href="{{route('gallery')}}" class="dropdown-item">Our Gallery</a>
                        <a href="{{route('guides')}}" class="dropdown-item">Travel Guides</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{route('page404')}}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
        </div>
    </nav>


</div>