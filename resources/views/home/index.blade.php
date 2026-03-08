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
    <!-- Navbar End -->


    <!-- Carousel Start -->
   @include('home.body')
    <!-- Banner-1 End -->



    <!-- Categories Start -->
    @include('home.category')
    <!-- Categories End -->


   <!-- Courses Start -->
    @include('home.courses')
    <!-- Banner-2 End -->

    <!-- FAQ Start  -->
    @include('home.faq')
    <!-- FAQ End  -->

    <!-- Footer Start -->
   @include('home.footer')
   </body>

</html>




   





   