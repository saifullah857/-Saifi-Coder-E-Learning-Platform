<!DOCTYPE html>
<html lang="en">
<head>
@include('home.header')
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('home.nav')
   
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Our Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="" alt="" style="height: 500px; width: 300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="#"><i
                                        class="fab fa-linkedin"></i></a>
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="#"><i class="fa fa-envelope"></i></a>
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Sir Rashid</h5>
                            <small>Team Leader</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden text-center pt-5">
                            <img class="img-fluid" src="" alt="" style="height: 500px; width: 300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="#"><i
                                        class="fab fa-linkedin"></i></a>
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="#"><i class="fa fa-envelope"></i></a>
                                <a target="_blank" class="btn btn-sm-square btn-primary mx-1"
                                    href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Sir Saleem</h5>
                            <small>Team Leader</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
   @include('home.footer')





   