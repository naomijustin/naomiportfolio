<?php 

if (isset($_POST['submit'])) {
    // Form Data
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    // Send form data via email
    $mailTo = "test@test.com"; //Removed email for privacy
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    // header("Location: /php/contact.html?mailsend=success");
    //echo "<script>alert('Your message has been sent');window.location.href='/php/contact.html'</script>";
    echo "<script>window.location.href='/php/contact.html';alert('Your message has been sent')</script>";
    exit();
}
// else {
//     // Redirect to home page if accessing without 'Submit'
//     header("Location: ../contact.html?mailsend=error");
//     exit();
// }

?>