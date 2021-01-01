<?php 

if (isset($_POST['submit'])) {
    // Form Data
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    // Send form data via email
    $mailTo = "test@test.com"; 
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    
    //Correct Script (for deploy)
    echo "<script>window.location.href='/pages/contact.html';alert('Your message has been sent')</script>";
    
    // Test Script
    // echo "<script>window.location.href='/php/contact.html';alert('Your message has been sent')</script>";

    exit();
}
// else {
//     // Redirect to home page if accessing without 'Submit'
//     header("Location: ../contact.html?mailsend=error");
//     exit();
// }

?>