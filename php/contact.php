<?php 

if (isset($_POST['submit'])) {
    // Form Data
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    // Send form data via email
    $mailTo = "test@test.com"; // Removing email for privacy reasons
    $headers = "Contact Form | From: ".$mailFrom." | naomijustin.com";
    $txt = "You have received an email from ".$name." (via the naomijustin.com contact form).\n\n.Email: ".$mailFrom.".\n\n".$message;

    $result = mail($mailTo, $subject, $txt, $headers);
    
    if(!$result) {
        echo "<script>window.location.href='/pages/contact.html';alert('Error sending message, please try again')</script>";
    }
    else {
        echo "<script>window.location.href='/pages/contact.html';alert('Your message has been sent')</script>";
    }
    
    //Correct Script (for deploy)
    //echo "<script>window.location.href='/pages/contact.html';alert('Your message has been sent')</script>";
    
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