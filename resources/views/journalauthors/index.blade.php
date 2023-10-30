@extends('layouts.master')
@section('content')
<?php
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;
?>
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
Authors
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                             <li class="breadcrumb-item text-muted">
                                 <a href="{{ route('users.index') }}" class="text-muted text-hover-primary">Users </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Authors List </li>
                                <!--end::Item-->

                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (\Session::has('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ \Session::get('status') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ \Session::get('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->


<div id="kt_app_content" class="app-content  flex-column-fluid " >


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">





<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
    <!--begin::Heading-->
    <h2 class="fs-2 fw-semibold my-2">
       Authors
        <span class="fs-6 text-gray-400 ms-1">Database</span>
    </h2>
    <!--end::Heading-->


</div>
<!--end::Toolbar-->


        <!--begin::Card-->
<div class="card">
<!--begin::Card header-->
<div class="card-header border-0 pt-6">
    <!--begin::Card title-->
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
        </div>
        <!--end::Search-->
    </div>
    <!--begin::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
        <!--begin::Toolbar-->
<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">





</div>
<!--end::Toolbar-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
<div class="fw-bold me-5">
    <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
</div>

<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
    Delete Selected
</button>
</div>
<!--end::Group actions-->



<!--end::Modal - New Card-->


 </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->

@if (count($errors) > 0)
<div class="row animated fadeInUp">
      @if (count($errors) > 0)
<div class="alert alert-warning fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 </div>
 @endif
</div>
   @endif
<!--begin::Card body-->
<div class="card-body py-4">


<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
<thead>
    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
            </div>
        </th>
        <th class="min-w-125px">SN</th>
        <th class="min-w-125px">Name</th>
        <th class="min-w-125px">Roles</th>
        <th class="min-w-125px">Email</th>
        <th class="min-w-125px">Joined Date</th>
        <th class="text-end min-w-100px">Actions</th>
    </tr>
</thead>
<tbody class="text-gray-600 fw-semibold">
        @foreach ($data as $key => $user)
        <tr>
            <td>
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" />
                </div>
            </td>

            <td>{{ ++$i }}</td>
            <td class="d-flex align-items-center">
                <!--begin:: Avatar -->
                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                    <a href="#">
                                                        <div class="symbol-label">
                    <?php $image = "";?>
                    <?php
                    if ($user->avatar == NULL || !isset($user->avatar) ){
                           $image =  'unnamed.png';
                    }else {
                       $image =  $user->avatar;
                    }
                    ?>
                                <img src="{{ Storage::url('images/staffavatar/'.$image)}}" alt="{{ $user->name }}" class="w-100" />
                            </div>
                                                </a>
                </div>
                <!--end::Avatar-->
                <!--begin::User details-->
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                    <span>{{ $user->email }}</span>
                </div>
                <!--begin::User details-->
            </td>

            <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as  $val)
                        @php
                             $u = Role::where('roles.name',"=",$val)
                                ->get();

                        @endphp
                        <label class="
                        @php
                        foreach ($u as $key => $value) {
                            echo $value->badge;
                        }
                    @endphp">{{ $val }}</label>
                    @endforeach
                @endif
            </td>
            <td>
                {{  $user->email }}
            </td>
            <td>
                {{  $user->created_at }}
            </td>
            <td class="text-end">
                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    Actions
                    <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                <!--begin::Menu-->
                     <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                        @can('author-list')
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="{{ route('authors.show',$user->id) }}" class="menu-link px-3">
                                View Journal
                                </a>
                            </div>
                            <!--end::Menu item-->
                        @endcan

                    </div>
                           <!--end::Menu-->
            </td>
        </tr>
    @endforeach



        </tbody>
     </table>
<!--end::Table-->
  </div>
<!--end::Card body-->
   </div>
<!--end::Card-->
  </div>

    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection


