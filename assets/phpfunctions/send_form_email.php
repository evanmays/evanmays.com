<?php
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "business@evanmays.com";
 
    $email_subject = "Contact form on your website";
 
    $successvarmsg = "true";
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['message'])) {

        $successvarmsg="problem";     
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email = $_POST['email']; // required
 
    $phone = $_POST['phone']; // not required
 
    $message = $_POST['message']; // required
 
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {

 	  $successvarmsg= "invalidemail";

  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $successvarmsg="invalidname";

  }
 
  if(strlen($message) < 2) {
 
    $successvarmsg="invalidmessage";
 
  }

  if(strlen($phone) > 20) {
 
    $successvarmsg="invalidphone";
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Phone: ".clean_string($phone)."\n";
 
    $email_message .= "Message: "."\n".clean_string($message)."\n";
 
     
 
     if ($successvarmsg =="true"){

        $email_from = $email;

        // create email headers

        $headers = 'From: '.$email_from."\r\n".
         
        'Reply-To: '.$email_from."\r\n" .
         
        'X-Mailer: PHP/' . phpversion();
         
        @mail($email_to, $email_subject, $email_message, $headers);  
        
     }

     header('Location:/contact?success='.$successvarmsg);


}
 
?>