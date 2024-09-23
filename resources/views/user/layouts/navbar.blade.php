{{-- <nav>
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
</nav> --}}

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>
 
<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="https://sumerusecurities.com/" class="flex justify-center items-center mb-5">
            <img class="h-16" src="{{ asset('images/sumeru_logo.png') }}" alt="logo">
        </a>
        <ul class="space-y-2 font-medium">

          <li>
             <a href="{{route('user.dashboard')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3">Dashboard</span>
             </a>
          </li>
          <li>
             <a href="{{route('user.cheque')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="flex-1 ms-3 whitespace-nowrap">All Cheques</span>
             </a>
          </li>
         <li>
            <a href="{{route('user.returned-cheques')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Returned Cheques</span>
            </a>
         </li>
         <li>
            <a href="{{route('user.expired-cheques')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Expired Cheques</span>
            </a>
         </li>
          <li>
             <a href="{{route('user.expiring-cheques')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="flex-1 ms-3 whitespace-nowrap">Expiring Cheques</span>
             </a>
          </li>
          
       </ul>


       <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
          <li>
               <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  @method('POST')
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                     </a>
               </form>
            </li>         
      </ul>


    </div>
 </aside>
 