<!--header area start-->
<?php include("../include/header.php"); ?>
<!--header area end-->
<!--slider area start-->
<section class="slider_section">
   <div class="slider_area owl-carousel">
      <?php 
         $read = $crud->Read("slider","1");
         
         // Loop through the query results and display each slide in the carousel
         if ($read) {
           foreach($read as $row) {
         ?>
      <div class="single_slider d-flex align-items-center" data-bgimg="../admin/<?php echo $row['image'];?>">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="slider_content text sliderhead">
                     <h1><?php echo $row['head'];?></h1>
                     
                     <a class="button" href="view_product.php">Discover Now </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php }} ?>
   </div>
</section>
<!--slider area end-->
<!--shipping area start-->
<!-- <div class="shipping_area">
   <div class="container">
     <div class="row">
       <div class="col-lg-4 col-md-6">
         <div class="single_shipping">
           <div class="shipping_icone">
             <img src="../assets/img/about/shipping1.png" alt="" />
           </div>
           <div class="shipping_content">
             <h3>Free Delivery</h3>
             <p>
               Free shipping around the world for all <br />
               orders over Rs. 120
             </p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6">
         <div class="single_shipping col_2">
           <div class="shipping_icone">
             <img src="../assets/img/about/shipping2.png" alt="" />
           </div>
           <div class="shipping_content">
             <h3>Safe Payment</h3>
             <p>
               With our payment gateway, don’t worry <br />
               about your information
             </p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6">
         <div class="single_shipping col_3">
           <div class="shipping_icone">
             <img src="../assets/img/about/shipping3.png" alt="" />
           </div>
           <div class="shipping_content">
             <h3>Friendly Services</h3>
             <p>
               You have 30-day return guarantee for <br />
               every single order
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
   </div> -->
<!--shipping area end-->
<!--banner area start-->
<div class="banner_area">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4">
            <figure class="single_banner">
               <div class="banner_thumb">
                  <a href="view_product.php"
                     ><img src="../assets/img/bg/banner1.jpg" alt=""
                     class="class_banner"/></a>
                  <div class="banner_content">
                     <h3>Top Products</h3>
                     <h2>
                        Plants <br />
                        For Interior
                     </h2>
                     <!-- <a href="view_product.php">Shop Now</a> -->
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-lg-4 col-md-4">
            <figure class="single_banner">
               <div class="banner_thumb">
                  <a href="view_product.php"
                     ><img src="../assets/img/bg/banner2.jpg" alt="" class="class_banner"
                     /></a>
                  <div class="banner_content">
                     <h3>Top Products</h3>
                     <h2>
                        Plants <br />
                        For Healthy Lifestyle
                     </h2>
                     <!-- <a href="view_product.php">Shop Now</a> -->
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-lg-4 col-md-4">
            <figure class="single_banner">
               <div class="banner_thumb">
                  <a href="view_product.php"
                     ><img src="../assets/img/bg/lucky.jpg" alt="" class="class_banner"
                     /></a>
                  <div class="banner_content">
                     <h3>Top Products</h3>
                     <h2>
                        Lucky 
                        Plants
                     </h2>
                     <!-- <a href="view_product.php">Shop Now</a> -->
                  </div>
               </div>
            </figure>
         </div>
      </div>
   </div>
</div>
<!--banner area end-->
<div class="container">
   <div class="row">
      <div class="section_title">
         <h2>Our Products</h2>
      </div>
      <div align="center">
         <button class="btn btn-default filter-button" data-filter="all">All</button>
         <button class="btn btn-default filter-button" data-filter="garden">Gardening supplies</button>
         <button class="btn btn-default filter-button" data-filter="indoor">Indoor Plants</button>
         <button class="btn btn-default filter-button" data-filter="medical">Medicinal plants</button>
         <!-- <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button> -->
      </div>
      <?php 
         $readAbouts = $crud->Read("plants", "1 limit 16");
             if($readAbouts){
               foreach($readAbouts as $cKey){
                      $cat=$cKey['category'];
         
                      if($cat=="Gardening supplies")
                       {
                         $cat="garden";
                       }elseif ($cat=="indoor plants") {
                         $cat="indoor";
                       }elseif ($cat=="Medicinal plants") {
                         $cat="medical";
                       }
                     // echo $cat 
         ?>
      <div class="gallery_product col-lg-3 filter <?php echo $cat;?>">
         <div class="product_items hvr:grow">
            <article class="single_product filter <?php echo $cat;?>">
               <figure>
                  <div class="product_thumb">
                     <a class="primary_img" href="product-details.php?plant_id=<?php echo $cKey['plant_id']?>"
                        ><img src="../admin/images/<?php echo $cat=$cKey['image1']; ?>" alt="" class="class_image" 
                        /></a>
                  </div>
                  <figcaption class="product_content">
                     <h4 class="product_name">
                        <a href="product-details.php?plant_id=<?php echo $cKey['plant_id']?>"
                        ><?php echo $cat=$cKey['plantname']; ?></a
                           >
                     </h4>
                     <div class="price_box">
                        <span class="current_price">Rs.<?php echo $cat=$cKey['discount_price']; ?>/-</span>
                        <span class="old_price">Rs.<?php echo $cat=$cKey['price']; ?>/-</span>
                     </div>
                  </figcaption>
               </figure>
            </article>
         </div>
      </div>
      <?php }}?>
   </div>
</div>
<div class="shop_toolbar t_bottom">
   <div class="pagination">
      <div class="contact_message form">
         <a class="button" href="view_product.php">view more</a>
      </div>
   </div>
</div>
<!--product area start-->
<div class="product_area product_deals">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="section_title">
               <h2>Today Deals</h2>
            </div>
         </div>
      </div>
      <div class="product_deals_container">
         <div class="row">
            <div class="product_carousel product_column5 owl-carousel">
               <?php 
                  $out=$crud->Read("plants", "category='Fruits Plants'");
                  if($out){
                                 foreach($out as $skKey){
                                      $offerimage=$skKey['image1'];
                                      $offer1=$skKey['plantname'];
                                      $offer2=$skKey['price'];
                                      $offer3=$skKey['discount_price'];
                                      
                   ?>
               <div class="col-lg-3">
                  <article class="single_product">
                     <figure>
                        <div class="product_thumb">
                           <a class="primary_img" href="product-details.php?plant_id=<?php echo $skKey['plant_id']?>"
                              ><img src="../admin/images/<?php echo $offerimage?>" alt=""
                              /></a>
                        </div>
                        <figcaption class="product_content">
                           <h4 class="product_name">
                              <a href="product-details.php"><?php echo $offer1?></a>
                           </h4>
                           <div class="price_box">
                              <span class="current_price">Rs. <?php echo $offer2?></span>
                              <span class="old_price">Rs. <?php echo $offer3?></span>
                           </div>
                        </figcaption>
                     </figure>
                  </article>
               </div>
               <?php }}?>
            </div>
         </div>
      </div>
   </div>
</div>
<!--product area end-->
<!--testimonial area start-->
<!-- <div class="testimonial_area">
   <div class="container">
     <div class="row">
       <div class="col-12">
         <div class="section_title">
           <h2>What Our Customers Says ?</h2>
         </div>
       </div>
     </div>
     <div class="testimonial_container">
       <div class="row">
         <div class="testimonial_carousel owl-carousel">
           <div class="col-12">
             <div class="single-testimonial">
               <div class="testimonial-icon-img">
                 <img src="../assets/img/about/testimonials-icon.png" alt="" />
               </div>
               <div class="testimonial_content">
                 <p>
                   “ When a beautiful design is combined with powerful
                   technology, <br />
                   it truly is an artwork. I love how my website operates and
                   looks with this theme. Thank you for the awesome product.
                   ”
                 </p>
                 <div class="testimonial_text_img">
                   <a href="#"
                     ><img src="../assets/img/about/testimonial1.png" alt=""
                   /></a>
                 </div>
                 <div class="testimonial_author">
                   <p>
                     <a href="#">Rebecka Filson</a> / <span>CEO of CSC</span>
                   </p>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-12">
             <div class="single-testimonial">
               <div class="testimonial-icon-img">
                 <img src="../assets/img/about/testimonials-icon.png" alt="" />
               </div>
               <div class="testimonial_content">
                 <p>
                   “ When a beautiful design is combined with powerful
                   technology, <br />
                   it truly is an artwork. I love how my website operates and
                   looks with this theme. Thank you for the awesome product.
                   ”
                 </p>
                 <div class="testimonial_text_img">
                   <a href="#"
                     ><img src="../assets/img/about/testimonial2.png" alt=""
                   /></a>
                 </div>
                 <div class="testimonial_author">
                   <p>
                     <a href="#">Amber Laha</a> / <span>CEO of DND</span>
                   </p>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-12">
             <div class="single-testimonial">
               <div class="testimonial-icon-img">
                 <img src="../assets/img/about/testimonials-icon.png" alt="" />
               </div>
               <div class="testimonial_content">
                 <p>
                   “ When a beautiful design is combined with powerful
                   technology, <br />
                   it truly is an artwork. I love how my website operates and
                   looks with this theme. Thank you for the awesome product.
                   ”
                 </p>
                 <div class="testimonial_text_img">
                   <a href="#"
                     ><img src="../assets/img/about/testimonial3.png" alt=""
                   /></a>
                 </div>
                 <div class="testimonial_author">
                   <p>
                     <a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span>
                   </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   </div> -->
<!--testimonial area end-->
<!--footer area start-->
<?php include("../include/footer.php"); ?>
<!--footer area end-->
<!-- modal area start-->
<div
   class="modal fade"
   id="modal_box"
   tabindex="-1"
   role="dialog"
   aria-hidden="true"
   >
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <button
            type="button"
            class="close"
            data-bs-dismiss="modal"
            aria-label="Close"
            >
         <span aria-hidden="true"><i class="icon-x"></i></span>
         </button>
         <div class="modal_body">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-12">
                     <div class="modal_tab">
                        <div class="tab-content product-details-large">
                           <div
                              class="tab-pane fade show active"
                              id="tab1"
                              role="tabpanel"
                              >
                              <div class="modal_tab_img">
                                 <a href="#"
                                    ><img
                                    src="../assets/img/product/productbig1.jpg"
                                    alt=""
                                    /></a>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab2" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"
                                    ><img
                                    src="../assets/img/product/productbig2.jpg"
                                    alt=""
                                    /></a>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab3" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"
                                    ><img
                                    src="../assets/img/product/productbig3.jpg"
                                    alt=""
                                    /></a>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab4" role="tabpanel">
                              <div class="modal_tab_img">
                                 <a href="#"
                                    ><img
                                    src="../assets/img/product/productbig4.jpg"
                                    alt=""
                                    /></a>
                              </div>
                           </div>
                        </div>
                        <div class="modal_tab_button">
                           <ul
                              class="nav product_navactive owl-carousel"
                              role="tablist"
                              >
                              <li>
                                 <a
                                    class="nav-link active"
                                    data-bs-toggle="tab"
                                    href="#tab1"
                                    role="tab"
                                    aria-controls="tab1"
                                    aria-selected="false"
                                    ><img src="../assets/img/product/product1.jpg" alt=""
                                    /></a>
                              </li>
                              <li>
                                 <a
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    href="#tab2"
                                    role="tab"
                                    aria-controls="tab2"
                                    aria-selected="false"
                                    ><img src="../assets/img/product/product2.jpg" alt=""
                                    /></a>
                              </li>
                              <li>
                                 <a
                                    class="nav-link button_three"
                                    data-bs-toggle="tab"
                                    href="#tab3"
                                    role="tab"
                                    aria-controls="tab3"
                                    aria-selected="false"
                                    ><img src="../assets/img/product/product3.jpg" alt=""
                                    /></a>
                              </li>
                              <li>
                                 <a
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    href="#tab4"
                                    role="tab"
                                    aria-controls="tab4"
                                    aria-selected="false"
                                    ><img src="../assets/img/product/product8.jpg" alt=""
                                    /></a>
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
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing
                              elit. Mollitia iste laborum ad impedit pariatur esse
                              optio tempora sint ullam autem deleniti nam in quos qui
                              nemo ipsum numquam, reiciendis maiores quidem aperiam,
                              rerum vel recusandae
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
                                 <input
                                    min="1"
                                    max="100"
                                    step="2"
                                    value="1"
                                    type="number"
                                    />
                                 <button type="submit">add to cart</button>
                              </form>
                           </div>
                        </div>
                        <div class="modal_social">
                           <h2>Share this product</h2>
                           <ul>
                              <li class="facebook">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li class="twitter">
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                              </li>
                              <li class="pinterest">
                                 <a href="#"><i class="fa fa-pinterest"></i></a>
                              </li>
                              <li class="google-plus">
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                              </li>
                              <li class="linkedin">
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </li>
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
<script type="text/javascript">
   $(document).ready(function(){
   
   $(".filter-button").click(function(){
     var value = $(this).attr('data-filter');
     
     if(value == "all")
     {
         //$('.filter').removeClass('hidden');
         $('.filter').show('1000');
     }
     else
     {
   //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
   //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
         $(".filter").not('.'+value).hide('3000');
         $('.filter').filter('.'+value).show('3000');
         
     }
   });
   
   if ($(".filter-button").removeClass("active")) {
   $(this).removeClass("active");
   }
   $(this).addClass("active");
   
   });
</script>
<!--news letter popup start-->
<!-- <div class="newletter-popup">
   <div id="boxes" class="newletter-container">
     <div id="dialog" class="window">
       <div id="popup2">
         <span class="b-close"><span>close</span></span>
       </div>
       <div class="box">
         <div class="newletter-title">
           <h2>Newsletter</h2>
         </div>
         <div class="box-content newleter-content">
           <label class="newletter-label"
             >Enter your email address to subscribe our notification of our
             new post &amp; features by email.</label
           >
           <div id="frm_subscribe">
             <form name="subscribe" id="subscribe_popup"> -->
<!-- <span class="required">*</span><span>Enter you email address here...</span>-->
<!-- <input
   type="text"
   value=""
   name="subscribe_pemail"
   id="subscribe_pemail"
   placeholder="Enter you email address here..."
   />
   <input
   type="hidden"
   value=""
   name="subscribe_pname"
   id="subscribe_pname"
   />
   <div id="notification"></div>
   <a class="theme-btn-outlined" onclick="email_subscribepopup()"
   ><span>Subscribe</span></a
   >
   </form>
   <div class="subscribe-bottom">
   <input
   type="checkbox"
   id="newsletter_popup_dont_show_again"
   />
   <label for="newsletter_popup_dont_show_again"
   >Don't show this popup again</label
   > -->
<!-- </div> -->
<!-- </div> -->
<!-- /#frm_subscribe -->
<!-- </div> -->
<!-- /.box-content -->
<!-- </div>
   </div>
   </div> -->
<!-- /.box -->
<!-- </div> -->
<!--news letter popup start-->
