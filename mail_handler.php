<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['submit'])){
    $to = "rickreyhsig@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $message = $message." phone: ".$phone."<br>";
    $message = $message." email: ".$from."<br>";


    if ($_POST['submit']) {
        if (mail ($to, $subject, $message, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
  }
?>

