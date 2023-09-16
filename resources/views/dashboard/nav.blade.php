<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="admin/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
    <div class="icon_setting"></div>
    <div class="user_profle_side">
        @php
            $user = Auth::user();
            $profile = $user->profile;
            $avatar = $profile ? $profile->avatar : 'default-avatar.jpg';
        @endphp
        <div class="user_img">
            @if ($profile && $profile->image)
                <img class="img-responsive" src="{{ asset('images/' . $profile->image) }}" alt="#" />
            @else
                <img class="img-responsive" src="{{ asset('images/default-avatar.jpg') }}" alt="#" />
            @endif
        </div>
        <div class="user_info">
            <h6>{{ @Auth::user()->name }}</h6>
            <p><span class="online_animation"></span> Online</p>
        </div>
    </div>
</div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <!-- <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Menu</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li> -->
                     <li><a href="{{url('/')}}"><i class="fa fa-dashboard yellow_color"></i> <span>Website</span></a></li>

                     <li><a href="{{url('/users')}}"><i class="fa fa-clock-o orange_color"></i> <span>Users</span></a></li>
                     <!-- <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li> -->
                     <!-- <li><a href="{{url('/analytics')}}"><i class="fa fa-table purple_color2"></i> <span>Reservation Report</span></a></li> -->
                     <li><a href="{{url('/order')}}"><i class="fa fa-object-group blue2_color"></i> <span>Orders Detail</span></a></li>
                     <li><a href="{{url('/categories')}}"><i class="fa fa-briefcase blue1_color"></i> <span>Categories</span></a></li>
                     <li><a href="{{url('/menus')}}"><i class="fa fa-clone yellow_color"></i> <span>Menus</span></a></li>
                     <li><a href="{{url('/tables')}}"><i class="fa fa-bar-chart-o green_color"></i> <span>Tables</span></a></li>
                     <li><a href="{{url('/reservation')}}"><i class="fa fa-cog yellow_color"></i> <span>Reservation</span></a></li>
                     <li><a href="{{url('/contact')}}"><i class="fa fa-cog yellow_color"></i> <span>Contact us</span></a></li>
                     <li><a href="{{url('review/show')}}"><i class="fa fa-cog yellow_color"></i> <span>User Reviews</span></a></li>
                     <li><a href="{{url('/staff.dashindex')}}"><i class="fa fa-briefcase blue1_color"></i> <span>Staff Members</span></a></li>

                     <!-- <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                     <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> -->
                  </ul>
               </div>
            </nav>