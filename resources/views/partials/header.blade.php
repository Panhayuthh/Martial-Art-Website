<header class="bg-black text-white fixed w-full z-10">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img alt="Gagak Putih Indonesia logo" class="h-12 w-12" height="50" src="{{ asset('images//logo.png') }}" width="50"/>
        </div>

        <!-- Navigation Desktop -->
        <nav class="ml-6 hidden md:flex justify-center w-full">
            <ul class="flex space-x-6">
                <li><a id="about-link" class="nav-link text-blue-400" href="#about-us">About Us</a></li>
                <li><a id="events-link" class="nav-link text-blue-400" href="#events">Event</a></li>
                <li><a id="registration-link" class="nav-link text-blue-400" href="#">Registration</a></li>
                <li><a id="member-link" class="nav-link text-blue-400" href="#">Member</a></li>
            </ul>
        </nav>

        <!-- Hamburger Button for mobile -->
        <div class="md:hidden flex items-center">
            <button id="hamburger-icon" class="text-blue-400" onclick="toggleMenu()">
                <i class="fas fa-bars"></i> <!-- Hamburger icon -->
            </button>
        </div>
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
</header>