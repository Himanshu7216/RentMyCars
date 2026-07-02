<div class="info-card">

    <h2>
        {{ $car->name }}
    </h2>

    <div class="price">
        ₹{{ number_format($car->price) }}
        <span>/day</span>
    </div>

    <div class="info-grid">

        <div>
            <i class="bi bi-fuel-pump"></i>
            {{ $car->fuel }}
        </div>

        <div>
            <i class="bi bi-people"></i>
            {{ $car->seats }} Seats
        </div>

        <div>
            <i class="bi bi-snow"></i>
            AC
        </div>

        <div>
            <i class="bi bi-stars"></i>
            Premium Interior
        </div>

    </div>

</div>
