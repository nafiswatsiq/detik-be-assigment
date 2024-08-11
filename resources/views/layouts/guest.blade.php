@extends('layouts.base')

@section('body')
  <div class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <x-guest-navbar />

    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset

    <x-guest-footer />
  </div>
@endsection

@push('styles')
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.csss') }}" rel="stylesheet" />
  <!-- Main Styling -->
  <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />
@endpush

@push('scripts')
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
@endpush