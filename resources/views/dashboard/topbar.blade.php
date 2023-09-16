  <!-- topbar -->
  <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <!-- <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul> -->
                              <ul class="user_profile_dd">
                                 <li>
                                 @php
                $user = Auth::user();
                $profile = $user->profile; 
                $avatar = $profile ? $profile->avatar : 'default-avatar.jpg';
                @endphp
                <a class="dropdown-toggle" data-toggle="dropdown">
            @if ($profile && $profile->image)
                <img class="img-responsive rounded-circle" src="{{ asset('images/' . $profile->image) }}" alt="#" />
            @else
                <img class="img-responsive rounded-circle" src="{{ asset('images/default-avatar.jpg') }}" alt="#" />
            @endif
            <span class="name_user">{{ @Auth::user()->name }}</span>
        </a>                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="{{('/login')}}">Reset Password</a>
                                       <a class="dropdown-item" href="{{('/profile.index')}}">My Profile</a>
                                       <a class="dropdown-item" href="{{('logout')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->