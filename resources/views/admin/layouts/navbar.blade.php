{{-- <nav>
  <div class="navContainer">
      <div class="nav-section1">
          <div class="nav-header">
              <img src="{{ asset('images/logo.png') }}" alt="">
              <h3>Cheque Management System</h3>
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
              <div class="list-item"><a href="{{route('admin.returned-cheques')}}">Returned Cheques</a></div>
              <div class="list-item"><a href="{{route('admin.expired-cheques')}}">Expired Cheques</a></div>
              <div class="list-item"><a href="{{route('admin.expiring-cheques')}}">Expiring Cheques</a></div>
          </div>

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
</nav> --}}

{{-- <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
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
             <a href="{{route('admin.dashboard')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3">Dashboard</span>
             </a>
          </li>
          <li>
             <a href="{{route('admin.cheque.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="flex-1 ms-3 whitespace-nowrap">All Cheques</span>
             </a>
          </li>
          <li>
            <a href="{{route('admin.cheque.create')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Add Cheque</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.returned-cheques')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Returned Cheques</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.expired-cheques')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Expired Cheques</span>
            </a>
         </li>
          <li>
             <a href="{{route('admin.expiring-cheques')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="flex-1 ms-3 whitespace-nowrap">Expiring Cheques</span>
             </a>
          </li>
          
       </ul>


       <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <a href="{{route('admin.manage-users.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">All Users</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.manage-users.create')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Add User</span>
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
</aside> --}}


<nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
   <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
   <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="h-16 mr-2" src="{{ asset('images/sumeru_logo.png') }}" alt="logo">
   </a>
   <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <form method="POST" action="{{ route('logout') }}">
         @csrf
         @method('POST')
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                  Logout                  
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
            </a>
      </form>
                
       

       <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
         <span class="sr-only">Open main menu</span>
         <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
         </svg>
     </button>
   </div>
   <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
     <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
         <a href="{{ route('admin.cheque.index') }}" 
            class="block py-2 px-3 rounded {{ request()->routeIs('admin.cheque.index') ? 'text-white bg-red-700 md:bg-transparent md:text-red-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white' }} md:p-0">
            Cheque
         </a>
       </li>
       
       <li>
         <a href="{{ route('admin.manage-users.index') }}" 
            class="block py-2 px-3 rounded {{ request()->routeIs('admin.manage-users.index') ? 'text-white bg-red-700 md:bg-transparent md:text-red-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white' }} md:p-0">
            Users
         </a>
       </li>
       
       <li>
         <a href="#" 
            class="block py-2 px-3 rounded {{ request()->routeIs('admin.settings.*') ? 'text-white bg-red-700 md:bg-transparent md:text-red-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white' }} md:p-0">
            Settings
         </a>
       </li>
       
     </ul>
   </div>
   </div>
 </nav>
 
