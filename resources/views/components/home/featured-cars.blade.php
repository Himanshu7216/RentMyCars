<section class="section-padding">

    <div class="container">

        <div class="section-header">

            <h2>Featured Cars</h2>

            <a href="#" class="view-all-btn">
                View All Cars
            </a>

        </div>

        <div class="row g-4 mt-4">

            @foreach($cars as $car)

                <div class="col-lg-3 col-md-6">

                    @include(
                        'components.cards.car-card',
                        $car
                    )

                </div>

            @endforeach

        </div>

    </div>

</section>
