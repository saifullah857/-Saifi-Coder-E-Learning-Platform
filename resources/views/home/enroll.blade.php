<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.header')

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar Start -->
    @include('home.nav')

    <!-- Page Header -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Course Detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Enroll</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Marquee -->
    <marquee class="bg-warning text-dark fw-bold py-2" behavior="scroll" direction="left" style="background-color:#fb873f ">
        📢  Must Enshure You are  <span class="text-danger">Login </span>  to check your <span class="text-danger">   Enrollment and Instructer</span>   Status
    </marquee>

    <!-- Course + Form Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                
                <!-- Course Detail -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="position-relative">
                            <!-- Course Image -->
                            <img class="card-img-top rounded-top" src="{{ asset('course/'.$course->image) }}" alt="{{ $course->title }}" style="height: 280px; object-fit: cover;">

                            <!-- Free/Paid Badge -->
                            <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 fw-bold text-uppercase 
                                @if($course->is_free == 'Free') bg-warning text-dark @else bg-success @endif" 
                                style="font-size: 12px; border-radius: 5px;">
                                {{ $course->is_free }}
                            </span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title mb-3">{{ $course->title }}</h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-clock-history text-primary me-2"></i><strong>Duration:</strong></span>
                                    <span>{{ $course->duration }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-bar-chart-steps text-info me-2"></i><strong>Level:</strong></span>
                                    <span>{{ $course->level }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-star-fill text-warning me-2"></i><strong>Rating:</strong></span>
                                    <span>⭐ {{ $course->rating }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-people-fill text-success me-2"></i><strong>Learners:</strong></span>
                                    <span>{{ $course->learners_count }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-cash-coin text-danger me-2"></i><strong>Price:</strong></span>
                                    @if($course->is_free == 'Free')
                                        <span class="text-success fw-bold">Free</span>
                                    @else
                                        <span class="text-danger fw-bold">Rs. {{ $course->price }}</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Enrollment Form -->
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="card shadow p-4 w-100">
                        <h4 class="mb-3">Enroll Now</h4>

                        <div id="alert-box"></div> 

                        <form id="enrollForm" action="{{ url('submit_enroll', $course->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" required 
                                    @if (Auth::id()) value="{{Auth::user()->name}}" @endif >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required 
                                    @if (Auth::id()) value="{{Auth::user()->email}}" @endif>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required 
                                    @if (Auth::id()) value="{{Auth::user()->phone}}" @endif>
                            </div>

                            <!-- Show only if course is Paid -->
                            @if($course->is_free != 'Free')
                                <div class="mb-3">
                                    <label class="form-label">Our Account No.</label>
                                    <input type="text" class="form-control" value="0327-6587877" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Payment Screenshot</label>
                                    <input type="file" name="image" class="form-control" accept="image/*" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Course Price</label>
                                    <input type="text" class="form-control" value="Rs. {{ $course->price }}" readonly>
                                    <input type="hidden" name="course_price" value="{{ $course->price }}">
                                </div>

                                
                            @else
                                <input type="hidden" name="course_price" value="0">
                            @endif

                            <div class="mb-3">
                                <label class="form-label">Enrollment Date</label>
                                <input type="text" class="form-control" value="{{ date('Y-m-d') }}" readonly>
                                <input type="hidden" name="enrollment_date" value="{{ date('Y-m-d') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Last Date</label>
                                <input type="text" id="lastDate" class="form-control" value="2026-10-15" readonly>
                                <input type="hidden" name="last_date" value="2026-10-15">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit Enrollment</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('home.footer')

    <!-- JavaScript Validation -->
    <script>
    document.getElementById("enrollForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let today = new Date();
        today.setHours(0,0,0,0); 
        let lastDate = new Date(document.getElementById("lastDate").value);
        lastDate.setHours(0,0,0,0);

        let alertBox = document.getElementById("alert-box");

        if (today <= lastDate) {
            alertBox.innerHTML = `
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    ✅ Enroll Successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
            this.removeEventListener("submit", arguments.callee);
            this.submit();
        } else {
            alertBox.innerHTML = `
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ⛔ You are not able to apply. Last date was ${lastDate.toISOString().split("T")[0]}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
        }
    });
    </script>

</body>
</html>
