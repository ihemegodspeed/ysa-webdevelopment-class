<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];

    // Save to file
    $data = "Name: $name | Email: $email | Phone: $phone | Gender: $gender | Date: $date\n";
    file_put_contents("users.txt", $data, FILE_APPEND);

    // Prepare WhatsApp message
    $message = "Hello Bro Pascal, I just registered.%0A";
    $message .= "Name: $name%0A";
    $message .= "Email: $email%0A";
    $message .= "Phone: $phone%0A";
    $message .= "Gender: $gender%0A";
    $message .= "Date: $date";

    // Redirect to WhatsApp
    header("Location: https://wa.me/2347039431981?text=$message");
    exit();
}
?>