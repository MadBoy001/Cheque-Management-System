 <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
   <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
   <a href="https://sumerusecurities.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
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
         <a href="{{ route('superuser.cheque.index') }}" 
            class="block py-2 px-3 text-2xl rounded {{ request()->routeIs('superuser.cheque.index') ? 'text-white bg-red-700 md:bg-transparent md:text-red-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white' }} md:p-0">
            Cheque
         </a>
       </li>       
     </ul>
   </div>
   </div>
 </nav>
 
