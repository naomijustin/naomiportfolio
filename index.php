<?php
    $toEmail = "test@test.com";
    $mailHeaders = "From: " . $_POST["inputName"] . "<". $_POST["inputEmail"] .">\r\n";
    if(mail($toEmail, $_POST["inputMessage"], $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='error'>Problem sending message</p>";
    }
?>