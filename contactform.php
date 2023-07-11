<?php
 echo "Test";
  if(isset($_POST['submit'])){
    

    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    
    
    $subject = "For Enquiry Purpose";
    $mailTo="soulsoftinfotech@gmail.com;
    $headers="From: ".$mailfrom;
    $txt="You have received an email from ".$name.".\n\n".$messge;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }
?>