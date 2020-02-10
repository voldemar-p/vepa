<?php
    $response = "";
    function contact_form_response($type, $message) {
        global $response;

        if($type == "success") {
            $response = "<div class='success'>{$message}</div>";
        } else {
            $response = "<div class='error'>{$message}</div>";
        }

        //response messages
        $missing_content = "Please supply all information.";
        $email_invalid   = "Email Address Invalid.";
        $message_unsent  = "Message was not sent. Try Again.";
        $message_sent    = "Thanks! Your message has been sent.";
        
        //user posted variables
        $name = $_POST['message_name'];
        $email = $_POST['message_email'];
        $message = $_POST['message_text'];
        
        //php mailer variables
        $to = get_option('admin_email');
        $subject = "Someone sent a message from ".get_bloginfo('name');
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            contact_form_response("error", $email_invalid);
        } else { //email is valid
            //validate presence of name and message
            if(empty($name) || empty($message)) {
                contact_form_response("error", $missing_content);
            } else { //ready to go!
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if($sent) {
                    contact_form_response("success", $message_sent); //message sent!
                } else {
                    contact_form_response("error", $message_unsent); //message wasn't sent
                }
            }
        }
    }
?>
