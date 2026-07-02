<div class="container booking-container">

    <div class="booking-card">

        <!-- Rental Type -->
        <div class="booking-tabs">

            <button class="booking-tab active">
                <i class="bi bi-car-front"></i>
                Self Drive
            </button>

            <button class="booking-tab">
                <i class="bi bi-person-badge"></i>
                With Driver
            </button>

        </div>

        <form>

            <div class="row g-3 align-items-end">

                <div class="col-lg-3">
                    <label>Pick-up Location</label>

                    <select class="form-control booking-input">
                        <option>Enter city or airport</option>
                    </select>
                </div>

                <div class="col-lg-2">
                    <label>Pick-up Date</label>

                    <input type="date"
                           class="form-control booking-input">
                </div>

                <div class="col-lg-2">
                    <label>Pick-up Time</label>

                    <input type="time"
                           class="form-control booking-input">
                </div>

                <div class="col-lg-2">
                    <label>Return Date</label>

                    <input type="date"
                           class="form-control booking-input">
                </div>

                <div class="col-lg-2">
                    <label>Return Time</label>

                    <input type="time"
                           class="form-control booking-input">
                </div>

                <div class="col-lg-1">
                    <button class="search-btn w-100">
                        Search
                    </button>
                </div>

            </div>

        </form>

    </div>

</div>
