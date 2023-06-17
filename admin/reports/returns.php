<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->

<meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <title>
       Araddha Nursery Dashboard
    </title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content=""
    />
    <meta
      name="keywords"
      content=""
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content=""
    />
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content=" | " />
    <link rel="canonical" href="#" />
    <link
      rel="shortcut icon"
      href="../assets/media/logos/logo1.png"
    />

    <!--begin::Fonts(mandatory for all pages)-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link
      href="../assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="../assets/plugins/custom/vis-timeline/vis-timeline.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link
      href="../assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

  </head>
  <!--end::Head-->

  <!--begin::Body-->
  <body
    id="kt_app_body"
    data-kt-app-layout="dark-sidebar"
    data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-toolbar-enabled="true"
    class="app-default"
  >

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <!--begin::Page-->
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">


        <!--begin::Header-->
        <?php include('../include/header.php') ; ?>
        <!--end::Header-->


        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">


          <!--begin::Sidebar-->
         <?php include("../include/sidebar.php") ; ?>
<!--end::Sidebar-->                
                            
            
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
        Returns Report
            </h1>
    <!--end::Title-->

            
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="https://preview./metronic8/demo1/index.php" class="text-muted text-hover-primary">
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
                                                    eCommerce                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                                        
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Reports                                            </li>
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6446994d1d49e">
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
                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6446994d1d49e" data-allow-clear="true">
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
            <!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->
<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_returns_daterangepicker" />
<!--end::Daterangepicker-->

<!--begin::Export dropdown-->
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>    Export Report
</button>
<!--begin::Menu-->
<div id="kt_ecommerce_report_returns_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">
            Copy to clipboard
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">
            Export as Excel
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">
            Export as CSV
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">
            Export as PDF
        </a>
    </div>
    <!--end::Menu item-->
 
</div>
<!--end::Menu-->
<!--end::Export dropdown-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_returns_table">
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-100px">Date</th>
            <th class="text-end min-w-75px">No. Orders Returned</th>
            <th class="text-end min-w-75px">No. Orders Refunded</th>            
            <th class="text-end min-w-75px">No. Orders Replaced</th> 
            <th class="text-end min-w-100px">Total Refunded</th>
            <th class="text-end min-w-100px">Total Replaced</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                                <tr>
                <td>
                    Apr 15, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $95.00
                </td>
                <td class="text-end">
                    $111.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    $81.00
                </td>
                <td class="text-end">
                    $171.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $95.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 20, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $94.00
                </td>
                <td class="text-end">
                    $189.00
                </td>
            </tr>
                                <tr>
                <td>
                    Nov 10, 2023                </td>    
                <td class="text-end pe-0">
                    9                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    $21.00
                </td>
                <td class="text-end">
                    $45.00
                </td>
            </tr>
                                <tr>
                <td>
                    Dec 20, 2023                </td>    
                <td class="text-end pe-0">
                    8                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    $64.00
                </td>
                <td class="text-end">
                    $127.00
                </td>
            </tr>
                                <tr>
                <td>
                    May 05, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $30.00
                </td>
                <td class="text-end">
                    $114.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $87.00
                </td>
                <td class="text-end">
                    $109.00
                </td>
            </tr>
                                <tr>
                <td>
                    Nov 10, 2023                </td>    
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $97.00
                </td>
            </tr>
                                <tr>
                <td>
                    Nov 10, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $83.00
                </td>
                <td class="text-end">
                    $126.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $89.00
                </td>
                <td class="text-end">
                    $145.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 24, 2023                </td>    
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    $67.00
                </td>
                <td class="text-end">
                    $156.00
                </td>
            </tr>
                                <tr>
                <td>
                    Dec 20, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $34.00
                </td>
                <td class="text-end">
                    $94.00
                </td>
            </tr>
                                <tr>
                <td>
                    May 05, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $66.00
                </td>
                <td class="text-end">
                    $113.00
                </td>
            </tr>
                                <tr>
                <td>
                    Aug 19, 2023                </td>    
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $31.00
                </td>
                <td class="text-end">
                    $47.00
                </td>
            </tr>
                                <tr>
                <td>
                    Dec 20, 2023                </td>    
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $16.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    9                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    8                </td>
                <td class="text-end pe-0">
                    $44.00
                </td>
                <td class="text-end">
                    $80.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $33.00
                </td>
                <td class="text-end">
                    $64.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    $88.00
                </td>
                <td class="text-end">
                    $172.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 20, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $33.00
                </td>
                <td class="text-end">
                    $59.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 24, 2023                </td>    
                <td class="text-end pe-0">
                    8                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    8                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $65.00
                </td>
            </tr>
                                <tr>
                <td>
                    Sep 22, 2023                </td>    
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $45.00
                </td>
            </tr>
                                <tr>
                <td>
                    Mar 10, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $32.00
                </td>
                <td class="text-end">
                    $129.00
                </td>
            </tr>
                                <tr>
                <td>
                    Apr 15, 2023                </td>    
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $77.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $80.00
                </td>
            </tr>
                                <tr>
                <td>
                    Dec 20, 2023                </td>    
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $72.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 24, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $55.00
                </td>
                <td class="text-end">
                    $137.00
                </td>
            </tr>
                                <tr>
                <td>
                    Nov 10, 2023                </td>    
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $79.00
                </td>
            </tr>
                                <tr>
                <td>
                    Nov 10, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $64.00
                </td>
                <td class="text-end">
                    $131.00
                </td>
            </tr>
                                <tr>
                <td>
                    Aug 19, 2023                </td>    
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $36.00
                </td>
                <td class="text-end">
                    $135.00
                </td>
            </tr>
                                <tr>
                <td>
                    Mar 10, 2023                </td>    
                <td class="text-end pe-0">
                    9                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    8                </td>
                <td class="text-end pe-0">
                    $68.00
                </td>
                <td class="text-end">
                    $98.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $26.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    $81.00
                </td>
                <td class="text-end">
                    $108.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 20, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    $27.00
                </td>
                <td class="text-end">
                    $117.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    $56.00
                </td>
                <td class="text-end">
                    $156.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    9                </td>
                <td class="text-end pe-0">
                    $68.00
                </td>
                <td class="text-end">
                    $168.00
                </td>
            </tr>
                                <tr>
                <td>
                    Feb 21, 2023                </td>    
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $88.00
                </td>
            </tr>
                                <tr>
                <td>
                    Apr 15, 2023                </td>    
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $19.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $68.00
                </td>
            </tr>
                                <tr>
                <td>
                    Feb 21, 2023                </td>    
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $25.00
                </td>
            </tr>
                                <tr>
                <td>
                    May 05, 2023                </td>    
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    $64.00
                </td>
                <td class="text-end">
                    $88.00
                </td>
            </tr>
                                <tr>
                <td>
                    Nov 10, 2023                </td>    
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $40.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    $65.00
                </td>
                <td class="text-end">
                    $158.00
                </td>
            </tr>
                                <tr>
                <td>
                    Oct 25, 2023                </td>    
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $58.00
                </td>
                <td class="text-end">
                    $139.00
                </td>
            </tr>
                                <tr>
                <td>
                    Apr 15, 2023                </td>    
                <td class="text-end pe-0">
                    8                </td>
                <td class="text-end pe-0">
                    1                </td>
                <td class="text-end pe-0">
                    7                </td>
                <td class="text-end pe-0">
                    $99.00
                </td>
                <td class="text-end">
                    $152.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jul 25, 2023                </td>    
                <td class="text-end pe-0">
                    6                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    4                </td>
                <td class="text-end pe-0">
                    $91.00
                </td>
                <td class="text-end">
                    $153.00
                </td>
            </tr>
                                <tr>
                <td>
                    Mar 10, 2023                </td>    
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $83.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 24, 2023                </td>    
                <td class="text-end pe-0">
                    5                </td>
                <td class="text-end pe-0">
                    3                </td>
                <td class="text-end pe-0">
                    2                </td>
                <td class="text-end pe-0">
                    $94.00
                </td>
                <td class="text-end">
                    $190.00
                </td>
            </tr>
                                <tr>
                <td>
                    Jun 20, 2023                </td>    
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    10                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $47.00
                </td>
            </tr>
                                <tr>
                <td>
                    Sep 22, 2023                </td>    
                <td class="text-end pe-0">
                    9                </td>
                <td class="text-end pe-0">
                    0                </td>
                <td class="text-end pe-0">
                    9                </td>
                <td class="text-end pe-0">
                    $0.00
                </td>
                <td class="text-end">
                    $96.00
                </td>
            </tr>
            </tbody>
</table>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->					
                </div>
                <!--end::Content wrapper-->

                                    
<!--begin::Footer-->
<?php include('../include/footer.php') ; ?>