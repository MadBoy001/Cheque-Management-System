<nav>
  <div class="navContainer">
      <div class="nav-section1">
          <div class="nav-header">
              <img src="{{ asset('images/logo.png') }}" alt="">
              <h3>Cheque Management System</h3>
          </div>

          <div class="list-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>

          {{-- Cheque Section --}}
          <div class="list-label">
              <div class="line"></div>
              <div class="list-label-text">Cheque</div>
              <div class="line"></div>
          </div>

          <div class="list-block">
              <div class="list-item"><a href="{{route('admin.cheque.index')}}">All Cheques</a></div>
              <div class="list-item"><a href="{{route('admin.cheque.create')}}">Add Cheques</a></div>
              <div class="list-item"><a href="#">Returned Cheques</a></div>
              <div class="list-item"><a href="{{route('admin.expired-cheques')}}">Expired Cheques</a></div>
              <div class="list-item"><a href="{{route('admin.expiring-cheques')}}">Expiring Cheques</a></div>
          </div>

          {{-- Manage Users --}}
          <div class="list-label">
            <div class="line"></div>
            <div class="list-label-text">Manage User</div>
            <div class="line"></div>
        </div>

        <div class="list-block">
            <div class="list-item"><a href="{{route('admin.manage-users.index')}}">All User</a></div>
            <div class="list-item"><a href="{{route('admin.manage-users.create')}}">Add User</a></div>
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
