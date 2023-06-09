<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # Replace this email with recipient email
        $mail_to = "support@rim.ng,uche@rim.ng";
        
        # Sender Data
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($message)) {
            alert("Please complete the form and try again.");
            exit;
        }
        
        # Mail Contents
        $content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            $msg = "Thank You! Your message has been sent.";
            header("location:../../contact.php?m=$msg");
            exit();
            // echo "Thank You! Your message has been sent.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        // echo "There was a problem with your submission, please try again.";
         $msg = "Sent.";
        header("location:../../contact.php?m=$msg");
        exit();
        // echo "Sent.";
    }

?>
