<div class="car-gallery">

    <div class="main-image">

        <img src="{{ $car->image }}"
             class="img-fluid rounded-4">

    </div>

    <div class="row mt-3 g-3">

        @foreach($car->gallery as $image)

            <div class="col-3">

                <img src="{{ $image }}"
                     class="gallery-thumb img-fluid rounded-3">

            </div>

        @endforeach

    </div>

</div>
