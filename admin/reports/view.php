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
        Products Viewed Report
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64469947c72a3">
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
                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64469947c72a3" data-allow-clear="true">
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
                <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_views_export" class="d-none"></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->
<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_views_daterangepicker" />
<!--end::Daterangepicker-->

<!--begin::Filter-->
<div class="w-150px">
    <!--begin::Select2-->
    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
        <option></option>
        <option value="all">All</option>
        <option value="rating-5">5 Stars</option>
        <option value="rating-4">4 Stars</option>
        <option value="rating-3">3 Stars</option>
        <option value="rating-2">2 Stars</option>
        <option value="rating-1">1 Stars</option>
    </select>
    <!--end::Select2-->
</div>
<!--end::Filter-->

<!--begin::Export dropdown-->
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>    Export Report
</button>
<!--begin::Menu-->
<div id="kt_ecommerce_report_views_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-150px">Product</th>
            <th class="text-end min-w-100px">SKU</th>
            <th class="text-end min-w-100px">Rating</th>
            <th class="text-end min-w-100px">Price</th>
            <th class="text-end min-w-70px">Viewed</th>
            <th class="text-end min-w-100px">Percent</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/12.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02827005</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$280.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>246200</span>
                </td>
                <td class="text-end pe-0">
                    24.62%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/11.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04830001</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$179.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>189860</span>
                </td>
                <td class="text-end pe-0">
                    18.986%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/14.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03228008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$283.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>153388</span>
                </td>
                <td class="text-end pe-0">
                    15.3388%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/1.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01706009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$272.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>112510</span>
                </td>
                <td class="text-end pe-0">
                    11.25104%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/24.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01646007</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$147.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>59608</span>
                </td>
                <td class="text-end pe-0">
                    5.96083%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/39.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03461003</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$73.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>47687</span>
                </td>
                <td class="text-end pe-0">
                    4.76867%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/3.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04271009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$23.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>38149</span>
                </td>
                <td class="text-end pe-0">
                    3.81493%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/48.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03264006</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$253.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>30520</span>
                </td>
                <td class="text-end pe-0">
                    3.05195%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/16.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01458009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$255.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>24416</span>
                </td>
                <td class="text-end pe-0">
                    2.44156%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/50.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04931008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$21.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>19533</span>
                </td>
                <td class="text-end pe-0">
                    1.95325%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/38.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02738001</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$228.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>15626</span>
                </td>
                <td class="text-end pe-0">
                    1.5626%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/25.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04143008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$39.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>12501</span>
                </td>
                <td class="text-end pe-0">
                    1.25008%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/17.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01519006</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$277.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>10001</span>
                </td>
                <td class="text-end pe-0">
                    1.00006%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/41.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01594008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$263.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>8001</span>
                </td>
                <td class="text-end pe-0">
                    0.80005%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/32.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01871003</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$222.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>6400</span>
                </td>
                <td class="text-end pe-0">
                    0.64004%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/49.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03252002</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$139.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>5120</span>
                </td>
                <td class="text-end pe-0">
                    0.51203%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/29.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02793001</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$102.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>4096</span>
                </td>
                <td class="text-end pe-0">
                    0.40963%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/34.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03739003</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$72.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>3277</span>
                </td>
                <td class="text-end pe-0">
                    0.3277%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/20.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02213008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$39.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>2622</span>
                </td>
                <td class="text-end pe-0">
                    0.26216%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/21.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03332002</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$271.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>2097</span>
                </td>
                <td class="text-end pe-0">
                    0.20973%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/6.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03979008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$168.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>1678</span>
                </td>
                <td class="text-end pe-0">
                    0.16778%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/7.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02524003</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$150.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>1342</span>
                </td>
                <td class="text-end pe-0">
                    0.13423%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/8.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03496002</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$84.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>1074</span>
                </td>
                <td class="text-end pe-0">
                    0.10738%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/36.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04169009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$106.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>859</span>
                </td>
                <td class="text-end pe-0">
                    0.0859%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/42.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04322007</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$216.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>687</span>
                </td>
                <td class="text-end pe-0">
                    0.06872%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/44.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02254004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$270.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>550</span>
                </td>
                <td class="text-end pe-0">
                    0.05498%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/22.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01383004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$203.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>440</span>
                </td>
                <td class="text-end pe-0">
                    0.04398%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/30.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04906004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$88.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>352</span>
                </td>
                <td class="text-end pe-0">
                    0.03519%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/9.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02667007</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$218.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>282</span>
                </td>
                <td class="text-end pe-0">
                    0.02815%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/15.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01798005</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$283.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>225</span>
                </td>
                <td class="text-end pe-0">
                    0.02252%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/33.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02229008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$177.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>180</span>
                </td>
                <td class="text-end pe-0">
                    0.01802%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/27.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01274005</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$183.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>144</span>
                </td>
                <td class="text-end pe-0">
                    0.01441%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/45.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03289009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$150.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>115</span>
                </td>
                <td class="text-end pe-0">
                    0.01153%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/47.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03823003</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$193.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>92</span>
                </td>
                <td class="text-end pe-0">
                    0.00922%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/4.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04135005</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$61.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>74</span>
                </td>
                <td class="text-end pe-0">
                    0.00738%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/37.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03150004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$207.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>59</span>
                </td>
                <td class="text-end pe-0">
                    0.0059%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/31.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03940002</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$19.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>47</span>
                </td>
                <td class="text-end pe-0">
                    0.00472%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/28.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03876008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$259.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>38</span>
                </td>
                <td class="text-end pe-0">
                    0.00378%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/2.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04549009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$275.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>30</span>
                </td>
                <td class="text-end pe-0">
                    0.00302%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/35.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04461008</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$264.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>24</span>
                </td>
                <td class="text-end pe-0">
                    0.00242%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/5.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03155005</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$74.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>19</span>
                </td>
                <td class="text-end pe-0">
                    0.00193%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/43.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01840002</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$77.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>16</span>
                </td>
                <td class="text-end pe-0">
                    0.00155%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/23.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04768006</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$129.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>12</span>
                </td>
                <td class="text-end pe-0">
                    0.00124%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/19.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02120006</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$251.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>10</span>
                </td>
                <td class="text-end pe-0">
                    0.00099%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/46.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02122009</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$129.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>8</span>
                </td>
                <td class="text-end pe-0">
                    0.00079%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/40.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03968004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$84.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>6</span>
                </td>
                <td class="text-end pe-0">
                    0.00063%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/18.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04439001</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$250.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>5</span>
                </td>
                <td class="text-end pe-0">
                    0.00051%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/26.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03736004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$288.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>4</span>
                </td>
                <td class="text-end pe-0">
                    0.00041%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/13.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02443002</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$118.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>3</span>
                </td>
                <td class="text-end pe-0">
                    0.00032%
                </td>
            </tr>
                                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/10.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02838004</span>
                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-duotone ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                <td class="text-end pe-0">
                    <span>$83.00</span>
                </td>
                <td class="text-end pe-0">
                    <span>3</span>
                </td>
                <td class="text-end pe-0">
                    0.00026%
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
