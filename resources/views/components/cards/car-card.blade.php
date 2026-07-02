@props([
    'image',
    'name',
    'price',
    'transmission',
    'fuel',
    'seats'
])

<div class="car-card">

    <div class="car-image-wrapper">
        <img src="{{ $image }}"
             class="img-fluid car-image"
             alt="{{ $name }}">
    </div>

    <div class="car-body">

        <h5 class="car-title">
            {{ $name }}
        </h5>

        <div class="car-price">
            ₹ {{ number_format($price) }}
            <span>/ day</span>
        </div>

        <div class="car-specs">

            <div class="spec-item">
                <i class="bi bi-gear"></i>
                {{ $transmission }}
            </div>

            <div class="spec-item">
                <i class="bi bi-fuel-pump"></i>
                {{ $fuel }}
            </div>

            <div class="spec-item">
                <i class="bi bi-people"></i>
                {{ $seats }} Seats
            </div>

        </div>

        <button class="car-btn">
            View Details
        </button>

    </div>

</div>

{{-- @include('components.cards.car-card',[
    'image'=>asset('assets/images/cars/bmw7.png'),
    'name'=>'BMW 7 Series',
    'price'=>8999,
    'transmission'=>'Automatic',
    'fuel'=>'Petrol',
    'seats'=>5
]) --}}
