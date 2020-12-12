<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "test@test.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    // header("Location: /php/contact.html?mailsend");
    //echo "<script>alert('Your message has been sent');window.location.href='/php/contact.html'</script>";
    echo "<script>window.location.href='/php/contact.html';alert('Your message has been sent')</script>";
}

?>