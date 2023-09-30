<!DOCTYPE html>

<html lang="en" >
    <!--begin::Head-->

<head>
        <title>Scroll | Dashboard</title>
        <meta charset="utf-8"/>
        <meta name="description" content=" "/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="shortcut icon" href="{{ asset('html/assets/assets/media/logos/favicon.ico')}}"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        @if (Route::is('dashboard'))
             @include('layouts.pages-assets.css.dashboard-css')
        @endif
        @if (Route::is('users.*'))
            @include('layouts.pages-assets.css.users-list-css')
        @endif
        @if (Route::is('roles.*'))
            @include('layouts.pages-assets.css.users-list-css')
        @endif
        @if (Route::is('permissions.*'))
             @include('layouts.pages-assets.css.permission-list-css')
        @endif

        @if (Route::is('journalcategory.*'))
           @include('layouts.pages-assets.css.users-list-css')
       @endif


        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="{{ asset('html/assets/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Vendor Stylesheets-->


        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
            <link href="{{ asset('html/assets/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('html/assets/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Global Stylesheets Bundle-->
            </head>
            <!--end::Head-->

            <!--begin::Body-->
    <body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}
</script>

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


<!--begin::Header-->
<div id="kt_app_header" class="app-header ">

                        <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">

	<!--begin::Sidebar mobile toggle-->
	<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
		<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
			<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>		</div>
	</div>
	<!--end::Sidebar mobile toggle-->


	<!--begin::Mobile logo-->
	<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
		<a href="assets/index.html')}}" class="d-lg-none">
			<img alt="Logo" src="{{ asset('html/assets/assets/media/logos/default-small.svg')}}" class="h-30px"/>
		</a>
	</div>
	<!--end::Mobile logo-->

<!--begin::Header wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

<!--begin::Menu wrapper-->
<div
    class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    "

    data-kt-drawer="true"
	data-kt-drawer-name="app-header-menu"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="250px"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_app_header_menu_toggle"

    data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
>

</div>
<!--end::Menu wrapper-->


@include('layouts.inc.header')

        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

@include('layouts.inc.sidebar')



@yield('content')



                </div>
                <!--end::Content wrapper-->





<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer " >
            <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
<div class="text-dark order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">2023&copy;</span>
    <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Powered By Qudroid Systems</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item">
        <a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">
        About
       </a>
    <li>
</ul>
<!--end::Menu-->
     </div>
        <!--end::Footer container-->
    </div>
<!--end::Footer-->
     </div>
    <!--end:::Main-->
  </div>
        <!--end::Wrapper-->
     </div>
    <!--end::Page-->
</div>
<!--end::App-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--end::Scrolltop-->



        <!--begin::Javascript-->
        <script>
            // var hostUrl = "{{ asset('html/assets/assets/index.html')}}";        </script>

        @if (Route::is('dashboard'))
             @include('layouts.pages-assets.js.dashboard-js')
        @endif
        @if (Route::is('users.*'))
              @include('layouts.pages-assets.js.users-list-js')
        @endif
        @if (Route::is('roles.*'))
             @include('layouts.pages-assets.js.role-list-js')
        @endif
        @if (Route::is('permissions.*'))
             @include('layouts.pages-assets.js.permissions-list-js')
        @endif

        @if (Route::is('journalcategory.*'))
             @include('layouts.pages-assets.js.journalcategory-list-js')
        @endif

        @if (Route::is('journalvolume.*'))
             @include('layouts.pages-assets.js.journalvolume-list-js')
        @endif

     <!-- begin::Global Javascript Bundle(mandatory for all pages)-->
      <!-- <script src="{{ asset('html/assets/assets/plugins/global/plugins.bundle.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/scripts.bundle.js')}}"></script> -->
  <!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
      <!-- <script src="{{ asset('html/assets/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script> -->
  <!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
      <!-- <script src="{{ asset('html/assets/assets/js/custom/apps/user-management/permissions/list.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/apps/user-management/permissions/add-permission.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/apps/user-management/permissions/update-permission.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/widgets.bundle.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/widgets.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/apps/chat/chat.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/utilities/modals/create-app.js')}}"></script>
      <script src="{{ asset('html/assets/assets/js/custom/utilities/modals/users-search.js')}}"></script> -->
  <!--end::Custom Javascript-->


            </body>


</html>
