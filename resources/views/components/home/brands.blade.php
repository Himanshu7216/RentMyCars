<section class="section-padding">

    <div class="container">

        <div class="section-title text-center">
            <h2>All Major Brands</h2>
        </div>

        <div class="row g-4 mt-4">

            @foreach($brands as $brand)

                <div class="col-lg-2 col-md-3 col-6">
                    @include('components.cards.brand-card',$brand)
                </div>

            @endforeach

        </div>

    </div>

</section>
