<?php 
session_start();
if (isset($_POST['name'])) {
	$to = "araddhanursery6@gmail.com";
	
	$subject = "Enquiry by ".$_POST['name'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message  = $_POST['message'];

	$message2 = "<b> Hello araddha, I am ".$name.".<br>".$message."<br>My contact details is as follows : ".$email."</b>";

	$header = "From:".$_POST['email']." \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";

	$retval = mail ($to,$subject,$message2,$header);


	if($retval == true) {
                    
        $to = $_POST['email']; 
        $from = "araddhanursery6@gmail.com";
        $subject = "aradha nursery";  
        $message = "<h2>Your mail  Recieved!</h2>";  
        $message .= "<h3>Hello! <b>$username</b>, <br>soon we will response to your mail.thank you!</h3>";  
        
        $header = "From:".$from." \r\n";  
        $header .= "MIME-Version: 1.0 \r\n";  
        $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
        
        $result = mail ($to,$subject,$message,$header);  
        
        if( $result == true ){  
             $_SESSION['messageSuccess']= "your mail is sent";
                echo '<script>window.location.assign("contact.php");</script>';
        }else{  
              $_SESSION['messageErr']= "Sorry, your mail is not send.";
                echo '<script>window.location.assign("contact.php");</script>';
        } 
	}

}