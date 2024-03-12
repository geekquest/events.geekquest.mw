<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             {{-- <a href="/"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a> --}}
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             {{-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div> --}}
             <div class="user_info">
                <h6>{{ Auth::user()->name }}</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>General</h4>
       <ul class="list-unstyled components">
  
          <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
          <li><a href="{{ route('events.index') }}"><i class="fa fa-clock-o orange_color"></i> <span>  Events</span></a></li>
          <li><a href="{{ route('forms.index') }}"><i class="fa fa-clone orange_color"></i> <span>  Forms</span></a></li>

        </ul>
    </div>
 </nav>
