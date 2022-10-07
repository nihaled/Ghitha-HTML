<?php 
if(isset($_POST['submit'])){
    $to = "ghitha.sub@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $email = $_POST['email'];
    $subject = "Newsletter Form";
    $subject2 = "Newsletter Form";
    $message = "Email: " . $email;
    $message2 = "Thank you for subscribing to our newsletter.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $email . ", we would like to welcome you aboard." . "\n" . "<a href='https://ghitha.com/'>Home</a>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>