<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "ariel.mewo@gmail.com";
  $headers = "From: ".$emailFrom;
  $txt = "You have reveive an email from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: https://ariel-portfolio-yeah.herokuapp.com/mail.php");
}
?>
