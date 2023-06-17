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
        Compose
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
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64469ba77196a">
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
                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64469ba77196a" data-allow-clear="true">
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
            <!--begin::Inbox App - Compose -->
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Sidebar-->
    <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-275px" 
        data-kt-drawer="true" 
        data-kt-drawer-name="inbox-aside" 
        data-kt-drawer-activate="{default: true, lg: false}" 
        data-kt-drawer-overlay="true" 
        data-kt-drawer-width="225px" 
        data-kt-drawer-direction="start" 
        data-kt-drawer-toggle="#kt_inbox_aside_toggle"> 

        <!--begin::Sticky aside-->
        <div class="card card-flush mb-0"        
            data-kt-sticky="true"
            data-kt-sticky-name="inbox-aside-sticky"
            data-kt-sticky-offset="{default: false, xl: '100px'}"
            data-kt-sticky-width="{lg: '275px'}"
            data-kt-sticky-left="auto"
            data-kt-sticky-top="100px"
            data-kt-sticky-animation="false"
            data-kt-sticky-zindex="95"
            >
            <!--begin::Aside content-->
            <div class="card-body">
                <!--begin::Button-->
                <a href="compose.php" class="btn btn-primary fw-bold w-100 mb-8">New Message</a>
                <!--end::Button-->

                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Inbox-->
                        <span class="menu-link active">
                            <span class="menu-icon"><i class="ki-duotone ki-sms fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Inbox</span>
                            <span class="badge badge-light-success">3</span>
                        </span>
                        <!--end::Inbox-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Marked-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-abstract-23 fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Marked</span>
                        </span>
                        <!--end::Marked-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Draft-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-file fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Draft</span>
                            <span class="badge badge-light-warning">5</span>
                        </span>
                        <!--end::Draft-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Sent-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-send fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Sent</span>
                        </span>
                        <!--end::Sent-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <!--begin::Trash-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-trash fs-2 me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></span>
                            <span class="menu-title fw-bold">Trash</span>
                        </span>
                        <!--end::Trash-->
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->

                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary">
                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Custom work-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-8 fs-5 text-danger me-3 lh-0"><span class="path1"></span><span class="path2"></span></i>                            </span>
                            <span class="menu-title fw-semibold">Custom Work</span>
                            <span class="badge badge-light-danger">6</span>
                        </span>
                        <!--end::Custom work-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Partnership-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-8 fs-5 text-success me-3 lh-0"><span class="path1"></span><span class="path2"></span></i>                            </span>
                            <span class="menu-title fw-semibold">Partnership</span>
                        </span>
                        <!--end::Partnership-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::In progress-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-8 fs-5 text-info me-3 lh-0"><span class="path1"></span><span class="path2"></span></i>                            </span>
                            <span class="menu-title fw-semibold">In Progress</span>
                        </span>
                        <!--end::In progress-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <!--begin::Add label-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-plus fs-2 me-3 lh-0"></i>                            </span>
                            <span class="menu-title fw-semibold">Add Label</span>
                        </span>
                        <!--end::Add label-->
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Aside content-->
        </div>
        <!--end::Sticky aside-->
    </div>
    <!--end::Sidebar-->

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
            
    <!--begin::Card-->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h2 class="card-title m-0">
                Compose Message
            </h2>  

            <!--begin::Toggle-->
            <a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
                <i class="ki-duotone ki-burger-menu-2 fs-3 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </a>
            <!--end::Toggle-->
        </div>

        <div class="card-body p-0">
            <!--begin::Form-->
<form id="kt_inbox_compose_form">
    <!--begin::Body-->
    <div class="d-block">
        <!--begin::To-->
        <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
            <!--begin::Label-->
            <div class="text-dark fw-bold w-75px">
                To:
            </div>
            <!--end::Label-->
            
            <!--begin::Input-->
            <input type="text" class="form-control form-control-transparent border-0" name="compose_to" value="" data-kt-inbox-form="tagify" />
            <!--end::Input-->

            <!--begin::CC & BCC buttons-->
            <div class="ms-auto w-75px text-end">
                <span class="text-muted fs-bold cursor-pointer text-hover-primary me-2" data-kt-inbox-form="cc_button">Cc</span>
                <span class="text-muted fs-bold cursor-pointer text-hover-primary" data-kt-inbox-form="bcc_button">Bcc</span>
            </div>
            <!--end::CC & BCC buttons-->
        </div>
        <!--end::To-->

        <!--begin::CC-->
        <div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px" data-kt-inbox-form="cc">
            <!--begin::Label-->
            <div class="text-dark fw-bold w-75px">
                Cc:
            </div>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-transparent border-0" name="compose_cc" value="" data-kt-inbox-form="tagify" />
            <!--end::Input-->

            <!--begin::Close-->
            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
                <i class="ki-duotone ki-cross fs-5"><span class="path1"></span><span class="path2"></span></i>            </span>
            <!--end::Close-->
        </div>
        <!--end::CC-->

        <!--begin::BCC-->
        <div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px" data-kt-inbox-form="bcc">
            <!--begin::Label-->
            <div class="text-dark fw-bold w-75px">
                Bcc:
            </div>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-transparent border-0" name="compose_bcc" value="" data-kt-inbox-form="tagify" />
            <!--end::Input-->

            <!--begin::Close-->
            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
                <i class="ki-duotone ki-cross fs-5"><span class="path1"></span><span class="path2"></span></i>            </span>
            <!--end::Close-->
        </div>
        <!--end::BCC-->

        <!--begin::Subject-->
        <div class="border-bottom">
            <input class="form-control form-control-transparent border-0 px-8 min-h-45px" name="compose_subject" placeholder="Subject" />
        </div>
        <!--end::Subject-->

        <!--begin::Message-->
        <div id="kt_inbox_form_editor" class="bg-transparent border-0 h-350px px-3">
        </div>
        <!--end::Message-->

        <!--begin::Attachments-->
        <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
            <div class="dropzone-items">
                <div class="dropzone-item" style="display:none">
                    <!--begin::Dropzone filename-->
                    <div class="dropzone-file">
                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                            <span data-dz-name>some_image_file_name.jpg</span> <strong>(<span data-dz-size>340kb</span>)</strong>
                        </div>
                        <div class="dropzone-error" data-dz-errormessage></div>
                    </div>
                    <!--end::Dropzone filename-->

                    <!--begin::Dropzone progress-->
                    <div class="dropzone-progress">
                        <div class="progress bg-gray-300">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                        </div>
                    </div>
                    <!--end::Dropzone progress-->

                    <!--begin::Dropzone toolbar-->
                    <div class="dropzone-toolbar">
                        <span class="dropzone-delete" data-dz-remove>
                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                        </span>
                    </div>
                    <!--end::Dropzone toolbar-->
                </div>
            </div>
        </div>
        <!--end::Attachments-->
    </div>
    <!--end::Body-->

    <!--begin::Footer-->
    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
        <!--begin::Actions-->
        <div class="d-flex align-items-center me-3">
            <!--begin::Send-->
            <div class="btn-group me-4">
                <!--begin::Submit-->
                <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                    <span class="indicator-label">
                        Send
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </span>
                <!--end::Submit-->

                <!--begin::Send options-->
                <span class="btn btn-primary btn-icon fs-bold w-30px pe-0" role="button">
                    <span class="lh-0" data-kt-menu-trigger="click" data-kt-menu-placement="top-start">
                        <i class="ki-duotone ki-down fs-4 m-0"></i>                    </span>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Schedule send
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Save & archive
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Cancel
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                </span>
                <!--end::Send options-->
            </div>
            <!--end::Send-->

            <!--begin::Upload attachement-->
            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" id="kt_inbox_reply_attachments_select" data-kt-inbox-form="dropzone_upload">
                <i class="ki-duotone ki-paper-clip fs-2 m-0"></i>            </span>
            <!--end::Upload attachement-->

            <!--begin::Pin-->
            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary">
                <i class="ki-duotone ki-geolocation fs-2 m-0"><span class="path1"></span><span class="path2"></span></i>            </span>
            <!--end::Pin-->
        </div>
        <!--end::Actions-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::More actions-->
            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" data-toggle="tooltip" title="More actions">
                <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
            <!--end::More actions-->

            <!--begin::Dismiss reply-->
            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>            </span>
            <!--end::Dismiss reply-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Footer-->
</form>
<!--end::Form-->        </div>
    </div>
    <!--end::Card-->

    </div>
    <!--end::Content-->
</div>
<!--end::Inbox App - Compose -->




        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->					
                </div>
                <!--end::Content wrapper-->
				<?php include('../include/footer.php') ; ?>