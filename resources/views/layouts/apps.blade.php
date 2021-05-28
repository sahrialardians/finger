<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Styles --}}
    @include('layouts.partials.styles')

    <!-- Page Specific CSS File -->
    @stack('style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>

      {{-- Topbar --}}
      @include('layouts.partials.topbar')

      <div class="main-sidebar">

        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')
        
      </div>

      <!-- Main Content -->
      <div class="main-content">

          @yield('content')

        </section>
      </div>
      
      {{-- Footer --}}
      @include('layouts.partials.footer')
    </div>
  </div>

  {{-- Script --}}
  @include('layouts.partials.scripts')

  <!-- Page Specific JS File -->
  @stack('script')
</body>
</html>