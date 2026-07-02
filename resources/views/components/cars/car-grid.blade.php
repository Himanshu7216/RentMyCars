<div class="row g-4">

    @foreach($cars as $car)

        <div class="col-lg-4 col-md-6">

            @include(
                'components.cards.car-card',
                $car
            )

        </div>

    @endforeach

</div>

@include('components.pagination')
