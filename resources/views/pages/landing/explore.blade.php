@extends('layouts.front')

@section('title', 'Explore')

@section('content')
   <!-- content -->
   <div class="content">
      <!-- services -->
      <div class="overflow-hidden bg-serv-bg-explore">
         <div class="px-8 pt-16 pb-16 mx-auto lg:pb-20 lg:px-24 md:px-16 sm:px-8">
            <div class="text-center">
               <h1 class="mb-1 text-3xl font-semibold">Service Overviews</h1>
               <p class="mb-10 leading-8 text-serv-text">
                  Discover the world's top Freelancers
               </p>
            </div>
            <nav class="my-8 text-center" aria-label="navigation">
               <a class="block px-8 py-2 mx-4 my-2 font-medium text-white bg-serv-bg sm:inline-block rounded-xl" href="#">
                  All Services
               </a>
               <a class="block px-8 py-2 mx-4 my-2 font-medium bg-serv-explore-button text-serv-bg sm:inline-block rounded-xl"
                  href="#">
                  Programming & Tech
               </a>
               <a class="block px-8 py-2 mx-4 my-2 font-medium bg-serv-explore-button text-serv-bg sm:inline-block rounded-xl"
                  href="#">
                  Graphic Design
               </a>
               <a class="block px-8 py-2 mx-4 my-2 font-medium bg-serv-explore-button text-serv-bg sm:inline-block rounded-xl"
                  href="#">
                  Digital Marketing
               </a>
               <a class="block px-8 py-2 mx-4 my-2 font-medium bg-serv-explore-button text-serv-bg sm:inline-block rounded-xl"
                  href="#">
                  Business
               </a>
            </nav>
            <div class="grid gap-4 grid-cols lg:grid-cols-3 md:grid-cols-2">
               @include('components.landing.service-explore')
            </div>
            <div class="mt-10 text-center">
               <a class="block px-8 py-2 mx-4 my-2 font-medium bg-serv-explore-button text-serv-bg sm:inline-block rounded-xl"
                  href="#">
                  Load More
               </a>
            </div>
         </div>
      </div>

   </div>
@endsection
