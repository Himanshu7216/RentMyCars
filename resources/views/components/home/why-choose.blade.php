<section class="section-padding">

    <div class="container">

        <div class="section-title text-center">

            <h2>Why Choose DriveLux?</h2>

        </div>

        <div class="row g-4 mt-5">

            @foreach($features as $feature)

                <div class="col-lg-2 col-md-4 col-6">

                    @include(
                        'components.cards.feature-card',
                        $feature
                    )

                </div>

            @endforeach

        </div>

    </div>

</section>
