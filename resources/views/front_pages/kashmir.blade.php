@extends('components.main')

@section('content')
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="position-relative">
            <img src="{{ asset('asset/img/kashmir-1.jpg') }}" class="img-fluid w-100" alt="Kashmir Itinerary"
                style="object-fit: cover; height: 100vh;">
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center bg-dark bg-opacity-75 p-4 rounded"
                style="font-family: 'Roboto', sans-serif;">
                <h1 class="display-4 text-warning mb-4" style="font-size: 3.5rem;">Kashmir <span class="text-warning">Itinerary</span></h1>
                <div class="breadcrumb d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none mx-2">Home</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('india') }}" class="text-white text-decoration-none mx-2">India</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('kashmir') }}" class="text-white text-decoration-none mx-2">Kashmir</a>
                </div>
            </div>
        </div>
        

        <!-- Itinerary Section -->
        <main class="d-flex justify-content-center align-items-center" style="font-family: 'Roboto', sans-serif;">
            <div class="container py-5">
                <!-- Day 1 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white" style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 1') }}</div>
                                </div>
                                <h2 class="card-title text-primary">Arrive at Srinagar Airport. Local Sightseeing of Srinagar.</h2>
                                <p class="card-text">
                                    Meet our representative at Srinagar airport, transfer to hotel/Houseboat. Afternoon,
                                    leave for local sightseeing of Srinagar City. Visit: Mughal gardens: Chesma Shahi
                                    (Mughal Spring), Nishat (The Garden of Bliss), Shalimar (The Abode of Love). In the
                                    evening, shikara ride in world-famous Dal Lake. Overnight stay at Srinagar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white" style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 2') }}</div>
                                </div>
                                <h2 class="card-title text-primary">Srinagar - Full day trip to Gulmarg (GUL01)</h2>
                                <p class="card-text">
                                    After breakfast, this morning, proceed to Gulmarg. In Gulmarg, take a ride in the
                                    world's highest cable car "Gondola" or enjoy your day by playing golf in the world's
                                    highest golf course. Overnight stay at Srinagar. (Gondola & Pony ride – Not
                                    Included) Note: In Winter’s, Snow Jeep transfers from Tangmarg to Gulmarg to Tangmarg:
                                    Applicable in Nov & Dec Month (Cost Extra) No Cars are allowed to move inside Gulmarg
                                    area, due to issue of horse owner’s association.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 3 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white" style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 3') }}</div>
                                </div>
                                <h2 class="card-title text-primary">From Srinagar to Pahalgam (3 hrs approx)</h2>
                                <p class="card-text">
                                    After breakfast this morning, we check out from Srinagar, as we drive you to
                                    Pahalgam, the Valley of Shepherds, via Srinagar. Drive through saffron fields. Drive
                                    through the pine forest and along the Lidder River. Arrive in Pahalgam and transfer
                                    to your hotel. Rest of the day is at leisure. Overnight stay at a hotel in Pahalgam.
                                    Note: In Pahalgam: Horse Riding, Chandanwari, Betaab Valley, Aru Valley, and Baisaran
                                    Valley (Cost Extra).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 4 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white" style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 4') }}</div>
                                </div>
                                <h2 class="card-title text-primary">Drive from Pahalgam to Srinagar. (Stay in HouseBoat)</h2>
                                <p class="card-text">
                                    After breakfast, drive towards Srinagar & local sightseeing of Srinagar City. Visit:
                                    Mughal gardens: Chesma Shahi (Mughal Spring), Nishat (The Garden of Bliss), Shalimar
                                    (The Abode of Love). Overnight stay at Srinagar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 5 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white" style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 5') }}</div>
                                </div>
                                <h2 class="card-title text-primary">Proceed to Airport from Srinagar Houseboat.</h2>
                                <p class="card-text">
                                    After breakfast, this morning, check out from your houseboat and get transferred to
                                    Srinagar Airport for your onward journey. Tour Ends.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Video Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Watch Our Kashmir Journey</h2>
                <div class="ratio ratio-16x9 position-relative" style="border: 1px solid #ddd; overflow: hidden;">
                    <iframe src="{{ asset('asset/img/kashmirvideo.mp4') }}" title="Kashmir Journey" allowfullscreen
                        class="rounded"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
