<?php

$params = json_decode( file_get_contents('php://input') );

$log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Attempt: ".($result[0]['success']=='1'?'Success':'Failed').PHP_EOL.
        "User: ".$params->username.PHP_EOL.
        "Pass: ".file_get_contents('php://input').PHP_EOL.
		"Mail Method: ".@$_GET['do'].PHP_EOL.
        "-------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);

switch (@$_GET['do'])
 {

 case "broc":
	
	
      $name = $params->username;
      $email = $params->email;
    
   
       $myemail = "monti.desire@gmail.com";
	   $femail ="info@cvmarbleandgranite.com";
       $emess = "Name: ".$name."\n";
       $emess.= "Email: ".$email."\n";
       
     
       $ehead = "From: ".$femail."\r\n";
       $subj = "Brochure Request Email from ".$name."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = $mailsend;
	 
       unset($_GET['do']);
	   
	   
 
       /*header("Location: thank_you.html"); */
     break;
 
  case "contact":
	
	
      $name = $params->username;
      $email = $params->email;
	  $message = $params->message;
    
   
       $myemail = "monti.desire@gmail.com,ravi.gotmail@gmail.com";
	   $femail ="info@cvmarbleandgranite.com";
       $emess = "Name: ".$name."\n";
       $emess.= "Email: ".$email."\n";
	   $emess.= "Message: ".$message."\n";
       
     
       $ehead = "From: ".$femail."\r\n";
       $subj = "Customer Mail from ".$name."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = $mailsend;
	   
	   file_put_contents('./log_'.date("j.n.Y").'.txt', $message, FILE_APPEND);
	 
       unset($_GET['do']);
	   
	   
 
       /*header("Location: thank_you.html"); */
     break;
 
  case "contact1":
	
	
      $name = $params->username;
      $email = $params->email;
	  $message = $params->message;
    
   
       $myemail = "monti.desire@gmail.com";
	   $femail ="info@cvmarbleandgranite.com";
       $emess = "Name: ".$name."\n";
       $emess.= "Email: ".$email."\n";
	   $emess.= "Message: ".$message."\n";
       
     
       $ehead = "From: ".$femail."\r\n";
       $subj = "Customer Mail from ".$name."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = $mailsend;
	   
	   file_put_contents('./log_'.date("j.n.Y").'.txt', "From Contact Page".$message, FILE_APPEND);
	 
       unset($_GET['do']);
	   
	   
 
       /*header("Location: thank_you.html"); */
     break;
 
 default: break;
 }
?>


