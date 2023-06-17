<?php 
session_start();
if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
   exit();
} else {
   include '../../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $sessionName =  $_SESSION['this_user_username'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];
   $cat = $crud->Read("categories","1");
  
   
}
?>
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

      
<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/popper.min.js"></script>


 <link href="../assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
        <link href="../assets/datatable/buttons.dataTables.min.css" rel="stylesheet">


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
              <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div
                  id="kt_app_toolbar_container"
                  class="app-container container-xxl d-flex flex-stack"
                >
                  <!--begin::Page title-->
                  <div
                    class="page-title d-flex flex-column justify-content-center flex-wrap me-3"
                  >
                    <!--begin::Title-->
                    <h1
                      class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"
                    >
                      View Categories
                    </h1>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <ul
                      class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1"
                    >
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">
                        <a
                          href="index.php"
                          class="text-muted text-hover-primary"
                        >
                          Home
                        </a>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                      </li>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">View Categories</li>
                      <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                  </div>
                  <!--end::Page title-->
                     <?php 
                  if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }
                ?>
                  
                </div>
                <!--end::Toolbar container-->
              </div>
              <!--end::Toolbar-->

              <!--begin::Content-->
              <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div
                  id="kt_app_content_container"
                  class="app-container container-xxl"
                >
                  

                  

                    

                  <!--begin::Row-->
                  <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-10">
                      <!--begin::Table Widget 4-->
                      <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                          

                          <!--begin::Actions-->
                          <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                              
                          

                              <!--begin::Search-->
                              <!-- <div class="position-relative my-1">
                                <i
                                  class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4"
                                  ><span class="path1"></span
                                  ><span class="path2"></span
                                ></i>
                                <input
                                  type="text"
                                  data-kt-table-widget-4="search"
                                  class="form-control w-150px fs-7 ps-12"
                                  placeholder="Search"
                                />
                              </div> -->
                              <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                          </div>
                          <!--end::Actions-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-2">
                          <!--begin::Table-->
                          <!--begin::Table-->
                          <table id="example" class="display nowrap" style="width:100%">
                                     
                                    <thead>
                                        <tr  class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                          <th class="min-w-100px">Category ID</th>
                                          <th class="text-end min-w-100px">Name</th>
                                          <th class="text-end min-w-100px">status</th>
                                          <th class="text-end min-w-75px">Action</th>
                                      
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                              if ($cat) {
                              $n=0;
                              foreach ($cat as $view_cat) 
                              { ?>


                              <tr>
                                
                                <td>
                                  <a
                                    href="catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    ><?php echo $view_cat['cat_id'] ;?></a
                                  >
                                </td>

                                <td class="text-end"><?php echo $view_cat['cat_name'] ;?></td>

                             

                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-warning"
                                    ><?php echo $view_cat['status'] ;?></span
                                  >
                                </td>
                                  <td class="text-end">

                                  <a href="<?php echo $view_cat['cat_id'] ;?>" data-id="<?php echo $view_cat['cat_id'] ;?>"  class="btn btn-sm btn-icon btn-light btn-active-light-primary tblEditBtn toggle h-25px w-25px" data-kt-table-widget-4="expand_row"data-toggle="modal" data-target="#exampleModal">
                                    <i class="ki-duotone ki-message-edit fs-2 m-0"><span class="path1"></span><span class="path2"></span></i> 
                                  </a>
                                  <!--begin::Delete-->
                                  <a href="<?php echo $view_cat['cat_id'] ;?>" 
                               data-id="<?php echo $view_cat['cat_id'] ;?>"  class="btn btn-sm btn-icon btn-light btn-active-light-primary tblEditBtn toggle h-25px w-25px" data-kt-table-widget-4="expand_row"data-toggle="modal" data-target="#exampleModal">
                                      <i class="ki-duotone ki-trash fs-2 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>    </a>
                                  <!--end::Delete-->
                                </td>
                                
                               <!--  </td class="text-end">
                                <td ><a href="catalog/add-product.php"class="btn btn-sm fw-bold btn-danger">edit</a></td>
                                 <td ><a href="add-subcat.php?id=<?php echo $view_cat['cat_id'] ;?>"class="btn btn-sm fw-bold btn-primary">Add Subcategories</a></td> -->

                                
                              </tr>
                              <?php }}?>
                                    </tbody>
                                    <tfoot>
                                        <tr  class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                          <th class="min-w-100px">Category ID</th>
                                          <th class="text-end min-w-100px">Name</th>
                                          <th class="text-end min-w-100px">status</th>
                                          <th class="text-end min-w-75px">Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                       
                                </table>
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Table Widget 4-->
                    </div>
                    <!--end::Col-->
                  </div>
             

<!-- Modal1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">edit categories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <div class="modal-body">
              <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" action="../form/edit_cat.php" method="post" enctype="multipart/form-data">
    
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
<div class="card card-flush py-4">
  <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            
            <!--end::Label-->

            <!--begin::Input-->
                        <input type="hidden" id="aboutID" name="aboutID" class="form-control mb-2" placeholder="Product name"  value="" />
            <!--end::Input-->

            <!--begin::Description-->
           
            <!--end::Description-->
        </div>
        <!--end::Input group-->

       
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label">Category Name</label>
            <!--end::Label-->

            <!--begin::Input-->
                        <input type="text" name="cat_name" id="cat_name" class="form-control mb-2" placeholder="Product name" value="" />
            <!--end::Input-->

            <!--begin::Description-->
            <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
            <!--end::Description-->
        </div>
        <!--end::Input group-->

       
    </div>
    <!--end::Card header-->
    
     
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label">status</label>
            <!--end::Label-->

            <!--begin::Input-->
                        <input type="text" id="status" name="status" class="form-control mb-2" placeholder="status" value="" />
            <!--end::Input-->

            <!--begin::Description-->
            <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
            <!--end::Description-->
        </div>
        <!--end::Input group-->

       
    </div>
    <!--end::Card header-->

</div>
<!--end::General options-->
      
        

        <div class="d-flex justify-content-end">
            
            <a href="" id="deleteCat" class="btn btn-danger">DELETE <i class="fa fa-trash-o"></i></a>
            <!--end::Button-->

            <!--begin::Button-->
            <button type="submit" name="submit" value="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                <span class="indicator-label">
                    Save Changes
                </span>
                
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Main column-->
</form>        <
                            
              
            </div>

          </div>
      </form>

                   
                      
                  </div>
                  <!--end::Row-->
                </div>
                <!--end::Content container-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Content wrapper-->

            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer">
              <!--begin::Footer container-->
              <div
                class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3"
              >
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-semibold me-1">2023&copy;</span>
                  <a
                    href="/"
                    target="_blank"
                    class="text-gray-800 text-hover-primary"
                    ></a
                  >
                </div>
                <!--end::Copyright-->

                <!--begin::Menu-->
                <ul
                  class="menu menu-gray-600 menu-hover-primary fw-semibold order-1"
                >
                  <li class="menu-item">
                    <a
                      href="/"
                      target="_blank"
                      class="menu-link px-2"
                      >About</a
                    >
                  </li>

                  <li class="menu-item">
                    <a
                      href="https://devs./"
                      target="_blank"
                      class="menu-link px-2"
                      >Support</a
                    >
                  </li>

                  <li class="menu-item">
                    <a
                      href="https://1.envato.market/EA4JP"
                      target="_blank"
                      class="menu-link px-2"
                      >Purchase</a
                    >
                  </li>
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

    <!--begin::App layout builder-->
    <div
      id="kt_app_layout_builder"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="app-settings"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
      data-kt-drawer-close="#kt_app_layout_builder_close"
    >
      <!--begin::Card-->
      <div class="card border-0 shadow-none rounded-0 w-100">
        <!--begin::Card header-->
        <div
          class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
          id="kt_app_layout_builder_header"
          style="
            background-image: url('../assets/media/misc/layout/customizer-header-bg.jpg');
          "
        >
          <!--begin::Card title-->
          <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
             Builder

            <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
              Get your product deeply customized
            </small>
          </h3>
          <!--end::Card title-->

          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <button
              type="button"
              class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
              id="kt_app_layout_builder_close"
            >
              <i class="ki-duotone ki-cross-square fs-2"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </button>
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div
          class="card-body position-relative"
          id="kt_app_layout_builder_body"
        >
          <!--begin::Content-->
          <div
            id="kt_app_settings_content"
            class="position-relative scroll-y me-n5 pe-5"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_app_layout_builder_body"
            data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
            data-kt-scroll-offset="5px"
          >
            <!--begin::Form-->
            <form
              class="form"
              method="POST"
              id="kt_app_layout_builder_form"
              action="index.php"
            >
              <input
                type="hidden"
                id="kt_app_layout_builder_action"
                name="layout-builder[action]"
              />

              <!--begin::Card body-->
              <div class="card-body p-0">
                <!--begin::Form group-->
                <div class="form-group">
                  <!--begin::Heading-->
                  <div class="mb-6">
                    <h4 class="fw-bold text-dark">Theme Mode</h4>
                    <div class="fw-semibold text-muted fs-7 d-block lh-1">
                      Enjoy Dark & Light modes.

                      <a
                        class="fw-semibold"
                        href="https://preview./html//docs/getting-started/dark-mode"
                        target="_blank"
                        >See docs</a
                      >
                    </div>
                  </div>
                  <!--end::Heading-->

                  <!--begin::Options-->
                  <div
                    class="row"
                    data-kt-buttons="true"
                    data-kt-buttons-target=".form-check-image,.form-check-input"
                  >
                    <!--begin::Col-->
                    <div class="col-6">
                      <!--begin::Option-->
                      <label class="form-check-image form-check-success">
                        <!--begin::Image-->
                        <div
                          class="form-check-wrapper border-gray-200 border-2"
                        >
                          <img
                            src="../assets/media/preview/demos/light-ltr.png"
                            class="form-check-rounded mw-100"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Check-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-sm form-check-success"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            value="light"
                            name="theme_mode"
                            id="kt_layout_builder_theme_mode_light"
                          />

                          <!--begin::Label-->
                          <div class="form-check-label text-gray-700">
                            Light
                          </div>
                          <!--end::Label-->
                        </div>
                        <!--end::Check-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                      <!--begin::Option-->
                      <label class="form-check-image form-check-success">
                        <!--begin::Image-->
                        <div
                          class="form-check-wrapper border-gray-200 border-2"
                        >
                          <img
                            src="../assets/media/preview/demos/dark-ltr.png"
                            class="form-check-rounded mw-100"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Check-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-sm form-check-success"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            value="dark"
                            name="theme_mode"
                            id="kt_layout_builder_theme_mode_dark"
                          />

                          <!--begin::Label-->
                          <div class="form-check-label text-gray-700">Dark</div>
                          <!--end::Label-->
                        </div>
                        <!--end::Check-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Options-->
                </div>
                <!--end::Form group-->
                <div class="separator separator-dashed my-5"></div>

                <!--begin::Form group-->
                <div class="form-group d-flex flex-stack">
                  <!--begin::Heading-->
                  <div class="d-flex flex-column">
                    <h4 class="fw-bold text-dark">RTL Mode</h4>
                    <div class="fs-7 fw-semibold text-muted">
                      Change Language Direction.

                      <a
                        class="fw-semibold"
                        href="https://preview./html//docs/getting-started/rtl"
                        target="_blank"
                        >See docs</a
                      >
                    </div>
                  </div>
                  <!--end::Heading-->

                  <!--begin::Option-->
                  <div class="d-flex justify-content-end">
                    <!--begin::Check-->
                    <div
                      class="form-check form-check-custom form-check-solid form-check-success form-switch"
                    >
                      <input
                        type="hidden"
                        value="false"
                        name="layout-builder[layout][app][general][rtl]"
                      />

                      <input
                        class="form-check-input w-45px h-30px"
                        type="checkbox"
                        value="true"
                        name="layout-builder[layout][app][general][rtl]"
                      />
                    </div>
                    <!--end::Check-->
                  </div>
                  <!--end::Option-->
                </div>
                <!--end::Form group-->
                <div class="separator separator-dashed my-5"></div>

                <!--begin::Form group-->
                <div class="form-group">
                  <!--begin::Heading-->
                  <div class="d-flex flex-column mb-4">
                    <h4 class="fw-bold text-dark">Width Mode</h4>
                    <div class="fs-7 fw-semibold text-muted">
                      Page width options
                    </div>
                  </div>
                  <!--end::Heading-->

                  <!--begin::Options-->
                  <div class="d-flex gap-7">
                    <!--begin::Check-->
                    <div
                      class="form-check form-check-custom form-check-success form-check-solid form-check-sm"
                    >
                      <input
                        class="form-check-input"
                        type="radio"
                        checked
                        value="default"
                        id="kt_layout_builder_page_width_default"
                        name="layout-builder[layout][app][general][page-width]"
                      />

                      <!--begin::Label-->
                      <label
                        class="form-check-label text-gray-700 fw-bold text-nowrap"
                        for="kt_layout_builder_page_width_default"
                      >
                        Default
                      </label>
                      <!--end::Label-->
                    </div>
                    <!--end::Check-->
                    <!--begin::Check-->
                    <div
                      class="form-check form-check-custom form-check-success form-check-solid form-check-sm"
                    >
                      <input
                        class="form-check-input"
                        type="radio"
                        value="fluid"
                        id="kt_layout_builder_page_width_fluid"
                        name="layout-builder[layout][app][general][page-width]"
                      />

                      <!--begin::Label-->
                      <label
                        class="form-check-label text-gray-700 fw-bold text-nowrap"
                        for="kt_layout_builder_page_width_fluid"
                      >
                        Fluid
                      </label>
                      <!--end::Label-->
                    </div>
                    <!--end::Check-->
                    <!--begin::Check-->
                    <div
                      class="form-check form-check-custom form-check-success form-check-solid form-check-sm"
                    >
                      <input
                        class="form-check-input"
                        type="radio"
                        value="fixed"
                        id="kt_layout_builder_page_width_fixed"
                        name="layout-builder[layout][app][general][page-width]"
                      />

                      <!--begin::Label-->
                      <label
                        class="form-check-label text-gray-700 fw-bold text-nowrap"
                        for="kt_layout_builder_page_width_fixed"
                      >
                        Fixed
                      </label>
                      <!--end::Label-->
                    </div>
                    <!--end::Check-->
                  </div>
                  <!--end::Options-->
                </div>
                <!--end::Form group-->
                <div class="separator separator-dashed my-5"></div>

                <!--begin::Form group-->
                <div class="form-group">
                  <!--begin::Heading-->
                  <div class="d-flex flex-column mb-4">
                    <h4 class="fw-bold text-dark">KeenIcons Style</h4>

                    <div>
                      <span class="fs-7 fw-semibold text-muted"
                        >Select global UI icons style.</span
                      >
                      <a
                        class="fw-semibold"
                        href="https://preview./html//docs/icons/keenicons"
                        target="_blank"
                        >Learn more</a
                      >
                    </div>
                  </div>
                  <!--end::Heading-->

                  <!--begin::Options-->
                  <div
                    class="d-flex flex-stack gap-3"
                    data-kt-buttons="true"
                    data-kt-buttons-target=".form-check-image,.form-check-input"
                  >
                    <!--begin::Option-->
                    <label
                      class="form-check-image form-check-success w-100 parent-active parent-hover active"
                    >
                      <!--begin::Image-->
                      <div
                        class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4"
                      >
                        <i
                          class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"
                          ><span class="path1"></span><span class="path2"></span
                        ></i>
                        <span
                          class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700"
                          >Duotone</span
                        >
                      </div>
                      <!--end::Image-->

                      <!--begin::Check-->
                      <div
                        style="
                          visibility: hidden;
                          height: 0 !important;
                          width: 0 !important;
                          overflow: hidden;
                        "
                      >
                        <input
                          class="form-check-input"
                          type="radio"
                          value="duotone"
                          checked
                          name="layout-builder[layout][app][general][icons]"
                        />
                      </div>
                      <!--end::Check-->
                    </label>
                    <!--end::Option-->

                    <!--begin::Option-->
                    <label
                      class="form-check-image form-check-success w-100 parent-active parent-hover"
                    >
                      <!--begin::Image-->
                      <div
                        class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4"
                      >
                        <i
                          class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"
                        ></i>
                        <span
                          class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700"
                          >Outline</span
                        >
                      </div>
                      <!--end::Image-->

                      <!--begin::Check-->
                      <div
                        style="
                          visibility: hidden;
                          height: 0 !important;
                          width: 0 !important;
                          overflow: hidden;
                        "
                      >
                        <input
                          class="form-check-input"
                          type="radio"
                          value="outline"
                          name="layout-builder[layout][app][general][icons]"
                        />
                      </div>
                      <!--end::Check-->
                    </label>
                    <!--end::Option-->

                    <!--begin::Option-->
                    <label
                      class="form-check-image form-check-success w-100 parent-active parent-hover"
                    >
                      <!--begin::Image-->
                      <div
                        class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4"
                      >
                        <i
                          class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"
                        ></i>
                        <span
                          class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700"
                          >Solid</span
                        >
                      </div>
                      <!--end::Image-->

                      <!--begin::Check-->
                      <div
                        style="
                          visibility: hidden;
                          height: 0 !important;
                          width: 0 !important;
                          overflow: hidden;
                        "
                      >
                        <input
                          class="form-check-input"
                          type="radio"
                          value="solid"
                          name="layout-builder[layout][app][general][icons]"
                        />
                      </div>
                      <!--end::Check-->
                    </label>
                    <!--end::Option-->
                  </div>
                  <!--end::Options-->
                </div>
                <!--end::Form group-->
                <div class="separator separator-dashed my-5"></div>

                <!--begin::Form group-->
                <div class="form-group">
                  <!--begin::Heading-->
                  <div class="mb-6">
                    <h4 class="fw-bold text-dark">Layouts</h4>

                    <span class="fw-semibold text-muted fs-7 lh-1">
                      4 main layouts.
                    </span>

                    <a
                      href="layout-builder.php"
                      class="fw-semibold text-primary"
                      >More layout options</a
                    >
                  </div>
                  <!--end::Heading-->

                  <!--begin::Options-->
                  <div
                    class="row gy-3"
                    data-kt-buttons="true"
                    data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])"
                  >
                    <!--begin::Col-->
                    <div class="col-6">
                      <!--begin::Option-->
                      <label
                        class="form-check-image form-check-success active active"
                      >
                        <!--begin::Image-->
                        <div
                          class="form-check-wrapper border-gray-200 border-2"
                        >
                          <img
                            src="../assets/media/misc/layout/dark-sidebar.png"
                            class="form-check-rounded mw-100"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Check-->
                        <div
                          class="form-check form-check-custom form-check-success form-check-sm form-check-solid"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            checked
                            value="dark-sidebar"
                            name="layout-builder[layout][app][general][layout]"
                          />

                          <!--begin::Label-->
                          <div class="form-check-label text-gray-700">
                            Dark Sidebar
                          </div>
                          <!--end::Label-->
                        </div>
                        <!--end::Check-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                      <!--begin::Option-->
                      <label class="form-check-image form-check-success">
                        <!--begin::Image-->
                        <div
                          class="form-check-wrapper border-gray-200 border-2"
                        >
                          <img
                            src="../assets/media/misc/layout/light-sidebar.png"
                            class="form-check-rounded mw-100"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Check-->
                        <div
                          class="form-check form-check-custom form-check-success form-check-sm form-check-solid"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            value="light-sidebar"
                            name="layout-builder[layout][app][general][layout]"
                          />

                          <!--begin::Label-->
                          <div class="form-check-label text-gray-700">
                            Light Sidebar
                          </div>
                          <!--end::Label-->
                        </div>
                        <!--end::Check-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                      <!--begin::Option-->
                      <label class="form-check-image form-check-success">
                        <!--begin::Image-->
                        <div
                          class="form-check-wrapper border-gray-200 border-2"
                        >
                          <img
                            src="../assets/media/misc/layout/dark-header.png"
                            class="form-check-rounded mw-100"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Check-->
                        <div
                          class="form-check form-check-custom form-check-success form-check-sm form-check-solid"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            value="dark-header"
                            name="layout-builder[layout][app][general][layout]"
                          />

                          <!--begin::Label-->
                          <div class="form-check-label text-gray-700">
                            Dark Header
                          </div>
                          <!--end::Label-->
                        </div>
                        <!--end::Check-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                      <!--begin::Option-->
                      <label class="form-check-image form-check-success">
                        <!--begin::Image-->
                        <div
                          class="form-check-wrapper border-gray-200 border-2"
                        >
                          <img
                            src="../assets/media/misc/layout/light-header.png"
                            class="form-check-rounded mw-100"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Check-->
                        <div
                          class="form-check form-check-custom form-check-success form-check-sm form-check-solid"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            value="light-header"
                            name="layout-builder[layout][app][general][layout]"
                          />

                          <!--begin::Label-->
                          <div class="form-check-label text-gray-700">
                            Light Header
                          </div>
                          <!--end::Label-->
                        </div>
                        <!--end::Check-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Options-->
                </div>
                <!--end::Form group-->
              </div>
              <!--end::Card body-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div
          class="card-footer border-0 d-flex gap-3 pb-9 pt-0"
          id="kt_app_layout_builder_footer"
        >
          <button
            type="button"
            id="kt_app_layout_builder_preview"
            class="btn btn-primary flex-grow-1 fw-semibold"
          >
            <!--begin::Indicator label-->
            <span class="indicator-label"> Preview</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">
              Please wait...
              <span
                class="spinner-border spinner-border-sm align-middle ms-2"
              ></span>
            </span>
            <!--end::Indicator progress-->
          </button>

          <button
            type="button"
            id="kt_app_layout_builder_reset"
            class="btn btn-light flex-grow-1 fw-semibold"
          >
            <!--begin::Indicator label-->
            <span class="indicator-label"> Reset</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">
              Please wait...
              <span
                class="spinner-border spinner-border-sm align-middle ms-2"
              ></span>
            </span>
            <!--end::Indicator progress-->
          </button>
        </div>
        <!--end::Card footer-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::App layout builder-->

    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div
      id="kt_activities"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="activities"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_activities_toggle"
      data-kt-drawer-close="#kt_activities_close"
    >
      <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
          <h3 class="card-title fw-bold text-dark">Activity Logs</h3>

          <div class="card-toolbar">
            <button
              type="button"
              class="btn btn-sm btn-icon btn-active-light-primary me-n5"
              id="kt_activities_close"
            >
              <i class="ki-duotone ki-cross fs-1"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </button>
          </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
          <!--begin::Content-->
          <div
            id="kt_activities_scroll"
            class="position-relative scroll-y me-n5 pe-5"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_activities_body"
            data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
            data-kt-scroll-offset="5px"
          >
            <!--begin::Timeline items-->
            <div class="timeline">
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div
                  class="timeline-icon symbol symbol-circle symbol-40px me-4"
                >
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                      ><span class="path3"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      There are 2 new tasks for you in “AirPlus Mobile App”
                      project:
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Added at 4:23 PM by
                      </div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson"
                      >
                        <img src="../assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->

                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5"
                    >
                      <!--begin::Title-->
                      <a
                        href="projects/project.php"
                        class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px"
                        >Meeting with customer</a
                      >
                      <!--end::Title-->

                      <!--begin::Label-->
                      <div class="min-w-175px pe-2">
                        <span class="badge badge-light text-muted"
                          >Application Design</span
                        >
                      </div>
                      <!--end::Label-->

                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2"
                      >
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img src="../assets/media/avatars/300-2.jpg" alt="img" />
                        </div>
                        <!--end::User-->

                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="../assets/media/avatars/300-14.jpg"
                            alt="img"
                          />
                        </div>
                        <!--end::User-->

                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary"
                          >
                            A
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->

                      <!--begin::Progress-->
                      <div class="min-w-125px pe-2">
                        <span class="badge badge-light-primary"
                          >In Progress</span
                        >
                      </div>
                      <!--end::Progress-->

                      <!--begin::Action-->
                      <a
                        href="projects/project.php"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->

                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0"
                    >
                      <!--begin::Title-->
                      <a
                        href="projects/project.php"
                        class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px"
                        >Project Delivery Preparation</a
                      >
                      <!--end::Title-->

                      <!--begin::Label-->
                      <div class="min-w-175px">
                        <span class="badge badge-light text-muted"
                          >CRM System Development</span
                        >
                      </div>
                      <!--end::Label-->

                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px"
                      >
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="../assets/media/avatars/300-20.jpg"
                            alt="img"
                          />
                        </div>
                        <!--end::User-->

                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary"
                          >
                            B
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->

                      <!--begin::Progress-->
                      <div class="min-w-125px">
                        <span class="badge badge-light-success">Completed</span>
                      </div>
                      <!--end::Progress-->

                      <!--begin::Action-->
                      <a
                        href="projects/project.php"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-flag fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n2">
                  <!--begin::Timeline heading-->
                  <div class="overflow-auto pe-3">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      Invitation for crafting engaging designs that speak human
                      workshop
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Alan Nilson"
                      >
                        <img src="../assets/media/avatars/300-1.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-disconnect fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                      ><span class="path3"></span><span class="path4"></span
                      ><span class="path5"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="mb-5 pe-3">
                    <!--begin::Title-->
                    <a
                      href="#"
                      class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2"
                      >3 New Incoming Project Files:</a
                    >
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Sent at 10:30 PM by
                      </div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Jan Hummer"
                      >
                        <img src="../assets/media/avatars/300-23.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->

                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5"
                    >
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt=""
                          class="w-30px me-3"
                          src="../assets/media/svg/files/pdf.svg"
                        />
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a
                            href="projects/project.php"
                            class="fs-6 text-hover-primary fw-bold"
                            >Finance KPI App Guidelines</a
                          >
                          <!--end::Desc-->

                          <!--begin::Number-->
                          <div class="text-gray-400">1.9mb</div>
                          <!--end::Number-->
                        </div>
                        <!--begin::Info-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt="//../projects/project.php"
                          class="w-30px me-3"
                          src="../assets/media/svg/files/doc.svg"
                        />
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bold"
                            >Client UAT Testing Results</a
                          >
                          <!--end::Desc-->

                          <!--begin::Number-->
                          <div class="text-gray-400">18kb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center">
                        <!--begin::Icon-->
                        <img
                          alt="//../projects/project.php"
                          class="w-30px me-3"
                          src="../assets/media/svg/files/css.svg"
                        />
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bold"
                            >Finance Reports</a
                          >
                          <!--end::Desc-->

                          <!--begin::Number-->
                          <div class="text-gray-400">20mb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      Task
                      <a href="#" class="text-primary fw-bold me-1">#45890</a>
                      merged with
                      <a href="#" class="text-primary fw-bold me-1">#45890</a>
                      in “Ads Pro Admin Dashboard project:
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Initiated at 4:23 PM by
                      </div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson"
                      >
                        <img src="../assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-pencil fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      3 new application design concepts added:
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Created at 4:23 PM by
                      </div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Marcus Dotson"
                      >
                        <img src="../assets/media/avatars/300-2.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->

                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7"
                    >
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="../assets/media/stock/600x400/img-29.jpg"
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="../assets/media/stock/600x400/img-31.jpg"
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->

                      <!--begin::Item-->
                      <div class="overlay">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="../assets/media/stock/600x400/img-40.jpg"
                          />
                        </div>
                        <!--end::Image-->

                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-sms fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      New case
                      <a href="#" class="text-primary fw-bold me-1">#67890</a>
                      is assigned to you in Multi-platform Database Design
                      project
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="overflow-auto pb-5">
                      <!--begin::Wrapper-->
                      <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">
                          Added at 4:23 PM by
                        </div>
                        <!--end::Info-->

                        <!--begin::User-->
                        <a href="#" class="text-primary fw-bold me-1"
                          >Alice Tan</a
                        >
                        <!--end::User-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-pencil fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      You have received a new order:
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 5:05 AM by
                      </div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Robert Rich"
                      >
                        <img src="../assets/media/avatars/300-4.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->

                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Notice-->
                    <div
                      class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6"
                    >
                      <!--begin::Icon-->
                      <i
                        class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"
                        ><span class="path1"></span><span class="path2"></span
                        ><span class="path3"></span
                      ></i>
                      <!--end::Icon-->

                      <!--begin::Wrapper-->
                      <div
                        class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap"
                      >
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-semibold">
                          <h4 class="text-gray-900 fw-bold">
                            Database Backup Process Completed!
                          </h4>

                          <div class="fs-6 text-gray-700 pe-7">
                            Login into Admin Dashboard to make sure the data
                            integrity is OK
                          </div>
                        </div>
                        <!--end::Content-->

                        <!--begin::Action-->
                        <a
                          href="#"
                          class="btn btn-primary px-6 align-self-center text-nowrap"
                        >
                          Proceed
                        </a>
                        <!--end::Action-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->

                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <i class="ki-duotone ki-basket fs-2 text-gray-500"
                      ><span class="path1"></span><span class="path2"></span
                      ><span class="path3"></span><span class="path4"></span
                    ></i>
                  </div>
                </div>
                <!--end::Timeline icon-->

                <!--begin::Timeline content-->
                <div class="timeline-content mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      New order
                      <a href="#" class="text-primary fw-bold me-1">#67890</a>
                      is placed for Workshow Planning & Budget Estimation
                    </div>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 4:23 PM by
                      </div>
                      <!--end::Info-->

                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bold me-1"
                        >Jimmy Bold</a
                      >
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
            </div>
            <!--end::Timeline items-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->

        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
          <a
            href="pages/user-profile/activity.php"
            class="btn btn-bg-body text-primary"
          >
            View All Activities
            <i class="ki-duotone ki-arrow-right fs-3 text-primary"
              ><span class="path1"></span><span class="path2"></span
            ></i>
          </a>
        </div>
        <!--end::Footer-->
      </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div
      id="kt_drawer_chat"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="chat"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'md': '500px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_drawer_chat_toggle"
      data-kt-drawer-close="#kt_drawer_chat_close"
    >
      <!--begin::Messenger-->
      <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
          <!--begin::Title-->
          <div class="card-title">
            <!--begin::User-->
            <div class="d-flex justify-content-center flex-column me-3">
              <a
                href="#"
                class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1"
                >Brian Cox</a
              >

              <!--begin::Info-->
              <div class="mb-0 lh-1">
                <span
                  class="badge badge-success badge-circle w-10px h-10px me-1"
                ></span>
                <span class="fs-7 fw-semibold text-muted">Active</span>
              </div>
              <!--end::Info-->
            </div>
            <!--end::User-->
          </div>
          <!--end::Title-->

          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Menu-->
            <div class="me-0">
              <button
                class="btn btn-sm btn-icon btn-active-color-primary"
                data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end"
              >
                <i class="ki-duotone ki-dots-square fs-2"
                  ><span class="path1"></span><span class="path2"></span
                  ><span class="path3"></span><span class="path4"></span
                ></i>
              </button>

              <!--begin::Menu 3-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                data-kt-menu="true"
              >
                <!--begin::Heading-->
                <div class="menu-item px-3">
                  <div
                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase"
                  >
                    Contacts
                  </div>
                </div>
                <!--end::Heading-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a
                    href="#"
                    class="menu-link px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_users_search"
                  >
                    Add Contact
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a
                    href="#"
                    class="menu-link flex-stack px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_invite_friends"
                  >
                    Invite Contacts

                    <span
                      class="ms-2"
                      data-bs-toggle="tooltip"
                      title="Specify a contact email to send an invitation"
                    >
                      <i class="ki-duotone ki-information fs-7"
                        ><span class="path1"></span><span class="path2"></span
                        ><span class="path3"></span
                      ></i>
                    </span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div
                  class="menu-item px-3"
                  data-kt-menu-trigger="hover"
                  data-kt-menu-placement="right-start"
                >
                  <a href="#" class="menu-link px-3">
                    <span class="menu-title">Groups</span>
                    <span class="menu-arrow"></span>
                  </a>

                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                      >
                        Create Group
                      </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                      >
                        Invite Members
                      </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                      >
                        Settings
                      </a>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3 my-1">
                  <a
                    href="#"
                    class="menu-link px-3"
                    data-bs-toggle="tooltip"
                    title="Coming soon"
                  >
                    Settings
                  </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu 3-->
            </div>
            <!--end::Menu-->

            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              id="kt_drawer_chat_close"
            >
              <i class="ki-duotone ki-cross-square fs-2"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
          <!--begin::Messages-->
          <div
            class="scroll-y me-n5 pe-5"
            data-kt-element="messages"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
            data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
            data-kt-scroll-offset="0px"
          >
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  How likely are you to recommend our company to your friends
                  and family ?
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->

            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">5 mins</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->

                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                >
                  Hey there, we’re just writing to let you know that you’ve been
                  subscribed to a repository on GitHub.
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->

            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  Ok, Understood!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->

            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->

                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                >
                  You’ll receive notifications for all issues, pull requests!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->

            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  You can unwatch this repository immediately by clicking here:
                  <a href="/">.com</a>
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->

            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->

                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                >
                  Most purchased Business courses during this sale!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->

            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  Company BBQ to celebrate the last quater achievements and
                  goals. Food and drinks provided
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->

            <!--begin::Message(template for out)-->
            <div
              class="d-flex justify-content-end mb-10 d-none"
              data-kt-element="template-out"
            >
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">Just now</span>
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->

                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                  data-kt-element="message-text"
                ></div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(template for out)-->

            <!--begin::Message(template for in)-->
            <div
              class="d-flex justify-content-start mb-10 d-none"
              data-kt-element="template-in"
            >
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">Just now</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->

                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                  data-kt-element="message-text"
                >
                  Right before vacation season we have the next Big Deal for
                  you.
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(template for in)-->
          </div>
          <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
          <!--begin::Input-->
          <textarea
            class="form-control form-control-flush mb-3"
            rows="1"
            data-kt-element="input"
            placeholder="Type a message"
          >
          </textarea>
          <!--end::Input-->

          <!--begin:Toolbar-->
          <div class="d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2">
              <button
                class="btn btn-sm btn-icon btn-active-light-primary me-1"
                type="button"
                data-bs-toggle="tooltip"
                title="Coming soon"
              >
                <i class="ki-duotone ki-paper-clip fs-3"></i>
              </button>
              <button
                class="btn btn-sm btn-icon btn-active-light-primary me-1"
                type="button"
                data-bs-toggle="tooltip"
                title="Coming soon"
              >
                <i class="ki-duotone ki-cloud-add fs-3"
                  ><span class="path1"></span><span class="path2"></span
                ></i>
              </button>
            </div>
            <!--end::Actions-->

            <!--begin::Send-->
            <button
              class="btn btn-primary"
              type="button"
              data-kt-element="send"
            >
              Send
            </button>
            <!--end::Send-->
          </div>
          <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
      </div>
      <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div
      id="kt_shopping_cart"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="cart"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'md': '500px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
      data-kt-drawer-close="#kt_drawer_shopping_cart_close"
    >
      <!--begin::Messenger-->
      <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
          <!--begin::Title-->
          <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
          <!--end::Title-->

          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-light-primary"
              id="kt_drawer_shopping_cart_close"
            >
              <i class="ki-duotone ki-cross fs-2"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >Iblender</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >The best kitchen gadget in 2022</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-1.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->

          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >SmartCleaner</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >Smart tool for cooking</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-3.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->

          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >CameraMaxr</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >Professional camera for edge</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-8.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->

          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >$D Printer</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >Manfactoring unique objekts</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-26.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->

          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >MotionWire</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >Perfect animation tool</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-21.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->

          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >Samsung</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >Profile info,Timeline etc</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-34.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->

          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column me-3">
              <!--begin::Section-->
              <div class="mb-3">
                <a
                  href="sales/details.php"
                  class="text-gray-800 text-hover-primary fs-4 fw-bold"
                  >$D Printer</a
                >

                <span class="text-gray-400 fw-semibold d-block"
                  >Manfactoring unique objekts</span
                >
              </div>
              <!--end::Section-->

              <!--begin::Section-->
              <div class="d-flex align-items-center">
                <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                <span class="text-muted mx-2">for</span>
                <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"
                >
                  <i class="ki-duotone ki-minus fs-4"></i>
                </a>

                <a
                  href="#"
                  class="btn btn-sm btn-light-success btn-icon w-25px h-25px"
                >
                  <i class="ki-duotone ki-plus fs-4"></i>
                </a>
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Pic-->
            <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
              <img src="../assets/media/stock/600x400/img-27.jpg" alt="" />
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Item-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer">
          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <span class="fw-bold text-gray-600">Total</span>
            <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
          </div>
          <!--end::Item-->

          <!--begin::Item-->
          <div class="d-flex flex-stack">
            <span class="fw-bold text-gray-600">Sub total</span>
            <span class="text-primary fw-bolder fs-5">$ 246.35</span>
          </div>
          <!--end::Item-->

          <!--end::Action-->
          <div class="d-flex justify-content-end mt-9">
            <a href="#" class="btn btn-primary d-flex justify-content-end"
              >Pleace Order</a
            >
          </div>
          <!--end::Action-->
        </div>
        <!--end::Card footer-->
      </div>
      <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Engage modals-->
    <!--begin::Modal - Sitemap-->
    <div
      class="modal fade bg-dark bg-opacity-75"
      id="kt_app_engage_prebuilts_modal"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div
        class="modal-dialog modal-fullscreen p-5 p-lg-10"
        id="kt_engage_prebuilts_modal_dialog"
      >
        <!--begin::Modal content-->
        <div class="modal-content rounded-4">
          <!--begin::Modal header-->
          <div
            class="modal-header flex-stack border-0 px-10 pt-5 pb-0"
            id="kt_engage_prebuilts_header"
          >
            <!--begin::View menu-->
            <div
              id="kt_app_engage_prebuilts_view_menu"
              class="position-relative z-index-1"
            >
              <!--begin::Toggle-->
              <button
                type="button"
                data-kt-element="selected"
                class="btn btn-flex px-0 rotate-"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="bottom-start"
                data-kt-menu-offset="0px, -1px"
              >
                <!--begin::Title-->
                <span
                  class="fs-6 fw-bold text-gray-600 me-2"
                  data-kt-element="title"
                >
                  Image View
                </span>
                <!--end::Title-->

                <!--begin::Arrow-->
                <i
                  class="ki-duotone ki-down fs-4 text-gray-600 rotate-180-"
                ></i>
                <!--end::Arrow-->
              </button>
              <!--end::Toggle-->

              <!--begin::Menu-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3"
                data-kt-menu="true"
              >
                <!--begin::Menu item-->
                <div class="menu-item">
                  <!--begin::Menu link-->
                  <a
                    href="#"
                    class="menu-link px-4 py-2 active"
                    data-kt-mode="image"
                  >
                    Image View
                  </a>
                  <!--end::Menu link-->
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item">
                  <!--begin::Menu link-->
                  <a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
                    Text View
                  </a>
                  <!--end::Menu link-->
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu-->
            </div>
            <!--end::View menu-->
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1"
              data-bs-dismiss="modal"
            >
              <i class="ki-duotone ki-cross-square fs-1"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->

          <!--begin::Modal body-->
          <div
            class="modal-body pt-0 pb-5 px-15 mt-n5"
            id="kt_app_engage_prebuilts_body"
          >
            <div class="container-fluid">
              <style>
                .app-prebuilts-thumbnail {
                  border: 1px solid var(--kt-body-bg);
                  filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
                }
              </style>

              <!--begin::Image view-->
              <div class="d-block" id="kt_app_engage_prebuilts_view_image">
                <!--begin::Tabs wrapper-->
                <div
                  class="d-flex flex-center"
                  id="kt_app_engage_prebuilts_view_image_tabs"
                >
                  <!--begin::Tabs-->
                  <ul class="nav nav-tabs border-0 mb-5">
                    <!--begin::Tab item-->
                    <li class="nav-item px-2">
                      <!--begin::Tab link-->
                      <a
                        class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold"
                        data-bs-toggle="tab"
                        href="#kt_app_engage_prebuilts_tab_demos"
                      >
                        Layouts
                      </a>
                      <!--end::Tab link-->
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-2">
                      <!--begin::Tab link-->
                      <a
                        class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold active"
                        data-bs-toggle="tab"
                        href="#kt_app_engage_prebuilts_tab_dashboards"
                      >
                        Dashboards
                      </a>
                      <!--end::Tab link-->
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-2">
                      <!--begin::Tab link-->
                      <a
                        class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold"
                        data-bs-toggle="tab"
                        href="#kt_app_engage_prebuilts_tab_pages"
                      >
                        Pages
                      </a>
                      <!--end::Tab link-->
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item px-2">
                      <!--begin::Tab link-->
                      <a
                        class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold"
                        data-bs-toggle="tab"
                        href="#kt_app_engage_prebuilts_tab_apps"
                      >
                        Apps
                      </a>
                      <!--end::Tab link-->
                    </li>
                    <!--end::Tab item-->
                  </ul>
                  <!--end::Tabs-->
                </div>
                <!--end::Tabs wrapper-->

                <!--begin::Tab content-->
                <div class="tab-content">
                  <div
                    class="pt-5 tab-pane fade"
                    id="kt_app_engage_prebuilts_tab_demos"
                    role="tabpanel"
                  >
                    <!--begin::Scroll wrapper-->
                    <div
                      class="hover-scroll-y pe-12 me-n12"
                      data-kt-scroll="true"
                      data-kt-scroll-height="auto"
                      data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                      data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                      data-kt-scroll-offset="215px"
                    >
                      <!--begin::Row-->
                      <div class="row gy-10">
                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                               Original
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo1.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo2/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              SaaS App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo2.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo30/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Sales Tracking App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo30.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo39/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Billing SaaS
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo39.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo31/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Marketing Automation
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo31.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo27/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Databox Dashboard
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo27.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo6/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Time Reporting
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo6.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo3/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              New Trend
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo3.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo23/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Member Dashboard
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo23.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo38/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Email Marketing
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo38.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo36/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Digital Marketing
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo36.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo10/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Project Grid
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo10.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo35/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Traffic Analytics
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo35.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo8/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Analytics App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo8.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo25/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              User Guiding App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo25.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo20/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              CRM Software
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo20.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo7/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              CRM Dashboard
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo7.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo50/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Micro-SaaS App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo50.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo32/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Delivery Management
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo32.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo42/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Calendar Workspace
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo42.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo44/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Recruit Automation
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo44.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo33/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Social Campaings
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo33.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo37/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Cloud Suite
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo37.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo11/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Finance Planner
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo11.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo16/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Podcast App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo16.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo26/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Planable App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo26.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo22/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Media Publisher
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo22.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo19/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Reports Panel
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo19.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo40/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              HR App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo40.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo29/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Project Workspace
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo29.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo24/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Helpdesk App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo24.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo4/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Jobs Site
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo4.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo41/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Business Intelligence
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo41.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo18/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Goal Tracking
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo18.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo21/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Monochrome App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo21.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo34/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Finance Analytics
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo34.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo15/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Crypto Planner
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo15.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo14/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Project Workplace
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo14.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo9/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Sales Manager
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo9.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo5/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Support Forum
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo5.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo13/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Classic Dashboard
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo13.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo12/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Data Analyzer
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo12.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo48/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Cloud ERP
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo48.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo28/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              eCommerce App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo28.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo17/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Events Scheduler
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo17.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo49/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              KPI Tracking
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo49.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo43/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Healthcare Dashboard
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo43.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo45/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              OKR Tracking
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo45.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo47/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Campaign Automation
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo47.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="demo46/index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Audit Board App
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/demos/demo46.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Scroll wrapper-->
                  </div>
                  <div
                    class="pt-5 tab-pane fade show active"
                    id="kt_app_engage_prebuilts_tab_dashboards"
                    role="tabpanel"
                  >
                    <!--begin::Scroll wrapper-->
                    <div
                      class="hover-scroll-y pe-12 me-n12"
                      data-kt-scroll="true"
                      data-kt-scroll-height="auto"
                      data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                      data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                      data-kt-scroll-offset="215px"
                    >
                      <!--begin::Row-->
                      <div class="row gy-10">
                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="index.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Multipurpose
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/multipurpose-demo1.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="marketing.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Marketing
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/marketing.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="social.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Social
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/social.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="ecommerce.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Ecommerce
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/ecommerce.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="store-analytics.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Store-analytics
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/store-analytics.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="logistics.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Logistics
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/logistics.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="delivery.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Delivery
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/delivery.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="online-courses.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Online-courses
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/online-courses.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="school.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              School
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/school.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="crypto.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Crypto
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/crypto.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="finance-performance.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Finance-performance
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/finance-performance.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="website-analytics.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Website-analytics
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/website-analytics.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="bidding.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Bidding
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/bidding.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="podcast.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Podcast
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/podcast.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="projects.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Projects
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/projects.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="call-center.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Call-center
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/call-center.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4">
                          <!--begin::Preview-->
                          <a
                            href="pos.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              POS
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/dashboards/pos.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Scroll wrapper-->
                  </div>
                  <div
                    class="pt-5 tab-pane fade"
                    id="kt_app_engage_prebuilts_tab_apps"
                    role="tabpanel"
                  >
                    <!--begin::Scroll wrapper-->
                    <div
                      class="hover-scroll-y pe-12 me-n12"
                      data-kt-scroll="true"
                      data-kt-scroll-height="auto"
                      data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                      data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                      data-kt-scroll-offset="215px"
                    >
                      <!--begin::Row-->
                      <div class="row gy-10">
                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="projects/list/list.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Projects
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/projects.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="catalog/products/products.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Ecommerce
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/include.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="customers/list/list.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Customers
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/customers.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="subscriptions/list/list.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Subscriptions
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/subscriptions.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="user-management/users/list/list.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              User Management
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/user-management.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="invoices/create/main.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Invoices
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/invoices.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="support-center/overview/main.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Support Center
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/support-center.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="chat/private.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Chat
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/chat.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="calendar/calendar.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Calendar
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/calendar.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="file-manager/list/folders.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              File Manager
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/file-manager.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="inbox/listing/listing.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Inbox
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/inbox.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4">
                          <!--begin::Preview-->
                          <a
                            href="contacts/getting-started.php"
                            data-kt-href="true"
                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                          >
                            <!--begin::Title-->
                            <h3
                              class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                            >
                              Contacts
                            </h3>
                            <!--end::Title-->

                            <!--begin::Thumbnail-->
                            <span
                              class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                            >
                              <img
                                src="../assets/media/preview/demos/placeholder.jpg"
                                data-src="//../assets/media/preview/prebuilts/contacts.png"
                                class="lozad w-100 rounded"
                              />
                            </span>
                            <!--end::Thumbnail-->
                          </a>
                          <!--end::Preview-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Scroll wrapper-->
                  </div>

                  <div
                    class="tab-pane fade"
                    id="kt_app_engage_prebuilts_tab_pages"
                  >
                    <!--begin::Tabs wrapper-->
                    <div class="d-flex flex-center mb-5">
                      <div class="border-bottom">
                        <!--begin::Tabs-->
                        <ul
                          class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4"
                        >
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4 active"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_authentication"
                            >
                              Authentication
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_general"
                            >
                              General
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_account"
                            >
                              Account
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_modals"
                            >
                              Modals
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_wizards"
                            >
                              Wizards
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_search"
                            >
                              Search
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_widgets"
                            >
                              Widgets
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                          <!--begin::Tab item-->
                          <li class="nav-item p-0 m-0">
                            <!--begin::Tab link-->
                            <a
                              class="nav-link text-muted text-active-primary pt-0 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_app_engage_prebuilts_tab_pages_email-templates"
                            >
                              Email Templates
                            </a>
                            <!--end::Tab link-->
                          </li>
                          <!--end::Tab item-->
                        </ul>
                        <!--end::Tabs-->
                      </div>
                    </div>
                    <!--end::Tabs wrapper-->

                    <!--begin::Scroll wrapper-->
                    <div
                      class="hover-scroll-y pe-12 me-n12"
                      data-kt-scroll="true"
                      data-kt-scroll-height="auto"
                      data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image"
                      data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                      data-kt-scroll-offset="250px"
                    >
                      <!--begin::Tab content-->
                      <div class="tab-content">
                        <div
                          class="tab-pane fade show active"
                          id="kt_app_engage_prebuilts_tab_pages_authentication"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/layouts/corporate/sign-in.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Corporate
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-corporate.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/layouts/creative/sign-in.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Creative
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-creative.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/layouts/fancy/sign-in.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Fancy
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-fancy.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/layouts/overlay/sign-in.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Overlay
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-overlay.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/extended/multi-steps-sign-up.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Multi-Step
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-multistep.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/layouts/corporate/two-factor.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Two-Factor
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-2factor.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/password-confirmation.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Password Changed
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-passwordchanged.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/verify-email.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Verify Email
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-verifyemail.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/welcome.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Welcome
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-welcome.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/coming-soon.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Coming Soon
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-comingsoon.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/account-deactivated.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Account Deactivated
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-accountdeactivated.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/error-404.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  404 Page
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-404.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/general/error-500.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  505 Page
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/auth-500.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_general"
                          role="tabpanel"
                        >
                          <div class="mb-5">
                            <!--begin::Collapse toggle-->
                            <a
                              class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active"
                              data-bs-toggle="collapse"
                              href="#kt_app_engage_prebuilts_tab_pages_general_user-profile"
                            >
                              <span class="fw-bolder fs-2"> User Profile </span>

                              <i
                                class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                              ></i>
                              <i
                                class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                              ></i>
                            </a>
                            <!--end::Collapse toggle-->

                            <!--begin::Collapse content-->
                            <div
                              class="show"
                              id="kt_app_engage_prebuilts_tab_pages_general_user-profile"
                            >
                              <!--begin::Row-->
                              <div class="row g-10 pt-2 pb-5">
                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/user-profile/overview.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Profile Overview
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/profile-overview.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/user-profile/projects.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      User Projects
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/profile-overview.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/user-profile/campaigns.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      User Campaigns
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/profile-campaigns.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/user-profile/documents.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      User Documents
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/profile-documents.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/user-profile/followers.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      User Followers
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/profile-followers.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/user-profile/activity.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      User Activity
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/profile-activity.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->
                              </div>
                              <!--end::Row-->
                            </div>
                            <!--end::Collapse content-->
                          </div>
                          <div class="mb-5">
                            <!--begin::Collapse toggle-->
                            <a
                              class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                              data-bs-toggle="collapse"
                              href="#kt_app_engage_prebuilts_tab_pages_general_corporate"
                            >
                              <span class="fw-bolder fs-2"> Corporate </span>

                              <i
                                class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                              ></i>
                              <i
                                class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                              ></i>
                            </a>
                            <!--end::Collapse toggle-->

                            <!--begin::Collapse content-->
                            <div
                              class="collapse"
                              id="kt_app_engage_prebuilts_tab_pages_general_corporate"
                            >
                              <!--begin::Row-->
                              <div class="row g-10 pt-2 pb-5">
                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/about.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      About Us
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/corporate-aboutus.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/contact.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Contact Us
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/corporate-contactus.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/licenses.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      License
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/corporate-license.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/team.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Our Team
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/corporate-ourteam.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/sitemap.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Sitemap
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/corporate-sitemap.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->
                              </div>
                              <!--end::Row-->
                            </div>
                            <!--end::Collapse content-->
                          </div>
                          <div class="mb-5">
                            <!--begin::Collapse toggle-->
                            <a
                              class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                              data-bs-toggle="collapse"
                              href="#kt_app_engage_prebuilts_tab_pages_general_social"
                            >
                              <span class="fw-bolder fs-2"> Social </span>

                              <i
                                class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                              ></i>
                              <i
                                class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                              ></i>
                            </a>
                            <!--end::Collapse toggle-->

                            <!--begin::Collapse content-->
                            <div
                              class="collapse"
                              id="kt_app_engage_prebuilts_tab_pages_general_social"
                            >
                              <!--begin::Row-->
                              <div class="row g-10 pt-2 pb-5">
                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/social/feeds.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Activity
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/social-activity.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/social/activity.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Feeds
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/social-feeds.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/social/followers.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Followers
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/social-followers.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/social/settings.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Settings
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/social-settings.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->
                              </div>
                              <!--end::Row-->
                            </div>
                            <!--end::Collapse content-->
                          </div>
                          <div class="mb-5">
                            <!--begin::Collapse toggle-->
                            <a
                              class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                              data-bs-toggle="collapse"
                              href="#kt_app_engage_prebuilts_tab_pages_general_others"
                            >
                              <span class="fw-bolder fs-2"> Others </span>

                              <i
                                class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                              ></i>
                              <i
                                class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"
                                ><span class="path1"></span
                                ><span class="path2"></span
                              ></i>
                            </a>
                            <!--end::Collapse toggle-->

                            <!--begin::Collapse content-->
                            <div
                              class="collapse"
                              id="kt_app_engage_prebuilts_tab_pages_general_others"
                            >
                              <!--begin::Row-->
                              <div class="row g-10 pt-2 pb-5">
                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/faq/classic.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      FAQ Classic
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/faq-classic.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/faq/extended.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      FAQ Extended
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/faq-extended.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/blog/home.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Blog Home
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/blog-home.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                  <!--begin::Preview-->
                                  <a
                                    href="pages/blog/post.php"
                                    data-kt-href="true"
                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                                  >
                                    <!--begin::Title-->
                                    <h3
                                      class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                    >
                                      Blog Post
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Thumbnail-->
                                    <span
                                      class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                    >
                                      <img
                                        src="../assets/media/preview/demos/placeholder.jpg"
                                        data-src="//../assets/media/preview/prebuilts/pages/blog-post.png"
                                        class="lozad w-100 rounded"
                                      />
                                    </span>
                                    <!--end::Thumbnail-->
                                  </a>
                                  <!--end::Preview-->
                                </div>
                                <!--end::Col-->
                              </div>
                              <!--end::Row-->
                            </div>
                            <!--end::Collapse content-->
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_account"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/overview.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Overview
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-overview.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/settings.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Settings
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-settings.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/billing.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Billing
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-billing.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/security.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Security
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-security.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/referrals.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Referrals
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-referrals.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/logs.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Logs
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-logs.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/api-keys.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  API Keys
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-apikeys.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/statements.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Statements
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-statements.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="account/billing.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Billing
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/account-billing.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_modals"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/general/view-users.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  View Friends
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-viewfriends.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/general/upgrade-plan.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Upgrade Plan
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-upgradeplan.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/top-up-wallet.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Topup Wallet
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-topupwallet.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/general/share-earn.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Share & Earn
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-shareandearn.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/general/select-users.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Select User
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-selectuser.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/forms/bidding.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Place Bid
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-placeyourbid.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/offer-a-deal.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Offer Deal
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-offeradeal.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/forms/new-target.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  New Target
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-newtarget.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/forms/new-card.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  New Card
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-newcard.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/forms/new-address.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  New Address
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-newaddress.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/general/invite-friends.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Invite Friend
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-invitefriend.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/create-project.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Create Project
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-createproject.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/create-campaign.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Create Campaign
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-createcampaign.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/create-account.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Create Business Account
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-createbusinessacc.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/create-app.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Create App
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-createapp.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/forms/create-api-key.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Create Api Key
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-createapikey.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/modals/wizards/two-factor-authentication.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  2 Factor Auth
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/modal-2factorauth.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_wizards"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/wizards/horizontal.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  2 Factor Auth
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/wizard-2factorauth.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/wizards/horizontal.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Horizontal
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/wizard-horizontal.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/wizards/vertical.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Vertical
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/wizard-vertical.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_search"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/search/users.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Search Users
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/search-users.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/search/horizontal.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Search Horizontal
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/search-horizontal.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/search/vertical.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Search Vertical
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/search-vertical.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="utilities/search/select-location.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Search Location
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/search-location.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_widgets"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="widgets/charts.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Charts
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/widgets-charts.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="widgets/feeds.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Feeds
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/widgets-feeds.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="widgets/lists.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Lists
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/widgets-lists.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="widgets/mixed.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Mixed
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/widgets-mixed.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="widgets/statistics.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Statistics
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/widgets-stats.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="widgets/tables.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Tables
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/widgets-tables.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <div
                          class="tab-pane fade"
                          id="kt_app_engage_prebuilts_tab_pages_email-templates"
                          role="tabpanel"
                        >
                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/welcome-message.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Welcome
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-welcome.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/subscription-confirmed.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Subscription Confirmed
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/reset-password.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Reset Password
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-resetpassword.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/card-declined.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Card Declined
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-creditcarddeclined.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/promo-1.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Promotion 1
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-promo1.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/promo-2.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Promotion 2
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-promo2.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                              <!--begin::Preview-->
                              <a
                                href="authentication/email/promo-3.php"
                                data-kt-href="true"
                                class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
                              >
                                <!--begin::Title-->
                                <h3
                                  class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4"
                                >
                                  Promotion 3
                                </h3>
                                <!--end::Title-->

                                <!--begin::Thumbnail-->
                                <span
                                  class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden"
                                >
                                  <img
                                    src="../assets/media/preview/demos/placeholder.jpg"
                                    data-src="//../assets/media/preview/prebuilts/pages/email-promo3.png"
                                    class="lozad w-100 rounded"
                                  />
                                </span>
                                <!--end::Thumbnail-->
                              </a>
                              <!--end::Preview-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                      </div>
                      <!--end::Tab content-->
                    </div>
                    <!--end::Scroll wrapper-->
                  </div>
                </div>
                <!--end::Tab content-->
              </div>
              <!--end::Image view-->
              <!--begin::Text view-->
              <div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
                <!--begin::Heading-->
                <h1
                  class="fs-2x text-dark fw-bolder text-center mb-4"
                  id="kt_app_engage_prebuilts_view_text_heading"
                >
                  Sitemap
                </h1>
                <!--end::Heading-->

                <!--begin::Wrapper-->
                <div
                  id="kt_app_engage_prebuilts_view_text_heading"
                  class="hover-scroll-y pe-12 me-n12"
                  data-kt-scroll="true"
                  data-kt-scroll-height="auto"
                  data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text"
                  data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                  data-kt-scroll-offset="190px"
                >
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Layouts</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="index.php"
                          >
                             Original
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo2/index.php"
                          >
                            SaaS App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo30/index.php"
                          >
                            Sales Tracking App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo39/index.php"
                          >
                            Billing SaaS
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo31/index.php"
                          >
                            Marketing Automation
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo27/index.php"
                          >
                            Databox Dashboard
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo6/index.php"
                          >
                            Time Reporting
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo3/index.php"
                          >
                            New Trend
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo23/index.php"
                          >
                            Member Dashboard
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo38/index.php"
                          >
                            Email Marketing
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo36/index.php"
                          >
                            Digital Marketing
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo10/index.php"
                          >
                            Project Grid
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo35/index.php"
                          >
                            Traffic Analytics
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="demo8/index.php"
                          >
                            Analytics App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo25/index.php"
                          >
                            User Guiding App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo20/index.php"
                          >
                            CRM Software
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo7/index.php"
                          >
                            CRM Dashboard
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo50/index.php"
                          >
                            Micro-SaaS App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo32/index.php"
                          >
                            Delivery Management
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo42/index.php"
                          >
                            Calendar Workspace
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo44/index.php"
                          >
                            Recruit Automation
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo33/index.php"
                          >
                            Social Campaings
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo37/index.php"
                          >
                            Cloud Suite
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo11/index.php"
                          >
                            Finance Planner
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo16/index.php"
                          >
                            Podcast App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo26/index.php"
                          >
                            Planable App
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="demo22/index.php"
                          >
                            Media Publisher
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo19/index.php"
                          >
                            Reports Panel
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo40/index.php"
                          >
                            HR App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo29/index.php"
                          >
                            Project Workspace
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo24/index.php"
                          >
                            Helpdesk App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo4/index.php"
                          >
                            Jobs Site
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo41/index.php"
                          >
                            Business Intelligence
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo18/index.php"
                          >
                            Goal Tracking
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo21/index.php"
                          >
                            Monochrome App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo34/index.php"
                          >
                            Finance Analytics
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo15/index.php"
                          >
                            Crypto Planner
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo14/index.php"
                          >
                            Project Workplace
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo9/index.php"
                          >
                            Sales Manager
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="demo5/index.php"
                          >
                            Support Forum
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo13/index.php"
                          >
                            Classic Dashboard
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo12/index.php"
                          >
                            Data Analyzer
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo48/index.php"
                          >
                            Cloud ERP
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo28/index.php"
                          >
                            eCommerce App
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo17/index.php"
                          >
                            Events Scheduler
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo49/index.php"
                          >
                            KPI Tracking
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo43/index.php"
                          >
                            Healthcare Dashboard
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo45/index.php"
                          >
                            OKR Tracking
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo47/index.php"
                          >
                            Campaign Automation
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="demo46/index.php"
                          >
                            Audit Board App
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->

                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Dashboards</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="index.php"
                          >
                            Multipurpose
                          </a>

                          <a class="fw-6 fw-semibold" href="marketing.php">
                            Marketing Dashboard
                          </a>

                          <a class="fw-6 fw-semibold" href="social.php">
                            Social Dashboard
                          </a>

                          <a class="fw-6 fw-semibold" href="ecommerce.php">
                            eCommerce Dashboard
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="store-analytics.php"
                          >
                            Store Analytics
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a class="fw-6 fw-semibold" href="logistics.php">
                            Logistics
                          </a>

                          <a class="fw-6 fw-semibold" href="delivery.php">
                            Delivery
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="online-courses.php"
                          >
                            Online Courses
                          </a>

                          <a class="fw-6 fw-semibold" href="school.php">
                            Hello Tyler
                          </a>

                          <a class="fw-6 fw-semibold" href="crypto.php">
                            My Balance: 37,045$
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="finance-performance.php"
                          >
                            Finance Performance
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="website-analytics.php"
                          >
                            Website Analytics
                          </a>

                          <a class="fw-6 fw-semibold" href="bidding.php">
                            Bidding Dashboard
                          </a>

                          <a class="fw-6 fw-semibold" href="podcast.php">
                            Podcast Dashboard
                          </a>

                          <a class="fw-6 fw-semibold" href="projects.php">
                            Projects Dashboard
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a class="fw-6 fw-semibold" href="call-center.php">
                            Call Center
                          </a>

                          <a class="fw-6 fw-semibold" href="pos.php">
                            POS System
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->

                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17"></div>
                  <!--end::Section-->

                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">
                      Pages - Authentication
                    </h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/layouts/corporate/sign-in.php"
                          >
                            Corporate
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/layouts/creative/sign-in.php"
                          >
                            Creative
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/layouts/fancy/sign-in.php"
                          >
                            Fancy
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/layouts/overlay/sign-in.php"
                          >
                            Overlay
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/extended/multi-steps-sign-up.php"
                          >
                            Multi-Step
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/layouts/corporate/two-factor.php"
                          >
                            Two-Factor
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/password-confirmation.php"
                          >
                            Password Changed
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/verify-email.php"
                          >
                            Verify Email
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/welcome.php"
                          >
                            Welcome
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/coming-soon.php"
                          >
                            Coming Soon
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/account-deactivated.php"
                          >
                            Account Deactivated
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/error-404.php"
                          >
                            404 Page
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/general/error-500.php"
                          >
                            505 Page
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Pages - Account</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="account/overview.php"
                          >
                            Overview
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="account/settings.php"
                          >
                            Settings
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="account/billing.php"
                          >
                            Billing
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="account/security.php"
                          >
                            Security
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="account/referrals.php"
                          >
                            Referrals
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="account/logs.php"
                          >
                            Logs
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="account/api-keys.php"
                          >
                            API Keys
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="account/statements.php"
                          >
                            Statements
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="account/billing.php"
                          >
                            Billing
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Pages - Modals</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/general/view-users.php"
                          >
                            View Friends
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/general/upgrade-plan.php"
                          >
                            Upgrade Plan
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/top-up-wallet.php"
                          >
                            Topup Wallet
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/general/share-earn.php"
                          >
                            Share & Earn
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/general/select-users.php"
                          >
                            Select User
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/forms/bidding.php"
                          >
                            Place Bid
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/offer-a-deal.php"
                          >
                            Offer Deal
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/forms/new-target.php"
                          >
                            New Target
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/forms/new-card.php"
                          >
                            New Card
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/forms/new-address.php"
                          >
                            New Address
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/general/invite-friends.php"
                          >
                            Invite Friend
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/create-project.php"
                          >
                            Create Project
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/create-campaign.php"
                          >
                            Create Campaign
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/create-account.php"
                          >
                            Create Business Account
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/create-app.php"
                          >
                            Create App
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/forms/create-api-key.php"
                          >
                            Create Api Key
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/modals/wizards/two-factor-authentication.php"
                          >
                            2 Factor Auth
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Pages - Wizards</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/wizards/horizontal.php"
                          >
                            2 Factor Auth
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/wizards/horizontal.php"
                          >
                            Horizontal
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/wizards/vertical.php"
                          >
                            Vertical
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Pages - Search</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/search/users.php"
                          >
                            Search Users
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/search/horizontal.php"
                          >
                            Search Horizontal
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/search/vertical.php"
                          >
                            Search Vertical
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="utilities/search/select-location.php"
                          >
                            Search Location
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Pages - Widgets</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="widgets/charts.php"
                          >
                            Charts
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="widgets/feeds.php"
                          >
                            Feeds
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="widgets/lists.php"
                          >
                            Lists
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="widgets/mixed.php"
                          >
                            Mixed
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="widgets/statistics.php"
                          >
                            Statistics
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="widgets/tables.php"
                          >
                            Tables
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">
                      Pages - Email Templates
                    </h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/welcome-message.php"
                          >
                            Welcome
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/subscription-confirmed.php"
                          >
                            Subscription Confirmed
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/reset-password.php"
                          >
                            Reset Password
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/card-declined.php"
                          >
                            Card Declined
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/promo-1.php"
                          >
                            Promotion 1
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/promo-2.php"
                          >
                            Promotion 2
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="authentication/email/promo-3.php"
                          >
                            Promotion 3
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">
                      Pages - General - User Profile
                    </h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/user-profile/overview.php"
                          >
                            Profile Overview
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="pages/user-profile/projects.php"
                          >
                            User Projects
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/user-profile/campaigns.php"
                          >
                            User Campaigns
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="pages/user-profile/documents.php"
                          >
                            User Documents
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/user-profile/followers.php"
                          >
                            User Followers
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="pages/user-profile/activity.php"
                          >
                            User Activity
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">
                      Pages - General - Corporate
                    </h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/about.php"
                          >
                            About Us
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="pages/contact.php"
                          >
                            Contact Us
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/licenses.php"
                          >
                            License
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="pages/team.php"
                          >
                            Our Team
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/sitemap.php"
                          >
                            Sitemap
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">
                      Pages - General - Social
                    </h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/social/feeds.php"
                          >
                            Activity
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/social/activity.php"
                          >
                            Feeds
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/social/followers.php"
                          >
                            Followers
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/social/settings.php"
                          >
                            Settings
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Section-->
                  <div class="mb-10 mb-lg-17">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">
                      Pages - General - Others
                    </h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/faq/classic.php"
                          >
                            FAQ Classic
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/faq/extended.php"
                          >
                            FAQ Extended
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/blog/home.php"
                          >
                            Blog Home
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="pages/blog/post.php"
                          >
                            Blog Post
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->

                  <!--begin::Section-->
                  <div class="">
                    <!--begin::Title-->
                    <h3 class="text-dark fw-bolder mb-7">Apps</h3>
                    <!--end::Title-->

                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="projects/list/list.php"
                          >
                            Projects
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="catalog/products/products.php"
                          >
                            Ecommerce
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="customers/list/list.php"
                          >
                            Customers
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="subscriptions/list/list.php"
                          >
                            Subscriptions
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="user-management/users/list/list.php"
                          >
                            User Management
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="invoices/create/main.php"
                          >
                            Invoices
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="support-center/overview/main.php"
                          >
                            Support Center
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="chat/private.php"
                          >
                            Chat
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="calendar/calendar.php"
                          >
                            Calendar
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->

                      <!--begin::Col-->
                      <div class="col-lg-3">
                        <!--begin::List-->
                        <div class="d-flex flex-column gap-3 gap-lg-5">
                          <a
                            class="fw-6 fw-semibold"
                            href="file-manager/list/folders.php"
                          >
                            File Manager
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="inbox/listing/listing.php"
                          >
                            Inbox
                          </a>

                          <a
                            class="fw-6 fw-semibold"
                            href="contacts/getting-started.php"
                          >
                            Contacts
                          </a>
                        </div>
                        <!--end::List-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Section-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Text view--->
            </div>
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Sitemap-->
    <!--end::Engage modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="ki-duotone ki-arrow-up"
        ><span class="path1"></span><span class="path2"></span
      ></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Upgrade plan-->
    <div
      class="modal fade"
      id="kt_modal_upgrade_plan"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
          <!--begin::Modal header-->
          <div class="modal-header justify-content-end border-0 pb-0">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <i class="ki-duotone ki-cross fs-1"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->

          <!--begin::Modal body-->
          <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
            <!--begin::Heading-->
            <div class="mb-13 text-center">
              <h1 class="mb-3">Upgrade a Plan</h1>

              <div class="text-muted fw-semibold fs-5">
                If you need more info, please check
                <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
              </div>
            </div>
            <!--end::Heading-->

            <!--begin::Plans-->
            <div class="d-flex flex-column">
              <!--begin::Nav group-->
              <div
                class="nav-group nav-group-outline mx-auto"
                data-kt-buttons="true"
              >
                <button
                  class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                  data-kt-plan="month"
                >
                  Monthly
                </button>
                <button
                  class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                  data-kt-plan="annual"
                >
                  Annual
                </button>
              </div>
              <!--end::Nav group-->

              <!--begin::Row-->
              <div class="row mt-10">
                <!--begin::Col-->
                <div class="col-lg-6 mb-10 mb-lg-0">
                  <!--begin::Tabs-->
                  <div class="nav flex-column">
                    <!--begin::Tab link-->
                    <label
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_startup"
                    >
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            checked="checked"
                            value="startup"
                          />
                        </div>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <div
                            class="d-flex align-items-center fs-2 fw-bold flex-wrap"
                          >
                            Startup
                          </div>
                          <div class="fw-semibold opacity-75">
                            Best for startups
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->

                      <!--begin::Price-->
                      <div class="ms-5">
                        <span class="mb-2">$</span>

                        <span
                          class="fs-3x fw-bold"
                          data-kt-plan-price-month="39"
                          data-kt-plan-price-annual="399"
                        >
                          39
                        </span>

                        <span class="fs-7 opacity-50"
                          >/
                          <span data-kt-element="period">Mon</span>
                        </span>
                      </div>
                      <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <label
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_advanced"
                    >
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            value="advanced"
                          />
                        </div>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <div
                            class="d-flex align-items-center fs-2 fw-bold flex-wrap"
                          >
                            Advanced
                          </div>
                          <div class="fw-semibold opacity-75">
                            Best for 100+ team size
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->

                      <!--begin::Price-->
                      <div class="ms-5">
                        <span class="mb-2">$</span>

                        <span
                          class="fs-3x fw-bold"
                          data-kt-plan-price-month="339"
                          data-kt-plan-price-annual="3399"
                        >
                          339
                        </span>

                        <span class="fs-7 opacity-50"
                          >/
                          <span data-kt-element="period">Mon</span>
                        </span>
                      </div>
                      <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <label
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_enterprise"
                    >
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            value="enterprise"
                          />
                        </div>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <div
                            class="d-flex align-items-center fs-2 fw-bold flex-wrap"
                          >
                            Enterprise
                            <span
                              class="badge badge-light-success ms-2 py-2 px-3 fs-7"
                              >Popular</span
                            >
                          </div>
                          <div class="fw-semibold opacity-75">
                            Best value for 1000+ team
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->

                      <!--begin::Price-->
                      <div class="ms-5">
                        <span class="mb-2">$</span>

                        <span
                          class="fs-3x fw-bold"
                          data-kt-plan-price-month="999"
                          data-kt-plan-price-annual="9999"
                        >
                          999
                        </span>

                        <span class="fs-7 opacity-50"
                          >/
                          <span data-kt-element="period">Mon</span>
                        </span>
                      </div>
                      <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <label
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_custom"
                    >
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6"
                        >
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            value="custom"
                          />
                        </div>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <div
                            class="d-flex align-items-center fs-2 fw-bold flex-wrap"
                          >
                            Custom
                          </div>
                          <div class="fw-semibold opacity-75">
                            Requet a custom license
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->

                      <!--begin::Price-->
                      <div class="ms-5">
                        <a href="#" class="btn btn-sm btn-success"
                          >Contact Us</a
                        >
                      </div>
                      <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                  </div>
                  <!--end::Tabs-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-lg-6">
                  <!--begin::Tab content-->
                  <div class="tab-content rounded h-100 bg-light p-10">
                    <!--begin::Tab Pane-->
                    <div
                      class="tab-pane fade show active"
                      id="kt_upgrade_plan_startup"
                    >
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bold text-dark">
                          What’s in Startup Plan?
                        </h2>

                        <div class="text-muted fw-semibold">
                          Optimal for 10+ team size and new startup
                        </div>
                      </div>
                      <!--end::Heading-->

                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Up to 10 Active Users
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Up to 30 Project Integrations
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Analytics Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-semibold fs-5 text-muted flex-grow-1">
                            Finance Module
                          </span>
                          <i class="ki-duotone ki-cross-circle fs-1"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-semibold fs-5 text-muted flex-grow-1">
                            Accounting Module
                          </span>
                          <i class="ki-duotone ki-cross-circle fs-1"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-semibold fs-5 text-muted flex-grow-1">
                            Network Platform
                          </span>
                          <i class="ki-duotone ki-cross-circle fs-1"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span class="fw-semibold fs-5 text-muted flex-grow-1">
                            Unlimited Cloud Space
                          </span>
                          <i class="ki-duotone ki-cross-circle fs-1"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bold text-dark">
                          What’s in Startup Plan?
                        </h2>

                        <div class="text-muted fw-semibold">
                          Optimal for 100+ team size and grown company
                        </div>
                      </div>
                      <!--end::Heading-->

                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Up to 10 Active Users
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Up to 30 Project Integrations
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Analytics Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Finance Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Accounting Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-semibold fs-5 text-muted flex-grow-1">
                            Network Platform
                          </span>
                          <i class="ki-duotone ki-cross-circle fs-1"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span class="fw-semibold fs-5 text-muted flex-grow-1">
                            Unlimited Cloud Space
                          </span>
                          <i class="ki-duotone ki-cross-circle fs-1"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bold text-dark">
                          What’s in Startup Plan?
                        </h2>

                        <div class="text-muted fw-semibold">
                          Optimal for 1000+ team and enterpise
                        </div>
                      </div>
                      <!--end::Heading-->

                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Up to 10 Active Users
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Up to 30 Project Integrations
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Analytics Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Finance Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Accounting Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Network Platform
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Unlimited Cloud Space
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bold text-dark">
                          What’s in Startup Plan?
                        </h2>

                        <div class="text-muted fw-semibold">
                          Optimal for corporations
                        </div>
                      </div>
                      <!--end::Heading-->

                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Unlimited Users
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Unlimited Project Integrations
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Analytics Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Finance Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Accounting Module
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Network Platform
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span
                            class="fw-semibold fs-5 text-gray-700 flex-grow-1"
                          >
                            Unlimited Cloud Space
                          </span>
                          <i
                            class="ki-duotone ki-check-circle fs-1 text-success"
                            ><span class="path1"></span
                            ><span class="path2"></span
                          ></i>
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                  </div>
                  <!--end::Tab content-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Plans-->

            <!--begin::Actions-->
            <div class="d-flex flex-center flex-row-fluid pt-12">
              <button
                type="reset"
                class="btn btn-light me-3"
                data-bs-dismiss="modal"
              >
                Cancel
              </button>

              <button
                type="submit"
                class="btn btn-primary"
                id="kt_modal_upgrade_plan_btn"
              >
                <!--begin::Indicator label-->
                <span class="indicator-label"> Upgrade Plan</span>
                <!--end::Indicator label-->

                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                  Please wait...
                  <span
                    class="spinner-border spinner-border-sm align-middle ms-2"
                  ></span>
                </span>
                <!--end::Indicator progress-->
              </button>
            </div>
            <!--end::Actions-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan-->
    <!--begin::Modal - View Users-->
    <div
      class="modal fade"
      id="kt_modal_view_users"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <i class="ki-duotone ki-cross fs-1"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->

          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Heading-->
            <div class="text-center mb-13">
              <!--begin::Title-->
              <h1 class="mb-3">Browse Users</h1>
              <!--end::Title-->

              <!--begin::Description-->
              <div class="text-muted fw-semibold fs-5">
                If you need more info, please check out our
                <a href="#" class="link-primary fw-bold">Users Directory</a>.
              </div>
              <!--end::Description-->
            </div>
            <!--end::Heading-->

            <!--begin::Users-->
            <div class="mb-15">
              <!--begin::List-->
              <div class="mh-375px scroll-y me-n7 pe-7">
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Emma Smith

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Art Director
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">smith@kpmg.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$23,000</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                      >
                        M
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Melody Macy

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Marketing Analytic
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        melody@altbox.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$50,500</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Max Smith

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Software Enginer
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">max@kt.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$75,900</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Sean Bean

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Web Developer
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">sean@dellito.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$10,500</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Brian Cox

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          UI/UX Designer
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        brian@exchange.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$20,000</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-warning text-warning fw-semibold"
                      >
                        C
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Mikaela Collins

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Head Of Marketing
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">mik@pex.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$9,300</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Francis Mitcham

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Software Arcitect
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$15,000</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                      >
                        O
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Olivia Wild

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          System Admin
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        olivia@corpmail.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$23,000</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-primary text-primary fw-semibold"
                      >
                        N
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Neil Owen

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Account Manager
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        owen.neil@gmail.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$45,800</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Dan Wilson

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Web Desinger
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        dam@consilting.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$90,500</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                      >
                        E
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Emma Bold

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Corporate Finance
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">emma@intenso.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$5,000</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Ana Crown

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Customer Relationship
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        ana.cf@limtel.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$70,000</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div class="d-flex flex-stack py-5">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-info text-info fw-semibold"
                      >
                        A
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                      >
                        Robert Doe

                        <span class="badge badge-light fs-8 fw-semibold ms-2">
                          Marketing Executive
                        </span>
                      </a>
                      <!--end::Name-->

                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">robert@benko.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$45,500</div>

                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
              </div>
              <!--end::List-->
            </div>
            <!--end::Users-->

            <!--begin::Notice-->
            <div class="d-flex justify-content-between">
              <!--begin::Label-->
              <div class="fw-semibold">
                <label class="fs-6">Adding Users by Team Members</label>

                <div class="fs-7 text-muted">
                  If you need more info, please check budget planning
                </div>
              </div>
              <!--end::Label-->

              <!--begin::Switch-->
              <label
                class="form-check form-switch form-check-custom form-check-solid"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  checked="checked"
                />

                <span class="form-check-label fw-semibold text-muted">
                  Allowed
                </span>
              </label>
              <!--end::Switch-->
            </div>
            <!--end::Notice-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - View Users--><!--begin::Modal - Users Search-->
    <div
      class="modal fade"
      id="kt_modal_users_search"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <i class="ki-duotone ki-cross fs-1"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->

          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Content-->
            <div class="text-center mb-13">
              <h1 class="mb-3">Search Users</h1>

              <div class="text-muted fw-semibold fs-5">
                Invite Collaborators To Your Project
              </div>
            </div>
            <!--end::Content-->

            <!--begin::Search-->
            <div
              id="kt_modal_users_search_handler"
              data-kt-search-keypress="true"
              data-kt-search-min-length="2"
              data-kt-search-enter="enter"
              data-kt-search-layout="inline"
            >
              <!--begin::Form-->
              <form
                data-kt-search-element="form"
                class="w-100 position-relative mb-5"
                autocomplete="off"
              >
                <!--begin::Hidden input(Added to disable form autocomplete)-->
                <input type="hidden" />
                <!--end::Hidden input-->

                <!--begin::Icon-->
                <i
                  class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"
                  ><span class="path1"></span><span class="path2"></span
                ></i>
                <!--end::Icon-->

                <!--begin::Input-->
                <input
                  type="text"
                  class="form-control form-control-lg form-control-solid px-15"
                  name="search"
                  value=""
                  placeholder="Search by username, full name or email..."
                  data-kt-search-element="input"
                />
                <!--end::Input-->

                <!--begin::Spinner-->
                <span
                  class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                  data-kt-search-element="spinner"
                >
                  <span
                    class="spinner-border h-15px w-15px align-middle text-muted"
                  ></span>
                </span>
                <!--end::Spinner-->

                <!--begin::Reset-->
                <span
                  class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                  data-kt-search-element="clear"
                >
                  <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"
                    ><span class="path1"></span><span class="path2"></span
                  ></i>
                </span>
                <!--end::Reset-->
              </form>
              <!--end::Form-->

              <!--begin::Wrapper-->
              <div class="py-5">
                <!--begin::Suggestions-->
                <div data-kt-search-element="suggestions">
                  <!--begin::Heading-->
                  <h3 class="fw-semibold mb-5">Recently searched:</h3>
                  <!--end::Heading-->

                  <!--begin::Users-->
                  <div class="mh-375px scroll-y me-n7 pe-7">
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                      </div>
                      <!--end::Avatar-->

                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                        <span class="badge badge-light">Art Director</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <span
                          class="symbol-label bg-light-danger text-danger fw-semibold"
                        >
                          M
                        </span>
                      </div>
                      <!--end::Avatar-->

                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                        <span class="badge badge-light"
                          >Marketing Analytic</span
                        >
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                      </div>
                      <!--end::Avatar-->

                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                        <span class="badge badge-light">Software Enginer</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                      </div>
                      <!--end::Avatar-->

                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                        <span class="badge badge-light">Web Developer</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                      </div>
                      <!--end::Avatar-->

                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                        <span class="badge badge-light">UI/UX Designer</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                  </div>
                  <!--end::Users-->
                </div>
                <!--end::Suggestions-->

                <!--begin::Results(add d-none to below element to hide the users list by default)-->
                <div data-kt-search-element="results" class="d-none">
                  <!--begin::Users-->
                  <div class="mh-375px scroll-y me-n7 pe-7">
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="0"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='0']"
                            value="0"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Emma Smith</a
                          >

                          <div class="fw-semibold text-muted">
                            smith@kpmg.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected>Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="1"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='1']"
                            value="1"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-danger text-danger fw-semibold"
                          >
                            M
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Melody Macy</a
                          >

                          <div class="fw-semibold text-muted">
                            melody@altbox.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected>Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="2"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='2']"
                            value="2"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Max Smith</a
                          >

                          <div class="fw-semibold text-muted">max@kt.com</div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="3"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='3']"
                            value="3"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Sean Bean</a
                          >

                          <div class="fw-semibold text-muted">
                            sean@dellito.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected>Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="4"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='4']"
                            value="4"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="../assets/media/avatars/300-25.jpg"
                          />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Brian Cox</a
                          >

                          <div class="fw-semibold text-muted">
                            brian@exchange.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="5"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='5']"
                            value="5"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-warning text-warning fw-semibold"
                          >
                            C
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Mikaela Collins</a
                          >

                          <div class="fw-semibold text-muted">mik@pex.com</div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected>Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="6"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='6']"
                            value="6"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Francis Mitcham</a
                          >

                          <div class="fw-semibold text-muted">
                            f.mit@kpmg.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="7"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='7']"
                            value="7"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-danger text-danger fw-semibold"
                          >
                            O
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Olivia Wild</a
                          >

                          <div class="fw-semibold text-muted">
                            olivia@corpmail.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected>Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="8"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='8']"
                            value="8"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-primary text-primary fw-semibold"
                          >
                            N
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Neil Owen</a
                          >

                          <div class="fw-semibold text-muted">
                            owen.neil@gmail.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected>Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="9"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='9']"
                            value="9"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="../assets/media/avatars/300-23.jpg"
                          />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Dan Wilson</a
                          >

                          <div class="fw-semibold text-muted">
                            dam@consilting.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="10"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='10']"
                            value="10"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-danger text-danger fw-semibold"
                          >
                            E
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Emma Bold</a
                          >

                          <div class="fw-semibold text-muted">
                            emma@intenso.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected>Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="11"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='11']"
                            value="11"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="../assets/media/avatars/300-12.jpg"
                          />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Ana Crown</a
                          >

                          <div class="fw-semibold text-muted">
                            ana.cf@limtel.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected>Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="12"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='12']"
                            value="12"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-info text-info fw-semibold"
                          >
                            A
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Robert Doe</a
                          >

                          <div class="fw-semibold text-muted">
                            robert@benko.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="13"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='13']"
                            value="13"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="../assets/media/avatars/300-13.jpg"
                          />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >John Miller</a
                          >

                          <div class="fw-semibold text-muted">
                            miller@mapple.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="14"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='14']"
                            value="14"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-success text-success fw-semibold"
                          >
                            L
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Lucy Kunic</a
                          >

                          <div class="fw-semibold text-muted">
                            lucy.m@fentech.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected>Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="15"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='15']"
                            value="15"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="../assets/media/avatars/300-21.jpg"
                          />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Ethan Wilder</a
                          >

                          <div class="fw-semibold text-muted">
                            ethan@loop.com.au
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected>Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->

                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->

                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="16"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='16']"
                            value="16"
                          />
                        </label>
                        <!--end::Checkbox-->

                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-warning text-warning fw-semibold"
                          >
                            C
                          </span>
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Mikaela Collins</a
                          >

                          <div class="fw-semibold text-muted">mik@pex.com</div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->

                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected>Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Users-->

                  <!--begin::Actions-->
                  <div class="d-flex flex-center mt-15">
                    <button
                      type="reset"
                      id="kt_modal_users_search_reset"
                      data-bs-dismiss="modal"
                      class="btn btn-active-light me-3"
                    >
                      Cancel
                    </button>

                    <button
                      type="submit"
                      id="kt_modal_users_search_submit"
                      class="btn btn-primary"
                    >
                      Add Selected Users
                    </button>
                  </div>
                  <!--end::Actions-->
                </div>
                <!--end::Results-->
                <!--begin::Empty-->
                <div data-kt-search-element="empty" class="text-center d-none">
                  <!--begin::Message-->
                  <div class="fw-semibold py-10">
                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                    <div class="text-muted fs-6">
                      Try to search by username, full name or email...
                    </div>
                  </div>
                  <!--end::Message-->

                  <!--begin::Illustration-->
                  <div class="text-center px-5">
                    <img
                      src="../assets/media/illustrations/sketchy-1/1.png"
                      alt=""
                      class="w-100 h-200px h-sm-325px"
                    />
                  </div>
                  <!--end::Illustration-->
                </div>
                <!--end::Empty-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Search-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div
      class="modal fade"
      id="kt_modal_invite_friends"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <i class="ki-duotone ki-cross fs-1"
                ><span class="path1"></span><span class="path2"></span
              ></i>
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->

          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Heading-->
            <div class="text-center mb-13">
              <!--begin::Title-->
              <h1 class="mb-3">Invite a Friend</h1>
              <!--end::Title-->

              <!--begin::Description-->
              <div class="text-muted fw-semibold fs-5">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">FAQ Page</a>.
              </div>
              <!--end::Description-->
            </div>
            <!--end::Heading-->

            <!--begin::Google Contacts Invite-->
            <div class="btn btn-light-primary fw-bold w-100 mb-8">
              <img
                alt="Logo"
                src="../assets/media/svg/brand-logos/google-icon.svg"
                class="h-20px me-3"
              />
              Invite Gmail Contacts
            </div>
            <!--end::Google Contacts Invite-->

            <!--begin::Separator-->
            <div class="separator d-flex flex-center mb-8">
              <span
                class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3"
                >or</span
              >
            </div>
            <!--end::Separator-->

            <!--begin::Textarea-->
            <textarea
              class="form-control form-control-solid mb-8"
              rows="3"
              placeholder="Type or paste emails here"
            >
            </textarea>
            <!--end::Textarea-->

            <!--begin::Users-->
            <div class="mb-10">
              <!--begin::Heading-->
              <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
              <!--end::Heading-->

              <!--begin::List-->
              <div class="mh-300px scroll-y me-n7 pe-7">
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Emma Smith</a
                      >

                      <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected>Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                      >
                        M
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Melody Macy</a
                      >

                      <div class="fw-semibold text-muted">
                        melody@altbox.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1" selected>Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Max Smith</a
                      >

                      <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Sean Bean</a
                      >

                      <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected>Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Brian Cox</a
                      >

                      <div class="fw-semibold text-muted">
                        brian@exchange.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-warning text-warning fw-semibold"
                      >
                        C
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Mikaela Collins</a
                      >

                      <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected>Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Francis Mitcham</a
                      >

                      <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                      >
                        O
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Olivia Wild</a
                      >

                      <div class="fw-semibold text-muted">
                        olivia@corpmail.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected>Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-primary text-primary fw-semibold"
                      >
                        N
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Neil Owen</a
                      >

                      <div class="fw-semibold text-muted">
                        owen.neil@gmail.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1" selected>Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Dan Wilson</a
                      >

                      <div class="fw-semibold text-muted">
                        dam@consilting.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                      >
                        E
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Emma Bold</a
                      >

                      <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected>Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Ana Crown</a
                      >

                      <div class="fw-semibold text-muted">
                        ana.cf@limtel.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1" selected>Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-info text-info fw-semibold"
                      >
                        A
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Robert Doe</a
                      >

                      <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >John Miller</a
                      >

                      <div class="fw-semibold text-muted">
                        miller@mapple.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-success text-success fw-semibold"
                      >
                        L
                      </span>
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Lucy Kunic</a
                      >

                      <div class="fw-semibold text-muted">
                        lucy.m@fentech.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected>Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Ethan Wilder</a
                      >

                      <div class="fw-semibold text-muted">
                        ethan@loop.com.au
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1" selected>Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div class="d-flex flex-stack py-4">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >John Miller</a
                      >

                      <div class="fw-semibold text-muted">
                        miller@mapple.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->

                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-dropdown-parent="#kt_modal_invite_friends"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected>Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
              </div>
              <!--end::List-->
            </div>
            <!--end::Users-->

            <!--begin::Notice-->
            <div class="d-flex flex-stack">
              <!--begin::Label-->
              <div class="me-5 fw-semibold">
                <label class="fs-6">Adding Users by Team Members</label>
                <div class="fs-7 text-muted">
                  If you need more info, please check budget planning
                </div>
              </div>
              <!--end::Label-->

              <!--begin::Switch-->
              <label
                class="form-check form-switch form-check-custom form-check-solid"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  checked="checked"
                />

                <span class="form-check-label fw-semibold text-muted">
                  Allowed
                </span>
              </label>
              <!--end::Switch-->
            </div>
            <!--end::Notice-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
      var hostUrl = "../assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="../assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../assets/js/widgets.bundle.js"></script>
    <script src="../assets/js/custom/widgets.js"></script>
    <script src="../assets/js/custom/chat/chat.js"></script>
    <script src="../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->

    <!-- datatable -->
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
 
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                scrollX: '200px',
                
                scrollY: '200px',
                scrollCollapse: true,
                paging: true,
               
            } );
        } );
         
    </script>
    <!-- datatable -->
    <!--end::Javascript-->
    <script type="text/javascript">


  $(document).on("click touch", ".tblEditBtn", function () {
      var dataId = $(this).data('id');
      $('#aboutID').val(dataId);

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "../fetch/fetch_categories.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          var keyed = response.cat_name.replace(/<br ?\/?>/g,"\n");
        $("#cat_name").val(keyed);
        var keyed = response.status.replace(/<br ?\/?>/g,"\n");
        $("#status").val(keyed);
        $('#deleteCat').attr("href","../form/delete_cat.php?cat_id="+dataId);

        console.log($('#status').val()) ;
        

        
            
         },
         error: function(error){
            console.log("Error:");
            console.log(error);
         }

      });
      
   });



</script>
  </body>
  <!--end::Body-->


</html>
