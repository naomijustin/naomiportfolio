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
    $txt = "You have received an email from ".$name." (via the naomijustin.com contact form).\n\nEmail: ".$mailFrom."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    echo "<script>window.location.href='/pages/contact.html';alert('Your message has been sent')</script>";
        
    exit();
}

?>