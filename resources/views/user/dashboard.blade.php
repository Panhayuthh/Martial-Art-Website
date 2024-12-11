<!DOCTYPE html>
<html lang="en" >
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
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('/image/martialArtLogo.png') }}" type="image/png" >
    </head>
    <body>
        @include('partials.header')
        <main class="relative pt-20">
            <img alt="Martial arts competition" class="w-full h-screen object-cover opacity-50" src="/image/dashboard.png"/>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                <h1 class="text-6xl font-bold">GAGAK PUTIH</h1>
                <h2 class="text-3xl mt-2">INDONESIA</h2>
                <a href="">
                <button  class="mt-6 px-8 py-3 bg-blue-500 text-white font-bold rounded-full border-2 border-yellow-400 hover:bg-blue-600">
                    REGISTER
                </button>
                </a>
            </div>
        </main>
        <div class="bg-dark">
        <section id="about-us" class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-white text-center mb-8">ABOUT US</h1>
            <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="md:w-1/2">
                    <p class="text-lg leading-snug text-center text-white">
                    Gagak Putih Indonesia is one of the branches of pencak silat <br>
                    martial arts in Indonesia. Gagak Putih Indonesia was founded by <br>
                     Pendekar Utama Haji Junaedi in 1972. Since its inception, this <br>
                      branch has been committed to developing and preserving the <br>
                      martial art of pencak silat, while instilling moral and ethical <br>
                      values ​​to its members. Currently, Gagak Putih Indonesia is <br>
                      centered in the city of Bogor, this small branch with a Cimande <br>
                      style is currently developing in the West Java area, especially in <br>
                      Bogor Regency.                    
                    </p>
                </div>
                <div class="md:w-1/2 relative">
                    <div id="slideshow" class="relative w-full max-w-md mx-auto">
                        <img alt="aboutus1" class="rounded-lg w-full h-auto" src="/image/aboutus1.png" />
                        <img alt="aboutus2" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" src="/image/aboutus2.png" />
                        <img alt="aboutus3" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" src="/image/aboutus3.png" />
                        <img alt="aboutus4" class="rounded-lg absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" src="/image/aboutus4.png" />
                        
                        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white text-3xl bg-black bg-opacity-50 rounded-full p-2">
                            &#8592;
                        </button>                     
                        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white text-3xl bg-black bg-opacity-50 rounded-full p-2">
                            &#8594;
                        </button>
                        <div id="pagination-dots" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <div class="container mt-4 bg-dark">
                <h2 class="text-center text-white fw-bold mb-4">SCHEDULE</h2>
                <div class="row">
                    <div class="col-md-4">
                    <div class="card" style=" color:black; text-align:center">
                    <h1>Monday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card" style=" color:black; text-align:center">
                    <h1>Tuesday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card" style="background-color:white; color:black; text-align:center">
                    <h1>Wednesday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 mt-3">
                    <div class="card" style="background-color:white; color:black; text-align:center">
                    <h1>Thursday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4 mt-3">
                    <div class="card" style="background-color:white; color:black; text-align:center">
                    <h1>Friday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4 mt-3">
                    <div class="card" style="background-color:white; color:black; text-align:center">
                    <h1>Saturday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-3 mb-3 ">
                    <div class="card" style="background-color:white; color:black; text-align:center ; width:415px">
                    <h1>Sunday</h1>
                        <div class="d-flex flex-row align-items-center p-2">            
                        <div class="flex-shrink-0">
                            <img src="/image/school1.jpeg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">            
                            <p>Junior High School PGRI 1 Cibinong<br>
                                09.00 - 11.00</p>
                        </div>           
                        </div>
                        <div class="d-flex flex-row align-items-center p-2">
                        <div class="flex-shrink-0">
                            <img src="/image/school2.jpg" alt="School" class="img-fluid rounded" style="width: 100px; height: auto;">
                        </div>
                        <div class="ms-3">              
                            <p>Senior High School PGRI Cibinong<br>
                            15.00 - 17.00</p>
                        </div>       
                        </div>
                    </div>
                    </div>
                </div>
            </div>       
        @include('user.components.footer')
        <!-- <script>
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
        </script> -->
    </body>
</html>