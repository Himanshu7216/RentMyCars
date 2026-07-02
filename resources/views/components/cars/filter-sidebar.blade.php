<div class="filter-sidebar">

    <h4 class="filter-title">
        Filters
    </h4>

    {{-- Car Type --}}
    <div class="filter-group">

        <h6>Car Type</h6>

        @foreach([
            'SUV',
            'Sedan',
            'Luxury',
            'Sports',
            'Convertible'
        ] as $item)

            @include('components.cars.filter-item',[
                'name'=>'car_type',
                'value'=>$item
            ])

        @endforeach

    </div>

    {{-- Price --}}
    <div class="filter-group">

        <h6>Price Range</h6>

        <input type="range"
               class="form-range"
               min="1000"
               max="25000">

        <div class="price-values">
            ₹1,000 - ₹25,000
        </div>

    </div>

    {{-- Fuel Type --}}
    <div class="filter-group">

        <h6>Fuel Type</h6>

        @foreach([
            'Petrol',
            'Diesel',
            'Electric',
            'Hybrid'
        ] as $item)

            @include('components.cars.filter-item',[
                'name'=>'fuel',
                'value'=>$item
            ])

        @endforeach

    </div>

    {{-- Transmission --}}
    <div class="filter-group">

        <h6>Transmission</h6>

        @foreach([
            'Automatic',
            'Manual'
        ] as $item)

            @include('components.cars.filter-item',[
                'name'=>'transmission',
                'value'=>$item
            ])

        @endforeach

    </div>

    {{-- Seats --}}
    <div class="filter-group">

        <h6>Seats</h6>

        @foreach([
            '2',
            '4',
            '5',
            '7'
        ] as $item)

            @include('components.cars.filter-item',[
                'name'=>'seats',
                'value'=>$item
            ])

        @endforeach

    </div>

</div>
