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
        Orders Listing
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
                                                    Sales                                            </li>
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6446972a9393b">
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
                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6446972a9393b" data-allow-clear="true">
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
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Order" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Flatpickr-->
            <div class="input-group w-250px">
                <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
                <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                </button>
            </div>
            <!--end::Flatpickr-->

            <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                    <option></option>
                    <option value="all">All</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="Completed">Completed</option>
                    <option value="Denied">Denied</option>
                    <option value="Expired">Expired</option>
                    <option value="Failed">Failed</option>
                    <option value="Pending">Pending</option>
                    <option value="Processing">Processing</option>
                    <option value="Refunded">Refunded</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Delivering">Delivering</option>
                </select>
                <!--end::Select2-->
            </div>

            <!--begin::Add product-->
            <a href="https://preview./metronic8/demo1/apps/ecommerce/catalog/add-product.php" class="btn btn-primary">
                Add Order
            </a>
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-100px">Order ID</th>
            <th class="min-w-175px">Customer</th>
            <th class="text-end min-w-70px">Status</th>
            <th class="text-end min-w-100px">Total</th>
            <th class="text-end min-w-100px">Date Added</th>
            <th class="text-end min-w-100px">Date Modified</th>
            <th class="text-end min-w-100px">Actions</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13475                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        M                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$483.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-21">
                    <span class="fw-bold">21/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-23">
                    <span class="fw-bold">23/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13476                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$472.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-21">
                    <span class="fw-bold">21/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-22">
                    <span class="fw-bold">22/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13477                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        O                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Pending">
                    <!--begin::Badges-->
                    <div class="badge badge-light-warning">Pending</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$220.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-15">
                    <span class="fw-bold">15/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-21">
                    <span class="fw-bold">21/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13478                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        E                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Failed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Failed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$280.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-15">
                    <span class="fw-bold">15/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-20">
                    <span class="fw-bold">20/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13479                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Pending">
                    <!--begin::Badges-->
                    <div class="badge badge-light-warning">Pending</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$409.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-18">
                    <span class="fw-bold">18/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-19">
                    <span class="fw-bold">19/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13480                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$99.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-13">
                    <span class="fw-bold">13/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-18">
                    <span class="fw-bold">18/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13481                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Expired">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Expired</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$39.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-13">
                    <span class="fw-bold">13/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-17">
                    <span class="fw-bold">17/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13482                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        E                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$101.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-11">
                    <span class="fw-bold">11/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-16">
                    <span class="fw-bold">16/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13483                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Denied">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Denied</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$417.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-09">
                    <span class="fw-bold">09/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-15">
                    <span class="fw-bold">15/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13484                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$98.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-12">
                    <span class="fw-bold">12/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-14">
                    <span class="fw-bold">14/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13485                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">
                                        C                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$473.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-12">
                    <span class="fw-bold">12/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-13">
                    <span class="fw-bold">13/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13486                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$365.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-07">
                    <span class="fw-bold">07/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-12">
                    <span class="fw-bold">12/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13487                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$238.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-05">
                    <span class="fw-bold">05/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-11">
                    <span class="fw-bold">11/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13488                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Cancelled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Cancelled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$211.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-04">
                    <span class="fw-bold">04/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-10">
                    <span class="fw-bold">10/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13489                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">
                                        C                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$327.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-04">
                    <span class="fw-bold">04/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-09">
                    <span class="fw-bold">09/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13490                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$437.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-07">
                    <span class="fw-bold">07/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-08">
                    <span class="fw-bold">08/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13491                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-primary text-primary">
                                        N                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$476.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-31">
                    <span class="fw-bold">31/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-07">
                    <span class="fw-bold">07/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13492                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Expired">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Expired</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$468.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-03">
                    <span class="fw-bold">03/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-06">
                    <span class="fw-bold">06/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13493                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        M                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$467.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-02">
                    <span class="fw-bold">02/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-05">
                    <span class="fw-bold">05/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13494                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        O                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Failed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Failed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$438.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-31">
                    <span class="fw-bold">31/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-04">
                    <span class="fw-bold">04/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13495                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">
                                        C                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Failed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Failed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$254.00</span>
                </td>
                                <td class="text-end" data-order="2023-04-01">
                    <span class="fw-bold">01/04/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-03">
                    <span class="fw-bold">03/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13496                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$356.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-29">
                    <span class="fw-bold">29/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-02">
                    <span class="fw-bold">02/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13497                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        E                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Denied">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Denied</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$264.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-31">
                    <span class="fw-bold">31/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-04-01">
                    <span class="fw-bold">01/04/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13498                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-success text-success">
                                        L                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$18.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-27">
                    <span class="fw-bold">27/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-31">
                    <span class="fw-bold">31/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13499                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">
                                        C                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Cancelled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Cancelled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$484.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-24">
                    <span class="fw-bold">24/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-30">
                    <span class="fw-bold">30/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13500                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        O                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Cancelled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Cancelled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$376.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-27">
                    <span class="fw-bold">27/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-29">
                    <span class="fw-bold">29/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13501                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        O                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$497.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-25">
                    <span class="fw-bold">25/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-28">
                    <span class="fw-bold">28/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13502                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Cancelled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Cancelled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$405.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-26">
                    <span class="fw-bold">26/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-27">
                    <span class="fw-bold">27/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13503                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Pending">
                    <!--begin::Badges-->
                    <div class="badge badge-light-warning">Pending</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$99.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-20">
                    <span class="fw-bold">20/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-26">
                    <span class="fw-bold">26/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13504                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        E                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Failed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Failed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$353.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-24">
                    <span class="fw-bold">24/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-25">
                    <span class="fw-bold">25/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13505                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Processing">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Processing</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$193.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-18">
                    <span class="fw-bold">18/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-24">
                    <span class="fw-bold">24/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13506                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Failed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Failed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$248.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-22">
                    <span class="fw-bold">22/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-23">
                    <span class="fw-bold">23/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13507                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$158.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-20">
                    <span class="fw-bold">20/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-22">
                    <span class="fw-bold">22/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13508                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Processing">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Processing</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$94.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-20">
                    <span class="fw-bold">20/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-21">
                    <span class="fw-bold">21/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13509                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$234.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-15">
                    <span class="fw-bold">15/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-20">
                    <span class="fw-bold">20/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13510                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-success text-success">
                                        L                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$294.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-12">
                    <span class="fw-bold">12/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-19">
                    <span class="fw-bold">19/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13511                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-info text-info">
                                        A                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$142.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-12">
                    <span class="fw-bold">12/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-18">
                    <span class="fw-bold">18/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13512                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$347.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-11">
                    <span class="fw-bold">11/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-17">
                    <span class="fw-bold">17/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13513                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-primary text-primary">
                                        N                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Delivering">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Delivering</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$281.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-10">
                    <span class="fw-bold">10/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-16">
                    <span class="fw-bold">16/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13514                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$16.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-11">
                    <span class="fw-bold">11/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-15">
                    <span class="fw-bold">15/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13515                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$417.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-08">
                    <span class="fw-bold">08/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-14">
                    <span class="fw-bold">14/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13516                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Refunded">
                    <!--begin::Badges-->
                    <div class="badge badge-light-info">Refunded</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$125.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-09">
                    <span class="fw-bold">09/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-13">
                    <span class="fw-bold">13/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13517                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Processing">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Processing</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$59.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-10">
                    <span class="fw-bold">10/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-12">
                    <span class="fw-bold">12/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13518                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        O                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$22.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-08">
                    <span class="fw-bold">08/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-11">
                    <span class="fw-bold">11/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13519                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        O                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Cancelled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Cancelled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$390.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-09">
                    <span class="fw-bold">09/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-10">
                    <span class="fw-bold">10/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13520                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Expired">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Expired</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$183.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-08">
                    <span class="fw-bold">08/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-09">
                    <span class="fw-bold">09/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13521                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label">
                                        <img src="../assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$45.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-06">
                    <span class="fw-bold">06/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-08">
                    <span class="fw-bold">08/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13522                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        E                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Processing">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Processing</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$178.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-03">
                    <span class="fw-bold">03/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-07">
                    <span class="fw-bold">07/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13523                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        M                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Processing">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Processing</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$31.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-05">
                    <span class="fw-bold">05/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-06">
                    <span class="fw-bold">06/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td data-kt-ecommerce-order-filter="order_id">
                    <a href="details.php" class="text-gray-800 text-hover-primary fw-bold">
                        13524                    </a>
                </td>
                                <td>
                    <div class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php">
                                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                        M                                    </div>
                                                            </a>
                        </div>
                        <!--end::Avatar-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="https://preview./metronic8/demo1/apps/user-management/users/view.php" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                                <td class="text-end pe-0" data-order="Completed">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Completed</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">$324.00</span>
                </td>
                                <td class="text-end" data-order="2023-03-03">
                    <span class="fw-bold">03/03/2023</span>
                </td>
                <td class="text-end" data-order="2023-03-05">
                    <span class="fw-bold">05/03/2023</span>
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="details.php" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="edit-order.php" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </td>
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