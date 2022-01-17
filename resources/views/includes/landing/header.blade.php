<section class="w-full h-full px-8 py-8 transition-all duration-500 bg-white border-box linear lg:px-16 md:px-20">
   <div class="navbar-1-1" style="font-family: 'Poppins', sans-serif">
      <div class="flex flex-row flex-wrap items-center justify-between mx-auto ">
         <a href="index.php" class="flex items-center text-3xl font-bold">
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
               <a href="{{ route('index') }}" class="block font-medium nav-link active">Home</a>
               <a href="{{ route('explore.landing') }}" class="block nav-link text-serv-text">Explore</a>
               <a href="#" class="block nav-link text-serv-text">How It Works</a>
               <a href="#" class="block nav-link text-serv-text">Stories</a>
               <a href="#" class="block nav-link text-serv-text">Tips</a>
            </nav>
         </div>

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
      </div>
   </div>
</section>
