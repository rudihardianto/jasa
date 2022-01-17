<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   @include('includes.dashboard.meta')

   <title>@yield('title')</title>

   @stack('before-style')

   @include('includes.landing.style')

   @stack('after-style')
</head>

<body class="antialiased">
   <div class="relative">

      @include('includes.landing.header')

      {{-- @include('sweetalert::alert') --}}

      @yield('content')

      @include('includes.landing.footer')

      @stack('before-script')

      @include('includes.landing.script')

      @stack('after-script')

      <!-- START: modal -->
      @include('components.modal.login')
      @include('components.modal.register')
      @include('components.modal.register-success')
      <!-- END: modal -->

   </div>
</body>

</html>
