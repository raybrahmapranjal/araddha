<!--header area start-->
<?php include("../include/header.php"); ?>
<!--header area end-->
<?php 
   $itemsPerPage = 12;
   $page = isset($_GET['page']) ? $_GET['page'] : 1;
   $start = ($page - 1) * $itemsPerPage;
   
   if (isset($_GET['subCat_id'])) {
       $id = $_GET['subCat_id'];
       $indoor = $crud->Read("plants", "`subCat_id` = $id LIMIT $start, $itemsPerPage");
   }
   
   $totalItems = $crud->Count("plants", "`subCat_id` = $id");
   $totalPages = ceil($totalItems / $itemsPerPage);
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
                  <li>shop </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--breadcrumbs area end-->
<!--shop  area start-->
<div class="shop_area shop_fullwidth mt-100 mb-100">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <!--shop wrapper start-->
            <!--shop toolbar start-->
            <div class="shop_toolbar_wrapper">
               <div class="shop_toolbar_btn">
                  <button data-role="grid_3" type="button" class=" btn-grid-3" data-bs-toggle="tooltip"
                     title="3"></button>
                  <button data-role="grid_4" type="button" class="active btn-grid-4" data-bs-toggle="tooltip"
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
            <div class="row shop_wrapper grid_4">
               <?php if($indoor){
                  foreach($indoor as $skKey){
                       $indoor1=$skKey['image1'];
                       $indoor2=$skKey['plantname'];
                       $indoor3=$skKey['price'];
                       $indoor4=$skKey['discount_price'];
                       $indoor5=$skKey['description'];
                       
                  ?>
               <div class="col-lg-3 col-md-4 col-12 ">
                  <article class="single_product">
                     <figure>
                        <div class="product_thumb">
                           <a class="primary_img" href="subcat.php?plant_id=<?php echo $skKey['plant_id']?>"><img
                              src="../admin/images/<?php echo $indoor1?>" alt="" class="imgsize"></a>
                        </div>
                        <div class="product_content grid_content">
                           <div class="product_price_rating">
                              <h4 class="product_name"><a href="subcat.php?plant_id=<?php echo $skKey['plant_id']?>"><?php echo $indoor2?></a></h4>
                              <div class="price_box">
                                 <span class="current_price">Rs. <?php echo $indoor3?></span>
                                 <span class="old_price">Rs. <?php echo $indoor4?></span>
                              </div>
                           </div>
                        </div>
                        <div class="product_content list_content">
                           
                           <h4 class="product_name"><a href="product-details.php"><?php echo $indoor2?></a>
                           </h4>
                           <div class="price_box">
                              <span class="current_price">Rs. <?php echo $indoor3?></span>
                              <span class="old_price">Rs. <?php echo $indoor4?>/span>
                           </div>
                           <div class="product_desc">
                              <p><?php echo $indoor5 ?></p>
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
                        if ($page > 1) {
                            echo '<li><a href="?subCat_id='.$id.'&page='.($page - 1).'">&lt;</a></li>';
                        }
                        
                        for ($i = 1; $i <= $totalPages; $i++) {
                            echo '<li '.($page == $i ? 'class="current"' : '').'><a href="?subCat_id='.$id.'&page='.$i.'">'.$i.'</a></li>';
                        }
                        
                        if ($page < $totalPages) {
                            echo '<li><a href="?subCat_id='.$id.'&page='.($page + 1).'">&gt;</a></li>';
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
<?php if($indoor){
   foreach($indoor as $skKey){
        $indoor1=$skKey['image1'];
        $indoor2=$skKey['plantname'];
        $indoor3=$skKey['price'];
        $indoor4=$skKey['discount_price'];
        $indoor5=$skKey['description'];
        
   ?>
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
<?php }}?>
<!-- modal area end-->
