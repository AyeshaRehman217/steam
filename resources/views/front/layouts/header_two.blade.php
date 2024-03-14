      <!-- header area start -->
      <header class="header-area-two">
        <nav class="header-nav navbar fixed-top navbar-expand-lg position-absolute w-100">
           <div class="container header-nav-menu">
              <a class="navbar-brand" href="#">
                 <img src="{{asset('/front/coreui/assets/img/logo-sm-new.png')}}" alt="Header Logo" width="150px">
              </a>

              <div class="collapse navbar-collapse d-none d-lg-block">
                 <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                       <a href="{{ route('front.home') }}" class="nav-link py-3">Home</a>

                    </li>
                    <li class="nav-item">
                       <a href="{{ route('front.about') }}" class="nav-link py-3">About Us</a>
                        {{-- <div class="drop-down">
                          <div class="row drop-down-wrap g-0">
                             <div class="col-7">
                                <ul class="drop-down-menu">
                                   <li class="dropdown-item d-flex align-items-center">
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Why STEAM</h5>
                                      </a>
                                   </li>
                                   <li class="dropdown-item d-flex align-items-center">
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Vision</h5>
                                      </a>
                                   </li>
                                   <li class="dropdown-item d-flex align-items-center">
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Conference Highlights</h5>
                                      </a>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div> --}}
                    </li>
                    {{-- <li class="nav-item">
                       <a href="{{ route('front.date') }}" class="nav-link py-3">Important Dates</a>

                    </li> --}}
                    <li class="nav-item">
                       <a href="#" class="nav-link py-3">Call for Papers</a>
                       <div class="drop-down">
                          <div class="row drop-down-wrap g-0">
                             <div class="col-7">
                                <ul class="drop-down-menu">
                                   {{-- <li class="dropdown-item d-flex align-items-center">
                                      <div class="item-icon">
                                         <img src="assets/images/icon/icon.svg" alt="icon Images">
                                      </div>
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Abstract submission</h5>
                                      </a>
                                   </li> --}}
                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="{{ route('front.paper-submission') }}" class="item-content">
                                         <h5 class="item-title">Paper Submission</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>
                                   {{-- <li class="dropdown-item d-flex align-items-center">
                                      <div class="item-icon">
                                         <img src="assets/images/icon/icon3.svg" alt="icon Images">
                                      </div>
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Poster Submission</h5>
                                      </a>
                                   </li> --}}
                                </ul>
                             </div>
                             {{-- <div class="col-5">
                                <div class="dropdown-thumb position-relative" style="background-image: url(front/coreui/assets/img/banner/home-conference-dropdown-bg.jpg);">
                                   <a class="dropdown-sub position-absolute" href="#">Register Now</span>
                                </div>
                             </div> --}}
                          </div>
                       </div>
                    </li>
                    <li class="nav-item">
                       <a href="#" class="nav-link py-3">Committees</a>
                       <div class="drop-down">
                          <div class="row drop-down-wrap g-0">
                             <div class="col-7">
                                <ul class="drop-down-menu">
                                   {{-- <li class="dropdown-item d-flex align-items-center">
                                      <div class="item-icon">
                                         <img src="assets/images/icon/icon.svg" alt="icon Images">
                                      </div>
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Advisory Board</h5>
                                         <span class="item-sub">Sessions Overview</span>
                                      </a>
                                   </li> --}}
                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Editorial Board</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>
                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon3.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Committee Members</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>
                                </ul>
                             </div>
                             {{-- <div class="col-5">
                                <div class="dropdown-thumb position-relative" style="background-image: url(front/coreui/assets/img/banner/home-conference-dropdown-bg.jpg);">
                                   <a class="dropdown-sub position-absolute" href="#">Register Now</span>
                                </div>
                             </div> --}}
                          </div>
                       </div>
                    </li>
                  <!--  <li class="nav-item">
                       <a href="#" class="nav-link py-3">More</a>
                       <div class="drop-down">
                          <div class="row drop-down-wrap g-0">
                             <div class="col-7">
                                <ul class="drop-down-menu">
                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Attendees</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>

                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Conference Program</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>
                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="#" class="item-content">
                                         <h5 class="item-title">Conference Track</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>
                                   <li class="dropdown-item d-flex align-items-center">
                                      {{-- <div class="item-icon">
                                         <img src="assets/images/icon/icon3.svg" alt="icon Images">
                                      </div> --}}
                                      <a href="{{ route('front.contact') }}" class="item-content">
                                         <h5 class="item-title">Contact Us</h5>
                                         {{-- <span class="item-sub">Sessions Overview</span> --}}
                                      </a>
                                   </li>
                                </ul>
                             </div>
                             {{-- <div class="col-5">
                                <div class="dropdown-thumb position-relative" style="background-image: url(front/coreui/assets/img/banner/home-conference-dropdown-bg.jpg);">
                                   <a class="dropdown-sub position-absolute" href="#">Register Now</span>
                                </div>
                             </div> --}}
                          </div>
                       </div>
                    </li>-->
                    <li class="nav-item">
                     <a href="{{ route('front.contact') }}" class="nav-link py-3">Contact Us</a>

                  </li>
                 </ul>
                 <div class="mode-and-button d-flex align-items-center">
                    {{-- <div class="mode me-md-3">
                       <img src="assets/images/icon/sun.svg" alt="Sun" class="fa-sun" style="display: none;">
                       <img src="assets/images/icon/moon.svg" alt="Moon" class="fa-moon">
                    </div> --}}
                    @guest
                    @if (Route::has('front.registration'))
                    <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                        <a href="{{route('login')}}"><h5 class="item-title" >Login</h5>
                          {{-- <i class="fa fa-arrow-right"></i> --}}
                       </a>
                    </button>
                    <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                       <a href="{{route('front.registration')}}"><h5 class="item-title" >Register</h5>
                         {{-- <i class="fa fa-arrow-right"></i> --}}
                      </a>
                   </button>
                        @endif
                @else
                   
                <div class="d-flex">
                 <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                    <a href="{{Auth::user()->role_status == '1' ? url('admin/dashboard') : route('dashboard')}}"><h5 class="item-title" >Dashboard</h5></a></button>
                    {{-- <a class='vr mx-2' style="border-right: 2px solid  #ffffff;"></a> --}}
                    <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                    <a aria-haspopup="true" aria-expanded="false" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{-- {{ __('Logout') }} --}}
                        <h5 class="item-title" >Logout</h5>
                    </a>
                 </button>
                </div>
                    <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
                 </div>
              </div>

              <!-- mobile menu -->
              <div class="mobile-view-header d-block d-lg-none d-flex gap-3 align-items-center">
                 {{-- <div class="mode me-md-3">
                    <img src="assets/images/icon/sun.svg" alt="Sun" class="fa-sun" style="display: none;">
                    <img src="assets/images/icon/moon.svg" alt="Moon" class="fa-moon">
                 </div> --}}
                 {{-- <button class="header-btn custom-btn2" data-bs-toggle="modal" data-bs-target="#exampleModal">Registration</button> --}}

                 <a class="border rounded-1 py-1 px-2 bg-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon nav-toggler-icon"></span>
                 </a>

                 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" >
                    <div class="offcanvas-header">
                       <a class="navbar-brand" href="#">
                          <img src="{{asset('/front/coreui/assets/img/logo-sm-new.png')}}" alt="Header Logo" width="150px">
                       </a>
                       <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                       <div class="dropdown mt-3">
                          <ul class="navbar-nav m-auto">
                             <li class="nav-item">
                                <a href="{{ route('front.home') }}" class="nav-link py-3">Home</a>

                             </li>
                             <li class="nav-item">
                                <a href="{{ route('front.about') }}" class="nav-link py-3">About Us</a>
                                 {{-- <div class="drop-down">
                                   <div class="row drop-down-wrap g-0">
                                      <div class="col-7">
                                         <ul class="drop-down-menu">
                                            <li class="dropdown-item d-flex align-items-center">
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Why STEAM</h5>
                                               </a>
                                            </li>
                                            <li class="dropdown-item d-flex align-items-center">
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Vision</h5>
                                               </a>
                                            </li>
                                            <li class="dropdown-item d-flex align-items-center">
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Conference Highlights</h5>
                                               </a>
                                            </li>
                                         </ul>
                                      </div>
                                   </div>
                                </div> --}}
                             </li>
                             {{-- <li class="nav-item">
                                <a href="{{ route('front.date') }}" class="nav-link py-3">Important Dates</a>

                             </li> --}}
                             <li class="nav-item">
                                <a href="#" class="nav-link py-3">Call for Papers</a>
                                <div class="drop-down">
                                   <div class="row drop-down-wrap g-0">
                                      <div class="col-7">
                                         <ul class="drop-down-menu">
                                            {{-- <li class="dropdown-item d-flex align-items-center">
                                               <div class="item-icon">
                                                  <img src="assets/images/icon/icon.svg" alt="icon Images">
                                               </div>
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Abstract submission</h5>
                                               </a>
                                            </li> --}}
                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="{{ route('front.paper-submission') }}" class="item-content">
                                                  <h5 class="item-title">Paper Submission</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>
                                            {{-- <li class="dropdown-item d-flex align-items-center">
                                               <div class="item-icon">
                                                  <img src="assets/images/icon/icon3.svg" alt="icon Images">
                                               </div>
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Poster Submission</h5>
                                               </a>
                                            </li> --}}
                                         </ul>
                                      </div>
                                      {{-- <div class="col-5">
                                         <div class="dropdown-thumb position-relative" style="background-image: url(front/coreui/assets/img/banner/home-conference-dropdown-bg.jpg);">
                                            <a class="dropdown-sub position-absolute" href="#">Register Now</span>
                                         </div>
                                      </div> --}}
                                   </div>
                                </div>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link py-3">Committees</a>
                                <div class="drop-down">
                                   <div class="row drop-down-wrap g-0">
                                      <div class="col-7">
                                         <ul class="drop-down-menu">
                                            {{-- <li class="dropdown-item d-flex align-items-center">
                                               <div class="item-icon">
                                                  <img src="assets/images/icon/icon.svg" alt="icon Images">
                                               </div>
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Advisory Board</h5>
                                                  <span class="item-sub">Sessions Overview</span>
                                               </a>
                                            </li> --}}
                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Editorial Board</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>
                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon3.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Committee Members</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>
                                         </ul>
                                      </div>
                                      {{-- <div class="col-5">
                                         <div class="dropdown-thumb position-relative" style="background-image: url(front/coreui/assets/img/banner/home-conference-dropdown-bg.jpg);">
                                            <a class="dropdown-sub position-absolute" href="#">Register Now</span>
                                         </div>
                                      </div> --}}
                                   </div>
                                </div>
                             </li>
                          <!--   <li class="nav-item">
                                <a href="#" class="nav-link py-3">More</a>
                                <div class="drop-down">
                                   <div class="row drop-down-wrap g-0">
                                      <div class="col-7">
                                         <ul class="drop-down-menu">
                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Attendees</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>

                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Conference Program</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>
                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon2.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="#" class="item-content">
                                                  <h5 class="item-title">Conference Track</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>
                                            <li class="dropdown-item d-flex align-items-center">
                                               {{-- <div class="item-icon">
                                                  <img src="assets/images/icon/icon3.svg" alt="icon Images">
                                               </div> --}}
                                               <a href="{{ route('front.contact') }}" class="item-content">
                                                  <h5 class="item-title">Contact Us</h5>
                                                  {{-- <span class="item-sub">Sessions Overview</span> --}}
                                               </a>
                                            </li>
                                         </ul>
                                      </div>
                                      {{-- <div class="col-5">
                                         <div class="dropdown-thumb position-relative" style="background-image: url(front/coreui/assets/img/banner/home-conference-dropdown-bg.jpg);">
                                            <a class="dropdown-sub position-absolute" href="#">Register Now</span>
                                         </div>
                                      </div> --}}
                                   </div>
                                </div>
                             </li>-->
                             <li class="nav-item">
                              <a href="{{ route('front.contact') }}" class="nav-link py-3">Contact Us</a>

                           </li>
                          </ul>
                          <div class="mode-and-button d-flex align-items-center">
                             {{-- <div class="mode me-md-3">
                                <img src="assets/images/icon/sun.svg" alt="Sun" class="fa-sun" style="display: none;">
                                <img src="assets/images/icon/moon.svg" alt="Moon" class="fa-moon">
                             </div> --}}
                             @guest
                           @if (Route::has('front.registration'))
                           <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                               <a href="{{route('login')}}"><h5 class="item-title" >Login</h5>
                                 {{-- <i class="fa fa-arrow-right"></i> --}}
                              </a>
                           </button>
                           <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                              <a href="{{route('front.registration')}}"><h5 class="item-title" >Register</h5>
                                {{-- <i class="fa fa-arrow-right"></i> --}}
                             </a>
                          </button>
                               @endif
                       @else
                          
                       <div class="d-flex">
                        <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                           <a href="{{Auth::user()->role_status == '1' ? url('admin/dashboard') : route('dashboard')}}"><h5 class="item-title" >Dashboard</h5></a></button>
                           {{-- <a class='vr mx-2' style="border-right: 2px solid  #ffffff;"></a> --}}
                           <button class="header-btn custom-btn2 mt-3 mt-sm-0 mx-1">
                           <a aria-haspopup="true" aria-expanded="false" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               {{-- {{ __('Logout') }} --}}
                               <h5 class="item-title" >Logout</h5>
                           </a>
                        </button>
                       </div>
                           <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                               @csrf
                           </form>
                       @endguest
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <!-- end mobile menu -->

           </div>
        </nav>

     </header>
