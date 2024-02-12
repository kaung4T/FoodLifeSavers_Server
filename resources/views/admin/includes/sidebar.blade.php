  <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ route('index') }}" class="sidebar-brand">
          <img src="{{asset('assets/ui/img/foodlifesavers LOGO v2.png')}}" alt="" style="width: 50px;">
           <!-- <i class="fa fa-envira menu-icon" aria-hidden="true"></i>-->
          <span style="font-size: 0.9rem;">FoodLifeSavers</span> 
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('admin.user_dash') }}" class="nav-link">
            <i class="bi bi-person-fill-gear" style="margin-left: 0.3px;"></i>
              <span class="link-title" style="margin-left: 16.7px;">User Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item nav-category">EV-Power Information</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#activate-key" role="button" aria-expanded="false"
              aria-controls="activate-key">
              {{-- <i class="link-icon" data-feather="mail"></i> --}}
             <i class="link-icon fa-solid fa-key"></i>
              <span class="link-title">Earning</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="activate-key">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.earnings')}}" class="nav-link">Add Fund</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Activation</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#website-pages" role="button" aria-expanded="false"
              aria-controls="website-pages">
              <i class="bi bi-globe"></i>
              <span class="link-title" style="margin-left: 16.5px;">Website</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="website-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('admin.web_info')}}" class="nav-link">Info</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.service') }}" class="nav-link">
            <i class="bi bi-window-fullscreen"></i>
              <span class="link-title" style="margin-left: 16.7px;">Services</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.count_down') }}" class="nav-link">
            <i class="bi bi-clock-fill"></i>
              <span class="link-title" style="margin-left: 16.7px;">Count Down</span>
            </a>
          </li>

          <li class="nav-item nav-category">Payment</li>

          <li class="nav-item">
            <a href="{{ route('admin.plan') }}" class="nav-link">
            <i class="bi bi-menu-button-fill"></i>
              <span class="link-title" style="margin-left: 16.7px;">Donation Plan</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.order') }}" class="nav-link">
            <i class="bi bi-diagram-3-fill"></i>
              <span class="link-title" style="margin-left: 16.7px;">Order</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.payment_notify') }}" class="nav-link">
            <i class="bi bi-credit-card-2-front-fill"></i>
              <span class="link-title" style="margin-left: 16.7px;">Payment Notify</span>
            </a>
          </li>
          <li class="nav-item nav-category">Setting</li>
             <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false"
              aria-controls="authPages">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Authentication</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.permission')}}" class="nav-link">All Permission</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('all.roles')}}" class="nav-link"> All Roles </a>
                </li>

                 <li class="nav-item">
                  <a href="{{route('add.roles.permission')}}" class="nav-link"> Role in Permission </a>
                </li>

                <li class="nav-item">
                  <a href="{{route('all.roles.permission')}}" class="nav-link"> All Roles in Permission </a>
                </li>

              </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false"
              aria-controls="admin">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title"> Manage Admin User </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="admin">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.admin')}}" class="nav-link">All Admin</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('all.user')}}" class="nav-link">All User</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('all.roles')}}" class="nav-link"> Add Admin </a>
                </li>

              </ul>
            </div>
          </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon fa-solid fa-dollar-sign"></i>
              <span class="link-title">Currency </span>
            </a>
          </li>

            <li class="nav-item">
              
            <label class="nav-link">
              <i class="link-icon fa-solid fa-right-from-bracket"></i>
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
              <button type="submit" class="link-title" style="border: none;background: transparent;
              color: inherit;margin-left: 24.6px;">Logout</button>
              </form>
            </label>
          </li>


        </ul>
      </div>
    </nav>
    {{-- <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item" href="#">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item active" href=".">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav> --}}
    <!-- partial -->