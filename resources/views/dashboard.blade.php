<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Gagak Putih Indonesia</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <style>
            html {
                scroll-behavior: smooth;
            }
            .active {
                color: #fbbf24; /* Tailwind's yellow-400 */
            }
        </style>
    </head>

    <body class="bg-gray-800 text-white">

        <!-- Include Header -->
        @include('partials.header')

        <main class="relative pt-20">
            <img alt="Martial arts competition" class="w-full h-screen object-cover opacity-50" height="1080" src="{{asset('images/image3.png')}}" width="1920"/>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                <h1 class="text-6xl font-bold">GAGAK PUTIH</h1>
                <h2 class="text-3xl mt-2">INDONESIA</h2>
                <button class="mt-6 px-8 py-3 bg-blue-500 text-white font-bold rounded-full border-2 border-yellow-400 hover:bg-blue-600">
                    REGISTER
                </button>
            </div>
        </main>

        <div class="border-t-4 border-yellow-400"></div>

        <!-- About Us Section -->
        <section id="about-us" class="py-16 bg-gray-800">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-yellow-400">ABOUT US</h1>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center px-6 space-y-4 md:space-y-0 md:space-x-2">
                <div class="md:w-1/2 text-center md:text-center">
                    <p class="text-lg leading-snug text-white text-center">
                        Gagak Putih Indonesia is one of the branches of pencak silat martial arts in Indonesia. Gagak Putih Indonesia was founded by Pendekar Utama Haji Junaedi in 1972. Since its inception, this branch has been committed to developing and preserving the martial art of pencak silat, while instilling moral and ethical values to its members. Currently, Gagak Putih Indonesia is centered in the city of Bogor, this small branch with a Cimande style is currently developing in the West Java area, especially in Bogor Regency.
                    </p>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <!-- Slideshow Container -->
                        <div id="slideshow" class="relative w-full">
                            <!-- Image 1 -->
                            <img alt="Martial artists practicing pencak silat in a gymnasium" class="rounded-lg" height="400" src="{{asset('images/image5.png')}}" width="600" />
                            <!-- Image 2 -->
                            <img alt="Another martial arts image" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" height="400" src="{{asset('images/image8.png')}}" width="600" />
                            <!-- Image 3 -->
                            <img alt="Yet another martial arts image" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" height="400" src="{{asset('images/image7.png')}}" width="600" />
                            <!-- Image 4 -->
                            <img alt="Yet another martial arts image" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" height="400" src="{{asset('images/image2.png')}}" width="600" />
                            <!-- Image 5 -->
                            <img alt="Yet another martial arts image" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" height="400" src="{{asset('images/image9.png')}}" width="600" />
                        </div>

                        <!-- Left Arrow -->
                        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white text-3xl bg-black bg-opacity-50 rounded-full p-2">
                            &#8592;
                        </button>
                        
                        <!-- Right Arrow -->
                        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white text-3xl bg-black bg-opacity-50 rounded-full p-2">
                            &#8594;
                        </button>

                        <!-- Pagination Dots -->
                        <div id="pagination-dots" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                            <!-- Dots will be generated dynamically -->
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="border-t-4 border-yellow-400"></div>

        <!-- schedule Section -->
        <section id="events" class="container mx-auto px-4 py-8">
            <div class="container mx-auto py-10">
                <h1 class="text-center text-4xl font-bold mb-10">SCHEDULE</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Monday -->
                <div class="bg-white text-black p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">MONDAY</h2>
                    <div class="flex items-center mb-4">
                    <img alt="Junior High School PGRI 1 Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Junior High School PGRI 1 Cibinong</p>
                        <p>09.00 - 11.00</p>
                    </div>
                    </div>
                    <div class="flex items-center">
                    <img alt="Senior High School PGRI Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Senior High School PGRI Cibinong</p>
                        <p>15.00 - 17.00</p>
                    </div>
                    </div>
                </div>
                <!-- Tuesday -->
                <div class="bg-white text-black p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">TUESDAY</h2>
                    <div class="flex items-center mb-4">
                    <img alt="Junior High School PGRI 1 Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Junior High School PGRI 1 Cibinong</p>
                        <p>09.00 - 11.00</p>
                    </div>
                    </div>
                    <div class="flex items-center">
                    <img alt="Senior High School PGRI Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Senior High School PGRI Cibinong</p>
                        <p>15.00 - 17.00</p>
                    </div>
                    </div>
                </div>
                <!-- Wednesday -->
                <div class="bg-white text-black p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">WEDNESDAY</h2>
                    <div class="flex items-center mb-4">
                    <img alt="Junior High School PGRI 1 Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Junior High School PGRI 1 Cibinong</p>
                        <p>09.00 - 11.00</p>
                    </div>
                    </div>
                    <div class="flex items-center">
                    <img alt="Senior High School PGRI Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Senior High School PGRI Cibinong</p>
                        <p>15.00 - 17.00</p>
                    </div>
                    </div>
                </div>
                <!-- Thursday -->
                <div class="bg-white text-black p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">THURSDAY</h2>
                    <div class="flex items-center mb-4">
                    <img alt="Junior High School PGRI 1 Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Junior High School PGRI 1 Cibinong</p>
                        <p>09.00 - 11.00</p>
                    </div>
                    </div>
                    <div class="flex items-center">
                    <img alt="Senior High School PGRI Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Senior High School PGRI Cibinong</p>
                        <p>15.00 - 17.00</p>
                    </div>
                    </div>
                </div>
                <!-- Friday -->
                <div class="bg-white text-black p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">FRIDAY</h2>
                    <div class="flex items-center mb-4">
                    <img alt="Junior High School PGRI 1 Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Junior High School PGRI 1 Cibinong</p>
                        <p>09.00 - 11.00</p>
                    </div>
                    </div>
                    <div class="flex items-center">
                    <img alt="Senior High School PGRI Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Senior High School PGRI Cibinong</p>
                        <p>15.00 - 17.00</p>
                    </div>
                    </div>
                </div>
                <!-- Saturday -->
                <div class="bg-white text-black p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">SATURDAY</h2>
                    <div class="flex items-center mb-4">
                    <img alt="Junior High School PGRI 1 Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Junior High School PGRI 1 Cibinong</p>
                        <p>09.00 - 11.00</p>
                    </div>
                    </div>
                    <div class="flex items-center">
                    <img alt="Senior High School PGRI Cibinong" class="w-20 h-20 mr-4" height="100" src="{{asset('images/image5.png')}}" width="100"/>
                    <div>
                        <p>Senior High School PGRI Cibinong</p>
                        <p>15.00 - 17.00</p>
                    </div>
                    </div>
                </div>
                
            </div>
        </section>


        <div class="border-t-4 border-yellow-400"></div>

        <!-- Footer Section -->
        @include('partials.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navLinks = document.querySelectorAll('.nav-link');
                const sections = document.querySelectorAll('section');

                function changeLinkState() {
                    let index = sections.length;

                    // Check which section is in view
                    while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

                    // Remove the 'active' class from all links
                    navLinks.forEach(link => link.classList.remove('active'));

                    // Add 'active' class to the link of the section currently in view
                    if (navLinks[index]) {
                        navLinks[index].classList.add('active');
                    }
                }

                // Run function on load and scroll
                changeLinkState();
                window.addEventListener('scroll', changeLinkState);

                // Toggle mobile menu visibility
                function toggleMenu() {
                    const menu = document.getElementById('mobile-menu');
                    menu.classList.toggle('hidden'); // Toggle the visibility of the mobile menu
                }
            });

            //untuk image
                let currentIndex = 0;
                const images = document.querySelectorAll('#slideshow img');
                const totalImages = images.length;

                // Show next image
                function showNextImage() {
                    images[currentIndex].classList.remove('opacity-100');
                    images[currentIndex].classList.add('opacity-0');
                    
                    currentIndex = (currentIndex + 1) % totalImages;

                    images[currentIndex].classList.remove('opacity-0');
                    images[currentIndex].classList.add('opacity-100');
                }

                // Show previous image
                function showPrevImage() {
                    images[currentIndex].classList.remove('opacity-100');
                    images[currentIndex].classList.add('opacity-0');
                    
                    currentIndex = (currentIndex - 1 + totalImages) % totalImages;

                    images[currentIndex].classList.remove('opacity-0');
                    images[currentIndex].classList.add('opacity-100');
                }

                // Change image every 3 seconds
                setInterval(showNextImage, 5000);

                // Attach event listeners to the arrows
                document.getElementById('next').addEventListener('click', showNextImage);
                document.getElementById('prev').addEventListener('click', showPrevImage);

                // Generate dots based on the number of images
                const paginationDots = document.getElementById('pagination-dots');
                for (let i = 0; i < totalImages; i++) {
                    const dot = document.createElement('span');
                    dot.classList.add('w-3', 'h-3', 'bg-white', 'rounded-full', 'cursor-pointer');
                    dot.classList.add(i === 0 ? 'opacity-100' : 'opacity-50'); // Highlight the first dot
                    dot.setAttribute('data-index', i);
                    paginationDots.appendChild(dot);
                }

                // Update the active dot based on the current index
                function updateDots() {
                    const dots = document.querySelectorAll('#pagination-dots span');
                    dots.forEach(dot => {
                        if (dot.getAttribute('data-index') == currentIndex) {
                            dot.classList.remove('opacity-50');
                            dot.classList.add('opacity-100');
                        } else {
                            dot.classList.remove('opacity-100');
                            dot.classList.add('opacity-50');
                        }
                    });
                }

                // Add event listeners to the dots for manual navigation
                document.querySelectorAll('#pagination-dots span').forEach(dot => {
                    dot.addEventListener('click', function () {
                        const index = parseInt(dot.getAttribute('data-index'));
                        if (index !== currentIndex) {
                            images[currentIndex].classList.remove('opacity-100');
                            images[currentIndex].classList.add('opacity-0');
                            currentIndex = index;
                            images[currentIndex].classList.remove('opacity-0');
                            images[currentIndex].classList.add('opacity-100');
                            updateDots();
                        }
                    });
                });
        </script>
    </body>
</html>