@extends('components.main')

@section('content')
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="position-relative">
            <img src="{{ asset('asset/img/india.jpg') }}" class="img-fluid w-100" alt="India Itinerary"
                style="object-fit: cover; height: 100vh;">
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center bg-dark bg-opacity-75 p-4 rounded"
                style="font-family: 'Roboto', sans-serif;">
                <h1 class="display-4 text-warning mb-4" style="font-size: 3.5rem;">India <span
                        class="text-warning">Itinerary</span></h1>
                <div class="breadcrumb d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none mx-2">Home</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('india') }}" class="text-white text-decoration-none mx-2">India</a>
                </div>
            </div>
        </div>

        <!-- Destination Section -->
        <div class="container-fluid destination py-5">
            <div class="container">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">India Destinations</h1>
                </div>
                <div class="tab-class text-center">
                    <div class="tab-content">
                        <!-- Kashmir Itinerary -->
                        <div id="tab-2" class="tab-pane fade show active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{ asset('asset/img/kashmir-1.jpg') }}"
                                            alt="Kashmir Itinerary">
                                        <div class="destination-overlay p-4">
                                            <a href="#"
                                                class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Kashmir Itinerary</h4>
                                            <a href="{{ route('kashmir') }}" class="btn-hover text-white">View All Places <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="{{ asset('asset/img/kashmir-1.jpg') }}" data-lightbox="destination-5">
                                                <i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{ asset('asset/img/Rajasthan-1.jpg') }}"
                                            alt="Rajasthan Itinerary">
                                        <div class="destination-overlay p-4">
                                            <a href="#"
                                                class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Rajasthan Itinerary</h4>
                                            <a href="{{ route('rajasthan') }}" class="btn-hover text-white">View All Places
                                                <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="{{ asset('asset/img/Rajasthan-1.jpg') }}"
                                                data-lightbox="destination-6">
                                                <i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more destinations as needed -->
                            </div>
                        </div>
                        <!-- Add more destination tabs as needed -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Destination Section End -->

        <!-- Video Section -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Watch Our Journey</h2>
                <div class="ratio ratio-16x9 position-relative" style="border: 1px solid #ddd; overflow: hidden;">
                    <iframe src="{{ asset('asset/img/kashmirvideo.mp4') }}" title="Kashmir Journey" allowfullscreen
                        class="rounded"></iframe>
                </div>
            </div>
        </div>
        <!-- Video Section End -->
    </div>
@endsection
