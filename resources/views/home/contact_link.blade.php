<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.header')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">

        <div class="spinner-border text-primary"
            style="width: 3rem; height: 3rem;"
            role="status">

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

                    <h1 class="display-3 text-white animated slideInDown">
                        Contact
                    </h1>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb justify-content-center">

                            <li class="breadcrumb-item">
                                <a class="text-white" href="index.html">
                                    Home
                                </a>
                            </li>

                            <li class="breadcrumb-item text-white active"
                                aria-current="page">

                                Contact

                            </li>

                        </ol>

                    </nav>

                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Section -->
    <div class="container-xxl py-5">

        <div class="container">

            <div class="text-center wow fadeInUp"
                data-wow-delay="0.1s">

                <h1 class="mb-5 bg-white text-center px-3">
                    Contact Us
                </h1>

            </div>

            <div class="row g-4">

                <!-- Contact Info -->
                <div class="col-lg-6 col-md-6 wow fadeInUp"
                    data-wow-delay="0.1s">

                    <h5>Get In Touch</h5>

                    <p class="mb-4">

                        I'm happy to help! If you're looking for contact information
                        or details about Saifi-Coder's online free courses website
                        for e-learning, I don't have real-time browsing capabilities
                        to access current websites or specific contact details.

                    </p>

                    <!-- Office -->
                    <div class="d-flex align-items-center mb-3">

                        <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 50px; height: 50px; background-color: #fb873f;">

                            <i class="fa fa-map-marker-alt text-white"></i>

                        </div>

                        <div class="ms-3">

                            <h5>Office</h5>

                            <p class="mb-0">
                                Aspir College Phool Nagar
                            </p>

                        </div>

                    </div>

                    <!-- Phone -->
                    <div class="d-flex align-items-center mb-3">

                        <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 50px; height: 50px; background-color: #fb873f;">

                            <i class="fa fa-phone-alt text-white"></i>

                        </div>

                        <div class="ms-3">

                            <h5>Mobile</h5>

                            <p class="mb-0">
                                +92 00000000000
                            </p>

                        </div>

                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center">

                        <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 50px; height: 50px; background-color: #fb873f;">

                            <i class="fa fa-envelope-open text-white"></i>

                        </div>

                        <div class="ms-3">

                            <h5>Email</h5>

                            <p class="mb-0">
                                Saifi-coder@gmail.com
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Contact Form -->
                <div class="col-lg-6 col-md-12 wow fadeInUp"
                    data-wow-delay="0.5s">

                    <form action="{{url('contact')}}"
                        method="POST"
                        class="needs-validation"
                        novalidate
                        id="contactForm">

                        @csrf

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-md-6">

                                <div class="form-floating">

                                    <input type="text"
                                        class="form-control"
                                        id="name"
                                        required
                                        placeholder="Your Name"
                                        name="name"
                                        @if (Auth::id())
                                            value="{{Auth::user()->name}}"
                                        @endif>

                                    <label for="name">
                                        Your Name
                                    </label>

                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>

                                </div>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <div class="form-floating">

                                    <input type="email"
                                        class="form-control"
                                        id="email"
                                        required
                                        placeholder="Your Email"
                                        name="email"
                                        @if (Auth::id())
                                            value="{{Auth::user()->email}}"
                                        @endif>

                                    <label for="email">
                                        Your Email
                                    </label>

                                    <div class="valid-feedback">
                                        Valid Email!
                                    </div>

                                    <div class="invalid-feedback">
                                        Please enter a valid email.
                                    </div>

                                </div>

                            </div>


                            <!-- Subject -->
                            <div class="col-12">

                                <div class="form-floating">

                                    <input type="text"
                                        class="form-control"
                                        id="subject"
                                        required
                                        placeholder="Subject"
                                        name="subject">

                                    <label for="subject">
                                        Subject
                                    </label>

                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <div class="invalid-feedback">
                                        Please enter subject.
                                    </div>

                                </div>

                            </div>


                            <!-- Message -->
                            <div class="col-12">

                                <div class="form-floating">

                                    <textarea class="form-control"
                                        required
                                        placeholder="Leave a message here"
                                        id="message"
                                        style="height: 150px"
                                        name="message"></textarea>

                                    <label for="message">
                                        Message
                                    </label>

                                    <div class="valid-feedback">
                                        Message looks good!
                                    </div>

                                    <div class="invalid-feedback">
                                        Please enter your message.
                                    </div>

                                </div>

                            </div>


                            <!-- Submit Button -->
                            <div class="col-12">

                                <button class="btn btn-primary w-100 py-3"
                                    type="submit">

                                    Send Message

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>


    <!-- Footer -->
    @include('home.footer')


    <!-- Bootstrap Validation Script -->
    <script>

        (() => {

            'use strict';

            const form = document.getElementById('contactForm');

            form.addEventListener('submit', function(event) {

                if (!form.checkValidity()) {

                    event.preventDefault();
                    event.stopPropagation();

                }

                form.classList.add('was-validated');

            }, false);

        })();

    </script>

</body>

</html>