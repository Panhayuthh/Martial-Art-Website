<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white py-3 fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="/userdashboard">
            <img src="/image/martialArtLogo.png" alt="Logo" class="img-fluid" style="height: 60px;">
        </a>

        <!-- Navigation Desktop -->
        <nav class="hidden md:flex justify-center align-item-center text-center w-full">
            <ul class="flex justify-center gap-6">
                <li><a id="about-link" class="nav-link text-blue-400" href="#about-us">About Us</a></li>
                <li><a id="schedule-link" class="nav-link text-blue-400" href="#">Schedule</a></li>
                <li><a id="events-link" class="nav-link text-blue-400" href="#events">Event</a></li>
                <li><a id="registration-link" class="nav-link text-blue-400" href="{{ route('member.registerMember') }}">Registration</a></li>
                <!-- <li><a id="member-link" class="nav-link text-blue-400" href="#">Member</a></li> -->
            </ul>
        </nav>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-black text-white">
        <nav class="flex flex-col items-center space-y-4 py-4">
            <ul>
                <li><a class="nav-link text-blue-400" href="#about-us">About Us</a></li>
                <li><a class="nav-link text-blue-400" href="#events">Event</a></li>
                <li><a class="nav-link text-blue-400" href="#">Registration</a></li>
                <li><a class="nav-link text-blue-400" href="#">Member</a></li>
                <li><a class="nav-link text-blue-400" href="#">Login</a></li>
                <li><a class="nav-link text-blue-400" href="#">Log Out</a></li>
            </ul>
        </nav>
    </div>
</nav>
