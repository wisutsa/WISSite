<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $subject2 = "Copy of your form submission";
    $message = $_POST["message"];
    $message2 = "Here is a copy of your message". $name . "\n\n" . $_POST['message'];

    // Send email
    $to = "utsa.wis@gmail.com"; // Your email address
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers2 = "From:" . $to;


    mail($to, $subject, $message, $headers);
    mail($email,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    // Return a success message to the JavaScript
    echo json_encode(array('success' => true));
    exit();

    exit();
}
?>

