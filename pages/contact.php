
<?php 
session_start();
?>
    <!--header area start-->
    <?php include("../include/header.php"); ?>
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--contact map start-->
    <div class="contact_map mt-100">
        <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.5630336200697!2d89.92693358885295!3d26.445887332022664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e27f5c2faebd3d%3A0xb975058dff3a3877!2sAraddha%20Nursury%20%26%20Agricultural%20Firm!5e0!3m2!1sen!2sin!4v1683101427217!5m2!1sen!2sin" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <div id="googleMap"></div> -->
        </div>
    </div>
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>contact us</h3>
                        <p></p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : Matiajhuri NH- 27, Srirampur, kokrajhar, Assam , India, 783361</li>
                            <li><i class="fa fa-phone"></i> <a href="#">+91-9954037179, &nbsp;&nbsp;&nbsp;
                                                                        +91-6003058368</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#"></a>contact@aradhhanursery.com </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>mail us</h3>
                        <form  method="POST" action="inform.php">
                            <p>
                                <label> Your Name (required)</label>
                                <input name="name" placeholder="Name *" type="text" required>
                            </p>
                            <p>
                                <label> Your email (required)</label>
                                <input name="email" placeholder="email *" type="email" required>
                            </p>
                            <p>
                                <label> Subject</label>
                                <input name="subject" placeholder="Subject *" type="text" required>
                            </p>
                            <div class="contact_textarea">
                                <label> Your Message</label>
                                <textarea placeholder="Message *" name="message" class="form-control2" required></textarea>
                            </div>
                            <button type="submit"  name="submit" >submit</button>
                            <p class="form-messege"> 
                                <?php 
                                            if (isset($_SESSION['messageSuccess'])) {
                                                echo $_SESSION['messageSuccess']."<br>";
                                                
                        
                                            } 
                                            if (isset($_SESSION['messageErr'])) {
                                                echo $_SESSION['messageErr']."<br>";
                                                
                                            }
                                            
                        
                                ?>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->

    <!--brand area start-->
    
    <!--brand area end-->

    <!--footer area start-->
    <?php include("../include/footer.php"); ?>
    <!--footer area end-->



    <!-- JS
