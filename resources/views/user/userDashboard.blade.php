@extends('user.components.layout')

@section('title','User Dashboard')
 
@section('content')
    <!-- Hero Section -->
    <div class="position-relative text-white">
      <img src="/image/dashboard.png" alt="Hero Image" class="img-fluid w-100 object-cover opacity-50" style="height: 100vh; object-fit: cover;">
      <div class="position-absolute top-50 start-0 translate-middle-y ">
        <p class="fw-bold text-uppercase ms-5 " style="font-size:6em">GAGAK PUTIH</p>
        <h2 class="fw-bold ms-5" style="font-size:3em">INDONESIA</h2>
        <button class="btn btn-primary btn-lg mt-5 ms-5 border-yellow-400 hover:bg-blue-600" style="width: 180px">Register</button>
      </div>
    </div>

    <!-- About Section -->
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="row w-100">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold pb-5">ABOUT US</h1>
          <p class="lead">
            Gagak Putih Indonesia is one of the branches of pencak silat <br>
            martial arts in Indonesia. Gagak Putih Indonesia was founded by <br>
            Pendekar Utama Haji Junaedi in 1972. Since its inception, this <br>
            branch has been committed to developing and preserving the <br>
            martial art of pencak silat, while instilling moral and ethical <br>
            values to its members. Currently, Gagak Putih Indonesia is <br>
            centered in the city of Bogor. This small branch, with a Cimande <br>
            style, is currently developing in the West Java area, especially in <br>
            Bogor Regency.<br>
          </p>
        </div>
        <div id="carouselImage" class="carousel slide col-lg-5" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/image/aboutus1.png" alt="Gagak Putih" class="img-fluid rounded d-block">
            </div>
            <div class="carousel-item">
              <img src="/image/aboutus2.png" alt="Gagak Putih" class="img-fluid rounded d-block">
            </div>
            <div class="carousel-item">
              <img src="/image/aboutus3.png" alt="Gagak Putih" class="img-fluid rounded d-block">
            </div>
            <div class="carousel-item">
              <img src="/image/aboutus4.png" alt="Gagak Putih" class="img-fluid rounded d-block">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselImage" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselImage" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!-- Card Section -->
      <div class="container mt-4 bg-dark">
                <h2 class="text-center text-white fw-bold mb-4">SCHEDULE</h2>
                <div class="row">
                    <div class="col-md-4">
                    <div class="card" style=" background-color:white; color:black; text-align:center">
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
                    <div class="card" style=" background-color:white; color:black; text-align:center">
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
@endsection
