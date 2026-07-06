<header class="navbar-wrapper shadow-sm">

    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                <img src="{{ asset('assets/images/Drive_Lux_logo.png') }}"
                     alt="DriveLux"
                     height="90">

            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu">

                <i class="bi bi-list fs-2"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <!-- Menu -->
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-4">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Cars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Special Cars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Long Drives</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Tours</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Wedding</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                </ul>

                <!-- Auth Buttons -->
                <div class="d-flex align-items-center gap-3">

                    <a href="#" class="login-btn">
                        Login
                    </a>

                    <a href="#" class="register-btn">
                        Register
                    </a>

                </div>

            </div>
        </div>
    </nav>

</header>
