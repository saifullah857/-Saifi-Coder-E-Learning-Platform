<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Popular Courses</h6>
                <h1 class="mb-5" style="color: #fb873f;">Explore new and trending free online courses</h1>
            </div>

            <div class="row g-4 py-2">
               @foreach ($course as $item)
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item shadow">
            <div class="position-relative overflow-hidden text-light image">
                <img class="img-fluid" src="{{ asset('course/'.$item->image) }}" alt="{{ $item->title }}">
                <div class="position-absolute top-0 start-0 m-2">
                    @if($item->is_free == 'Free')
                        <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#fb873f;"
                                class="px-2 py-1 fw-bold text-uppercase">FREE</div>
                    @else
                        <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                    @endif
                </div>
            </div>

            <div class="p-2 pb-0">
                <h5 class="mb-1">
                    <a href="{{ url('enroll', $item->id) }}" class="text-dark">
                        {{ $item->title }}
                    </a>
                </h5>
            </div>

            <div class="d-flex">
                <small class="flex-fill text-center py-1 px-2">
                    <i class="fa fa-star text-warning me-2"></i>
                    {{ $item->rating }}
                </small>
                <small class="flex-fill text-center py-1 px-2">
                    <i class="fa fa-user-graduate me-2"></i>
                    {{ $item->learners_count }}
                </small>
                <small class="flex-fill text-center py-1 px-2">
                    <i class="fa fa-user me-2"></i>
                    {{ $item->level }}
                </small>
            </div>

            <div class="d-flex">
                <small class="flex-fill text-left p-2 px-2">
                    <i class="fa fa-clock me-2"></i>
                    {{ $item->duration }} 
                </small>
                <small class="py-1 px-2 fw-bold fs-6 text-center">
                    Rs. {{ $item->price }}
                </small>
                <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                    <a href="{{ url('enroll', $item->id) }}">Enroll Now</a>
                    <i class="fa fa-chevron-right me-2 fs-10"></i>
                </small>
            </div>
        </div>
    </div>
    @endforeach
</div>
      
</div>
</div>

                
                

   