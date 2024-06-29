<nav>
  <div class="navContainer">
      <div class="nav-section1">
          <div class="nav-header">
              <img src="{{ asset('images/logo.png') }}" alt="">
              <p>Cheque Management System</p>
          </div>

          <div class="list-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
          <div class="list-label">
              <div class="line"></div>
              <div class="list-label-text">Cheque</div>
              <div class="line"></div>
          </div>

          <div class="list-block">
              <div class="list-item"><a href="{{route('admin.cheque.index')}}">All Cheques</a></div>
              <div class="list-item"><a href="{{route('admin.cheque.create')}}">Add Cheques</a></div>
              <div class="list-item"><a href="#">Returned Cheques</a></div>
              <div class="list-item"><a href="#">Expired Cheques</a></div>
          </div>
      </div>

      <div class="nav-section2">
          <div class="list-item">Settings</div>
          <div class="list-item">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  @method('POST')
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                      Logout
                  </a>
              </form>
          </div>
      </div>
  </div>
</nav>
