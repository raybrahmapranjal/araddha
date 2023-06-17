<!--header area start-->
<?php include("../include/header.php"); ?>
<!--header area end-->
<?php
   $dbhost = 'localhost';  
   $dbuser = "u355669643_araddha";  
   $dbpass = "Araddha@2023"; 
   $dbname = 'u355669643_araddha'; 
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die ('Error connecting to mysql'); 
   
   $itemsPerPage = 6; // Number of items to display per page
   
   // Calculate the total number of items
   $totalItemsQuery = "SELECT COUNT(*) as total FROM plants";
   $totalItemsResult = mysqli_query($conn, $totalItemsQuery);
   $totalItemsData = mysqli_fetch_assoc($totalItemsResult);
   $totalItems = $totalItemsData['total'];
   
   // Calculate the total number of pages
   $totalPages = ceil($totalItems / $itemsPerPage);
   
   // Get the current page number
   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   
   // Calculate the offset for the query
   $offset = ($currentPage - 1) * $itemsPerPage;
   
   // Fetch the items for the current page
   $query = "SELECT * FROM plants LIMIT $offset, $itemsPerPage";
   $result = mysqli_query($conn, $query);
   $plants = mysqli_fetch_all($result, MYSQLI_ASSOC);
   ?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb_content">
               <h3>Shop</h3>
               <ul>
                  <li><a href="index.php">home</a></li>
                  <li>shop</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--breadcrumbs area end-->
<!--shop  area start-->
<div class="shop_area shop_reverse mt-100 mb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-2 col-md-12">
            <!--sidebar widget start-->
            <aside class="sidebar_widget">
               <div class="widget_inner">
                  <div class="widget_list widget_categories">
                     <!-- <h3>Women</h3>
                        <ul>
                            <li class="widget_sub_categories sub_categories1"><a
                                    href="javascript:void(0)">Shoes</a>
                                <ul class="widget_dropdown_categories dropdown_categories1">
                                    <li><a href="#">Document</a></li>
                                    <li><a href="#">Dropcap</a></li>
                                    <li><a href="#">Dummy Image</a></li>
                                    <li><a href="#">Dummy Text</a></li>
                                    <li><a href="#">Fancy Text</a></li>
                                </ul>
                            </li>
                            <li class="widget_sub_categories sub_categories2"><a
                                    href="javascript:void(0)">Bags</a>
                                <ul class="widget_dropdown_categories dropdown_categories2">
                                    <li><a href="#">Flickr</a></li>
                                    <li><a href="#">Flip Box</a></li>
                                    <li><a href="#">Cocktail</a></li>
                                    <li><a href="#">Frame</a></li>
                                    <li><a href="#">Flickrq</a></li>
                                </ul>
                            </li>
                            <li class="widget_sub_categories sub_categories3"><a
                                    href="javascript:void(0)">Clothing</a>
                                <ul class="widget_dropdown_categories dropdown_categories3">
                                    <li><a href="#">Platform Beds</a></li>
                                    <li><a href="#">Storage Beds</a></li>
                                    <li><a href="#">Regular Beds</a></li>
                                    <li><a href="#">Sleigh Beds</a></li>
                                    <li><a href="#">Laundry</a></li>
                                </ul>
                            </li>
                        </ul> -->
                  </div>
                  <!-- <div class="widget_list widget_filter">
                     <h3>Filter by price</h3>
                     <form action="#">
                         <div id="slider-range"></div>
                         <button type="submit">Filter</button>
                         <input type="text" name="text" id="amount" />
                     
                     </form>
                     </div> -->
                  <div class="widget_list widget_color">
                     <h3>Select By Category</h3>
                     <?php 
                        $readCat=$crud->Read("categories", "status=1");
                        if($readCat){
                          foreach ($readCat as $ckey) {
                            $cat_id = $ckey['cat_id'];
                            // echo $cat_id;
                        ?> 
                     <ul>
                        <li>
                           <a href="sub_details.php?cat_id=<?php echo $ckey['cat_id']?>"><?php echo $ckey['cat_name'];?></a>
                        </li>
                     </ul>
                     <?php }}?>
                  </div>
                  <!-- <div class="widget_list widget_manu">
                     <h3></h3>
                     <ul>
                         <li>
                             <a href="#"> <span>(6)</span></a>
                         </li>
                         <li>
                             <a href="#">Accessories <span>(10)</span></a>
                         </li>
                         <li>
                             <a href="#">Engine Parts <span>(4)</span></a>
                         </li>
                         <li>
                             <a href="#">hermes <span>(10)</span></a>
                         </li>
                         <li>
                             <a href="#">louis vuitton <span>(8)</span></a>
                         </li>
                     
                     </ul>
                     </div> -->
                  <!-- <div class="widget_list tags_widget">
                     <h3>Product tags</h3>
                     <div class="tag_cloud">
                         <a href="#">Men</a>
                         <a href="#">Women</a>
                         <a href="#">Watches</a>
                         <a href="#">Bags</a>
                         <a href="#">Dress</a>
                         <a href="#">Belt</a>
                         <a href="#">Accessories</a>
                         <a href="#">Shoes</a>
                     </div>
                     </div> -->
               </div>
            </aside>
            <!--sidebar widget end-->
         </div>
         <div class="col-lg-10 col-md-12">
            <!--shop wrapper start-->
            <!--shop toolbar start-->
            <div class="shop_toolbar_wrapper">
               <div class="shop_toolbar_btn">
                  <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip"
                     title="3"></button>
                  <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip"
                     title="4"></button>
                  <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                     title="List"></button>
               </div>
               <!--<div class=" niceselect_option">-->
               <!--   <form class="select_option" action="#">-->
               <!--      <select name="orderby" id="short">-->
               <!--         <option selected value="1">Sort by average rating</option>-->
               <!--         <option value="2">Sort by popularity</option>-->
               <!--         <option value="3">Sort by newness</option>-->
               <!--         <option value="4">Sort by price: low to high</option>-->
               <!--         <option value="5">Sort by price: high to low</option>-->
               <!--         <option value="6">Product Name: Z</option>-->
               <!--      </select>-->
               <!--   </form>-->
               <!--</div>-->
               <!--<div class="page_amount">-->
               <!--   <p>Showing 1–9 of 21 results</p>-->
               <!--</div>-->
            </div>
            <!--shop toolbar end-->
            <div class="row shop_wrapper">
               <?php 
                  if($plants){
                    foreach($plants as $cKey) {
                          $image=$cKey['image1'];
                          $name=$cKey['plantname'];
                          $discount=$cKey['discount_price'];
                          $price=$cKey['price'];
                          $description=$cKey['description'];
                          
                  
                  
                  
                          // echo $cat 
                  ?>
               <div class="col-lg-4 col-md-4 col-12 ">
                  <article class="single_product">
                     <figure>
                        <div class="product_thumb">
                           <a class="primary_img" href="product-details.php?plant_id=<?php echo $cKey['plant_id']?>"><img
                              src="../admin/images/<?php echo $image?>" alt="" class="imgsize"></a>
                        </div>
                        <div class="product_content grid_content">
                           <div class="product_price_rating">
                              <h4 class="product_name"><a href="product-details.php?plant_id=<?php echo $cKey['plant_id']?>"><?php echo $name?></a></h4>
                              <div class="price_box">
                                 <span class="current_price">Rs. <?php echo $discount?></span>
                                 <span class="old_price">Rs. <?php echo $price?></span>
                              </div>
                           </div>
                        </div>
                        <div class="product_content list_content">
                           <h4 class="product_name"><a href="product-details.php?plant_id=<?php echo $cKey['plant_id']?>"><?php echo $name?></a>
                           </h4>
                           <div class="price_box">
                              <span class="current_price">Rs. <?php echo $discount?></span>
                              <span class="old_price">Rs. <?php echo $price?></span>
                           </div>
                           <div class="product_desc">
                              <p><?php echo $description?>
                              </p>
                           </div>
                           <div class="action_links list_action_right">
                              <ul>
                                 <li class="add_to_cart"><a href="https://wa.me/+916003058368?text=Hello%2C%20 Araddha" title="Add to cart">contact seller</a>
                                 </li>
                                 <!--<li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i-->
                                 <!--   class="icon-heart"></i></a></li>-->
                                 <!--<li class="compare"><a href="#" title="Add to Compare"><i-->
                                 <!--   class="icon-sliders"></i></a></li>-->
                              </ul>
                           </div>
                        </div>
                        
                     </figure>
                  </article>
               </div>
               <?php }}?>
            </div>
            <div class="shop_toolbar t_bottom">
               <div class="pagination">
                  <ul>
                     <?php
                        // Display the page numbers
                        for ($page = 1; $page <= $totalPages; $page++) {
                            if ($page == $currentPage) {
                                // Current page
                                echo "<li class='current'>$page</li>";
                            } else {
                                // Other pages
                                echo "<li><a href='?page=$page'>$page</a></li>";
                            }
                        }
                        
                        // Display the next page link
                        if ($currentPage < $totalPages) {
                            echo "<li class='next'><a href='?page=" . ($currentPage + 1) . "'>next</a></li>";
                        }
                        
                        // Display the last page link
                        if ($currentPage < $totalPages - 1) {
                            echo "<li><a href='?page=$totalPages'>>></a></li>";
                        }
                        ?>
                  </ul>
               </div>
            </div>
            <!--shop toolbar end-->
            <!--shop wrapper end-->
         </div>
      </div>
   </div>
</div>
<!--shop  area end-->
<!--footer area start-->
<?php include("../include/footer.php"); ?>
<!--footer area end-->
<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><i class="icon-x"></i></span>
         </button>
         <div class="modal_body">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-12">
                     <div class="modal_tab">
                        <div class="tab-content product-details-large">
                           <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"><img src="../assets/img/product/productbig1.jpg" alt=""></a>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab2" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"><img src="../assets/img/product/productbig2.jpg" alt=""></a>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab3" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"><img src="../assets/img/product/productbig3.jpg" alt=""></a>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab4" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"><img src="../assets/img/product/productbig4.jpg" alt=""></a>
                              </div>
                           </div>
                        </div>
                        <div class="modal_tab_button">
                           <ul class="nav product_navactive owl-carousel" role="tablist">
                              <li>
                                 <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab"
                                    aria-controls="tab1" aria-selected="false"><img
                                    src="../assets/img/product/product1.jpg" alt=""></a>
                              </li>
                              <li>
                                 <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab"
                                    aria-controls="tab2" aria-selected="false"><img
                                    src="../assets/img/product/product2.jpg" alt=""></a>
                              </li>
                              <li>
                                 <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                    src="../assets/img/product/product3.jpg" alt=""></a>
                              </li>
                              <li>
                                 <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab"
                                    aria-controls="tab4" aria-selected="false"><img
                                    src="../assets/img/product/product8.jpg" alt=""></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-12">
                     <div class="modal_right">
                        <div class="modal_title mb-10">
                           <h2>Donec Ac Tempus</h2>
                        </div>
                        <div class="modal_price mb-10">
                           <span class="new_price">Rs. 64.99</span>
                           <span class="old_price">Rs. 78.99</span>
                        </div>
                        <div class="modal_description mb-15">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                              laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                              in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                              recusandae 
                           </p>
                        </div>
                        <div class="variants_selects">
                           <div class="variants_size">
                              <h2>size</h2>
                              <select class="select_option">
                                 <option selected value="1">s</option>
                                 <option value="1">m</option>
                                 <option value="1">l</option>
                                 <option value="1">xl</option>
                                 <option value="1">xxl</option>
                              </select>
                           </div>
                           <div class="variants_color">
                              <h2>color</h2>
                              <select class="select_option">
                                 <option selected value="1">purple</option>
                                 <option value="1">violet</option>
                                 <option value="1">black</option>
                                 <option value="1">pink</option>
                                 <option value="1">orange</option>
                              </select>
                           </div>
                           <div class="modal_add_to_cart">
                              <form action="#">
                                 <input min="1" max="100" step="2" value="1" type="number">
                                 <button type="submit">add to cart</button>
                              </form>
                           </div>
                        </div>
                        <div class="modal_social">
                           <h2>Share this product</h2>
                           <ul>
                              <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                              <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                              </li>
                              <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- modal area end-->
