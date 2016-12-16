<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['submit'])){
    $to = "rickreyhsig@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    //$subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message1 = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    //mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    if ($_POST['submit']) {
        if (mail ($to, $subject, $message, $from)) { 
            echo $name;
            echo $email;
            echo $phone;
            echo $subject;
            echo $message;
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo $name;
            echo $email;
            echo $phone;
            echo $subject;
            echo $message;
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

