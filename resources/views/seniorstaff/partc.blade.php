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
       
         @include('layouts.inc.seniornavbar')

        </div>
    </div>
    <!--end::Navbar-->

    
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
    <!--begin::Card title-->
    <div class="card-title m-0">
    <h3 class="fw-bold m-0">PART C (To be completed the Head of Department)</h3>
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
                <div class="fs-6 text-gray-700 ">Training Needs: 
                    (in completing this section, you should take account 
                    of any view expressed by person reported on)</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->
    
    
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
            
            (a)	If as a result of the assessments made earlier in the report, you consider that performance or potential could be improved by taking training, please specify needs: 
        </label>
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
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
            (b)	If they cannot be met by training on the job, please suggest, if possible, in which way they  might be met: 
        </label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="coursestaught" class="form-control form-control-lg form-control-solid" 
            placeholder="" required></textarea>
        </div>
        <!--end::Col-->
      
    </div>
    <!--end::Input group-->


     
    <!--begin::Notice-->
    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-700 ">
                    	Next job at the same level: (In completing this section, you should take account 
                    of any view expressed by the person reported on)
                </div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->
    
    
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
            (a)	A different job in the same grade     (YES/NO)                                                              
        </label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <input type="text" name="supervision" class="form-control form-control-lg form-control-solid" 
            placeholder=" " required />
        </div>
        <!--end::Col-->
      
    </div>
    <!--end::Input group-->
       <!--begin::Input group-->
       <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
            (b)	Transfer to a job at similar level in another occupation group or cadre         
             YES/NO
            If you have answered YES to either question, say which kind of job and five reasons bellow: 
        </label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="supervision" class="form-control form-control-lg form-control-solid" 
            placeholder="" required></textarea>
        </div>
        <!--end::Col-->


        
      
    </div>
    <!--end::Input group-->




     <!--begin::Notice-->
     <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-700 ">RECOMMENDATION FOR CONFIRMATION</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->


    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">I recommend that:</label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            I.	His/her appointment be confirmed to retiring age
           <!--begin::Radio-->
            <div class="form-check form-check-custom form-check-solid me-5">
                <input class="form-check-input" type="radio" value="" name="retireage" 
                id="category_product_count_yes" checked  required/>
                <label class="form-check-label" for="category_product_count_yes">
                    Yes
                </label>
            </div>

            <div class="form-check form-check-custom form-check-solid">
                <input class="form-check-input" type="radio" value="" 
                name="retireage" id="category_product_count_no" required/>
                <label class="form-check-label" for="category_product_count_no">
                    No
                </label>
            </div>
            <!--end::Radio-->
        </div>
        <!--end::Col-->
        
    </div>
    <!--end::Input group-->


    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">I recommend that:</label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            II.	His/her appointment be further extended for six months
           <!--begin::Radio-->
            <div class="form-check form-check-custom form-check-solid me-5">
                <input class="form-check-input" type="radio" value="" name="sixmonth" 
                id="category_product_count_yes" checked required/>
                <label class="form-check-label" for="category_product_count_yes">
                    Yes
                </label>
            </div>

            <div class="form-check form-check-custom form-check-solid">
                <input class="form-check-input" type="radio" value="" name="sixmonth" 
                id="category_product_count_no" required />
                <label class="form-check-label" for="category_product_count_no">
                    No
                </label>
            </div>
            <!--end::Radio-->
        </div>
        <!--end::Col-->
        
    </div>
    <!--end::Input group-->


    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">I recommend that:</label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            III.	His/her appointment to terminated with effect from:
            <input type="date" name="teachingexperience" class="form-control form-control-lg form-control-solid" 
            placeholder="" required />
           
        </div>
        <!--end::Col-->
        
    </div>
    <!--end::Input group-->
 


    
     <!--begin::Notice-->
     <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-700 ">RECOMMENDATION FOR NORMAL PROMOTION</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->



    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
            
            Comments on your recommendation
        </label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
            placeholder="" required></textarea>
        </div>
        <!--end::Col-->
       
    </div>
    <!--end::Input group-->
    



       <!--begin::Notice-->
       <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-700 ">RECOMMENDATION FOR ACCELERATED PROMOTION</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->



    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
            
            He/she should be specially considered for Accelerated promotion to 
        </label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
            placeholder="Grade" required></textarea>
        </div>
        <!--end::Col-->
       
    </div>
    <!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
        
        Give reasons for your recommendations
    </label>
    <!--end::Label-->

     <!--begin::Col-->
     <div class="col-lg-8 fv-row">
        <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
        placeholder="" required></textarea>
    </div>
    <!--end::Col-->
   
</div>
<!--end::Input group-->


 <!--begin::Notice-->
 <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
    <!--begin::Icon-->
    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
            <div class="fs-6 text-gray-700 ">RECOMMENDATION FOR INCREMENT ONLY</div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
        
        Comments on your recommendation:
    </label>
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
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
        
        23.	He/she served under me for  
    </label>
    <!--end::Label-->

     <!--begin::Col-->
     <div class="col-lg-8 fv-row">Years/months.
        <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
        placeholder="" required></textarea>
    </div>
    <!--end::Col-->
   
</div>
<!--end::Input group-->








    </div>
    <!--end::Card body-->
    
  
  <!--begin::Notice-->
  <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
    <!--begin::Icon-->
    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
            <div class="fs-6 text-gray-700 ">  </div>
            <div class="fs-6 text-gray-900 ">Upload a snapshot of your Signature  </div>
           
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
   
</div>
 <!--end::Notice-->


             
        <!--begin::Input group-->
        <div class="row mb-6">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Signature of member of Staff and Date</label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                   
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                    Date: <input type="date" name="pqualification3" class="form-control form-control-lg form-control-solid" 
                       placeholder="Professional qualification"  required />
                    </div>
                    <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-lg-6 fv-row">
                        Signature: <input type="file" name="signature" class="form-control form-control-lg form-control-solid" 
                        placeholder="awarding Body"  required />
                     </div>
                     <!--end::Col-->
                     
                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
        
        </div>
        <!--end::Input group-->
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
<!--end::Content-->	


 </div>
<!--end::Content container-->

   	
@endsection   