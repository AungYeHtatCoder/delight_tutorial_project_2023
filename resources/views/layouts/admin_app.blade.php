@include('layouts.head')
@yield('styles')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
 data-menu="vertical-menu-modern" data-col="2-columns">

 <!-- BEGIN: Header-->
 @include('layouts.navbar')
 <!-- END: Header-->


 <!-- BEGIN: Main Menu-->

 <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
   @include('layouts.sidebar')
  </div>
 </div>

 <!-- END: Main Menu-->
 <!-- BEGIN: Content-->
 <div class="app-content content">

  <div class="content-wrapper">
   <div class="content-body">
    <!-- eCommerce statistic -->
    @yield('content')
    <!--/ Basic Horizontal Timeline -->
   </div>
  </div>
 </div>
 <!-- END: Content-->

 <div class="sidenav-overlay"></div>
 <div class="drag-target"></div>

 <!-- BEGIN: Footer-->
 @include('layouts.footer')
 @yield('scripts')