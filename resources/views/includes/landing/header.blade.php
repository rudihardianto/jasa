<section class="w-full h-full px-8 py-8 transition-all duration-500 bg-white border-box linear lg:px-16 md:px-20">
   <div class="navbar-1-1" style="font-family: 'Poppins', sans-serif">
      <div class="flex flex-row flex-wrap items-center justify-between mx-auto ">
         <a href="{{ route('index') }}" class="flex items-center text-3xl font-bold">
            SERV
         </a>
         <label for="menu-toggle" class="block cursor-pointer lg:hidden">
            <svg class="w-6 h-6" fill="none" stroke="#092A33" viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
               </path>
            </svg>
         </label>
         <input class="hidden" type="checkbox" id="menu-toggle" />
         <div
            class="flex-wrap items-center justify-center hidden w-full text-base lg:flex lg:items-center lg:w-auto lg:ml-auto lg:mr-auto"
            id="menu">
            <nav
               class="items-center justify-between pt-8 space-x-0 space-y-6 text-base lg:space-x-12 lg:flex lg:pt-0 lg:space-y-0">
               <a href="{{ route('index') }}"
                  class="block {{ request()->is('/') ? 'font-medium nav-link active' : 'nav-link text-serv-text' }}">Home</a>
               <a href="{{ route('explore.landing') }}"
                  class="block {{ request()->is('explore') ? 'font-medium nav-link active' : 'nav-link text-serv-text' }}">Explore</a>
               <a href="#" class="block nav-link text-serv-text">How It Works</a>
               <a href="#" class="block nav-link text-serv-text">Stories</a>
               <a href="#" class="block nav-link text-serv-text">Tips</a>
               @auth
                  <hr class="block lg:hidden">
                  <a href="{{ route('member.dashboard.index') }}"
                     class="block lg:hidden nav-link text-serv-text">Dashboard</a>
                  <a href="{{ route('logout') }}" class="block lg:hidden nav-link text-serv-text"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                     <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </a>
               @endauth
            </nav>
         </div>

         @guest
            <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="menu">
               <button onclick="toggleModal('loginModal')"
                  class="items-center block mt-6 text-base font-medium border-0 text-serv-login-text lg:inline-block lg:py-3 lg:px-10 focus:outline-none rounded-2xl lg:mt-0">
                  Log In
               </button>
               <button onclick="toggleModal('registerModal')"
                  class="items-center block mt-6 text-base font-medium border-0 lg:bg-serv-services-bg text-serv-login-text lg:inline-block lg:py-3 lg:px-10 focus:outline-none rounded-2xl lg:mt-0">
                  Sign Up
               </button>
            </div>
         @endguest

         @auth
            <div @click.away="open = false" class="relative hidden lg:block" x-data="{ open: false }">
               <button @click="open = !open"
                  class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  {{ Auth::user()->name }}
                  <img class="inline w-12 h-12 ml-3 rounded-full"
                     src="{{ url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80') }}"
                     alt="">
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                     class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                     <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                  </svg>
               </button>
               <div x-show="open" x-transition:enter="transition ease-out duration-100"
                  x-transition:enter-start="transform opacity-0 scale-95"
                  x-transition:enter-end="transform opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="transform opacity-100 scale-100"
                  x-transition:leave-end="transform opacity-0 scale-95"
                  class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                  <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                     <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('member.dashboard.index') }}">
                        Dashboard
                     </a>
                     <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('index') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                        <form action="{{ route('logout') }}" id="logout-fomr" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </a>
                  </div>
               </div>
            </div>
         @endauth
      </div>
   </div>
</section>
