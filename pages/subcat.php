<!--header area start-->
<?php include("../include/header.php"); ?>
<?php 
   if (isset($_GET['plant_id'])) {
      $plants_id=$_GET['plant_id'];
      $read = $crud->Read("plants","`plant_id`='$plants_id'");
      // $readAbouts[0]['category'];
      if($read){
         $category_id=$read[0]['cat_id'];
         $related_products = $crud->Read("plants","`cat_id`='$category_id' AND `plant_id` != '$plants_id'");
      }
    
   
   }
   ?>
<?php 
   if($read){
     $description=$read[0]['description'];
     $image1=$read[0]['image1'];
     $image2=$read[0]['image2'];
     $image3=$read[0]['image3'];
     $category=$read[0]['subcategories'];
     $price=$read[0]['price'];
     $discount=$read[0]['discount_price'];
     $name=$read[0]['plantname'];
   
    ?>
<!--header area end-->
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb_content">
               <ul>
                  <li><a href="index.php">home</a></li>
                  <li><?php echo $category;?></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--breadcrumbs area end-->
<!--product details start-->
<div class="product_details mt-100 mb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6">
            <div class="product-details-tab">
               <div id="img-1" class="zoomWrapper single-zoom">
                  <a href="#">
                  <img id="" style="width: 400px" src="../admin/images/<?php echo $image1;?>"
                     data-zoom-image="../admin/images/<?php echo $image1;?>" alt="big-1" >
                  </a>
               </div>
               
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="product_d_right">
               <form action="#">
                  <h1><a href="#"><?php echo $name;?></a></h1>
                  <!-- <div class="product_nav">
                     <ul>
                         <li class="prev"><a href="product-details.php"><i class="fa fa-angle-left"></i></a>
                         </li>
                         <li class="next"><a href="variable-product.php"><i
                                     class="fa fa-angle-right"></i></a></li>
                     </ul>
                     </div> -->
                  <div class="price_box">
                     <span class="current_price">Rs. <?php echo $price;?></span>
                     <span class="old_price">Rs. <?php echo $discount;?></span>
                  </div>
                  <div class="product_desc">
                     <p><?php echo $description;?></p>
                  </div>
                    <div class="order_button">
                        <button type="submit"><a href="https://wa.me/9954037179" >buy</a></button>
                    </div>
                  
                  
                  <!-- <div class=" product_d_action">
                     <ul>
                         <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                         <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                     </ul>
                     </div> -->
                  <div class="product_meta">
                     <span>Category: <a href="#"><?php echo $category;?></a></span>
                  </div>
               </form>
               <div class="priduct_social">
                  <ul>
                     <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                        Like</a>
                     </li>
                     
                      <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                        google</a>
                     </li>
                     <!--<li><a class="twitter" href="#" title="twitter"><i class="fa fa-instagram"></i> insta</a>-->
                     <!--</li>-->
                     <!--<li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>-->
                     <!--   save</a>-->
                     <!--</li>-->
                     <!--<li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>-->
                     <!--   share</a>-->
                     <!--</li>-->
                     <!--<li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>-->
                     <!--   linked</a>-->
                     <!--</li>-->
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--product details end-->
<!--product info start-->
<div class="product_d_info mb-90">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="product_d_inner">
               <div class="product_info_button">
                  <ul class="nav" role="tablist" id="nav-tab">
                     <li>
                        <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info"
                           aria-selected="false">Description</a>
                     </li>
                  </ul>
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="info" role="tabpanel">
                     <div class="product_info_content">
                        <p><?php echo $description;?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--product info end-->
<?php }?>
<!--product area start-->
<section class="product_area related_products">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section_title">
               <h2>Related Products </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="product_carousel product_column4 owl-carousel">
            <?php if($related_products){
               foreach($related_products as $skKey){
                    $relatedImage=$skKey['image1'];
                    $relatedName=$skKey['plantname'];
                    $relatedPrice=$skKey['price'];
                    $relatedDiscount=$skKey['discount_price'];
                    
               ?>
            <div class="col-lg-3">
               <article class="single_product">
                  <figure>
                     <div class="product_thumb">
                        <a class="primary_img" href="product-details.php?plant_id=<?php echo $skKey['plant_id']?>"><img
                           src="../admin/images/<?php echo $relatedImage?>" alt="" class="imgsize"></a>
                     </div>
                     <figcaption class="product_content">
                        <h4 class="product_name"><a href="product-details.php"><?php echo $relatedName?></a></h4>
                        <div class="price_box">
                           <span class="current_price">Rs. <?php echo $relatedPrice?></span>
                           <span class="old_price">Rs. <?php echo $relatedDiscount?></span>
                        </div>
                     </figcaption>
                  </figure>
               </article>
            </div>
            <?php }}?> 
         </div>
      </div>
   </div>
</section>
<!--product area end-->
<!--product area start-->
<section class="product_area upsell_products">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section_title">
               <h2>Most Sell Products </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="product_carousel product_column4 owl-carousel">
            <?php 
               $sell=$crud->Read("plants", "price>='500'");
               if($sell){
                              foreach($sell as $skKey){
                                   $sellImage=$skKey['image1'];
                                   $name=$skKey['plantname'];
                                   $sell3=$skKey['price'];
                                   $sell4=$skKey['discount_price'];
                                   
                ?>
            <div class="col-lg-3">
               <article class="single_product">
                  <figure>
                     <div class="product_thumb">
                        <a class="primary_img" href="product-details.php?plant_id=<?php echo $skKey['plant_id']?>"><img
                           src="../admin/images/<?php echo $sellImage?>" alt=""></a>
                        <!-- <div class="action_links">
                           <ul>
                               <li class="add_to_cart"><a href="cart.php" title="Add to cart"><i
                                           class="icon-shopping-bag"></i></a></li>
                               <li class="compare"><a href="#" title="Add to Compare"><i
                                           class="icon-sliders"></i></a></li>
                               <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                           class="icon-heart"></i></a></li>
                               <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                       data-bs-target="#modal_box" title="quick view"> <i
                                           class="icon-eye"></i></a></li>
                           </ul>
                           </div> -->
                     </div>
                     <figcaption class="product_content">
                       
                        <h4 class="product_name"><a href="product-details.php"><?php echo $name?></a></h4>
                        <div class="price_box">
                           <span class="current_price">Rs. <?php echo $sell3?></span>
                           <span class="old_price">Rs. <?php echo $sell4?></span>
                        </div>
                     </figcaption>
                  </figure>
               </article>
            </div>
            <?php }}?>
         </div>
      </div>
   </div>
</section>
<!--product area end-->
<!--brand area end-->
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
