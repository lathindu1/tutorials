  @php
  $curr_url = Route::currentRouteName();
  @endphp

  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
              <a class="navbar-brand" href="javascript:void(0)">
                  <h2> <strong>Tutorials</strong> </h2>
              </a>
          </div>
          <div class="navbar-inner">
              <!-- Collapse -->
              <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                  <!-- Nav items -->
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link {{ $curr_url=='home'?'active':'' }}" href="{{ route('home') }}">
                              <i class="ni ni-tv-2 text-primary"></i>
                              <span class="nav-link-text">Home</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ $curr_url=='metamask'?'active':'' }}" href="{{ route('metamask') }}">
                              <i class="ni ni-planet text-orange"></i>
                              <span class="nav-link-text">Metamask</span>
                          </a>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
  </nav>
