<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">



<!-- Mirrored from themesbrand.com/steex/layouts/dashboard-real-estate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 02:56:57 GMT -->
<head>

    <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
    <title>Real Estate | Steex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('html/layouts/assets/images/favicon.ico')}}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    @if (Route::is('dashboard'))
        @include('layouts.pages-assets.css.dashboard-css')
    @endif
    @if (Route::is('users.*'))
        @include('layouts.pages-assets.css.users-list-css')                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    @endif
    @if (Route::is('role.*'))
        @include('layouts.pages-assets.css.users-list-css')                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    @endif
   

  
 
</head>                                                                                                                                                                                                                                                                                                                                                                                                         

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->

          @include('layouts.inc.sidebar')
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
      
          @include('layouts.inc.header')    