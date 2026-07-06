<section class="hero-section">

    <!-- Background Video -->
    {{-- <div class="hero-bg">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="{{ asset('assets/videos/intro_car_hero_section.mp4') }}" type="video/mp4">
        </video>
    </div> --}}
    <div class="hero-bg">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="{{ asset('assets/videos/intro_car_hero_section.mp4') }}" type="video/mp4">
        </video>
    </div>


    <!-- Content -->
    {{-- <div class="container hero-container">

        <div class="hero-content">
            <h1 class="hero-title">
                Drive Your
                <span>Dream Car</span>
            </h1>

            <p class="hero-subtitle">
                Self Drive or Chauffeur driven luxury cars
                for every special moment.
            </p>
        </div>



    </div>
<!-- Overlay -->
    <div class="hero-overlay"></div> --}}
    {{-- @include('components.home.booking-form') --}}

<div class="hero-overlay"></div>

    <div class="container hero-container h-100">

        <div class="row h-100 align-items-center">

            <div class="col-lg-6 col-md-8 col-12">

                <div class="hero-content">

                    <h1 class="hero-title">
                        Drive Your
                        <span>Dream Car</span>
                    </h1>

                    <p class="hero-subtitle">
                        Self Drive or Chauffeur driven luxury cars
                        for every special moment.
                    </p>

                </div>

            </div>

        </div>

    </div>

    @include('components.home.booking-form')

</section>
