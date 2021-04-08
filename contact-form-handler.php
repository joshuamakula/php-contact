<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "djoshjuan@gmail.com";

    $email_subject = "New form Subscription";

    $email_body = "User Name: $name. \n". 
                    "User Email: $visitor_email . \n".
                        "User Message: $message. \n";
    
    $to = "makulajosh@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.php");
?>