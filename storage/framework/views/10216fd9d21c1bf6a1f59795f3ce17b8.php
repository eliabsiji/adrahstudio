    
    <?php $__env->startSection('content'); ?>

   <!--begin::Main-->
   <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

>

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
<!--begin::Title-->
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
Messages
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        <a href="../../index.html" class="text-muted text-hover-primary">
                    Home                            </a>
                                </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->

                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        Inbox                                            </li>
                    <!--end::Item-->

        </ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
<!--begin::Filter menu-->
<div class="m-0">
<!--begin::Menu toggle-->
<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span class="path2"></span></i>
    Filter
</a>
<!--end::Menu toggle-->



<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6486986a041c9">
<!--begin::Header-->
<div class="px-7 py-5">
<div class="fs-5 text-dark fw-bold">Filter Options</div>
</div>
<!--end::Header-->

<!--begin::Menu separator-->
<div class="separator border-gray-200"></div>
<!--end::Menu separator-->

<!--begin::Form-->
<div class="px-7 py-5">
<!--begin::Input group-->
<div class="mb-10">
<!--begin::Label-->
<label class="form-label fw-semibold">Status:</label>
<!--end::Label-->

<!--begin::Input-->
<div>
    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6486986a041c9" data-allow-clear="true">
        <option></option>
        <option value="1">Approved</option>
        <option value="2">Pending</option>
        <option value="2">In Process</option>
        <option value="2">Rejected</option>
    </select>
</div>
<!--end::Input-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10">
<!--begin::Label-->
<label class="form-label fw-semibold">Member Type:</label>
<!--end::Label-->

<!--begin::Options-->
<div class="d-flex">
    <!--begin::Options-->
    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
        <input class="form-check-input" type="checkbox" value="1"/>
        <span class="form-check-label">
            Author
        </span>
    </label>
    <!--end::Options-->

    <!--begin::Options-->
    <label class="form-check form-check-sm form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="2" checked="checked"/>
        <span class="form-check-label">
            Customer
        </span>
    </label>
    <!--end::Options-->
</div>
<!--end::Options-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10">
<!--begin::Label-->
<label class="form-label fw-semibold">Notifications:</label>
<!--end::Label-->

<!--begin::Switch-->
<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
    <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
    <label class="form-check-label">
        Enabled
    </label>
</div>
<!--end::Switch-->
</div>
<!--end::Input group-->

<!--begin::Actions-->
<div class="d-flex justify-content-end">
<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
</div>
<!--end::Actions-->
</div>
<!--end::Form-->
</div>
<!--end::Menu 1-->        </div>
<!--end::Filter menu-->


<!--begin::Secondary button-->
<!--end::Secondary button-->

<!--begin::Primary button-->
<a href="#" class="btn btn-sm fw-bold btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
Create        </a>
<!--end::Primary button-->
</div>
<!--end::Actions-->
</div>
<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Inbox App - Messages -->
<div class="d-flex flex-column flex-lg-row">


    <?php echo $__env->make('journalauthors.inc.journal_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

    <!--begin::Card-->
    <div class="card">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Actions-->
<div class="d-flex flex-wrap gap-2">
    <!--begin::Checkbox-->
    <div class="form-check form-check-sm form-check-custom form-check-solid me-4 me-lg-7">
        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_inbox_listing .form-check-input" value="1" />
    </div>
    <!--end::Checkbox-->


</div>
<!--end::Actions-->

<!--begin::Actions-->
<div class="d-flex align-items-center flex-wrap gap-2">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative">
        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>        <input type="text" data-kt-inbox-listing-filter="search" class="form-control form-control-sm form-control-solid mw-100 min-w-125px min-w-lg-150px min-w-xxl-200px ps-11" placeholder="Search inbox" />
    </div>
    <!--end::Search-->

    <!--begin::Toggle-->
    <a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
        <i class="ki-duotone ki-burger-menu-2 fs-3 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    </a>
    <!--end::Toggle-->
</div>
<!--end::Actions-->        </div>

        <div class="card-body p-0">

<!--begin::Table-->
<table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
    <thead class="d-none">
        <tr>
            <th>Checkbox</th>
            <th>Actions</th>
            <th>Author</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
                    <tr>
                <td class="ps-9">
                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td class="min-w-80px">
                    <!--begin::Star-->
                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                        <i class="ki-duotone ki-star fs-3"></i>                    </a>
                    <!--end::Star-->

                    <!--begin::Important-->
                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                        <i class="ki-duotone ki-save-2 fs-4 mt-1"><span class="path1"></span><span class="path2"></span></i>                    </a>
                    <!--end::Important-->
                </td>
                <td class="w-150px w-md-175px">
                    <a href="reply.html" class="d-flex align-items-center text-dark">
                        <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px me-3">
                                <div class="symbol-label bg-light-danger">
                                    <span class="text-danger">M</span>
                                </div>
                            </div>
                                                <!--end::Avatar-->

                        <!--begin::Name-->
                        <span class="fw-semibold">Melody Macy</span>
                        <!--end::Name-->
                    </a>
                </td>
                <td>
                    <div class="text-dark gap-1 pt-2">
                        <!--begin::Heading-->
                        <a href="reply.html" class="text-dark">
                            <span class="fw-bold">Digital PPV Customer Confirmation</span>
                            <span class="fw-bold d-none d-md-inine"> - </span>
                            <span class="d-none d-md-inine text-muted">Thank you for ordering UFC 240 Holloway vs Edgar Alternate camera angles...</span>
                        </a>
                        <!--end::Heading-->
                    </div>

                                            <!--begin::Badges-->
                                                    <div class="badge badge-light-primary">Reviewer 1</div>
                                                    <div class="badge badge-light-warning">Reviewer 2</div>
                                                <!--end::Badges-->
                                    </td>
                <td class="w-100px text-end fs-7 pe-9">
                                            <span class="fw-semibold">8:30 PM</span>
                                    </td>
            </tr>

            </tbody>
</table>
<!--end::Table-->        </div>
    </div>
    <!--end::Card-->

    </div>
    <!--end::Content-->
</div>
<!--end::Inbox App - Messages -->




        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/journalauthors/journals.blade.php ENDPATH**/ ?>