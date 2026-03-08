<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Saifi </h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Our Courses </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('course_page')}}">Add Course</a></li>
                    <li><a href="{{url('view_course')}}">View Course</a></li>
                   
                  </ul>
                </li>
                 <li ><a href="{{url('enrollment')}}"> <i class="icon-home"></i>Enrollments </a></li>
                 <li ><a href="{{url('view_category')}}"> <i class="icon-home"></i>Categories </a></li>
                 <li ><a href="{{url('all_messages')}}"> <i class="icon-home"></i>Messages </a></li>
                 <li ><a href="{{url('instructer_appointment')}}"> <i class="icon-home"></i>Instructers</a></li>

                
        </ul>
      </nav>