<h3>Thanks for your message!</h3>

<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email']!= ''){
    
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

      // submit the form
      $userName 		= $_POST['name'];
      $userEmail	 	= $_POST['email'];
      $userMessage 	= $_POST['message'];

      $to 			= "ariel.mewo@gmail.com";
      $subject 		= "Email from my website";
      $body 			= "Information Submitted:";

      $body .= "\r\n Name: " . $userName;
      $body .= "\r\n Email: " . $userEmail;
      $body .= "\r\n Message: " . $userMessage;

      mail($to, $subject, $body);

      $message_sent = true;
    }
  }
?>