
<div
            id="kt_app_sidebar"
            class="app-sidebar flex-column"
            data-kt-drawer="true"
            data-kt-drawer-name="app-sidebar"
            data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true"
            data-kt-drawer-width="225px"
            data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
          >
            <!--begin::Logo-->
            <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
              <!--begin::Logo image-->
              <a
                href="../include/index.php"
              >
                <img
                  alt="Logo"
                  src="../assets/media/logos/logo1.png"
                  class="h-25px app-sidebar-logo-default"
                />

                <img
                  alt="Logo"
                  src="../assets/media/logos/logo.png"
                  class="h-20px app-sidebar-logo-minimize"
                />
              </a>
              <!--end::Logo image-->

              <!--begin::Sidebar toggle-->
              <!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") { 
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
              <div
                id="kt_app_sidebar_toggle"
                class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                data-kt-toggle="true"
                data-kt-toggle-state="active"
                data-kt-toggle-target="body"
                data-kt-toggle-name="app-sidebar-minimize"
              >
                <i class="ki-duotone ki-double-left fs-2 rotate-180"
                  ><span class="path1"></span><span class="path2"></span
                ></i>
              </div>
              <!--end::Sidebar toggle-->
            </div>
            <!--end::Logo-->
            <!--begin::sidebar menu-->
            <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
              <!--begin::Menu wrapper-->
              <div
                id="kt_app_sidebar_menu_wrapper"
                class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                data-kt-scroll="true"
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu"
                data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true"
              >
                <!--begin::Menu-->
                <div
                  class="menu menu-column menu-rounded menu-sub-indention px-3"
                  id="#kt_app_sidebar_menu"
                  data-kt-menu="true"
                  data-kt-menu-expand="false"
                >
                  <!--begin:Menu item-->
                  <div
                    data-kt-menu-trigger="click"
                    class="menu-item here show menu-accordion"
                  >
                    <!--begin:Menu link--><span class="menu-link"
                      ><span class="menu-icon"
                        ><i class="ki-duotone ki-element-11 fs-2"
                          ><span class="path1"></span><span class="path2"></span
                          ><span class="path3"></span
                          ><span class="path4"></span></i></span
                      ><span class="menu-title">Dashboards</span
                      ><span class="menu-arrow"></span></span
                    ><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                      <div class="menu-item">
                        <!--begin:Menu link--><a
                          class="menu-link active"
                          href="../include/index.php"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">eCommerce</span></a
                        ><!--end:Menu link-->
                      </div>
                    </div>
                    <!--end:Menu sub-->
                  </div>

                  <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                      <span class="menu-heading fw-bold text-uppercase fs-7"
                        >Pages</span
                      >
                    </div>
                    <!--end:Menu content-->
                  </div>

                  <div
                    data-kt-menu-trigger="click"
                    class="menu-item menu-accordion"
                  >
                    <!--begin:Menu link--><span class="menu-link"
                      ><span class="menu-icon"
                        ><i class="ki-duotone ki-basket fs-2"
                          ><span class="path1"></span><span class="path2"></span
                          ><span class="path3"></span
                          ><span class="path4"></span></i></span
                      ><span class="menu-title">eCommerce</span
                      ><span class="menu-arrow"></span></span
                    ><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                      <!--begin:Menu item-->
                      <div
                        data-kt-menu-trigger="click"
                        class="menu-item menu-accordion"
                      >
                        <!--begin:Menu link--><span class="menu-link"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Catagories</span
                          ><span class="menu-arrow"></span></span
                        ><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                          <!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/products.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Products</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/categories.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Categories</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/add-product.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Add Product</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/edit-product.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Edit Product</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/add-category.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Add Category</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/add-subcat.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Add SubCategory</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../catalog/edit-category.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Edit Category</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                      </div>
                      <!--end:Menu item--><!--begin:Menu item-->
                      <div
                        data-kt-menu-trigger="click"
                        class="menu-item menu-accordion"
                      >
                        <!--begin:Menu link--><span class="menu-link"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Sub Categories</span
                          ><span class="menu-arrow"></span></span
                        ><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                          <!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../sales/listing.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Indoor plants</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../sales/details.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Outdoor plants</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../sales/add-order.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Flowering Plants</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../sales/edit-order.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Garden Supplies</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../sales/edit-order.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Pots</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                      </div>
                      <!--end:Menu item--><!--begin:Menu item-->
                      <div
                        data-kt-menu-trigger="click"
                        class="menu-item menu-accordion"
                      >
                        <!--begin:Menu link--><span class="menu-link"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Customers</span
                          ><span class="menu-arrow"></span></span
                        ><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                          <!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../customers/listing.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title"
                                >Customer Listing</span
                              ></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../customers/details.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title"
                                >Customer Details</span
                              ></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                      </div>
                      <!--end:Menu item--><!--begin:Menu item-->
                      <div
                        data-kt-menu-trigger="click"
                        class="menu-item menu-accordion"
                      >
                        <!--begin:Menu link--><span class="menu-link"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Reports</span
                          ><span class="menu-arrow"></span></span
                        ><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                          <!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../reports/view.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title"
                                >Products Viewed</span
                              ></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../reports/sales.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Sales</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../reports/returns.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Returns</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../reports/customer-orders.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title"
                                >Customer Orders</span
                              ></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../reports/shipping.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Shipping</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                      </div>
                      
                    </div>
                    <!--end:Menu sub-->
                  </div>
                  <!--end:Menu item--><!--begin:Menu item-->
                  <!--end:Menu item--><!--begin:Menu item-->
                  <div
                    data-kt-menu-trigger="click"
                    class="menu-item menu-accordion"
                  >
                    <!--begin:Menu link--><span class="menu-link"
                      ><span class="menu-icon"
                        ><i class="ki-duotone ki-credit-cart fs-2"
                          ><span class="path1"></span
                          ><span class="path2"></span></i></span
                      ><span class="menu-title">Invoice Manager</span
                      ><span class="menu-arrow"></span></span
                    ><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                      <!--begin:Menu item-->
                      <div
                        data-kt-menu-trigger="click"
                        class="menu-item menu-accordion"
                      >
                        <!--begin:Menu link--><span class="menu-link"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">View Invoices</span
                          ><span class="menu-arrow"></span></span
                        ><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                          <!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../invoices/view/invoice-1.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Invoice 1</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../invoices/view/invoice-2.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Invoice 2</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item--><!--begin:Menu item-->
                          <div class="menu-item">
                            <!--begin:Menu link--><a
                              class="menu-link"
                              href="../invoices/view/invoice-3.php"
                              ><span class="menu-bullet"
                                ><span class="bullet bullet-dot"></span></span
                              ><span class="menu-title">Invoice 3</span></a
                            ><!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                      </div>
                      <!--end:Menu item--><!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link--><a
                          class="menu-link"
                          href="../invoices/create.php"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Create Invoice</span></a
                        ><!--end:Menu link-->
                      </div>
                      <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                  </div>
                  <!--end:Menu item--><!--begin:Menu item-->
                 
                  <!--end:Menu item--><!--begin:Menu item-->
                  <div
                    data-kt-menu-trigger="click"
                    class="menu-item menu-accordion"
                  >
                    <!--begin:Menu link--><span class="menu-link"
                      ><span class="menu-icon"
                        ><i class="ki-duotone ki-sms fs-2"
                          ><span class="path1"></span
                          ><span class="path2"></span></i></span
                      ><span class="menu-title">Inbox</span
                      ><span class="menu-arrow"></span></span
                    ><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                      <!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link--><a
                          class="menu-link"
                          href="../inbox/listing.php"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Messages</span
                          ><span class="menu-badge"
                            ><span class="badge badge-success">3</span></span
                          ></a
                        ><!--end:Menu link-->
                      </div>
                      <!--end:Menu item--><!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link--><a
                          class="menu-link"
                          href="../inbox/compose.php"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">Compose</span></a
                        ><!--end:Menu link-->
                      </div>
                      <!--end:Menu item--><!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link--><a
                          class="menu-link"
                          href="../inbox/reply.php"
                          ><span class="menu-bullet"
                            ><span class="bullet bullet-dot"></span></span
                          ><span class="menu-title">View & Reply</span></a
                        ><!--end:Menu link-->
                      </div>
                      <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                  </div>
                </div>
                <!--end::Menu-->
              </div>
              <!--end::Menu wrapper-->
            </div>
            <!--end::sidebar menu-->

          </div>