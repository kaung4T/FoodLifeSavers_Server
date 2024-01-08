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
          <li class="nav-item nav-category">EV-Power Information</li>
          <!-- @if(Auth::user()->can('type.menu'))
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#account" role="button" aria-expanded="false"
              aria-controls="account">
              {{-- <i class="link-icon" data-feather="mail"></i> --}}
            <i class="link-icon fa-solid fa-user"></i>
              <span class="link-title"> Electronic Products</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="account">
              <ul class="nav sub-menu">
                 @if(Auth::user()->can('all.type'))
                <li class="nav-item">
                  <a href="{{route('all.product')}}" class="nav-link"> All Products </a>
                </li>
                @endif

                 @if(Auth::user()->can('add.type'))
                <li class="nav-item">
                  <a href="{{route('add.product')}}" class="nav-link">LG Chem</a>
                </li>
                @endif

                <li class="nav-item">
                  <a href="#" class="nav-link"> Samsung SDI </a>
                </li>
              </ul>
            </div>
          </li>
          @endif -->
        
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
            <a href="{{ route('admin.service') }}" class="nav-link">
            <i class="bi bi-window-fullscreen"></i>
              <span class="link-title" style="margin-left: 16.7px;">Services</span>
            </a>
          </li>

          <li class="nav-item nav-category">Payment</li>

          <li class="nav-item">
            <a href="{{ route('admin.plan') }}" class="nav-link">
            <i class="bi bi-menu-button-fill"></i>
              <span class="link-title" style="margin-left: 16.7px;">Donation Plan</span>
            </a>
          </li>


          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#transfer" role="button" aria-expanded="false"
              aria-controls="transfer">
              {{-- <i class="link-icon" data-feather="feather"></i> --}}
               <i class="link-icon fa-solid fa-money-bill-transfer"></i>
              <span class="link-title">Transfer</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="transfer">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Trade to Exor</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Bonus to Exor</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/badges.html" class="nav-link">Transfer to Other</a>
                </li>                            
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#withdraw" role="button" aria-expanded="false"
              aria-controls="withdraw">
              {{-- <i class="link-icon" data-feather="anchor"></i> --}}
               <i class="link-icon fa-brands fa-cc-visa"></i>
              <span class="link-title"> Withdrawal </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="withdraw">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Trade Withdrawal</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Bonus Withdrawal</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#support" role="button" aria-expanded="false"
              aria-controls="support">
              {{-- <i class="link-icon" data-feather="layout"></i> --}}
                <i class="link-icon fa-solid fa-gift"></i>
              <span class="link-title">Support</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="support">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Create Ticket</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">In Process</a>
                </li>
                 <li class="nav-item">
                  <a href="#" class="nav-link">Closed</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#teams" role="button" aria-expanded="false"
              aria-controls="teams">
              {{-- <i class="link-icon" data-feather="smile"></i> --}}
                <i class="link-icon fa-brands fa-teamspeak"></i>
              <span class="link-title">Teams</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="teams">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link"> Direct Team </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">My Tree</a>
                </li> 
              </ul>
            </div>
          </li> -->

          <!-- <li class="nav-item nav-category">Reporting</li>
           
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#report" role="button" aria-expanded="false"
              aria-controls="report">
              {{-- <i class="link-icon" data-feather="inbox"></i> --}}
                <i class="link-icon fa-solid fa-book"></i>
              <span class="link-title">Report</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="report">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Activation Report</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Cash Wallet</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Bonus Wallet</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Trade Wallet</a>
                </li>
                 <li class="nav-item">
                  <a href="#" class="nav-link">Exor Wallet</a>
                </li>
                 <li class="nav-item">
                  <a href="#" class="nav-link">Withdrawal Report</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false"
              aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Charts</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Apex</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">ChartJs</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Flot</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#trading_report" role="button" aria-expanded="false"
              aria-controls="trading_report">
              {{-- <i class="link-icon" data-feather="book"></i> --}}
                <i class="link-icon fa-solid fa-chart-line"></i>
              <span class="link-title">Trading Report</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="trading_report">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Crypto Report</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Forex Report</a>
                </li>
              </ul>
            </div>
          </li> -->
         
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