


<!--start back-to-top-->
<button class="btn btn-dark btn-icon" id="back-to-top">
    <i class="bi bi-caret-up fs-3xl"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<div class="customizer-setting d-none d-md-block">
    <div class="btn btn-info p-2 text-uppercase rounded-end-0 shadow-lg" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
        <i class="bi bi-gear mb-1"></i> Customizer
    </div>
</div>

<!-- Theme Settings -->
@include('layouts.inc.theme')
<!-- JAVASCRIPT -->
    @if (Route::is('dashboard'))
        @include('layouts.pages-assets.js.dashboard-js')
    @endif
    @if (Route::is('users.*'))
        @include('layouts.pages-assets.js.users-list-js')
    @endif
    @if (Route::is('roles.*'))
        @include('layouts.pages-assets.js.role-list-js')
    @endif

  
</body>

</html>