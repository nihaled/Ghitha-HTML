<?php 
if(isset($_POST['submit'])){
    $to = "ghitha.contactus@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Enquiry Form";
    $subject2 = "Enquiry Form";
    $message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly." . "\n" . "<a href='https://ghitha.com/'>Home</a>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>