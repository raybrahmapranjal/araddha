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
     $category=$read[0]['category'];
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
                  <li>product details</li>
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
                  <img id="" src="../admin/images/<?php echo $image1;?>"
                     data-zoom-image="../admin/images/<?php echo $image1;?>" alt="big-1" class="class_product_image">
                  </a>
               </div>
               <!--<div class="single-zoom-thumb">-->
               <!--   <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">-->
               <!--      <li>-->
               <!--         <a href="#" class="elevatezoom-gallery active" data-update=""-->
               <!--            data-image="../admin/images/<?php echo $image1;?>"-->
               <!--            data-zoom-image="../admin/images/<?php echo $image1;?>">-->
               <!--         <img src="../admin/images/<?php echo $image1;?>" alt="zo-th-1" class="imgthum" />-->
               <!--         </a>-->
               <!--      </li>-->
               <!--      <li>-->
               <!--         <a href="#" class="elevatezoom-gallery active" data-update=""-->
               <!--            data-image="../admin/images/<?php echo $image2;?>"-->
               <!--            data-zoom-image="../admin/images/<?php echo $image2;?>">-->
               <!--         <img src="../admin/images/<?php echo $image2;?>" alt="zo-th-1" class="imgthum" />-->
               <!--         </a>-->
               <!--      </li>-->
               <!--      <li>-->
               <!--         <a href="#" class="elevatezoom-gallery active" data-update=""-->
               <!--            data-image="../admin/images/<?php echo $image3;?>"-->
               <!--            data-zoom-image="../admin/images/<?php echo $image3;?>">-->
               <!--         <img src="../admin/images/<?php echo $image3;?>" alt="zo-th-1" class="imgthum" />-->
               <!--         </a>-->
               <!--      </li>-->
               <!--   </ul>-->
               <!--</div>-->
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
                     <span class="current_price">Rs. <?php echo $discount;?></span>
                     <span class="old_price">Rs. <?php echo $price;?></span>
                  </div>
                  <div class="product_desc">
                     <p><?php echo $description;?></p>
                  </div>
                  <div class="order_button">
                        <button type="submit"><a href="https://wa.me/+916003058368?text=Hello%2C%20 Araddha" target="_blank" >contact seller</a></button>
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
                     <!--<li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>-->
                     <!--   Like</a>-->
                     <!--</li>-->
                     <!--<li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a>-->
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
                     <!-- <li>
                        <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                            aria-selected="false">Specification</a>
                        </li> -->
                     <!-- <li>
                        <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                            aria-selected="false">Reviews (1)</a>
                        </li> -->
                  </ul>
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="info" role="tabpanel">
                     <div class="product_info_content">
                        <p><?php echo $description;?></p>
                     </div>
                  </div>
                  <!-- <div class="tab-pane fade" id="sheet" role="tabpanel">
                     <div class="product_d_table">
                         <form action="#">
                             <table>
                                 <tbody>
                                     <tr>
                                         <td class="first_child">Compositions</td>
                                         <td>Polyester</td>
                                     </tr>
                                     <tr>
                                         <td class="first_child">Styles</td>
                                         <td>Girly</td>
                                     </tr>
                                     <tr>
                                         <td class="first_child">Properties</td>
                                         <td>Short Dress</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </form>
                     </div>
                     <div class="product_info_content">
                         <p>Fashion has been creating well-designed collections since 2010. The brand offers
                             feminine designs delivering stylish separates and statement dresses which have
                             since evolved into a full ready-to-wear collection in which every item is a
                             vital part of a woman's wardrobe. The result? Cool, easy, chic looks with
                             youthful elegance and unmistakable signature style. All the beautiful pieces are
                             made in Italy and manufactured with the greatest attention. Now Fashion extends
                             to a range of accessories including shoes, hats, belts and more!</p>
                     </div>
                     </div>
                     -->
                  <!-- <div class="tab-pane fade" id="reviews" role="tabpanel">
                     <div class="reviews_wrapper">
                         <h2>1 review for Donec eu furniture</h2>
                         <div class="reviews_comment_box">
                             <div class="comment_thmb">
                                 <img src="../assets/img/blog/comment2.jpg" alt="">
                             </div>
                             <div class="comment_text">
                                 <div class="reviews_meta">
                                     <div class="star_rating">
                                         <ul>
                                             <li><a href="#"><i class="icon-star"></i></a></li>
                                             <li><a href="#"><i class="icon-star"></i></a></li>
                                             <li><a href="#"><i class="icon-star"></i></a></li>
                                             <li><a href="#"><i class="icon-star"></i></a></li>
                                             <li><a href="#"><i class="icon-star"></i></a></li>
                                         </ul>
                                     </div>
                                     <p><strong>admin </strong>- September 12, 2018</p>
                                     <span>roadthemes</span>
                                 </div>
                             </div>
                     
                         </div>
                         <div class="comment_title">
                             <h2>Add a review </h2>
                             <p>Your email address will not be published. Required fields are marked </p>
                         </div>
                         <div class="product_ratting mb-10">
                             <h3>Your rating</h3>
                             <ul>
                                 <li><a href="#"><i class="icon-star"></i></a></li>
                                 <li><a href="#"><i class="icon-star"></i></a></li>
                                 <li><a href="#"><i class="icon-star"></i></a></li>
                                 <li><a href="#"><i class="icon-star"></i></a></li>
                                 <li><a href="#"><i class="icon-star"></i></a></li>
                             </ul>
                         </div>
                         <div class="product_review_form">
                             <form action="#">
                                 <div class="row">
                                     <div class="col-12">
                                         <label for="review_comment">Your review </label>
                                         <textarea name="comment" id="review_comment"></textarea>
                                     </div>
                                     <div class="col-lg-6 col-md-6">
                                         <label for="author">Name</label>
                                         <input id="author" type="text">
                     
                                     </div>
                                     <div class="col-lg-6 col-md-6">
                                         <label for="email">Email </label>
                                         <input id="email" type="text">
                                     </div>
                                 </div>
                                 <button type="submit">Submit</button>
                             </form>
                         </div>
                     </div>
                     </div> -->
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
                        
                        <h4 class="product_name"><a href="product-details.php?plant_id=<?php echo $skKey['plant_id']?>"><?php echo $relatedName?></a></h4>
                        <div class="price_box">
                           <span class="current_price">Rs. <?php echo $relatedDiscount?></span>
                           <span class="old_price">Rs. <?php echo $relatedPrice?></span>
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
                           src="../admin/images/<?php echo $sellImage?>" alt="" class="imgsize"></a>
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
                        
                        <h4 class="product_name"><a href="product-details.php?plant_id=<?php echo $skKey['plant_id']?>"><?php echo $name?></a></h4>
                        <div class="price_box">
                           <span class="current_price">Rs. <?php echo $sell4?></span>
                           <span class="old_price">Rs. <?php echo $sell3?></span>
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

<!-- modal area end-->
