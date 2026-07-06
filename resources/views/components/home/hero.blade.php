<section class="hero-section">

    <!-- Background Video -->
    <div class="hero-bg">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="{{ asset('assets/videos/intro_car_hero_section.mp4') }}" type="video/mp4">
        </video>
    </div>



    <!-- Content -->
    <div class="container hero-container">

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

        {{-- <div class="hero-car-image">
            <img src="{{ asset('assets/images/hero_image.png') }}"
                 class="hero-car"
                 alt="Hero Car">
        </div> --}}

    </div>
<!-- Overlay -->
    <div class="hero-overlay"></div>
    @include('components.home.booking-form')


</section>
