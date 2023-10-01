@extends('layouts.master')
@section('content')
          
   <!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

  <!--begin::Content container-->
  <div id="kt_app_content_container" class="app-container  container-xxl ">
    
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
       
         @include('layouts.inc.academicnavbar')

        </div>
    </div>
    <!--end::Navbar-->
    
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
    <!--begin::Card title-->
    <div class="card-title m-0">
    <h3 class="fw-bold m-0">PART E (To be completed by the Registrar)</h3>
     
    </div>

    <!--begin::Actions-->
    <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-light btn-active-light-primary me-2" disabled>FORM STATUS</button>
        <button type="submit" class="btn btn-success" id="kt_account_profile_details_submit" disabled>Signed</button>
    </div>
    <!--end::Actions-->
    <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Notice-->
    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-1000 ">ANNUAL PERFORMANCE EVALUATION REPORT  [ From 12-2-2023 To 12-3-2024]</div>
                <div class="fs-6 text-gray-900 ">Full Name: Mr Ken Wood   </div>
                <div class="fs-6 text-gray-900 ">Dept: ICT Department </div>
               
                <!--end::Content-->
                
                </div>
                <!--end::Wrapper-->  
    </div>
       
    </div>
     <!--end::Notice-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
    
    <!--begin::Form-->
    <form id="kt_account_profile_details_form" class="form">
        
    <!--begin::Card body-->
    <div class="card-body border-top p-9">
     
        
    
    <!--begin::Notice-->
    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-700 ">Average score for the years:</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->
    
    

     <!--begin::Input group-->
     <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">A</label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
            placeholder="" required></textarea>
        </div>
        <!--end::Col-->
       
    </div>
    <!--end::Input group-->
    
   <!--begin::Input group-->
   <div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">B</label>
    <!--end::Label-->

     <!--begin::Col-->
     <div class="col-lg-8 fv-row">
        <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
        placeholder="" required></textarea>
    </div>
    <!--end::Col-->
   
</div>
<!--end::Input group-->

  <!--begin::Input group-->
  <div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">C</label>
    <!--end::Label-->

     <!--begin::Col-->
     <div class="col-lg-8 fv-row">
        <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
        placeholder="" required></textarea>
    </div>
    <!--end::Col-->
   
</div>
<!--end::Input group-->



    
    </div>
    <!--end::Card body-->
    
    
    
    <!--begin::Actions-->
    <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
    </div>
    <!--end::Actions-->
    </form>
    <!--end::Form-->
    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->





</div>
<!--end::Content container-->


 </div>
<!--end::Content container-->

   	
@endsection   