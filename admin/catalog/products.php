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
        Products
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
                                                    Catalog                                            </li>
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6446964d775ee">
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
                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6446964d775ee" data-allow-clear="true">
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
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                    <option></option>
                    <option value="all">All</option>
                    <option value="published">Published</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="inactive">Inactive</option>
                </select>
                <!--end::Select2-->
            </div>

            <!--begin::Add product-->
            <a href="add-product.php" class="btn btn-primary">
                Add Product
            </a>
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-200px">Product</th>
            <th class="text-end min-w-100px">SKU</th>
            <th class="text-end min-w-70px">Qty</th>
            <th class="text-end min-w-100px">Price</th>
            <th class="text-end min-w-100px">Rating</th>
            <th class="text-end min-w-100px">Status</th>
            <th class="text-end min-w-70px">Actions</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/1.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03414007</span>
                </td>
                                <td class="text-end pe-0" data-order="16">
                                            <span class="fw-bold ms-3">16</span>
                                    </td>
                <td class="text-end pe-0">
                    65                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/2.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02505009</span>
                </td>
                                <td class="text-end pe-0" data-order="35">
                                            <span class="fw-bold ms-3">35</span>
                                    </td>
                <td class="text-end pe-0">
                    137                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/3.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01509002</span>
                </td>
                                <td class="text-end pe-0" data-order="23">
                                            <span class="fw-bold ms-3">23</span>
                                    </td>
                <td class="text-end pe-0">
                    178                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/4.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04289009</span>
                </td>
                                <td class="text-end pe-0" data-order="5">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">5</span>
                                    </td>
                <td class="text-end pe-0">
                    77                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/5.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03761003</span>
                </td>
                                <td class="text-end pe-0" data-order="11">
                                            <span class="fw-bold ms-3">11</span>
                                    </td>
                <td class="text-end pe-0">
                    256                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/6.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01324001</span>
                </td>
                                <td class="text-end pe-0" data-order="29">
                                            <span class="fw-bold ms-3">29</span>
                                    </td>
                <td class="text-end pe-0">
                    70                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/7.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03986006</span>
                </td>
                                <td class="text-end pe-0" data-order="19">
                                            <span class="fw-bold ms-3">19</span>
                                    </td>
                <td class="text-end pe-0">
                    59                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/8.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01817004</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    22                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/9.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02421004</span>
                </td>
                                <td class="text-end pe-0" data-order="16">
                                            <span class="fw-bold ms-3">16</span>
                                    </td>
                <td class="text-end pe-0">
                    27                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/10.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02835007</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    62                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/11.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04346009</span>
                </td>
                                <td class="text-end pe-0" data-order="21">
                                            <span class="fw-bold ms-3">21</span>
                                    </td>
                <td class="text-end pe-0">
                    204                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/12.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02372008</span>
                </td>
                                <td class="text-end pe-0" data-order="17">
                                            <span class="fw-bold ms-3">17</span>
                                    </td>
                <td class="text-end pe-0">
                    142                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/13.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04579008</span>
                </td>
                                <td class="text-end pe-0" data-order="24">
                                            <span class="fw-bold ms-3">24</span>
                                    </td>
                <td class="text-end pe-0">
                    101                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/14.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04810004</span>
                </td>
                                <td class="text-end pe-0" data-order="40">
                                            <span class="fw-bold ms-3">40</span>
                                    </td>
                <td class="text-end pe-0">
                    106                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/15.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03557004</span>
                </td>
                                <td class="text-end pe-0" data-order="29">
                                            <span class="fw-bold ms-3">29</span>
                                    </td>
                <td class="text-end pe-0">
                    61                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/16.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02695007</span>
                </td>
                                <td class="text-end pe-0" data-order="18">
                                            <span class="fw-bold ms-3">18</span>
                                    </td>
                <td class="text-end pe-0">
                    183                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/17.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04979006</span>
                </td>
                                <td class="text-end pe-0" data-order="49">
                                            <span class="fw-bold ms-3">49</span>
                                    </td>
                <td class="text-end pe-0">
                    70                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/18.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03188004</span>
                </td>
                                <td class="text-end pe-0" data-order="45">
                                            <span class="fw-bold ms-3">45</span>
                                    </td>
                <td class="text-end pe-0">
                    65                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/19.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04299007</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    263                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/20.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04965004</span>
                </td>
                                <td class="text-end pe-0" data-order="30">
                                            <span class="fw-bold ms-3">30</span>
                                    </td>
                <td class="text-end pe-0">
                    18                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/21.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03313005</span>
                </td>
                                <td class="text-end pe-0" data-order="20">
                                            <span class="fw-bold ms-3">20</span>
                                    </td>
                <td class="text-end pe-0">
                    34                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/22.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04506004</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    178                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/23.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02692003</span>
                </td>
                                <td class="text-end pe-0" data-order="24">
                                            <span class="fw-bold ms-3">24</span>
                                    </td>
                <td class="text-end pe-0">
                    203                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/24.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02198007</span>
                </td>
                                <td class="text-end pe-0" data-order="19">
                                            <span class="fw-bold ms-3">19</span>
                                    </td>
                <td class="text-end pe-0">
                    181                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/25.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01448005</span>
                </td>
                                <td class="text-end pe-0" data-order="12">
                                            <span class="fw-bold ms-3">12</span>
                                    </td>
                <td class="text-end pe-0">
                    174                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/26.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02167006</span>
                </td>
                                <td class="text-end pe-0" data-order="35">
                                            <span class="fw-bold ms-3">35</span>
                                    </td>
                <td class="text-end pe-0">
                    166                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/27.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01836006</span>
                </td>
                                <td class="text-end pe-0" data-order="21">
                                            <span class="fw-bold ms-3">21</span>
                                    </td>
                <td class="text-end pe-0">
                    196                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/28.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04330009</span>
                </td>
                                <td class="text-end pe-0" data-order="11">
                                            <span class="fw-bold ms-3">11</span>
                                    </td>
                <td class="text-end pe-0">
                    227                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/29.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01205001</span>
                </td>
                                <td class="text-end pe-0" data-order="45">
                                            <span class="fw-bold ms-3">45</span>
                                    </td>
                <td class="text-end pe-0">
                    98                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/30.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04579008</span>
                </td>
                                <td class="text-end pe-0" data-order="10">
                                            <span class="fw-bold ms-3">10</span>
                                    </td>
                <td class="text-end pe-0">
                    90                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/31.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02576009</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    236                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/32.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02424007</span>
                </td>
                                <td class="text-end pe-0" data-order="35">
                                            <span class="fw-bold ms-3">35</span>
                                    </td>
                <td class="text-end pe-0">
                    226                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/33.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04790001</span>
                </td>
                                <td class="text-end pe-0" data-order="6">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">6</span>
                                    </td>
                <td class="text-end pe-0">
                    297                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/34.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03363003</span>
                </td>
                                <td class="text-end pe-0" data-order="19">
                                            <span class="fw-bold ms-3">19</span>
                                    </td>
                <td class="text-end pe-0">
                    187                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/35.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03292003</span>
                </td>
                                <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">14</span>
                                    </td>
                <td class="text-end pe-0">
                    103                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/36.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03625003</span>
                </td>
                                <td class="text-end pe-0" data-order="6">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">6</span>
                                    </td>
                <td class="text-end pe-0">
                    265                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/37.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03128007</span>
                </td>
                                <td class="text-end pe-0" data-order="45">
                                            <span class="fw-bold ms-3">45</span>
                                    </td>
                <td class="text-end pe-0">
                    204                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/38.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02520004</span>
                </td>
                                <td class="text-end pe-0" data-order="13">
                                            <span class="fw-bold ms-3">13</span>
                                    </td>
                <td class="text-end pe-0">
                    231                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/39.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04692009</span>
                </td>
                                <td class="text-end pe-0" data-order="39">
                                            <span class="fw-bold ms-3">39</span>
                                    </td>
                <td class="text-end pe-0">
                    24                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/40.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01614002</span>
                </td>
                                <td class="text-end pe-0" data-order="2">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">2</span>
                                    </td>
                <td class="text-end pe-0">
                    230                </td>
                                <td class="text-end pe-0" data-order="rating-5">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/41.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02744003</span>
                </td>
                                <td class="text-end pe-0" data-order="10">
                                            <span class="fw-bold ms-3">10</span>
                                    </td>
                <td class="text-end pe-0">
                    32                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/42.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01122008</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    286                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/43.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02299001</span>
                </td>
                                <td class="text-end pe-0" data-order="15">
                                            <span class="fw-bold ms-3">15</span>
                                    </td>
                <td class="text-end pe-0">
                    273                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/44.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01333005</span>
                </td>
                                <td class="text-end pe-0" data-order="24">
                                            <span class="fw-bold ms-3">24</span>
                                    </td>
                <td class="text-end pe-0">
                    112                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/45.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02675005</span>
                </td>
                                <td class="text-end pe-0" data-order="32">
                                            <span class="fw-bold ms-3">32</span>
                                    </td>
                <td class="text-end pe-0">
                    277                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/46.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03959001</span>
                </td>
                                <td class="text-end pe-0" data-order="39">
                                            <span class="fw-bold ms-3">39</span>
                                    </td>
                <td class="text-end pe-0">
                    72                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/47.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04540008</span>
                </td>
                                <td class="text-end pe-0" data-order="22">
                                            <span class="fw-bold ms-3">22</span>
                                    </td>
                <td class="text-end pe-0">
                    10                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/48.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02818007</span>
                </td>
                                <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">14</span>
                                    </td>
                <td class="text-end pe-0">
                    221                </td>
                                <td class="text-end pe-0" data-order="rating-3">
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
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/49.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03140002</span>
                </td>
                                <td class="text-end pe-0" data-order="25">
                                            <span class="fw-bold ms-3">25</span>
                                    </td>
                <td class="text-end pe-0">
                    250                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="edit-product.php" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(../assets/media/stock/ecommerce/50.gif);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="edit-product.php" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03650009</span>
                </td>
                                <td class="text-end pe-0" data-order="3">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">3</span>
                                    </td>
                <td class="text-end pe-0">
                    254                </td>
                                <td class="text-end pe-0" data-order="rating-4">
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
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-product.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
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
<?php include('../include/footer.php'); ?>