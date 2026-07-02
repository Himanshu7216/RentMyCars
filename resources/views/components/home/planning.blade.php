<section class="section-padding pt-0">

    <div class="container">

        <div class="section-title text-center">

            <h2>What Are You Planning?</h2>

        </div>

        <div class="row g-4 mt-4">

            @foreach($services as $service)

                <div class="col-lg-2 col-md-4 col-6">

                    @include(
                        'components.cards.service-card',
                        $service
                    )

                </div>

            @endforeach

        </div>

    </div>

</section>
