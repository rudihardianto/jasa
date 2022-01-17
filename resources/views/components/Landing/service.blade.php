<a href="details.php" class="inline-block px-3">
   <div class="inline-block h-auto p-4 overflow-hidden bg-white w-96 md:p-5 rounded-2xl">
      <div class="flex items-center mb-6 space-x-2">
         <!--Author's profile photo-->
         <img class="object-cover object-center mr-1 rounded-full w-14 h-14"
            src="{{ url('https://randomuser.me/api/portraits/men/1.jpg') }}" alt="random user" />
         <div>
            <!--Author name-->
            <p class="text-lg font-semibold text-gray-900">Alex Jones</p>
            <p class="font-light text-serv-text text-md">
               Website Developer
            </p>
         </div>
      </div>

      <!--Banner image-->
      <img class="w-full rounded-2xl" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />

      <!--Title-->
      <h1 class="py-4 mt-1 text-lg font-semibold leading-normal text-gray-900">
         I Will Design WordPress eCommerce
         Modules
      </h1>
      <!--Description-->
      <div class="max-w-full">
         @include('components.landing.rating')
      </div>

      <div class="flex justify-between w-full mt-5 text-center">
         <span class="inline-flex items-center py-1 mr-3 leading-none text-serv-text text-md ">
            Price starts from:
         </span>
         <span class="inline-flex items-center font-semibold leading-none text-serv-button text-md">
            Rp 120.000
         </span>
      </div>
   </div>
</a>
