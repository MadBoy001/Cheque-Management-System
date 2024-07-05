<nav>
  <div class="navContainer">
      <div class="nav-section1">
          <div class="nav-header">
              <img src="{{ asset('images/logo.png') }}" alt="">
              <h3>Cheque Management System</h3>
          </div>

          <div class="list-item"><a href="{{route('user.dashboard')}}">Dashboard</a></div>
          <div class="list-label">
              <div class="line"></div>
              <div class="list-label-text">Cheque</div>
              <div class="line"></div>
          </div>

          <div class="list-block">
              <div class="list-item"><a href="{{route('user.cheque')}}">All Cheques</a></div>
              <div class="list-item"><a href="{{route('user.returned-cheques')}}">Returned Cheques</a></div>
              <div class="list-item"><a href="{{route('user.expiring-cheques')}}">Expiring Cheques</a></div>
              <div class="list-item"><a href="{{route('user.expired-cheques')}}">Expired Cheques</a></div>
          </div>
      </div>

      <div class="nav-section2">
          <form method="POST" action="{{ route('logout') }}">
          <div class="list-item">
                  @csrf
                  @method('POST')
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                      Logout
                  </a>
                </div>
            </form>
      </div>
  </div>
</nav>
