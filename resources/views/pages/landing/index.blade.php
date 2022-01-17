@extends('layouts.front')

@section('title', 'Home')

@section('content')
   <!-- top -->
   <div class="hero-bg">
      <!-- hero -->
      <div class="hero">
         <div class="flex flex-col px-8 pt-16 pb-16 mx-auto lg:pb-20 lg:px-24 md:px-16 sm:px-8 lg:flex-row">
            <!-- Left Column -->
            <div
               class="flex flex-col items-center mb-3 text-center lg:flex-grow lg:w-1/2 lg:items-start lg:text-left md:mb-12 lg:mb-0">
               <h1 class="mb-5 text-3xl font-semibold text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl lg:mt-20">
                  Finish Your Project With <br class="hidden lg:block">
                  Ours Best Freelancers
               </h1>
               <p class="mb-10 text-lg font-light leading-relaxed tracking-wide text-serv-text lg:mb-18 ">
                  Find thousands of remote workers who have the best <br class="hidden lg:block">
                  skills and experience to help you accomplishing <br class="hidden lg:block">
                  your projects.
               </p>
               <div
                  class="items-center justify-center mx-auto space-x-0 md:flex contents lg:mx-0 lg:flex lg:space-x-8 md:space-x-2">
                  <button class="px-12 py-4 my-2 text-lg font-semibold text-white rounded-lg bg-serv-button"
                     onclick="toggleModal('registerModal')">
                     Get Started
                  </button>
               </div>
            </div>
            <!-- Right Column -->
            <div class="flex justify-center w-full pr-0 text-center lg:w-1/2 lg:justify-start">
               <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                  src="{{ asset('/assets/hero-image.png') }}" alt="" />
            </div>
         </div>
         <div class="flex mb-10 space-x-1 lg:mb-20 sm:space-x-4">
            <div class="flex items-center justify-center flex-1 px-6 py-3">
               <img src="{{ url('images/brand-logo/netflix.svg') }}" alt="">
            </div>
            <div class="flex items-center justify-center flex-1 px-6 py-3">
               <img src="{{ url('images/brand-logo/amazon.svg') }}" alt="">
            </div>
            <div class="flex items-center justify-center flex-1 px-6 py-3">
               <img src="{{ url('images/brand-logo/uber.svg') }}" alt="">
            </div>
            <div class="flex items-center justify-center flex-1 px-6 py-3">
               <img src="{{ url('images/brand-logo/grab.svg') }}" alt="">
            </div>
            <div class="flex items-center justify-center flex-1 px-6 py-3">
               <img src="{{ url('images/brand-logo/google.svg') }}" alt="">
            </div>
         </div>
      </div>
   </div>

   <!-- content -->
   <div class="content">
      <!-- services -->
      <div class="overflow-hidden bg-serv-services-bg">
         <div class="pt-16 pb-16 pl-8 mx-auto lg:pb-20 lg:pl-24 md:pl-16 sm:pl-8">
            <div class="flex flex-col w-full">
               <h2 class="mb-5 text-xl font-semibold tracking-wider sm:text-2xl text-medium-black">
                  Featured Services</h2>
            </div>
            <div class="flex pb-10 -mx-3 overflow-x-scroll hide-scroll-bar dragscroll">
               <div class="flex flex-nowrap">
                  @include('components.landing.service')
               </div>
            </div>
         </div>
      </div>

      <!-- call to action -->
      <div class="flex flex-col items-center py-10 lg:py-24 lg:flex-row cta-bg">
         <!-- Left Column -->
         <div class="flex justify-center w-full mb-12 text-center lg:w-1/2 lg:mb-0">
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-lity>
               <img id="hero" src="{{ asset('/assets/images/video-placeholder.png') }}" alt="" class="p-5" />
            </a>
         </div>
         <!-- Right Column -->
         <div class="flex flex-col items-center w-full text-center lg:w-1/2 lg:items-start lg:text-left">
            <h2 class="mb-10 text-3xl font-semibold md:text-4xl lg:leading-normal text-medium-black">
               Increase Productivity. <br>
               Save Your Time & Budget.
            </h2>
            <p class="mb-10 text-lg font-light leading-relaxed text-serv-text lg:mb-18">
               Find thousands of skilled and experienced <br class="hidden lg:block">
               remote workers to help you accomplishing <br class="hidden lg:block">
               your projects.
            </p>
            <a href="explore.php"
               class="px-10 py-4 text-base font-semibold tracking-wide text-white cursor-pointer bg-serv-button rounded-xl focus:outline-none">
               Learn More
            </a>
         </div>
      </div>
   </div>
@endsection
