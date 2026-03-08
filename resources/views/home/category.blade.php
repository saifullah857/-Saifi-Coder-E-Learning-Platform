<div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Categories</h6>
                <h1 class="mb-5" style="color: #fb873f;">Popular Topics to Explore</h1>
            </div>
            <div class="row g-2 m-2">
    @foreach($categories as $cat)
        <div class="col-lg-3 col-md-6 text-center">
            <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                {{-- Category Image --}}
                @if($cat->image)
                    <img src="{{ asset('course/'.$cat->image) }}" class="img-fluid" alt="{{ $cat->name }}">
                @else
                    <img src="{{ asset('img/default.png') }}" class="img-fluid" alt="default">
                @endif

                {{-- Category Name --}}
                <h5 class="my-2">
                    <a href="#" class="text-center">{{ $cat->name }}</a>
                </h5>
            </div>
        </div>
    @endforeach
</div>
                
            </div>
        </div>
    

    
